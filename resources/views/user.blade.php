<h2>We are calling here for the user details :: {{$name}}</h2>

<h3>Users are :: {{$users[3]}}</h3>


@if($name == "Vivek")
    <p>Sam is the user</p>
@else
    <p>Sam is not the user</p>
@endif


@foreach($users as $user)
    <p>{{$user}}</p>
@endforeach

@for($i = 0; $i < count($users); $i++)
    <p>{{$i}}</p>
@endfor
    
