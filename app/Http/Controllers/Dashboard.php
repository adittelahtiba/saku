<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard | SaKu.meownikah.com';
        $data['ctrl'] = 'Dashboard';
        $data['ctrl_url'] = '/';
        $data['method'] = 'index';
        $data['js'] = '';
        return view('dashboard/v_show', $data);
    }
}
