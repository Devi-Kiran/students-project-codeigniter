<?php

namespace App\Controllers;

use App\Models\DashboardModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class CrudOperations extends BaseController {
    public function initController(
        RequestInterface $request,
        ResponseInterface $response,
        LoggerInterface $logger
    ) {
        parent::initController($request, $response, $logger);
        if(session()->get("email")) {
            if(!session()->get('role')) {
                header("Location: /ametecs-students-project/public/dashboard");
                exit();
            }
        } else {
            header("Location: /ametecs-students-project/public");
            exit();      
        }
    }

    public function addStudent() {
        $model = new DashboardModel();
        $data = [
            'title' => 'add students',
            'branch' => ['Select Branch', 'CSC', 'IOT', 'EEE', 'ECE'],
            'year' => ['Select Year', 1, 2, 3, 4],
        ];
        $data['allStudents'] = $model->getStudents();
        return view('add_student_info', $data);
    }


    public function addStudentInfo() {
        $model = new DashboardModel();
    
        if($this->request->getMethod = 'post') {
            $_POST['total_marks'] = $_POST['math_marks'] + $_POST['physics_marks'];
            
            if($model->save($_POST)) {
                header('Location: /ametecs-students-project/public/dashboard/add-student');
                exit();
            } else {
                echo "Error: " . $model->errors();
                exit();
            }
        }

        // $data = [
        //     'title' => "add student",
        //     'branch' => ['Select Branch', 'CSC', 'IOT', 'EEE', 'ECE'],
        //     'year' => ['Select Year', 1, 2, 3, 4],
        //     'validation' => ''
        // ];

        // helper(['form']);

        // $model = new DashboardModel();
        // $data['allStudents'] = $model->getStudents();

        // if($this->request->getMethod() == 'post') {
        //     $rules = [
        //         'student_name' => [
        //                 'rules' => 'required|regex_match[/^[a-zA-Z\s]+$/]',
        //                 'errors' => [
        //                     'required' => 'Student nam eis required',
        //                     'regex_match' => 'Student name allows only letters and spaces'
        //                 ]
        //             ],
        //             'roll_no' => [
        //                 'rules' => 'required|regex_match[/^[a-zA-Z0-9]+$/]',
        //                 'errors' => [
        //                     'required' => 'Rollno is required',
        //                     'regex_match' => 'Rollno allows only numbers and letter'
        //                 ]
        //             ],
        //             'branch' => [
        //                 'rules' => 'in_list[CSE,IOT,EEE,ECE]',
        //                 'errors' => [
        //                     'in_list' => 'Select branch'
        //                 ]
        //             ],
        //             'year' => [
        //                 'rules' => 'in_list[1,2,3,4]',
        //                 'errors' => [
        //                     'in_list' => 'Select year'
        //                 ]
        //             ],
        //             'math_marks' => [
        //                 'rules' => 'required|regex_match[/^(?:100|[1-9][0-9]?)$/]',
        //                 'errors' => [
        //                     'required' => 'Math marks is required',
        //                     'regex_match' => 'Math marks allows only numbers between 0 to 100'
        //                 ]
        //             ],
        //             'physics_marks' => [
        //                 'rules' => 'required|regex_match[/^(?:100|[1-9][0-9]?)$/]',
        //                 'errors' => [
        //                     'required' => 'Math marks is required',
        //                     'regex_match' => 'Physics marks allows only numbers between 0 to 100'
        //                 ]
        //             ]
        //     ];

        //     if($this->validate($rules)) {
        //         $model = new DashboardModel();
        //         $model->save($_POST);    
        //     } else {
        //         $data['validation'] = $this->validator->listErrors();
        //     }   
        // }

        // return view('add_student_info', $data);

    }

    public function editStudentInfo($studentId = '') {
        $data = [
            'title' => "edit student $studentId",
            'branch' => ['Select Branch', 'CSC', 'IOT', 'EEE', 'ECE'],
            'year' => ['Select Year', 1, 2, 3, 4],
            'validation' => ''
        ];

        helper(['form']);

        $model = new DashboardModel();
        $studentInfo = $model->find($studentId);
        $data['studentInfo'] = $studentInfo;

        if($this->request->getMethod() == 'post') {
            $rules = [
                'student_name' => [
                        'rules' => 'required|regex_match[/^[a-zA-Z\s]+$/]',
                        'errors' => [
                            'required' => 'Student nam eis required',
                            'regex_match' => 'Student name allows only letters and spaces'
                        ]
                    ],
                    'roll_no' => [
                        'rules' => 'required|regex_match[/^[a-zA-Z0-9]+$/]',
                        'errors' => [
                            'required' => 'Rollno is required',
                            'regex_match' => 'Rollno allows only numbers and letter'
                        ]
                    ],
                    'branch' => [
                        'rules' => 'in_list[CSE,IOT,EEE,ECE]',
                        'errors' => [
                            'in_list' => 'Select branch'
                        ]
                    ],
                    'year' => [
                        'rules' => 'in_list[1,2,3,4]',
                        'errors' => [
                            'in_list' => 'Select year'
                        ]
                    ],
                    'math_marks' => [
                        'rules' => 'required|regex_match[/^(?:100|[1-9][0-9]?)$/]',
                        'errors' => [
                            'required' => 'Math marks is required',
                            'regex_match' => 'Math marks allows only numbers between 0 to 100'
                        ]
                    ],
                    'physics_marks' => [
                        'rules' => 'required|regex_match[/^(?:100|[1-9][0-9]?)$/]',
                        'errors' => [
                            'required' => 'Math marks is required',
                            'regex_match' => 'Physics marks allows only numbers between 0 to 100'
                        ]
                    ]
            ];

            if($this->validate($rules)) {
                $model = new DashboardModel();
                $_POST['student_id'] = $studentId;
                $model->save($_POST);
                header('Location: /ametecs-students-project/public/dashboard');
                exit();    
            } else {
                $data['validation'] = $this->validator->listErrors();
            }   
        }

        return view('edit_student_info', $data);
    }


    public function deleteStudentInfo($studentId = '') {
        $model = new DashboardModel();
        $studentInfo = $model->find($studentId);

        if($studentInfo) {
            $model->delete($studentId);
            header('Location: /ametecs-students-project/public/dashboard');
            exit();
        }
    }
}