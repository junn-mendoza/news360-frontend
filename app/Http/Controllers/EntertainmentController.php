<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class EntertainmentController extends Controller
{
    //
    public function index() 
    {
        $response = Http::withHeaders(
            [
             'x-api-key' => config('news360.key'),
             'Accept' => 'application/json',
            ]
         )->get(config('news360.api').'entertainment');

        if($response->successful()) {
            $data = $response->json();
        } else {
            return response()->json(['message'=>'Not successful'], $response->status());
        }
        return view('entertainment', ['data' => $data]);
    }
   
  
}
