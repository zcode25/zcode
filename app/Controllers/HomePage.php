<?php

namespace App\Controllers;

class HomePage extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home Page | ZCODE'
        ];

        return view('home_page/index', $data);
    }

    public function project()
    {
        $data = [
            'title' => 'Projects | ZCODE'
        ];

        return view('home_page/project', $data);
    }
}
