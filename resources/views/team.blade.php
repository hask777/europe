@extends('welcome')
@section('content')
	<div>
    	<h1 class="text-2xl text-center p-4">{{$team['team']['name']}}</h1>
    	<div class=" bg-gray-500 p-4">
    		<div class="team_manager text-center">
    			Тренер:    {{$team['manager']['name']}} |
    			Национальность: {{$team['manager']['nationality']}}
    		</div>

    		<div class="team_players_list">
    			<h2 class="text-2xl text-center p-4">Игроки </h2>

    			@foreach($team['players'] as $player)
    			<div class="bg-gray-600 p-2 hover:text-white">
    				<a href="{{ route('player', $player['id']) }}">
	    				<span class="">{{ $player["name"] }}</span>
	    				<span class="ml-4">{{ $player["type"]}}</span>
	    			</a>
    			</div>
    			
	
    			@endforeach


    			<h2 class="text-2xl text-center p-4">Статистика команды</h2>

    			
    				@foreach($team['statistics']['seasons'] as $season)
	    				<a href="{{ route('season', [$season['id'], $team['team']['id']]) }}">
		    				<div>
		    					<span>{{ $season['name'] }}</span>
		    				</div>
		    			</a>
    				@endforeach
    			


    		</div>
    	</div>
    </div>
@endsection 