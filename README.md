<p align="center"><img src="https://i.ibb.co/5kTngVj/news360-logo.png" width="400" alt="News360 Logo"></p>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### Api Resources

<a href="https://github.com/junn-mendoza/news360-api" alt="Api Repositories">Api News360 Repositories</a>

## The Home page 
<p align="center"><img src="https://i.ibb.co/C6SL6zw/home.jpg" alt="News360 Homepage"></p>

## The News page
<p align="center"><img src="https://i.ibb.co/ZWxsLGj/news1.jpg" alt="News360 Newspage"></p>

## Entertainment page
<p align="center"><img src="https://i.ibb.co/1LHJ9hX/entertainment.jpg" alt="News360 Entertainmentpage"></p>

## Detail page
<p align="center"><img src="https://i.ibb.co/ZhQXFdP/detail.jpg" alt="News360 Detailpage"></p>

## Accesing with API key 

```php
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
```
