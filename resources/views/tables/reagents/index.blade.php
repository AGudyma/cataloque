@extends('layouts.main')
@section('header')
@stop


<div  class="container">
    <div class="add new">
        <a href="reagents/create" class="btn btn-primary btn-lg" role="button">add new item</a>
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

        @foreach($reagents as $reagent)
            <tr>
                <td><a href="reagents/{{$reagent->id}}">{{$reagent->name}}</a> </td>
                <td>{{$reagent->producer}}</td>
                <td>{{$reagent->batch}}</td>
                <td>{{$reagent->quantity}}</td>
                <td>{{$reagent->expire_date}}</td>
            </tr>

        @endforeach
        </tbody>

    </table>
    {!! $reagents->links() !!}

</div>

