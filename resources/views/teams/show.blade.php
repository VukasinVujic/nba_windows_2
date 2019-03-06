@extends('layouts.master')

@section('title', 'SHOW SINGLE TEAMS')
    
@section('content')
 <h1> SINGLE TEAM blade </h1>    
 
 <ul>
<li> {{ $team->name }}</li>
<li> {{ $team->email }}</li>
<li> {{ $team->address }}</li>
<li> {{ $team->city }}</li>
 


<br>
@foreach ($team->player as $player)
   <a href="{{ route('singlePlayer' , [ 'id' => $player->id ] )}}"> {{ $player->first_name . "   " . $player->last_name}} </a> 
    <br>
 
@endforeach

</ul>

@endsection

