<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

// Load Model
use App\Model\Employee;

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

    // ฟังก์ชันอ่านข้อมูล Employee
    public function employees(){

        # Select All
       // $emp = DB::table('employees')->get(); // select * from employees
        // $emp = DB::table('employees')->get(['id','fullname','email']); // select id,fullname,email from employees

      // WHERE
      // $emp = DB::table('employees')->where('id', 3)->get(['id','fullname','email']); //  select id,fullname,email from employees where id=3

      // First Record
      // $emp = DB::table('employees')->first(['fullname','email']); // Limit 1

      // Find(id)
      // $emp = DB::table('employees')->find(3);

      // WHERE 2 Condition
      /* $emp = DB::table('employees')
                            ->where('id', 3)
                            ->where('status', 1)
                            ->orWhere('age', 22)
                            ->first();
        */
        // Aggregates
        // $emp = DB::table('employees')->count(); // นับจำนวนรายการใน table
        // $emp = DB::table('employees')->max('age'); // สูงสุด
        // $emp = DB::table('employees')->min('age'); // ต่ำสุด
        // $emp = DB::table('employees')->avg('age'); // ค่าเฉลี่ย

        // เช็คข้อมูลใน table
        # $emp = DB::table('employees')->where('id', 4)->exists(); // select * from employees

        # Raw Expressions
        // $emp = DB::select("SELECT * FROM employees");

        # OrderBy and Limit
        // $emp = DB::table('employees')->orderByDesc('id')->limit(1)->get();

        // echo "<pre>";
        // print_r($emp);
        // echo "</pre>";

        // dd($emp);

        # Insert Data to table
        // $data_emp = array(
        //     'fullname' => 'Samit Koyom',
        //     'gender' => 'Male',
        //     'email' => 'sssbbb@gmail.com',
        //     'tel' => '08938038333',
        //     'age' => 30,
        //     'address' => '20/2 moo.2',
        //     'avartar' => 'noavatar.jpg',
        //     'status' => 1
        // );

        // $emp = DB::table('employees')->insert($data_emp);
        // print_r($emp);

        # ส่งค่าไปยัง View
        $employees = DB::table('employees')->paginate(2); // select * from employees

        // foreach ($emps as $emp) {
        //     echo $emp->fullname. $emp->email."<br>";
        // }

        return view('pages.employee')->with('employees', $employees);

    }

    public function employeelist(){
        $employees = Employee::all();
        echo "<pre>";
        print_r($employees);
        echo "</pre>";
    }

}
