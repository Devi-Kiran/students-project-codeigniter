<?php

namespace App\Models;

use CodeIgniter\Model;

class SignupModel extends Model {
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['user_name', 'email', 'password', 'mobile_number'];
    protected $useTimestamps = true;
    protected $createdField = 'user_created_at';
    protected $updatedField = "updated_at";
    protected $beforeInsert = ['maskPassword'];

    public function maskPassword(array $data) {
        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        return $data;
    }
}
