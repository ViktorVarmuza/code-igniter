<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;



class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}
