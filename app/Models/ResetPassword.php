<?php

namespace App\Models;

use CodeIgniter\Model;

class ResetPassword extends Model
{
    protected $table            = 'ResetPassword';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['email', 'token', 'created_at'];

        public function salvarRegistroDoTokenNoBanco($email, $token)
        {
            $data = [
                'email' => $email,
                'token' => $token,
                'created_at' => date('Y-m-d H:i:s')
            ];
            return $this->insert($data);
        }

        public function isTokenValid($token)
        {
            $row = $this->where('token', $token)
                        ->where('created_at >', date('Y-m-d H:i:s', strtotime('-1 hour')))
                        ->first();
            return ($row !== null);
        }

        public function getEmailByToken($token)
        {
            $row = $this->select('email')
                        ->where('token', $token)
                        ->first();
            return ($row !== null) ? $row['email'] : null;
        }

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
}

