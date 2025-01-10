<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function contactStore(Request $request) {

        $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);


        $data = $request->all();
        $data['ip'] = $request->ip();

        $lastdata = Contact::create($data);
        return back()->with('success', 'Your message has been sent. Thank you!');
    }
}
