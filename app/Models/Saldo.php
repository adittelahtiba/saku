<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Saldo extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function total_saldo($id = '')
    {
        return DB::table('saldos')->where('user_id', $id)->sum('nominal');
    }

    public function saldos($id = '')
    {
        return DB::table('saldos')->rightJoin('users', 'users.id', '=', 'saldos.user_id')->select('saldos.*')->where('user_id', $id)
            ->get();
    }
}
