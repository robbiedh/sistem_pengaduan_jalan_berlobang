<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use YahooWeather;
use Location;

class GuestController extends Controller
{
    //
    public function home($id)
    {
        // $data_news=$this->request_news($id);
        $client = new Client();
        $res = $client->request('GET', 'https://newsapi.org/v2/top-headlines?country=id&apiKey=5751939ffffa41489c58d6f5408ac191');
        $results=json_decode($res->getBody()->getContents(),true);
        if($results['status']=='ok'){
            $data_news=$results['articles'];
       //    dd($results['articles']);
            return view('berita',['data_news'=>$data_news]);
        }else{
            abort(404);
        }
    
      // $data_cuaca=YahooWeather::Country('indonesia','Bandung');


      
    //  $position = Location::get();


        
    }
    public function request_news($kategori)
    {
        $client = new Client();
        $res = $client->request('GET', 'https://newsapi.org/v2/sources?language=en&apiKey=5751939ffffa41489c58d6f5408ac191');
        $results=json_decode($res->getBody()->getContents(),true);
       // dd($results['sources']);
     $res = array();
        foreach($results['sources'] as $key =>  $data){
        // if($results['sources'][]){
            if($kategori=='1'){
                if($data['category']=='general'){
                    $res[$key]=$data;
                }
            }if($kategori=='2'){
                if($data['category']=='business'){
                    $res[$key]=$data;
                }
            }
        if($kategori=='3'){
            if($data['category']=='entertainment'){
                $res[$key]=$data;
            }
        }if($kategori=='4'){
            if($data['category']=='health'){
                $res[$key]=$data;
            }
        }if($kategori=='5'){
            if($data['category']=='science'){
                $res[$key]=$data;
            }
        }if($kategori=='6'){
            if($data['category']=='technology'){
                $res[$key]=$data;
            }
        }
            
            
        }
        return $res;
      
    }

}
