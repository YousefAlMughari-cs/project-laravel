<?php

namespace App\Http\Controllers\SiteOne;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class SiteOneController extends Controller
{
    public function home()
    {
        return view('SiteOne.home');
    }
    public function services()
    {
        return view('SiteOne.services');
    }
    public function portfolio()
    {
        return view('SiteOne.portfolio');
    }
    public function about()
    {
        return view('SiteOne.about');
    }
    public function contact()
    {
        return view('SiteOne.contact');
    }
    public function ok()
    {
        return view('SiteOne.ok');
    }
    public function viewcontact()
    {
        $contacts = Contact::all();
        return view('SiteOne.view_contact', compact('contacts'));
    }
    public function postcontact(Request $request)
    {
        //    dd($request->all());
        $request -> validate([
            'name' => 'required|string|min:3|max:15',
            'email' => 'required',
            'phone' => 'required',
            'msg' => 'required',
            'image' => 'required'
        ]);

        // $name =  time() . '_' . rand() . '_'. $request->file('image')->getClientOriginalName();

        $name = 'SiteOne_' . time() . '_' . rand() . '.' . $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(public_path('uploads'), $name);

        Contact::create([
            'name'=> $request->name,
            'phone'=> $request->phone,
            'email'=> $request->email,
            'msg'=> $request->msg,
            'image'=> $name
        ]);

        return redirect()->route('site2.ok');
    }
}
