<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        Contact::create($data);

        return redirect('/contacts')->with('success', 'Контакт успешно создан.');
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $contact->update($data);

        return redirect('/contacts')->with('success', 'Контакт успешно обновлен.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect('/contacts')->with('success', 'Контакт успешно удален.');
    }
}
