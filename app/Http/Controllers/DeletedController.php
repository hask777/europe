<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DeletedController extends Controller
{
    public function index(){
        $deleted = Http::get('https://api.sportradar.us/soccer-t3/eu/us/schedules/deleted_matches.json?api_key=t6vyac2agx5a76nzpp7a8rh7')->json();

        dump($deleted);

        return view('deleted', [
            'deleted' => $deleted
        ]);
    }
}
