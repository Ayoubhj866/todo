<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(['title' => ['required' ,'string' , 'min:4' , 'max:255']]) ;
        Task::create($validated) ;
        return back() -> with("success" , "Task Created successfully !") ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $validatedData = $request->validate([
            'title' => ['required' ,'string' , 'min:4' , 'max:255'] ,
            'status'=> ['string']
        ]);

        $task->update($validatedData) ;

        return redirect()->route('welcome')->with("success" , 'Task Updated !') ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete() ;
        return back()->with("success" , 'Task deleted !') ;
    }
}
