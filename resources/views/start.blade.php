@extends('welcome')
@section('content')
@if(!empty($live))
    @foreach($live as $match)
        <div style="border-bottom: 1px solid red">
            <h1>Event</h1>
            <div>Time: {{$match['sport_event']['scheduled']}}</div> <br>
            <div>Type: {{$match['sport_event']['tournament_round']['type']}} {{$match['sport_event']['tournament_round']['number']}} {{$match['sport_event']['tournament_round']['phase']}}</div>
        <h1>Season: {{$match['sport_event']['season']['name']}}</h1>
            <div>start: {{$match['sport_event']['season']['start_date']}}   end: {{$match['sport_event']['season']['end_date']}} {{$match['sport_event']['season']['year']}}</div>
        <h1>Teams</h1>
            <h3>{{$match['sport_event']['competitors'][0]['name']}}  VS   {{$match['sport_event']['competitors'][1]['name']}}</h3>
            <h3>{{$match['sport_event']['competitors'][0]['qualifier']}}  VS   {{$match['sport_event']['competitors'][1]['qualifier']}}</h3>
        <h1>Score</h1>
            <h3>
                match status:  {{$match['sport_event_status']['match_status']}}
                @if(!empty($match['sport_event_status']['home_score']))
                    {{$match['sport_event_status']['home_score']}}  VS   {{$match['sport_event_status']['away_score']}}</h3>
                @endif
                
        </div>
@endforeach
@else
    <div>no results</div>
@endif
@endsection