<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    // ฟังก์ชัน home
    public function home(){
        return view('pages.home');
    }

    // ฟังก์ชัน about
    public function about(){
        return view('pages.about');
    }

    // ฟังก์ชัน service
    public function service(){
        return "Service page";
    }

    // ฟังก์ชัน portfolio
    public function portfolio(){
        return "Portfolio page";
    }
    
    // ฟังก์ชัน blog
    public function blog(){
        return "Blog page";
    }

    // ฟังก์ชัน contact
    public function contact(){
        return "Contact page";
    }
}
