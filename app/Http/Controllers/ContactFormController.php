<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUs\ContactUsRequest;
use App\Models\ContactUs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Storage;




class ContactFormController extends Controller
{
    public function index()
    {
        return view('contactForm.contacts'); //renders the contact page
    }


    public function send_mail(ContactUsRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $contact= new ContactUs($validated);

        if ($request->hasFile('image'))
        {
            $contact->image = $validated['image']
                ->store('contact', 'public');

            if (Storage::disk('public')->exists($contact)) {
                $contents = Storage::get($contact);
            }
        }

        $contact->save();

        Mail::to('rewtrey1@gmail.com')->send(new ContactFormMail($contact));

        return redirect()->route('contact')->with('status', ' Your Mail has been received');
    }
}


