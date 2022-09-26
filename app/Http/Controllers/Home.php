<?php

namespace App\Http\Controllers;

use App\Models\DailyList;
use Illuminate\Http\Request;

class Home extends Controller
{

    public function index ()
    {
        //todo make factories
       $this->data['lists']=DailyList::where('user_id', '=', auth()->user()->id)->paginate(10);

        return view ("pages.home", $this->data);
    }
}
