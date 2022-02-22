@extends('layout.commonlayout')
@section('content')
<form action="{{route('order.submit')}}" method="post">
    {{@csrf_field()}}
    <input type="text" name="name" value="{{old('name')}}" placeholder="Product Name">
        @error('name')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="number" name="quantity" value="{{old('quantity')}}" placeholder="Quantity" min="1" max="100">
        @error('quantity')
        <span>{{$message}}</span>
        @enderror
        <br>
        
        <input type="submit"> {{$m}}{{Session::get('status')}}
    </form>
@endsection