<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {   
        if(auth()->user()){
            $contacts=Contact::latest()->filter(request(['search']))->paginate(7);
            return view('index',compact('contacts'));
        }
        return view('user.login');
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $formFields=[
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'user_id'=>auth()->user()->id,
        ];
        Contact::create($formFields);
        return back()->with('message','Contact created successfully!');
    }

    public function show(Contact $contact)
    {
        return view('contacts.show',compact('contact'));
    }

    public function delete(Contact $contact)
    {
        $contact->delete();
        return redirect('/')->with('message','Contact deleted successfully!');
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit',compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $contact->update([
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
        ]);
        return back()->with('message','Contact updated successfully!');
    }
}
