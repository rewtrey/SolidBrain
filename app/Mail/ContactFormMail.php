<?php

namespace App\Mail;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $user;

    public function __construct($data)
    {
        $this->user = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $view = $this->from('rewtrey1@gmail.com')
            ->markdown('contactForm.template.client.contactform')
            ->with([
                'subject' => $this->user['subject'],
                'message' => $this->user['message'],
                'email' => $this->user['email'],
                'phone_number' => $this->user['phone_number'],
                'lastName' => $this->user['lastName'],
                'name' => $this->user['name']
            ]);
        if ( ! empty($this->user['image']) )
            $view->attachFromStorageDisk('public' , $this->user['image']);

        return $view;
    }
}
