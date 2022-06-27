<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index', [
            'contact' => Contact::paginate(20)
        ]);
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'email' => ['required',Rule::unique('contacts', 'email')],
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contact::create($attributes);

        return redirect('/thoughts');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back()->with('success', 'Contact Deleted!');
    }
}
