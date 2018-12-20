<?php

namespace App\Mail;

use App\Participant;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ParticipantRegisteredAdmin extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $participant; 
     
    public function __construct(Participant $participant)
    {
        $this->participant= $participant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@yasidea.ir')->view('emails.participant-registered-admin')->subject('ثبت نام در رویداد '.$this->participant->event->name) ;
    }
}
