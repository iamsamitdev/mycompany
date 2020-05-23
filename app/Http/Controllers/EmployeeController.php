<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Load Model
use App\Model\DeptManager;
use App\Model\Employee;

class EmployeeController extends Controller
{
    public function view_deptmanager(){
        $dep_managers = DeptManager::all();
        // $dep_manager = DeptManager::where('dept_no', '=', 'd004')->first();

        // echo $dep_manager->emp_relate->first_name;
        // echo "<br>";
        // echo $dep_manager->emp_relate->last_name;
        // echo "<br>";
        // echo $dep_manager->emp_relate->gender;

        // echo "<pre>";
        // print_r($dep_manager);
        // echo "</pre>";

        return view('pages.deptmanager')->with('dep_managers', $dep_managers);
    }
}
