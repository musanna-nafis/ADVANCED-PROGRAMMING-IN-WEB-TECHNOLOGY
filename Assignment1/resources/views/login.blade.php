@extends('layout.commonlayout')
@section('content')
    <form action="{{route('login.submit')}}" method="post">
    {{@csrf_field()}}
    <input type="text" name="phone" value="{{old('phone')}}" placeholder="Mobile Number">
        @error('phone')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="submit" > 
        {{$m}}
    </form>
@endsection