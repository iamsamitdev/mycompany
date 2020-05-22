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
        return view('pages.service');
    }

    // ฟังก์ชัน portfolio
    public function portfolio(){
        return view('pages.portfolio');
    }
    
    // ฟังก์ชัน blog
    public function blog(){
        return view('pages.blog');
    }

    // ฟังก์ชัน contact
    public function contact(){
        return view('pages.contact');
    }

     // ฟังก์ชัน login
     public function login(){
        return view('pages.login');
    }
}
