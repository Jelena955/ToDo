<?php

namespace App\Http\Controllers;

use App\Models\DailyList;
use Illuminate\Http\Request;

class Home extends Controller
{

    public function index ()
    {
//        $movie = new Movie();
//        $this->data['moviesPopular'] = Movie::withCount ('tag')->withAvg ('ratings', 'rating')->orderBy ('tag_count', 'DESC')->limit (4)->get ();
//        $this->data['moviesBest'] = $movie->getBestRatedMovies ();
//
//        $this->data['moviesLatest'] = Movie::withAvg ('ratings', 'rating')->orderBy ('year', 'DESC')->limit (4)->get ();
        //todo make factories
        $lists= new DailyList();
        $this->data['lists']=DailyList::all()->where('user_id', '=', auth()->user()->id);

        return view ("pages.home", $this->data);
    }
}
