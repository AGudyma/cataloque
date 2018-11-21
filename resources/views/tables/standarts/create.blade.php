<!DOCTYPE html>
<html>
<head>
    <title>File Uploading in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="btn btn-primary btn-lg" >
    {{ 'Hello, ' }}{!! auth()->user()->admin == 0 ? 'User': 'Admin'!!}
    <a href="/" class="btn btn-success" role="button">Homepage</a>
</div>
<br />
<div class="container">
<form action="{{url('standarts')}}" method="post">
    {{ csrf_field() }}
    Name:<br>
    <input type="text" name="name" placeholder="name" required><br>
    {{--<meta name="csrf-token" content="{{ csrf_token() }}" />--}}
    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
    batch:<br>
    <input type="text" name="batch" placeholder="batch" required><br>

    Producer:<br>
    <input type="text" name="producer" placeholder="producer" required><br>

    Package:<br>
    <input type="text" name="package" placeholder="package"><br>

    Quantity:<br>
    <input type="text" name="quantity" placeholder="quantity"><br>

    Exp Date:<br>
    <input type="text" name="expire_date" placeholder="exp Date"><br>

    CoA:<br>
    <input type="hidden" name="quality_docs" value="{{ Session::get('path') }}" placeholder="UploadedfileName"><br>

    <input class="btn btn-default" type="submit" value="Submit">

</form>

<form method="post" action="{{url('/uploadfile')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <table class="table">
            <tr>
                <td width="40%" align="right"><label>Select File for Upload</label></td>
                <td width="30"><input type="file" name="select_file" /></td>
                <td width="30%" align="left"><input type="submit" name="upload" class="btn btn-primary" value="Upload"></td>
            </tr>
            <tr>
                <td width="40%" align="right"></td>
                <td width="30"><span class="text-muted">jpg, png, gif</span></td>
                <td width="30%" align="left"></td>
            </tr>
        </table>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        <img src="/images/{{ Session::get('path') }}" width="300" />
        {{ Session::get('path') }}
    @endif
</form>
    <div >
        <a href="http://catalogue/standarts" role="button" class="btn btn-success">back to item list</a>
    </div>


</div>
<?php
/**
 * Created by PhpStorm.
 * User: napal
 * Date: 12.11.2018
 * Time: 23:04
 */