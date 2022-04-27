<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TodoCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $todo;
    
    public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }
    
    public function build()
    {
        return $this->view('email.todo-mailable')
            ->subject('Todo Created Email using Mailable Class');
    }
}