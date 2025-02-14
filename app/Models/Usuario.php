<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model
{
    protected $table            = 'Usuarios';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nome','email','usuario','senha','perfil'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'nome'      =>'required',
        'email'     => 'required',
        'usuario'   =>'required|is_unique[Usuarios.usuario]',
        'senha'     =>'required',
        'perfil'    =>'required'
    ];

    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    protected function hashSenha($data){
        $data['data']['senha'] = password_hash($data['data']['senha'], PASSWORD_DEFAULT);

        return $data;
    }
    public function check($email, $senha) {

        //buscar o usuario
        $buscaUsuario = $this->where('email', $email)->first();
        if(is_null($buscaUsuario)){
            return false;
        }

        //validar a senha
        if(!password_verify($senha, $buscaUsuario['senha'])){
            return false;
        }
        return $buscaUsuario;
    }
}
