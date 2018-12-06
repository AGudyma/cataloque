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

<br/>
    <div class="form-group">
        <table class="table">
            <tr>
                <td width="40%" align="left"><label>{{$standart->name}}</label></td>
                <td width="30" align="center"><label> producer </label> {{$standart->producer}}</td></td>
                <td width="30%" align="right"><label>batch {{$standart->batch}}</label></td>
            </tr>
            <tr>
                <td width="25%"><label>package </label> {{$standart->package}}</td>
                <td width="25%"><label>quantity </label> {{$standart->quantity}}</td>
                <td width="25%"><label>date of expire </label> {{$standart->expire_date}}</td>
                <td width="25%"><label>created_at </label> {{$standart->created_at}}</td>


                {{--<td width="30"><span class="text-muted">jpg, png, gif</span></td>--}}
                {{--<td width="30%" align="left"></td>--}}
            </tr>

        </table>
    </div>

        <img src="/images/{{$standart->quality_docs}}" width="300" class="img-thumbnail"/>
        <br/>

    @if (auth()->user()->admin == 0 ? 'User': 'Admin')

        <div>
                <a class="btn btn-default" href="/standarts/{{$standart->id}}/edit" role="button">edit item</a></div>
            <form method="post" action="{{action('StandartController@destroy',$standart->id)}}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE"/>
                <button type="submit" class="btn-danger">Delete item</button>

            </form>
        </div>
    @endif

    <div >
        <a href="http://catalogue/standarts" role="button" class="btn btn-success">back to item list</a>
    </div>

</body>
<?php

/**
 * Created by PhpStorm.
 * User: napal
 * Date: 13.11.2018
 * Time: 00:15
 */