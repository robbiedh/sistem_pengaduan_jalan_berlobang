<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Validator;
use App\Laporan;
class Usercontroller extends Controller
{
      public function login(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('nApp')->accessToken;
            return response()->json(['success' => $success], $this->successStatus);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }
     public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);            
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('nApp')->accessToken;
        $success['name'] =  $user->name;

        return response()->json(['success'=>$success], $this->successStatus);
    }

    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this->successStatus);
    }

    public function get_data()
    {
    	$temp=Laporan::all();
    	$data_laporan=array();
    	// dd($temp);
    	foreach ($temp as $key => $data) {
    		$data_laporan[$key]['provinsi']=$data->provinsi;
    		$data_laporan[$key]['kabupaten']=$data->kabupaten;
    		$data_laporan[$key]['kecamatan']=$data->kecamatan;
    		$data_laporan[$key]['desa']=$data->desa;
    		$data_laporan[$key]['lat']=$data->lat;
    		$data_laporan[$key]['long']=$data->long;
    		$data_laporan[$key]['current_possition']=$data->current_possition;
    		$data_laporan[$key]['tingkat_kerusakan']=$data->tingkat_kerusakan;
    		$data_laporan[$key]['keterangan']=$data->keterangan;
    		$data_laporan[$key]['foto']=$data->foto;
    		$data_laporan[$key]['created_at']=$data->created_at;
    		
    	}

    	      return response()->json(['msg'=>'success', 'data_laporan'=>$data_laporan]);
  
    }


}
