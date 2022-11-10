<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        $total_pinjaman = DB::table('members')->sum('members.pinjaman');
        $total_simpanan = DB::table('members')->sum('members.simpanan');
        $total_anggota = DB::table('members')->count('members.name');

        return view('dashboard.index', [
            'title' => 'Dashboard',
            'total_pinjaman' => $total_pinjaman,
            'total_simpanan' => $total_simpanan,
            'total_anggota' => $total_anggota
        ]);
    }
}
