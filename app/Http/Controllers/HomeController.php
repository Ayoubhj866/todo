<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function welcome( ?Task $task , ?string $search = null )
    {

        return view("welcome" , [
            'pending' => Task::where('status' , '=' , "Pending")->orderBy('created_at' , 'desc') -> get(),
            'inProgress' =>  Task::where('status' , '=' , "In Progress") ->orderBy('created_at' , 'desc')-> get(),
            'underReview' =>  Task::where('status' , '=' , "Under Review") ->orderBy('created_at' , 'desc')-> get() ,
            'completed' => Task::where('status' , '=' , "Completed")->orderBy('created_at' , 'desc') -> get(),
            'editTask' => $task->toArray()
        ]) ;
    }
}
