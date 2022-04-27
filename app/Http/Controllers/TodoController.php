<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function __contruct()
    {
        $this->middleware(['auth','admin']);
    }

    public function view(User $user, Training $training)
    {
        return $user->id === $schedule->user_id;
    }

    public function store() 
    {
        Mail::to('youremail.com')->send(new \App\Mail\TodoCreated($todo));
        
        dispatch(new \App\Jobs\SendEmailJob($todo));
    }

    public function show(Training $training)
    {
        $this->authorize('view', $schedule);

        // return to view
        return view('schedules.show', compact('schedule'));
    }

    public function forceDestroy(Todo $todo)
    {
        $todo->forceDelete();

        return redirect()->route('todos.index')->with([
            'alert-type' => 'alert-danger',
            'alert' => 'Your schedule has been force deleted!'
        ]);
    }
}
