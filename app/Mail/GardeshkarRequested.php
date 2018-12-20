<?php

namespace App\Mail;
use App\GardeshkarRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class GardeshkarRequested extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $gardeshkar;
    
    public function __construct(GardeshkarRequest $gardeshkar)
    {
        $this->gardeshkar= $gardeshkar;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@yasidea.ir')->view('emails.gardeshkar-requested');
    }
}
