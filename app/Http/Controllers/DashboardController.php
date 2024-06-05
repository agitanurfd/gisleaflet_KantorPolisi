<?php

namespace App\Http\Controllers;

use App\Models\kantor_polisi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $kantorPolisi;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->kantorPolisi = new kantor_polisi();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalKantorPolisi = $this->kantorPolisi->count();

        $data = [
            'totalKantorPolisi' => $totalKantorPolisi
        ];

        return view('dashboard',$data);
    }
}
