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
                

                if ($user && password_verify($this->request->getVar('password'), $user['password'])) {
                    $session = session();
                    $session->set([
                        'user_id' => $user['user_id'],
                        'email' => $user['email'],
                        'role' => $user['role']
                    ]);

                    header("Location: /ametecs-students-project/public/dashboard");
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
}
