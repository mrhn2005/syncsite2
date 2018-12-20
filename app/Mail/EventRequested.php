<?php

namespace App\Mail;
use App\EventRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EventRequested extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $event;
    
    public function __construct(EventRequest $event)
    {
        $this->event= $event;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@yasidea.ir')->view('emails.event-requested');
    }
}
