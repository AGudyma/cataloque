<!DOCTYPE html>
<html>
<head>
    <title>File Uploading in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="btn btn-primary btn-lg">
    {{ 'Hello, ' }}{!! auth()->user()->admin == 0 ? 'User': 'Admin'!!}
    <a href="/" class="btn btn-success" role="button">Homepage</a>
</div>
<br/>
<br>
{{--<div class="container">--}}
    {{--<form method="post" action="{{action('SearchController@findByName',$name)}}" >--}}
        {{--{{ csrf_field() }}--}}
        {{--Name:<br>--}}
        {{--<input type="text" name="name" placeholder="enter name to find" >--}}
        {{--<input class="btn btn-default" type="submit" value="Submit">--}}
    {{--</form>--}}
{{--</div>--}}

{{--<div class="container">--}}
    {{--<form method="post" action="{{url('standarts')}}" >--}}
        {{--{{ csrf_field() }}--}}
        {{--Name:<br>--}}
        {{--<input type="text" name="name" value="" placeholder="enter name to find" >--}}
        {{--<input class="btn btn-default" type="submit" value="Search">--}}
    {{--</form>--}}
{{--</div>--}}
<?php
//echo $_POST;
{{--{{$standart}}--}}