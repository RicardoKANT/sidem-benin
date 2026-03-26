<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Affiche le formulaire de contact
     */
    public function show()
    {
        return view('contact');
    }

    /**
     * Traite la soumission du formulaire de contact
     */
    public function store(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255|min:2',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10|max:5000',
        ], [
            'name.required' => __('messages.validation_name_required'),
            'name.min' => __('messages.validation_name_min'),
            'name.max' => __('messages.validation_name_max'),
            'email.required' => __('messages.validation_email_required'),
            'email.email' => __('messages.validation_email_invalid'),
            'message.required' => __('messages.validation_message_required'),
            'message.min' => __('messages.validation_message_min'),
            'message.max' => __('messages.validation_message_max'),
        ]);

        try {
            // Envoyer l'email à SIDEM-BENIN
            Mail::to(config('mail.from.address', 'support@sidem-benin.com'))
                ->send(new \App\Mail\ContactMail($validated));

            // Envoyer un email de confirmation à l'utilisateur
            Mail::to($validated['email'])
                ->send(new \App\Mail\ContactConfirmation($validated));

            return redirect()->back()
                ->with('success', __('messages.contact_success'));
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('messages.contact_error'))
                ->withInput();
        }
    }
}
