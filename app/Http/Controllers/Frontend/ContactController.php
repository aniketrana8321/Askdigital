<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact; // Agar database me store karna ho

class ContactController extends Controller
{
    // ✅ Display the form
    public function create()
    {
        $pageTitle = 'Contact Us | Ask Digital Agency';
        $pageDescription = 'Get in touch with us for expert digital marketing services.';

        return view('frontend.contact-us', compact('pageTitle', 'pageDescription'));
    }


  public function store(Request $request)
{
    $validated = $request->validate([
        'name'    => 'required|string|max:255',
        'email'   => 'required|email',
        'phone'   => 'required|string|max:15',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    // ✅ Save to database
    Contact::create($validated);

    // ✅ Send email to both
    Mail::to(['askdigitalagency88@gmail.com', 'agency@askdigitalagency.com'])
        ->send(new ContactFormMail($validated));

    return response()->json(['success' => 'Message sent and saved successfully.']);
}

}
