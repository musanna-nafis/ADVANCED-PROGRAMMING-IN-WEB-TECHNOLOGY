@extends('layout.commonlayout')
@section('content')
<br>
<table class="table table-bordered">
            <tr>
                <th>Product Id</th>
                <th> Product Name</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Description</th>
            </tr>
            @foreach($r as $s)
            <tr>
                <td>{{$s->id}}</td>
                <td>{{$s->name}}</td>
                <td>{{$s->price}}</td>
                <td>{{$s->quantity}}</td>
                <td>{{$s->description}}</td>
            </tr>
            @endforeach
        </table>
@endsection