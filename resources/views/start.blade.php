@extends('welcome')
@section('content')
@if(!empty($live))
    @foreach($live as $result)
    <div class="border-b">
        <h2 class="flex bg-black text-white p-2 justify-between">
            {{$result['sport_event']['tournament']['category']['name']}} : {{$result['sport_event']['season']['name']}}
            <span>
                {{$result['sport_event_status']['match_status']}}
            </span>
            <span>
                {{$result['sport_event']['scheduled']}}
            </span>
        </h2>
        
        <div class="flex justify-between p-3">

            <div>
                <form action="{{ route('team', $result['sport_event']['competitors'][0]['id']) }}" method="get">
                    <input type="hidden" name="team_id" value="{{$result['sport_event']['competitors'][0]['id']}}">
                    <button type="submit">{{$result['sport_event']['competitors'][0]['name']}}</button>
                </form>
            </div>

            <div>
                @if($result['sport_event_status']['match_status'] == 'ended')
                    {{$result['sport_event_status']['home_score']}} - 
                    {{$result['sport_event_status']['away_score']}}
                @endif
                
            </div>
            <div>
                <form action="{{ route('team', $result['sport_event']['competitors'][1]['id']) }}" method="get">
                    <input type="hidden" name="team_id" value="{{$result['sport_event']['competitors'][1]['id']}}">
                    <button type="submit">{{$result['sport_event']['competitors'][1]['name']}}</button>
                </form>
            </div>   
             
        </div>
    </div>
@endforeach
@else
    <div>no results</div>
@endif
@endsection