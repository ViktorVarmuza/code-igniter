<?php

namespace App\Controllers;

class main_controller extends BaseController
{
    public function index() 
    {
        return view('index');
    }
    public function hraci()
    {
        return view(
            'hraci'
        );
    }
    public function tabulka()
    {
        return view(
            'tabulka'
        );
    }
    public function zapasy()
    {
        return view(
            'zapasy'
        );
    }
}
