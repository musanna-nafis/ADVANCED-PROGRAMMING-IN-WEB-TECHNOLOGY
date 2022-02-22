<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\product;

class customercontroller extends Controller
{


    public function order()
    {



       $m="";
       return view('customer.order')->with('m',$m);


    }

    public function logout()
    {
        session()->flush();
        $m="";
        return redirect()->route('login')->with('m',$m);
        //return view('login')->with('m',$m);
    }
    public function login() 
    {
        $m="";
        return view('login')->with('m',$m);
    }
    public function loginsubmit(Request $req)
    {
        

        $req->validate(
            [
                'phone'=>'required|min:11|max:11|regex:/^01[3,5,6,7,8,9]{1}[0-9]{8}$/'
            ],
       );

       $customer=customer::where('phone',$req->phone)->first();
       $m="";
       if($customer==null)
       {
          $m="No Customer available for this phone number";
          return view('login')->with('m',$m);
       }
       else
       {

          session()->put('status','count1');
           
           //return view('customer.order')->with('m',$m);
           return redirect()->route('customer.order');
           //return $this->order();
       }

    }

   

    public function AddToChart(Request $req)
    {
        $m="";
        $req->validate(
            [
                'name'=>'required',
                'quantity'=>'required',
                
            ],
    );

     
      $product=product::where('name',$req->name)->first();
       
       if($product==null)
       {
          $m="No Product available for this name";
          return view('customer.order')->with('m',$m);
       }
       else
       {
           if($product->quantity<$req->quantity)
           {
            $m="No. of product is not available now";
            return view('customer.order')->with('m',$m);
           }
           else
           {
               return view('customer.order')->with('m',$m);
           }
           
       }

       //return view('customer.order')->with('m',$m);
        
    }






 
}
