<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DailyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daily_res = Http::get('https://api.sportradar.us/soccer-t3/eu/us/schedules/2020-10-10/results.json?api_key=sykat9kajte34jnwszsqxw58')->json()['results'];
        // dump($daily_res);

        

        return view('daily', [
            'daily_res' => $daily_res
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if(!empty($_GET['daily_match_id'])){
            $daily_match_id = $_GET['daily_match_id'];
        }

        $match_lineups = Http::get('https://api.sportradar.us/soccer-t3/eu/us/matches/'. $daily_match_id .'/lineups.json?api_key=sykat9kajte34jnwszsqxw58')->json();

        $match_probabilities = Http::get('https://api.sportradar.us/soccer-t3/eu/us/matches/'. $daily_match_id .'/probabilities.json?api_key=sykat9kajte34jnwszsqxw58')->json();

        $match_summary = Http::get('https://api.sportradar.us/soccer-t3/eu/us/matches/'. $daily_match_id .'/summary.json?api_key=sykat9kajte34jnwszsqxw58')->json();

        $match_timeline = Http::get('https://api.sportradar.us/soccer-t3/eu/us/matches/'. $daily_match_id .'/timeline.json?api_key=sykat9kajte34jnwszsqxw58')->json();


        dump($match_timeline);

        return view('show', [
            'match' => $match_lineups
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
