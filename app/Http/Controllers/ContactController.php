<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();

        return view('contact.index', [
            'contacts' => $contacts

        ]);
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        Contact::create($request->all());

        toast('Contact created successfully.', 'success');
        return redirect()->back();
    }

    public function show(Contact $contact)
    {
        //
    }

    public function edit(Contact $contact)
    {
        $contacts = Contact::find($contact)->first();
        $contactx = Contact::all();

        return view('company.edit', [
            'contacts' => $contacts,
            'contactx' => $contactx
        ]);
    }

    public function update(Request $request, Contact $contact)
    {
        $contact->update($request->all());

        toast('Contact updated.', 'success');
        return redirect()->back();
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        toast('Contact deleted.', 'success');
        return redirect()->back();
    }
}
