<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    //
    public function index() 
    {
        $response = Http::withHeaders(
                   [
                    'x-api-key' => config('news360.key'),
                    'Accept' => 'application/json',
                   ]
                )->get(config('news360.api').'main');
    
        if($response->successful()) {
            $data = $response->json();
        } else {
            return response()->json(['message'=>'Not successful'], $response->status());
        }
        return view('home', ['data' => $data, 'banners' => $data['BANNER']]);
    }
   
  
}
