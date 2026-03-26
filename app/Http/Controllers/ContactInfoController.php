<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    public function edit()
    {
        $contact = ContactInfo::first() ?? ContactInfo::create([
            'email' => 'support@sidem-benin.com',
            'phone' => '+229 01 XX XX XX XX',
            'address' => 'Cotonou, Benin'
        ]);

        return view('admins.contact-info.edit', compact('contact'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,gif|max:2048',
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|string',
            'instagram' => 'nullable|string',
            'linkedin' => 'nullable|string',
        ]);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $validated['logo'] = $logoPath;
        }

        $contact = ContactInfo::first();
        if (!$contact) {
            $contact = ContactInfo::create($validated);
            $message = 'Informations de contact créées avec succès!';
        } else {
            $contact->update($validated);
            $message = 'Informations de contact mises à jour avec succès!';
        }

        return redirect()->route('contact-info.edit')->with('success', $message);
    }
}

