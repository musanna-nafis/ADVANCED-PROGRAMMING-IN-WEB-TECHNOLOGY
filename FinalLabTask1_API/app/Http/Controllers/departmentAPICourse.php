<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\department;
use App\Models\course;

class departmentAPICourse extends Controller
{
    public function departmentAll()
    {
        return department::all();
    }
    public function departmentAdd(Request $req)
    {
        try{
            $st = new  department();
            $st->d_name = $req->name;
            if($st->save()){

                return response()->json(["msg"=>"New department added Successfully"],200);
            }
        }
        catch(\Exception $ex){
            return response()->json(["msg"=>"Could not add this department"],500);
        }
    }
    public function departmentUpdate()
    {
        //
    }
    public function departmentDelete(Request $req)
    {
        $st = department::where('d_name',$req->name)->first();
        if($st){
            $st->delete();
            return response()->json(["msg"=>"Department deleted"],200);
        }
        return response()->json(["msg"=>"Department not found"],404);
    }
//
    // public function get(Request $req){
    //     $st = department::where('id',$req->id)->first();
    //     $st1 = course::where('departments_id',$req->id)->first();
    //     if($st){
    //         return response()->json(["id"=>"$st->id","Name"=>"$st->d_name",

          




    //     ],200);
    //     }
    //     return response()->json(["msg"=>" Department not found"],404);
        
    // }

    






// for courses



    public function courseAll()
    {
        return course::all();
    }
    public function courseAdd(Request $req)
    {
        try{
            $st = new  course();
            $st->c_name = $req->name;
            $department = department::where('d_name',$req->d_name)->first();
            $st->departments_id = $department->id;
            if($st->save()){

                return response()->json(["msg"=>"New Course added Successfully"],200);
            }
        }
        catch(\Exception $ex){
            return response()->json(["msg"=>"Could not add this course"],500);
        }
    }
    public function courseUpdate()
    {
        //
    }
    public function courseDelete(Request $req)
    {
        $st = course::where('c_name',$req->name)->first();
        if($st){
            $st->delete();
            return response()->json(["msg"=>"Course deleted"],200);
        }
        return response()->json(["msg"=>"Course not found"],404);
    }



















}
