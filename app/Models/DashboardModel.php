<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model {
    protected $table = 'students_information';
    protected $primaryKey = 'student_id';
    protected $allowedFields = ['roll_no', 'student_name', 'branch', 'year', 'math_marks', 'physics_marks', 'total_marks'];

    public function getStudents() {
        return $this->findAll();
    }
}