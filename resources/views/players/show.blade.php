@extends('layouts.master')

@section('title', 'SHOW BLADE PLAYERS')
    
@section('content')

<h1>Single player</h1>


<ul>  
<li> {{$player->first_name}}</li>
<li> {{$player->last_name}}</li>
<li> {{$player->email}}</li>

<li> <a href="{{ route('singleTeam' , [ 'id' => $player->team->id ])}}"> {{$player->team->name}} </a> </li> 
</ul>  


    
@endsection

