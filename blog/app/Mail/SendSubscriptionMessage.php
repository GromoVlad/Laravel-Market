<?php

namespace App\Mail;

use App\Model\Sku;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendSubscriptionMessage extends Mailable
{
    use Queueable, SerializesModels;

    protected $sku;

    public function __construct(Sku $sku)
    {
        $this->sku = $sku;
    }

    public function build()
    {
        $sku = $this->sku;
        return $this->view('mail.subscription', compact('sku'));
    }
}
