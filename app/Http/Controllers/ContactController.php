<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Information;

class ContactController extends Controller
{
    public function index()
    {
        $information = Information::first();

        return view('contacts.index', compact('information'));
    }

    public function test_view()
    {
        return view('emails.contact');
    }
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required',
                'subject' => 'required',
                'handphone' => 'required',
                'message' => 'required|string',
            ], [
                'name.required' => 'Name is required.',
                'subject.required' => 'Subject is required.',
                'handphone.required' => 'Handphone is required.',
                'message.required' => 'Message is required.',
                'message.string' => 'Message must be a string.',
            ]);

            $formData = $request->all();

            Contact::create($formData);

            return redirect()->route('contact.us')->with(['success' => 'You have already submitted the form!']);
        } catch (\Exception $e) {
            return redirect()->route('contact.us')->with('error', 'Failed to save the data. Put in a valid format.');
        }
    }
}
