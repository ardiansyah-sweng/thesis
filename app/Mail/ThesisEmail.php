<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ThesisEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('admin@siatif.com', 'Supriyanto, M.T.')
                    ->view('emailku')
                    ->with(
                      [
                        'nama' => 'Ardiansyah',
                        'pekerjaan' => 'Dosen'
                      ]);
    }
}
