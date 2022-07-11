<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InviteMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $request;
    public $req;
    public function __construct($request,$req)
    {
        //
       // $this->dashboard_events_array=$dashboard_events_array;
        $this->request=$request;
        $this->req=$req;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd("1");
        // return Mail::send('vendor.mail.html.default', $req, function($message) use($req) {
        //     $message->to($req['email']);
        //     $message->subject('New email!!!');
        // });
        return $this->view('frontend.mail.default');
    }
}
