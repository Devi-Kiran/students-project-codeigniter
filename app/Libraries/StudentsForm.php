<?php

namespace App\Libraries;

class StudentsForm {
    public function addStudent($params) {
        return view('components/add_students', $params);
    }

    public function editStudent($params) {
        return view('components/edit_students', $params);
    }
}