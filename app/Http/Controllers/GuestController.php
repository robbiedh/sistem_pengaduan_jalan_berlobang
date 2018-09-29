<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use YahooWeather;
use Location;

class GuestController extends Controller
{
    //
    public function home()
    {
        $data_news=$this->request_news();
       // dd($data_news);
       $data_cuaca=YahooWeather::Country('egypt','ar');
      
       $position = Location::get();
      

        return view('welcome',['data_news'=>$data_news, 'data_cuaca'=>$data_cuaca]);
    }
    public function request_news()
    {
        $client = new Client();
        $res = $client->request('GET', 'https://newsapi.org/v2/top-headlines?country=id&apiKey=5751939ffffa41489c58d6f5408ac191');
        $results=json_decode($res->getBody()->getContents(),true);
        return  $results['articles'];
    }

}
