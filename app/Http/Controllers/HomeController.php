<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\Exception as OWMException;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_news=$this->request_news();
        return view('home',['data_news'=>$data_news]);
    }


    public function request_news()
    {
        $client = new Client();
        $res = $client->request('GET', 'https://newsapi.org/v2/sources?apiKey=5751939ffffa41489c58d6f5408ac191');
        return  $res;
    }
}
