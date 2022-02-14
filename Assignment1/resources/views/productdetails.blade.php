@extends('layout.commonlayout')
@section('content')
<br>
<h1 text-align:center>Product Details</h1>
<table class="table table-bordered">
            <tr>
                <th>Product Id</th>
                <th> Product Name</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Description</th>
            </tr>
            
            <tr>
            
                <td>{{$list->id}}</td>
                <td>{{$list->name}}</td>
                <td>{{$list->price}}</td>
                <td>{{$list->quantity}}</td>
                <td>{{$list->description}}</td>
            </tr>
           
        </table>
@endsection