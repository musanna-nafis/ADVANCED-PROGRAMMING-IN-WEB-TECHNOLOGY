@extends('layout.commonlayout')

@section('content')
<html>
    <br>
    Click below to enter Teacher Homepage<br>
    <a href ="{{route('teacher')}}">TeacherHomepage</a><br>Click below to enter studnet Homepage<br>
    <a href ="{{route('student')}}">StudentHomepage</a><br>
</html>
@endsection