<?php

namespace App\Http\Controllers;

use App\Models\DailyList;
use Illuminate\Http\Request;

class Home extends Controller
{

    public function index ()
    {
        //todo make factories
        $lists= new DailyList();
        $this->data['lists']=DailyList::all()->where('user_id', '=', auth()->user()->id);

        return view ("pages.home", $this->data);
    }
}
