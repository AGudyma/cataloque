<!DOCTYPE html>
<html>
<head>
    <title>Standarts search</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="btn btn-primary btn-lg">
    {{ 'Hello, ' }}{!! auth()->user()->admin == 0 ? 'User': 'Admin'!!}
    <a href="/" class="btn btn-success" role="button">Homepage</a>
</div>
<br/>
<div class="container">
    <div>
        <form action="/search" method="POST" role="search">
            {{ csrf_field() }}
        <div class="input-group">
                <input type="radio" name="table" value="standarts" checked> standarts<br>
                <input type="radio" name="table" value="reagents"> reagents<br>
                <input type="radio" name="table" value="columns"> columns<br>
                <input type="radio" name="table" value="labware"> labware<br>
                <input type="text" class="form-control" name="search_request" placeholder="enter name">

                <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
            </div>
        </form>

    </div>




    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }}  </b>in table are :</p>
        <h2>Found in {{$table }} DB</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Producer</th>
                <th>batch</th>
                <th>Expire date</th>

            </tr>
            </thead>
            <tbody>
            @foreach($details as $result)
                <tr>
                    <td><a href="{{$table}}/{{$result->id}}">{{$result->name}}</a></td>
                    <td>{{$result->producer}}</td>
                    <td>{{$result->batch}}</td>
                    <td>{{$result->expire_date}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

    @if(isset($details))
        <div>
        <a href="http://catalogue/{{$table}}" role="button" class="btn btn-success">back to item list</a>
        </div>

    @endif

    @if(!empty($message)){
        {!! $message !!}
    }
    @endif


</div>
</body>