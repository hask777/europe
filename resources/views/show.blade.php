@extends('welcome')
@section('content')
    <h1 class="text-3xl font-bold text-center">Lineups</h1>
    <div class="flex justify-between">
        <div>
            {{$match['sport_event']['competitors'][0]['name']}}
            <div>
                {{$match['lineups'][0]['team']}}
               
            </div>
            <div>
                {{$match['lineups'][0]['formation']}}
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
                {{$match['lineups'][1]['formation']}}
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

@endsection