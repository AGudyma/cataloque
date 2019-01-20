@extends('layouts.main')
@section('header')
@stop
<div class="btn btn-primary btn-lg">
    {{ 'Hello, ' }}{!! auth()->user()->admin == 0 ? 'User': 'Admin'!!}
    <a href="/" class="btn btn-success" role="button">Homepage</a>
</div>
<div class="container">
    <form action="{{url('reagents')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        Name:<br>
        <input type="text" name="name" placeholder="name" required><br>
        {{--<meta name="csrf-token" content="{{ csrf_token() }}" />--}}
        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
        batch:<br>
        <input type="text" name="batch" placeholder="batch" required><br>

        Producer:<br>
        <input type="text" name="producer" placeholder="producer" required><br>

        {{--Package:<br>--}}
        {{--<input type="text" name="package" placeholder="package"><br>--}}

        {{--Quantity:<br>--}}
        {{--<input type="text" name="quantity" placeholder="quantity"><br>--}}

        Exp Date:<br>
        <input type="date" name="expire_date" placeholder="exp Date" required><br>

        {{--CoA:<br>--}}
        <input type="file" name="quality_docs" placeholder="UploadedfileName"><br>

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
        <a href="http://catalogue/reagents" role="button" class="btn btn-success">back to reagent list</a>
    </div>


</div>