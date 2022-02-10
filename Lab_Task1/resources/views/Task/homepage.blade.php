@extends('layout.commonlayout')

@section('content')
<html>
    <h3>List 1:</h3> 
    <h4>Course: {{$total->a->Course}}</h4>
    <h4>Course: {{$total->a->Instructor}}</h4>
    <h4>Course: {{$total->a->Duration}}</h4>
    <h4>Course: {{$total->a->Starts}}</h4>
<br>
<h3>List 2: </h3>
    <h4>Course: {{$total->b->Course}}</h4>
    <h4>Course: {{$total->b->Instructor}}</h4>
    <h4>Course: {{$total->b->Duration}}</h4>
    <h4>Course: {{$total->b->Starts}}</h4>
<br>
<h3>List 3:</h3>
    <h4>Course: {{$total->c->Course}}</h4>
    <h4>Course: {{$total->c->Instructor}}</h4>
    <h4>Course: {{$total->c->Duration}}</h4>
    <h4>Course: {{$total->c->Starts}}</h4>
<br>
</html>
@endsection
