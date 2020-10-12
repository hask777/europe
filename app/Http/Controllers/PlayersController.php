<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $missing = Http::get('https://api.sportradar.us/soccer-t3/eu/us/tournaments/sr:season:77361/missing_players.json?api_key=sykat9kajte34jnwszsqxw58')->json();

        // $mapping = Http::get('https://api.sportradar.us/soccer-t3/eu/us/players/v2_v3_id_mappings.json?api_key=sykat9kajte34jnwszsqxw58')->json();

        // $merge = Http::get('https://api.sportradar.us/soccer-t3/eu/us/players/merge_mappings.json?api_key=sykat9kajte34jnwszsqxw58')->json();

        if(!empty($_GET['player_daily'])){
            $player_id = $_GET['player_daily'];
        }

        $player = Http::get('https://api.sportradar.us/soccer-t3/eu/us/players/'.$player_id.'/profile.json?api_key=t6vyac2agx5a76nzpp7a8rh7')->json();



        dump($player);

        return view('players');
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
