<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\GeneralHelper;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    //
    public function index(){
        $contactPageData = (new GeneralHelper())->fetchPageData('contact-us-page');
        $companyData = (new GeneralHelper())->getCompanyData('company-info');
        $data['contact_data'] = $contactPageData[0]['acf'] ?? [];
        $data['company_info'] = $companyData[0]['acf']['general_settings'] ?? [];

        return view('contact', $data);
    }

     public function submit(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'number' => 'nullable|string|max:20',
            'subject' => 'required|string',
            'message' => 'required|string|max:2000',
        ]);

        // Send Mail (Simple Version)
        Mail::raw(
            "Name: {$validated['name']}\n".
            "Email: {$validated['email']}\n".
            "Phone: {$validated['number']}\n".
            "Service: {$validated['subject']}\n".
            "Message: {$validated['message']}",
            function ($message) {
                $message->to('developers@allianzetechnologies.com')
                        ->subject('New Enquiry Request');
            }
        );

        return back()->with('success', 'Your enquiry has been sent successfully!');
    }
}
