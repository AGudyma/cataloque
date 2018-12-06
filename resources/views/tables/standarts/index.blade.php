<!DOCTYPE html>
<html>
<head>
    <title>Standarts</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<br/>
<div class="btn btn-primary btn-lg">
    {{ 'Hello, ' }}{!! auth()->user()->admin == 0 ? 'User': 'Admin'!!}
    <a href="/" class="btn btn-success" role="button">Homepage</a>
</div>
<br>


<div class="container">
    <h3 align="center">Analytical Standards List</h3>
    <br/>

    <br/>
    <div class="add new">
        <a href="standarts/create" class="btn btn-primary btn-lg" role="button">add new item</a>
        <a href="/search" class="btn btn-primary btn-lg" role="button">Search by name</a>

    </div>


    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Producer</th>
            <th>batch</th>
            <th>quantity</th>
            <th>Expire date</th>

        </tr>
        </thead>
        <tbody>
        @foreach($standarts as $standart)
            <tr>
                <td><a href="standarts/{{$standart->id}}">{{$standart->name}}</a> </td>
                <td>{{$standart->producer}}</td>
                <td>{{$standart->batch}}</td>
                <td>{{$standart->quantity}}</td>
                <td>{{$standart->expire_date}}</td>
            </tr>
        @endforeach
        </tbody>

    </table>
    {!! $standarts->links() !!}
</div>

</body>
