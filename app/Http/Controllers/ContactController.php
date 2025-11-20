<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Handle contact form submission.
     */
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'message' => 'required|string',
        ]);

        // Persist to dedicated contacts table
        try {
            $contact = Contact::create([
                'name' => $data['name'],
                'company' => $data['company'] ?? null,
                'email' => $data['email'],
                'phone' => $data['phone'] ?? null,
                'message' => $data['message'],
            ]);

            Log::info('Contact saved', ['contact_id' => $contact->id]);
            return redirect()->back()->with('success', 'Terima kasih, pesan Anda telah dikirim.');
        } catch (\Exception $e) {
            Log::error('Failed to save contact: ' . $e->getMessage(), ['exception' => $e]);
            return redirect()->back()->with('error', 'Gagal menyimpan pesan. Silakan coba lagi.');
        }
    }
}
