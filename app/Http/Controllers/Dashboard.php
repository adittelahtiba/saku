<?php

namespace App\Http\Controllers;

use App\Models\Saldo;
use App\Models\User;
use Illuminate\Http\Request;


class Dashboard extends Controller
{

    public function __construct()
    {
        $this->saldo = new Saldo();
    }

    public function index()
    {
        $data['title'] = 'Dashboard | SaKu.meownikah.com';
        $data['ctrl'] = 'Dashboard';
        $data['ctrl_url'] = '/';
        $data['method'] = 'index';
        $data['js'] = '';
        $data['total_saldo'] = $this->saldo->total_saldo(1);
        $data['list_saldo'] = $this->saldo->saldos(1);
        // dd($data);
        return view('dashboard/v_show', $data);
    }
}
