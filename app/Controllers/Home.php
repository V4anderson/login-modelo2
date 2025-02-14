<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function home(): string
    {
        $data['login_time'] =  date("d/m/Y \à\s H:i", strtotime($this->session->get('login_time'))); 
        $data['usuario_logado'] =  $this->session->get('nome');
        return view('home',$data);
    }
}
