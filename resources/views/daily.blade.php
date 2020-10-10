@extends('welcome')
@section('content')

    @foreach($daily_res as $result)
        <div class="border-b">
        <form method="get" action="{{ route('show', $result['sport_event']['id']) }}">
                    <input type="hidden" name="daily_match_id" value="{{$result['sport_event']['id']}}">
                    <button type="submit" class="flex bg-black text-white p-2 justify-between w-full">
                        {{$result['sport_event']['tournament']['category']['name']}} : {{$result['sport_event']['season']['name']}}
                        <span>
                            {{$result['sport_event_status']['match_status']}}
                        </span>
                        <span>
                            {{$result['sport_event']['scheduled']}}
                        </span>
                    </button>
                </form>
      
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

@endsection