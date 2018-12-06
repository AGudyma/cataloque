@foreach($reagents as $reagent)
    <tr>
        <td><a href="standarts/{{$reagent->id}}">{{$reagent->name}}</a> </td>
        <td>{{$reagent->producer}}</td>
        <td>{{$reagent->batch}}</td>
        <td>{{$reagent->quantity}}</td>
        <td>{{$reagent->expire_date}}</td>
    </tr>
)
@endforeach

