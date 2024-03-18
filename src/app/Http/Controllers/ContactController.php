<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = contact::with('category')->get();
        $categories = Category::all();
        
        return view('index', compact('contacts', 'categories'));
    }

   public function confirm(ContactRequest $request)
   {
    $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'detail', 'type']);
    
    return view('confirm', ['contact' => $contact]);
   }

   public function store(ContactRequest $request)
   {
    $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'detail', 'type']);
        Contact::create($contact);
        return view('thanks');
   }


}