@extends('layouts.main')
@section('header')
@stop

    <div class="container">
        <form method="post" action="{{action('ReagentController@update',$reagent->id)}}" >
            {{ csrf_field() }}
            Name:<br>
            <input type="hidden" name="_method" value="PATCH">
            <input type="text" name="name" value="{{$reagent->name}}" >
            <br>

            batch:<br>
            <input type="text" name="batch" value="{{$reagent->batch}}"><br>

            Producer:<br>
            <input type="text" name="producer" value="{{$reagent->producer}}"><br>

            Package:<br>
            <input type="text" name="package" value="{{$reagent->package}}"><br>

            Quantity:<br>
            <input type="text" name="quantity" value="{{$reagent->quantity}}"><br>

            Exp Date:<br>
            <input type="text" name="expire_date"  value="{{$reagent->expire_date}}"><br>

            Quality Documents:<br>
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="quality_docs" value="{{ Session::get('path') }}" placeholder="quality_docs"><br>
            {{ Session::get('path') }}
            <input type="submit" value="Submit">
        </form>
    </div>
    <div>
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
    </div>
