<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!empty($_GET['team_id'])){
            $team_id = $_GET['team_id'];
        }
        // Team Profile
        $team = Http::get('https://api.sportradar.us/soccer-t3/eu/ru/teams/'. $team_id . '/profile.json?api_key=sykat9kajte34jnwszsqxw58')->json();

        // Team results

        $team_results = Http::get('https://api.sportradar.us/soccer-t3/eu/us/teams/'. $team_id . '/results.json?api_key=sykat9kajte34jnwszsqxw58')->json();

        // Team Schedule

        $team_schedule = Http::get('https://api.sportradar.us/soccer-t3/eu/us/teams/'. $team_id . '/schedule.json?api_key=sykat9kajte34jnwszsqxw58')->json();

        // Team Statistics

        $team_statistics = Http::get('https://api.sportradar.us/soccer-t3/eu/us/tournaments/sr:season:76517/teams/'. $team_id . '/statistics.json?api_key=sykat9kajte34jnwszsqxw58')->json();

        dump($team);
        return view('team', [
            'team' => $team
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
        //
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
