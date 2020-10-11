@extends('welcome')
@section('content')
@if(!empty($match['sport_event']))
    <h1 class="text-3xl font-bold text-center">Lineups</h1>
    <div class="flex justify-between">
       
        <div>
            {{$match['sport_event']['competitors'][0]['name']}}
            <div>
                {{$match['lineups'][0]['team']}}
               
            </div>
            <div>
                @if(!empty($match['lineups'][0]['formation']))
                    {{$match['lineups'][0]['formation']}}
                @endif
            </div>
            <div>
                {{$match['lineups'][0]['manager']['name']}},
                {{$match['lineups'][0]['manager']['nationality']}}
            </div>
            <div>
                @foreach ($match['lineups'][0]['starting_lineup'] as $player)
                    {{$player['name']}}
                    <br>
                @endforeach
            </div>
        </div>

        <div>
            {{$match['sport_event']['competitors'][1]['name']}}
            <div>
                {{$match['lineups'][1]['team']}}
            </div>
            <div>
                @if(!empty($match['lineups'][1]['formation']))
                    {{$match['lineups'][1]['formation']}}
                @endif
            </div>
            <div>
                {{$match['lineups'][1]['manager']['name']}},
                {{$match['lineups'][1]['manager']['nationality']}}
            </div>
            <div>
                @foreach ($match['lineups'][1]['starting_lineup'] as $player)
                    {{$player['name']}}
                    <br>
                @endforeach
            </div>
        </div>
        
    </div>
    <h1 class="text-3xl font-bold text-center">Probabilites</h1> 

    <h1 class="text-3xl font-bold text-center">Summary</h1> 
@else 
    <h1>No lineups</h1>
@endif
@endsection