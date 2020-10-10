<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DayliScheduleController extends Controller
{

    public function index(){
        $daily_schedule = Http::get('https://api.sportradar.us/soccer-t3/eu/us/schedules/2020-10-10/schedule.json?api_key=sykat9kajte34jnwszsqxw58')->json()['sport_events'];

        dump($daily_schedule);

        return view('schedule', [
            'daily_schedule' => $daily_schedule
        ]);
    }

    public function show($id){
        
    }

}
