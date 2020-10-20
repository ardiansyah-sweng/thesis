<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailMahasiswaTerpilih extends Mailable
{
    use Queueable, SerializesModels;
    protected $mailData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('Email.EmailMahasiswaTerpilih')
            ->subject('Mahasiswa Terpilih Mengambil Topik TA')
            ->with('mailData', $this->mailData);
    }
}
