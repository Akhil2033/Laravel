<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Contact;

class ContactsController extends Controller
{
    //
    public function list()
    {
        return view('contacts.list', [
            'contacts' => Contact::all()
        ]);
    }


    public function addForm()
    {
        return view('contacts.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'Ph_no' => 'required',
            'email' => 'required',
        ]);

        $contact = new contact();
        $contact->title = $attributes['title'];
        $contact->Ph_no = $attributes['Ph_no'];
        $contact->email = $attributes['email'];
        $contact->save();

        return redirect('/console/contacts/list')
            ->with('message', 'contact has been added!');
    }

    public function editForm(Contact $contact)
    {
        return view('contacts.edit', [
            'contact' => $contact,
        ]);
    }

    public function edit(Contact $contact)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'Ph_no' => 'required',
            'email' => 'required',
        ]);

        $contact->title = $attributes['title'];
        $contact->Ph_no = $attributes['Ph_no'];
        $contact->email = $attributes['email'];
        $contact->save();

        return redirect('/console/contacts/list')
            ->with('message', 'contact has been edited!');
    }

    public function delete(Contact $contact)
    {
        $contact->delete();
        
        return redirect('/console/contacts/list')
            ->with('message', 'contact has been deleted!');        
    }
}
