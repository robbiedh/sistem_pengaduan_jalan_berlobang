<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class UserController extends Controller
{
    public function simpan_pangaduan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/home')
                        ->withErrors($validator)
                        ->withInput();
        }
    }
    public function get_provinsi()
    {
    	header('Access-Control-Allow-Origin: *');
        $client = new Client();
    	    $res = $client->request('GET', 'http://dev.farizdotid.com/api/daerahindonesia/provinsi');
        $results=json_decode($res->getBody()->getContents(),true);
        if($results['message']=='Berhasil mendapatkan data provinsi'){
            echo " <option><--Silahkan Pilih Kota Anda--></option>";
            foreach($results['semuaprovinsi'] as $key => $data){
         
                echo "<option value='".$data['id']."' name='".$data['nama']."'>".$data['nama']."</option>";
            }
        }
       
    	
    }
    public function get_kota($id)
    {
        header('Access-Control-Allow-Origin: *');
        
        $client = new Client();
        $res = $client->request('GET', 'http://dev.farizdotid.com/api/daerahindonesia/provinsi/'.$id.'/kabupaten');
        $results=json_decode($res->getBody()->getContents(),true);
        if($results['message']=='Berhasil mengambil data kabupaten'){
            echo " <option><--Silahkan Pilih Kota Anda--></option>";
            foreach($results['daftar_kecamatan'] as $key => $data){
         
                echo "<option value='".$data['id']."' name='".$data['nama']."'>".$data['nama']."</option>";
            }
        }
    }
    public function get_kecamatan($id)
    {
    	header('Access-Control-Allow-Origin: *');
        $client = new Client();
        $res = $client->request('GET', 'http://dev.farizdotid.com/api/daerahindonesia/provinsi/kabupaten/'.$id.'/kecamatan');
        $results=json_decode($res->getBody()->getContents(),true);
       
        if($results['message']=='Berhasil mengambil data kecamatan'){
            echo " <option><--Silahkan Pilih Kota Anda--></option>";
            foreach($results['daftar_kecamatan'] as $key => $data){
         
                echo "<option value='".$data['id']."' name='".$data['nama']."'>".$data['nama']."</option>";
            }
        }
        }
        public function get_desa($id)
    {
    	header('Access-Control-Allow-Origin: *');
        $client = new Client();
        $res = $client->request('GET', 'http://dev.farizdotid.com/api/daerahindonesia/provinsi/kabupaten/kecamatan/'.$id.'/desa');
        $results=json_decode($res->getBody()->getContents(),true);
       
        if($results['message']=='Berhasil mengambil data desa'){
            echo " <option><--Silahkan Pilih Kota Anda--></option>";
            foreach($results['daftar_desa'] as $key => $data){
         
                echo "<option value='".$data['id']."' name='".$data['nama']."'>".$data['nama']."</option>";
            }
        }
        }
    }