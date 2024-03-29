<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class DetailController extends Controller
{
    //
    public function index($slug) 
    {
        $response = Http::withHeaders(
            [
             'x-api-key' => config('news360.key'),
             'Accept' => 'application/json',
            ]
         )->get( config('news360.api').$slug);

        if($response->successful()) {

            $data = $response->json();
        } else {
            return response()->json(['message'=>'Not successful'], $response->status());
        }
        return view('detail', ['data' => $data]);
    }
   
  
}
