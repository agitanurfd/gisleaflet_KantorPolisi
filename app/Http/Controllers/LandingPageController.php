<?php

namespace App\Http\Controllers;

use App\Models\kantor_polisi;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    protected $kantorPolisi;

    public function __construct()
    {
        $this->kantorPolisi = new kantor_polisi();
    }

    public function index(){
        $kantorPolisi = $this->kantorPolisi;
        $kantorPolisi = $kantorPolisi->get();

        $data = [
            'kantorPolisi' => $kantorPolisi
        ];

        return view("landing-page",$data);
    }

    public function show($id){
        $result = $this->kantorPolisi;
        $result = $result->where("id",$id);
        $result = $result->firstOrFail();

        $data = [
            'result' => $result
        ];

        return view("police-station",$data);
    }
}
