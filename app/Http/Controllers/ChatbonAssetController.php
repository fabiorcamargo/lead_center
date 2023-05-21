<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbonAssetController extends Controller
{
    public function chatbot_send ($chip, $number, $message){

        //dd($request->all());
        //$ativo = ModelsChatbotAsset::find($chip);
        //dd($ativo);
        //$number = "4299162289";
        //$message = "Oi";

        $response = Http::withHeaders([
            'Authorization' => $ativo->token
        ])->post('https://v5.chatpro.com.br/' . $ativo->asset . '/api/v1/send_message', [
            "number" => $number,
            "message" => $message
        ]);


        //dd($response->getBody());
    }
}
