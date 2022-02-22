@extends('layout.commonlayout')
@section('content')
    <form action="{{route('update.submit')}}" method="post">
    {{@csrf_field()}}
    <input type="number" name="id" value="{{old('id')}}" placeholder="Product Id">
        @error('id')
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
        
        <input type="submit" > {{$m}}
    </form>
@endsection