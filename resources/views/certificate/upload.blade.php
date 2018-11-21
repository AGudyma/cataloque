
@if(count($errors)>0)
    <div class="alert-danger">
        Upload validation Error<br><br>
        <ul>
            foreach($error->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{ url('/uploadfile') }}"

        enctype="multipart/form-data">
    {{csrf_field()}}

</form>


<?php
/**
 * Created by PhpStorm.
 * User: napal
 * Date: 15.11.2018
 * Time: 23:20
 */