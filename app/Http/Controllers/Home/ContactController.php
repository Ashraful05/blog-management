<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Contact()
    {
        return view('frontend.contact.contact_me');
    }
    public function SaveContact(Request $request)
    {
        Contact::insert([
           'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'phone'=>$request->phone,
            'message'=>$request->message,
            'created_at'=>Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Your Message Submited Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
    public function AllContactMessage()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contact.all_contact',compact('contacts'));
    }
    public function DeleteContactMessage($id)
    {
        Contact::find($id)->delete();
        $notification = array(
            'message' => 'Your Message Deleted Successfully!!',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }
}
