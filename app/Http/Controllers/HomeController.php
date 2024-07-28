<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Rute;
use App\Models\Transportasi;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $rute = Rute::count();
        $pendapatan = Pemesanan::where('status', 'Sudah Bayar')->sum('total');
        $transportasi = Transportasi::count();
        $user = User::count();

        $cards = [
            [
                'title' => 'Data Rute',
                'value' => $rute,
                'color' => 'primary',
                'icon' => 'fa-route'
            ],
            [
                'title' => 'Pendapatan',
                'value' => 'Rp. ' . number_format($pendapatan, 0, ',', '.'),
                'color' => 'success',
                'icon' => 'fa-dollar-sign'
            ],
            [
                'title' => 'Data Transportasi',
                'value' => $transportasi,
                'color' => 'warning',
                'icon' => 'fa-subway'
            ],
            [
                'title' => 'Data User',
                'value' => $user,
                'color' => 'danger',
                'icon' => 'fa-users'
            ]
        ];

        return view('server.home', compact('cards', 'rute', 'pendapatan', 'transportasi', 'user'));
    }
}
