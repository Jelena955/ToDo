<?php

namespace App\Http\Controllers;

use App\Http\Requests\DailyListRequest;
use App\Models\Task;
use Exception;
use Illuminate\Http\Request;
use App\Models\DailyList as ListModel;
use Illuminate\Support\Facades\DB;

class DailyList extends Controller
{

    public function create ()
    {

        return view ('pages.createList', $this->data);
    }

    public function store (DailyListRequest $request)
    {
        if ($request->validated ()) {
            $validated=$request->validated();
            $validated['user_id']= auth()->user()->id;
           \App\Models\DailyList::create($validated);
        } else {
            //todo implement this
            die(var_dump("ne"));
        }
    }
    public function edit ($id)
    {
        $this->data['list'] = \App\Models\DailyList::find($id);
        return view ('pages.editList', $this->data);
    }
    public function update (DailyListRequest $request, $id)
    {
        $list = \App\Models\DailyList::find ($id);
        $list->title = $request->title;
        $list->description = $request->description;
        $list->date = $request->date;
        
        $list->save ();
        try {
            \DB::beginTransaction ();
            foreach ($request->task as $task)
            $list->tasks ()->sync ($task);
            \DB::commit ();
            return redirect ('/adminMovies')->with ('status', 'Successfully edited movie');
        } catch (Exception $e) {
            \DB::rollBack ();

            return redirect ('/adminMovies')->with ('error', 'Something went wrong, try again');

        }
    }
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            Task::where('daily_list_id', $id)->delete();
            ListModel::destroy($id);
            DB::commit();
            return redirect('/home')->with('status', 'Successfully deleted movie');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect('/home')->with('error', 'Something went wrong. try again');
        }
    }
}
