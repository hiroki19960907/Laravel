<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminAuthPageSendMail extends Mailable {

    use Queueable, SerializesModels;

    public function __construct($request,$urls) {
        $this->request = $request;
        $this->urls = $urls;
    }

    public function build() {
        return $this
            ->subject('~さんから、メールが届きました')
            ->view('mail.adminauthpageview')
            ->with([
                'urls' => $this->urls,
            ]);
    }
}