<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }

     public function about(){
        return "2141720006 Muhammad Rifat Anwar";
    }

     public function article($id){
        return "Halaman Article Dengan ID ". $id;
    }
}