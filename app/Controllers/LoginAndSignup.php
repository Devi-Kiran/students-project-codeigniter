<?php

namespace App\Controllers;
use App\Models\LoginAndSignupModel;

class LoginAndSignup extends BaseController
{
    public function index() {
        $data = [
            'title' => 'login',
            'validation' => '',
            'error' => ''
        ];

        helper(['form']);

        if($this->request->getMethod() == "post") {
            $rules = [
                'email' => [
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'Email is required',
                        'valid_email' => 'Please enter valid email'
                    ]
                ],
                'password' => [
                    'rules' => 'required|min_length[8]',
                    'errors' => [
                        'required' => 'Password is required',
                        'min_length' => 'Password must have a minimum of 8 characters'
                    ]
                ]    
            ];

            if($this->validate($rules)) {
                $loginModel = new LoginAndSignupModel();
                $user = $loginModel->where('email', $this->request->getVar('email'))
                                  ->first();
                $otp = rand(100000,999999);
                $session = session();
                $session->set([
                    'user_name' => $user['user_name'],
                    'user_id' => $user['user_id'],
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'otp' => $otp
                ]);

                if ($user && password_verify($this->request->getVar('password'), $user['password'])) {  
                    header("Location: /ametecs-students-project/public/otp-verification");
                    exit;
                } else {
                    $data['error'] = 'Invalid email or password';
                }
            } else {  
                $data['validation'] = $this->validator->listErrors();
            }
        }
        return view('login', $data);
    }

    public function signup() {
        $email = \Config\Services::email();
        $data = [
            'title' => 'signup',
            'validation' => ''
        ];

        helper(['form']);

        if($this->request->getMethod() == 'post') {
            $rules = [
                'user_name' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Username is required'
                    ]
                ],
                'email' => [
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'Email is required',
                        'valid_email' => 'Please enter valid email'
                    ]
                ],
                'password' => [
                    'rules' => 'required|min_length[8]',
                    'errors' => [
                        'required' => 'Password is required',
                        'min_length' => 'Password must have a minimum of 8 characters'
                    ]
                ],
                'mobile_number' => [
                    'rules' => 'required|regex_match[/^[0-9]{10}$/]',
                    'errors' => [
                        'required' => 'Mobile number is required',
                        'regex_match' => 'Please enter a valid mobile number'
                    ]
                ]
            ];

            if($this->validate($rules)) {
                // $email->setFrom('bandarudevikiran@gmail.com');
                // $email->setTo($this->request->getVar('email'));
                // $email->setSubject('information');
                // $email->setMessage('****************************');
                
                // echo "<pre>";
                // print_r($email);
                // echo "</pre>";

                // if ($email->send()) {
                //     echo 'Email sent successfully';
                // } else {
                //     echo 'Email could not be sent';
                //     echo $email->printDebugger(['headers']);
                // }
                // die;

                $signupModel = new LoginAndSignupModel();
                if($signupModel->save($_POST)) {
                    header("Location: http://localhost:8080/ametecs-students-project/public");
                    exit();
                } else {
                    echo "Error: " . $signupModel->errors();
                    exit();
                }
            } else {
                $data['validation'] = $this->validator->listErrors();
            }  
        }
        return view('signup', $data);
    }

    public function otpVerfication() {
        $email = \Config\Services::email();

        $data = [
            'title' => 'OTP Verification',
            'information' => '',
            'validation' => '',
            'error' => ''
        ];

        $userName = session()->get('user_name');
        $userEmail = session()->get('email');
        $otp = session()->get('otp');
               
        $message = "
        Dear $userName,
            
        Thank you for choosing our platform for your login needs. To proceed with your login, please use the following One Time Password (OTP): $otp
            
        This OTP is valid for a single use and will expire shortly. Please enter this OTP in the designated field on our login page to access your account securely.
            
        Thank you for choosing Us.
        ";

        $email->setFrom('bandarudevikiran@gmail.com');
        $email->setTo($userEmail);
        $email->setSubject('Your One Time Password (OTP) for Login');
        $email->setMessage($message);

        if ($email->send()) {
            $data['information'] =  'OTP sent successfully to your email';
        } else {
            $data['error'] =  'OTP could not be sent';
            echo $email->printDebugger(['headers']);
        }

        if($this->request->getMethod() == 'post') {
            if($otp == $this->request->getVar('otp')) {
                header("Location: /ametecs-students-project/public/dashboard");
                exit;
            } else {
                $data['error'] = 'Invalid OTP';
            }
        }
        
        return view('otp_verification', $data);
    }
}
