<?php

namespace App\Http\Controllers;
use app\Models\BankRequest;
use Illuminate\Http\Request;

class BankRequestController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'bank_name' => 'required|string|max:255',
            'email' => 'required|email|unique:bank_requests,email',
            'contact_number' => 'required|digits:10',
            'message' => 'nullable|string|max:500',
        ]);

        BankRequest::create($request->all());

        return redirect()->back()->with('success', 'Your request has been submitted. The RBI Admin will contact you soon.');
    }
}
