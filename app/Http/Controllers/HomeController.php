<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        //return auth()->user()->imponente->prestamos;


        return view('welcome');
    }
}
