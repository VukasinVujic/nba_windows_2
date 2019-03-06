@extends('layouts.master')

@section('title', 'INDEX ALL TEAMS BLADE')
    
@section('content')
<h1>All teams</h1>
<br>
<ul>
@foreach ($teams as $team)
   <a href="{{ 'http://localhost/VIVIFY/napredni/Laravel/radOdKuce_27_02_NBA/nba_2/public/teams/' . $team->id}}"> <li>{{ $team->name }} </li></a> 
   
@endforeach
</ul>
@endsection