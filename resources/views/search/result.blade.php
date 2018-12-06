<!DOCTYPE html>
<html>
<head>
    <title>Standarts search</title>
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
    {{--<form action="{{action('SearchController@findByName')}}" method="post">--}}
        {{--{{ csrf_field() }}--}}
        {{--Name:<br>--}}
        {{--<input type="text" name="name" placeholder="name" required><br>--}}

        {{--<input class="btn btn-default" type="submit" value="Submit">--}}

    {{--</form>--}}


    <div >
        <a href="http://catalogue/standarts" role="button" class="btn btn-success">back to item list</a>
    </div>


</div>