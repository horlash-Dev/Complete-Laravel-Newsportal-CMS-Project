<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Welcome extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    protected $user;
    protected $password;
    public $tries = 2;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user,$password)
    {
        $this->user = $user; 
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->
        subject('Welcome Your Account Has Been Created')
        ->view('admin.dashboard.mail.welcome')->with(["username"=>$this->user->username,"password"=>$this->password]);
    }
}