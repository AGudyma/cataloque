@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="alert alert-success">
                            <p>You're logged in as ADMINISTRATOR</p>
                        </div>

                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th width="5">No.</th>
                                <th>Member Name</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $key => $value)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
            <?php
        use Illuminate\Support\Facades\DB;
            //retrieve file names
        $images_in_buffer = scandir('C:\OSPanel\domains\Catalogue\public\images');
//            var_dump($images_in_buffer);

            $images_in_DB = DB::table('standarts')->select('quality_docs')->get();
           echo '<br>';
//            print $images_in_DB.'["items":protected]'."[0]";
            $ArrayFromDB = Array($images_in_DB . '["items":protected]' . "[0]");
                var_dump($ArrayFromDB);
            foreach ($ArrayFromDB as $key => $value) {
                $imagesListDB = $value;
            }
            var_dump($imagesListDB);

//            delete files
        foreach (glob("*.jpg") as $filename) {
            echo "$filename size " . filesize($filename) . "\n";
            unlink($filename);
        }



        ?>




                {{--<table class="table table-hover table-bordered">--}}
                    {{--<thead>--}}
                    {{--<tr>--}}
                        {{--<th id</th>--}}
                        {{--<th>images in buffer</th>--}}

                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody>--}}
                    {{--@foreach ($images_in_buffer as $key => $value)--}}
                        {{--<tr>--}}
                            {{--<td>{{ $key }}</td>--}}
                            {{--<td>{{ $value }}</td>--}}
                        {{--</tr>--}}
                    {{--@endforeach--}}

                    {{--</tbody>--}}
                {{--</table>--}}
    </div>

@endsection