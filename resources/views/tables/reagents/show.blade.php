@extends('layouts.main')
@section('title')
@stop
<div>

    <div class="container">

        <br/>
        <div class="form-group">
            <table class="table">


                <tr>
                    <td width="10%" align="center"><label>name  </label> {{$reagent->name}}</td></td>
                    <td width="10%" align="center"><label> producer </label> {{$reagent->producer}}</td></td>
                    <td width="10%" align="center"><label>batch </label> {{$reagent->batch}}</td>
                    <td width="10%" align="center"><label>package </label> {{$reagent->package}}</td>
                    <td width="10%" align="center"><label>quantity </label> {{$reagent->quantity}}</td>
                    <td width="10%" align="center"><label>date of expire </label> {{$reagent->expire_date}}</td>
                    <td width="10%" align="center"><label>created_at </label> {{$reagent->created_at}}</td>


                </tr>

            </table>
        </div>

        <img src="/images/{{$reagent->quality_docs}}" width="300" class="img-thumbnail"/>
        <br/>

        @if (auth()->user()->admin == 0 ? 'User': 'Admin')

            <div>

                    <a class="btn btn-default" href="/reagents/{{$reagent->id}}/edit" role="button">edit item</a></div>
                <form method="post" action="{{action('StandartController@destroy',$reagent->id)}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE"/>
                    <button type="submit" class="btn-danger">Delete item</button>

                </form>
            </div>
         @endif

    <div >
        <a href="http://catalogue/reagents" role="button" class="btn btn-success">back to reagents list</a>
    </div>

    <div>
        {{ 'Hello, ' }}{!! auth()->user()->admin == 0 ? 'User': 'Admin'!!}
    </div>
</div>



