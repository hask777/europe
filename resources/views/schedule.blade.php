@extends('welcome')
@section('content')
@if(!empty($daily_schedule))
    @foreach($daily_schedule as $result)
    <div class="border-b">

            <form method="get" action="{{ route('schedule_show', $result['id']) }}">
                <input type="hidden" name="match_id" value="{{$result['id']}}">
                <button type="submit" class="flex bg-black text-white p-2 justify-between w-full">
                    {{$result['season']['name']}}
                    <span>
                        {{$result['status']}}
                    </span>
                    <span>
                        {{$result['scheduled']}}
                    </span>
                </button>
            </form>

        <div class="flex p-2 justify-between">
            <div>
                <form action="{{ route('team', $result['competitors'][0]['id']) }}" method="get">
                    <input type="hidden" name="team_id" value="{{$result['competitors'][0]['id']}}">
                    <button type="submit">{{$result['competitors'][0]['name']}}</button>
                </form>
            </div>

            <div>
                <form action="{{ route('team', $result['competitors'][1]['id']) }}" method="get">
                    <input type="hidden" name="team_id" value="{{$result['competitors'][1]['id']}}">
                    <button type="submit">{{$result['competitors'][1]['name']}}</button>
                </form>
            </div>

        </div>
    </div>
@endforeach
@else
    <div>no results</div>
@endif
@endsection