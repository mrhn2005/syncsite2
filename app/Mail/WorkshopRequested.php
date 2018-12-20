<?php

namespace App\Mail;
use App\WorkshopRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WorkshopRequested extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $workshop;
    
    public function __construct(WorkshopRequest $workshop)
    {
        $this->workshop= $workshop;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@yasidea.ir')->view('emails.workshop-requested');
    }
}
