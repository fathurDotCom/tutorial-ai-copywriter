<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CopywriterController extends Controller
{
    public function showForm()
    {
        return view('copywriter');
    }

    public function generate(Request $request)
    {
        $product = $request->input('product');

        $response = Http::withToken(env('OPENAI_API_KEY'))
            ->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-4o',
                'messages' => [
                    [
                      'role' => 'system',
                      'content' => "Anda seorang copywriter profesional. Tulis deskripsi produk yang singkat dan persuasif untuk bisnis online. Batasi hingga 50 kata."
                    ],
                    [
                      'role' => 'user',
                      'content' => "Tulis deskripsi produk yang menarik untuk: " . $product
                    ]
                ],
                'temperature' => 0.7,
                'max_tokens' => 200,
            ]);

        $copy = $response->json()['choices'][0]['message']['content'] ?? 'Error: no response';

        return view('copywriter_result', compact('product', 'copy'));
    }
}
