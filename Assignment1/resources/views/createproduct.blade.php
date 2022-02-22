@extends('layout.commonlayout')
@section('content')
    <form action="{{route('create.submit')}}" method="post">
    {{@csrf_field()}}
    <input type="text" name="name" value="{{old('name')}}" placeholder="Product Name">
        @error('name')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="number" name="price" value="{{old('price')}}" placeholder="Price" min="10" value="0" step="0.2">
        @error('price')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="number" name="quantity" value="{{old('quantity')}}" placeholder="Quantity" min="1" max="100">
        @error('quantity')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="text" name="description" value="{{old('description')}}"  placeholder="Description"><br>
        @error('description')
        <span>{{$message}}</span>
        @enderror
        <input type="submit" > {{$m}}
    </form>
@endsection