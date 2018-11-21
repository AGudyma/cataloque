<!DOCTYPE html>
<html>
<head>
    <title>File Uploading in Laravel</title>
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
    </div>

    <table class="table table-bordered">
        {{--{{      $standarts}}--}}

        <?php

        $standarts = App\Standart::paginate(10);
        foreach ($standarts as $standart) {
//    echo $standart->name.'<br>';


            echo '<a  href="standarts/' . $standart->id . '">' . "$standart->name" . '</a>' . " $standart->producer" . " batch:" . " $standart->batch" . " Quantity:" . " $standart->batch" . '<br>';
        }

        ?>
    </table>
    {!! $standarts->links() !!}
    {{--<div class="container">--}}
    {{--@foreach ($standarts as $standart)--}}
    {{--{{ $standarts->name }}--}}
    {{--@endforeach--}}
    {{--</div>--}}

</div>
<div>
    <a href="standarts/search" class="btn btn-primary btn-lg" role="button">Search by name</a>

</div>
</body>