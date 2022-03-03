<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InvoiceMail extends Mailable
{
    use Queueable, SerializesModels;

     public $data;
     public $details;
     public $shipping;
     public $customername;


    public function __construct($data,$details,$shipping,$customername)
    {
        $this->data = $data;
        $this->details = $details;
        $this->shipping = $shipping;
        $this->customername = $customername;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $info = $this->data;
        $detailsinfo = $this->details;
        $shipping = $this->shipping;
        $customername = $this->customername;

        return $this->from('noreply@bipsharipur.com')->view('mail.invoice',compact('info','detailsinfo','shipping','customername'))->subject('Product Bought Successfully');
    }
}
