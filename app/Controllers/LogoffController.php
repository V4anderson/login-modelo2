<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LogoffController extends BaseController
{
    public function logoff()
    {
        $this->session->destroy();
        return redirect()->to('/login');
    }
}
