<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailPemberitahuan extends Mailable
{
    use Queueable, SerializesModels;
 public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
   
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
        $address = 'eaikelompok8@gmail.com';
        $subject = 'Laporan Jalan Berlubang';
        $name = 'Admin Sistem Pengaduan Jalan Berlobang';
        
        return $this->view('email.email',['data'=>$this->data])
                    ->from($address, $name)
                    ->cc($address, $name)
                    ->bcc($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject);
                    
    }
}
