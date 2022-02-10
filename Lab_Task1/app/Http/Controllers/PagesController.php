<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Login()
    {
        return view('Task.login');
    }
    public function HomePage()
    {
        $a=Array(

            "Course" =>"Programming With Python",
            "Instructor" =>"Mr. David",
            "Duration" =>"4 Months",
            "Starts"=>"10th February 2022"

        );
        $a=(object)$a;
        $b=Array(

            "Course" =>"Programming With Java",
            "Instructor" =>"James Gosling",
            "Duration" =>"6 Months",
            "Starts"=>"10th March 2017"

        );
        $b=(object)$b;
        $c=Array(

            "Course" =>"Programming With Asp .NET",
            "Instructor" =>"Mr. Farhan",
            "Duration" =>"1 Months",
            "Starts"=>"1st April 2022"

        );
        $c=(object)$c;
        $total=Array(

            "a" =>$a,
            "b" =>$b,
            "c" =>$c

        );
        $total=(object)$total;
        return view('Task.homepage')
        ->with('total',$total);
    }
    public function ContactUs()
    {
        $a=Array(

            "Name" =>"Tanvir Ahmed",
            "Role" =>"Developer",
            "Email" =>"t.a@st.edu",

        );
        $a=(object)$a;
        $b=Array(

            "Name" =>"Mushfiq Rahman",
            "Role" =>"Manager",
            "Email" =>"ru@st.edu",

        );
        $b=(object)$b;
        $c=Array(

            "Name" =>" Rayhan Uddin",
            "Role" =>"Co-ordinator",
            "Email" =>"ms@st.edu",

        );
        $c=(object)$c;
        $total=Array(

            "a" =>$a,
            "b" =>$b,
            "c" =>$c

        );
        $total=(object)$total;




        return view('Task.contactus')
        ->with('total',$total);
    }
}
