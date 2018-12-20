<?php

namespace App\Mail;
use App\CmorghTeam;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TeamSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     
   public $team;
     
     
    public function __construct(CmorghTeam $team)
    {
         $this->team = $team;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@yasidea.ir')->view('emails.cmorgh-team-submitted');
    }
}
