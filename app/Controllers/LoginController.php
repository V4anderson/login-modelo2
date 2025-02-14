<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LoginController extends BaseController
{
    //Metodo para renderizar a tela de login
    public function login()
    {
        return view('login');
    }

    //Metodo de autenticação
    public function auth(){
        //Só começa o metodo de autenticação, caso a requisição http seja do metodo POST
        if($this->request->getPost()){
            $usuarioModel = model('Usuario');  
            $usuarioCheck = $usuarioModel->check(
            $this->request->getPost('email'),
            $this->request->getPost('senha')
        );

        if(!$usuarioCheck) {
            $data = [
                "msg" => "Usuário ou senha incorreta!",
                "authenticated" => false
            ];
            return $this->response->setJSON($data);
            
        }
        else{
            //Salva os dados do usuario na sessão                
            $this->session->set('nome', $usuarioCheck['nome']);
            $this->session->set('perfil', $usuarioCheck['perfil']);
            $this->session->set('login_time',date('Y-m-d H:i:s'));
            // Responde com sucesso
            $data = [
                "msg" => "Login bem-sucedido!",
                "authenticated" => true
            ];
            return $this->response->setJSON($data);
        }
        }
    }
}
