<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;

class ChatBotController extends Controller
{
    public function sendMessage(Request $request)
    {
        $request->validate([
            'prompt' => 'required|string',
        ]);

        // Ambil prompt dari request
        $prompt = $request->input('prompt');

        // Koneksi dengan default context
        $defaultContext = 'You are WorkBot, an AI assistant designed to help with tasks related to work. Always provide clear and concise answers based on the task at hand.';

        // Gabungkan default context dengan prompt
        $fullPrompt = $defaultContext . "\n\n" . $prompt;

        try {
            // Kirim prompt yang sudah digabungkan ke Gemini
            $response = Gemini::geminiPro()->generateContent($fullPrompt);
            $reply = $response->text();
        } catch (\Exception $e) {
            $reply = 'Maaf, terjadi kesalahan dalam memproses permintaan Anda.';
        }

        return response()->json(['reply' => $reply]);
    }
}
