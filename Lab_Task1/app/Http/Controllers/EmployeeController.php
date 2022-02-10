<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function Student()
    {
        $a=Array(

            "a1" =>"ATP3",
            "a2" =>"ATP2",
            "a3" =>"Web Technologies",
            "a4" =>"Asp .net",
            "a5" =>"Java",

        );
        $a=(object)$a;
        return view('Employee.student')
        ->with('a',$a);
    }
    public function Teacher()
    {
        $a=Array(

            "a1" =>"ATP3",
            "a2" =>"ATP2",
            "a3" =>"Web Technologies",
            "a4" =>"Asp .net",
            "a5" =>"Java",

        );
        $a=(object)$a;
        return view('Employee.teacher')
        ->with('a',$a);
    }
}
