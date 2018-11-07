<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Validator;
use App\Laporan;
use Auth;
use Illuminate\Support\Facades\Mail;

use App\Mail\EmailPemberitahuan;

class UserController extends Controller
{
    public function simpan_pangaduan(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'lat' => 'required',
            'long' => 'required',
            'current_possition' => 'required',
            'keterangan' => 'required',
            'foto' => 'required|max:2000|mimes:jpg,png,jpeg',
            'tingkat_kerusakan'=>'required',
        ]);

        if ($validator->fails()) {
            return redirect('/home')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $avatarName =Auth::user()->id.'_avatar'.time().'.'.request()->foto->getClientOriginalExtension();

            $request->foto->storeAs('avatars',$avatarName);

            $laporaon =new Laporan;
            $laporaon->id_user=Auth::user()->id;
            $laporaon->provinsi=$request->provinsi;
            $laporaon->kabupaten=$request->kabupaten;
            $laporaon->kecamatan=$request->kecamatan;
            $laporaon->desa=$request->desa;
            $laporaon->lat=$request->lat;
            $laporaon->long=$request->long;
            $laporaon->current_possition=$request->current_possition;
            $laporaon->keterangan=$request->keterangan;
            $laporaon->tingkat_kerusakan=$request->tingkat_kerusakan;
            $laporaon->foto=$avatarName;
            $laporaon->save();
            $data ='Terimakasih Sudah Melakukan pengaduan Jalan Berlubang';

            Mail::to(Auth::user()->email)->send(new EmailPemberitahuan($data));
            // dd($request->all());
            return redirect('/home')
            ->withErrors("Input Laporan Berhasil ")
            ->withInput();

        }

    }public function daftar_laporan()
    {
        $data_laporan=Laporan::where('id_user', Auth::user()->id)->get();
        
        return view('daftar_laporan',['data_laporan'=>$data_laporan]);
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

        public function test()
        {
            $data ='Terimakasih Sudah Melakukan pengaduan Jalan Berlubang';

            Mail::to('robby.dh596@gmail.com')->send(new EmailPemberitahuan($data));
        }
    }