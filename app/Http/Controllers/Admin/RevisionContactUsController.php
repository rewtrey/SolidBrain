<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;

class RevisionContactUsController extends Controller
{
    public function index()
    {
        return view('admin.revisionContactUs.revision', [
            'contacts' => ContactUs::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    public function show(ContactUs $contact)
    {
        //
    }
}
