<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productcontroller extends Controller
{
    public function product()
    {
        $r=product::all();
        return view('product')
        ->with('r',$r);
        
    }
    public function createproduct()
    {
        $m="";
        return view('createproduct')->with('m',$m);
    }
    public function productdetails(Request $r)
    {
        $list=product::where('id',decrypt($r->id))->first();
        return view('productdetails')->with('list',$list);
    }
    public function deleteproduct()
    {
        $m="";
        return view('deleteproduct')->with('m',$m);
    }
    public function updateproduct()
    {
        $m="";
        return view('updateproduct') ->with('m',$m);
    }
    public function createsubmit(Request $req)
    {
      
        $req->validate(
            [
                'name'=>'required',
                'price'=>'required',
                'quantity'=>'required',
                'description'=>'required',
                
            ],
    );



    $st =new product();
    $st->name=$req->name;
    $st->price=$req->price;
    $st->quantity=$req->quantity;
    $st->description=$req->description;
    $st->save();

        $m="New Product Created";

        return view('createproduct')
        ->with('m',$m);
    }

    public function deletesubmit(Request $req)
    {
      
        $req->validate(
            [
            
                'quantity'=>'required',
            ],
    );


    $st=product::where('id',$req->quantity)->first();
    $m="No product availabe";
    if($st!=null)
    {
        $st->delete();
        $m="Product Deleted";
    }
 
        return view('deleteproduct')
        ->with('m',$m);
    }


public function updatesubmit(Request $req)
{
  
    $req->validate(
        [
            'id'=>'required',
            'price'=>'required',
            'quantity'=>'required'

        ],
);


$st=product::where('id',$req->id)->first();
$m="No product availabe";
if($st!=null)
{
    $st->price=$req->price;
    $st->quantity=$req->quantity;
    $st->save();
    $m="Product Updated";
}

    return view('updateproduct')
    ->with('m',$m);
}

}
