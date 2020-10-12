<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DayliScheduleController extends Controller
{

    public function index(){
        $daily_schedule = Http::get('https://api.sportradar.us/soccer-t3/eu/us/schedules/2020-10-10/schedule.json?api_key=t6vyac2agx5a76nzpp7a8rh7')->json()['sport_events'];

        dump($daily_schedule);

        return view('schedule', [
            'daily_schedule' => $daily_schedule
        ]);
    }

    public function show($id){

        if(!empty($_GET['match_id'])){
            $match_id = $_GET['match_id'];
        }

        $match = Http::get('https://api.sportradar.us/soccer-t3/eu/us/matches/'. $match_id .'/lineups.json?api_key=t6vyac2agx5a76nzpp7a8rh7')->json();

        dump($match);

        return view('schedule.show', [
            'match' => $match
        ]);
    }

}
