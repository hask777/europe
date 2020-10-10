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
                {{$result['sport_event']['competitors'][0]['name']}}
            </div>
            <div>
                @if($result['sport_event_status']['match_status'] == 'ended')
                    {{$result['sport_event_status']['home_score']}} - 
                    {{$result['sport_event_status']['away_score']}}
                @endif
                
            </div>
            <div>
                {{$result['sport_event']['competitors'][1]['name']}}
            </div>    
             
        </div>
    </div>
@endforeach
@else
    <div>no results</div>
@endif
@endsection