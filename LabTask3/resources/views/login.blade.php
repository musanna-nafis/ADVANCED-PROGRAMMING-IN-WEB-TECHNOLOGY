@extends('layout.commonlayout')
@section('content')
    <form action="{{route('login.submit')}}" method="post">
    {{@csrf_field()}}
    <input type="text" name="name" value="{{old('name')}}" placeholder="Username">
        @error('name')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="password" name="password" value="{{old('password')}}" placeholder="Password">
        @error('password')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="submit" > {{Session()->get('error1')}}
    </form>
@endsection