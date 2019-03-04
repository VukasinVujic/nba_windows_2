@extends('partials.master')

@section('title', 'SHOW SINGLE TEAMS')
    
@section('content')
 <ul>
<li> {{ $team->name }}</li>
<li> {{ $team->email }}</li>
<li> {{ $team->address }}</li>
<li> {{ $team->city }}</li>
<br>
@foreach ($team->player as $player)
    {{ $player->first_name . "   " . $player->last_name}}<br>

@endforeach

</ul>

@endsection

