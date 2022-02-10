@extends('layout.commonlayout')

@section('content')
<html>
    <h3>List 1:</h3> 
    <h4>Course: {{$total->a->Name}}</h4>
    <h4>Course: {{$total->a->Role}}</h4>
    <h4>Course: {{$total->a->Email}}</h4>

<br>
<h3>List 2: </h3>
    <h4>Course: {{$total->b->Name}}</h4>
    <h4>Course: {{$total->b->Role}}</h4>
    <h4>Course: {{$total->b->Email}}</h4>

<br>
<h3>List 3:</h3>
    <h4>Course: {{$total->b->Name}}</h4>
    <h4>Course: {{$total->b->Role}}</h4>
    <h4>Course: {{$total->b->Email}}</h4>

<br>
</html>
@endsection