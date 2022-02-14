@extends('layout.commonlayout')
@section('content')
    <form action="{{route('delete.submit')}}" method="post">
    {{@csrf_field()}}

    
        <input type="number" name="quantity" value="{{old('quantity')}}" placeholder="Product Id">
        @error('quantity')
        <span>{{$message}}</span>
        @enderror
        <br>
        
        <input type="submit" > {{$m}}
    </form>
@endsection