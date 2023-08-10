<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Notif extends Mailable
{
    use Queueable, SerializesModels;
    public $details, $kerjasama;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details, $kerjasama)
    {
        $this->details = $details;
        $this->kerjasama = $kerjasama;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.template')
                    ->subject($this->details->subject)
                    ->from('SIKMA@polinema.ac.id', 'Sistem Informasi Kerjasama Polinema')
                    ->with([
                        'mail' => $this->details,
                        'kerjasamas' => $this->kerjasama,
                    ]);
    }
}
