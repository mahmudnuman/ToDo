<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Session;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks= Task::where('status',0)->get();

        return view('welcome')->with('tasks',$tasks);
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
        //print_r($request->post());

        $this->validate($request, [

            'name' =>'required|string|max:255|min:3',
            'description' =>'required|string|max:10000|min:10',
            'due_date' =>'required|date',
        ]);

        $task = New Task;

        $task->name=$request->name;
        $task->description=$request->description;
        $task->due_date=$request->due_date;
        $task->save();

        Session::flash('success','Task Created Successfully');

        return redirect('/home');
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

    public function done( $id)
    {
         $value=Task::find($id);
         $value->status=1;
         $value->save();
         Session::flash('success','Task Done Successfully');
         return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $value=Task::find($id);
         $value->delete();
         Session::flash('success','Task Deleted Successfully');
         return redirect('/');
    }
}
