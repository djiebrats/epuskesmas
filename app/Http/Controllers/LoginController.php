<?php

namespace App\Http\Controllers;

use Input;
use Request;
use DB;
//use Builder;
//use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Http\Controllers\Controller;
class LoginController extends Controller
{
    //
    public function index(){        
        //session()->forget('id_user');
        return view('login');
    }
    
    public function dologin() {
    if(Request::ajax()) {
      $data = Input::all();            
            $result = DB::table('users')
                    ->where('username',$data['u'])
                    ->where('password',md5($data['p']))
                    ->value('type');
            if ($result){
                $result = DB::table('users')   
                        ->addSelect('id','nama','username','type','status_user','status_login')                    
                        ->where('username',$data['u'])
                        ->where('password',md5($data['p']))
                        ->get();
                if($result[0]->type)
                {     
                      session(['user_id' => $result[0]->id]);
                      session(['user_name'=> $data['u']]); 
                      session(['nama' => $result[0]->nama]);
                      session(['type' => $result[0]->type]);
                      //$data=Session::all();
                      //Session::save();
                      //print_r($data);
                      if($result[0]->type==9){ $type='administrator'; $resultSent = "9|".$type; }
                      if($result[0]->type==1){ $type='puskesmas'; $resultSent = "1|".$type; }
                      if($result[0]->type==2){ $type='rumahsakit'; $resultSent = "2|".$type; }
 //print_r($resultSent);exit;
                }
                else
                {
                      $resultSent = "0";
                }
                return $resultSent;
                die;
            }  
    }
    }
    public function registrasi(){        
            
        return view('registrasi');
    }
    
    public function daftarbarupasien(){        
            $data = Input::all();
            //dd($data);exit;
            DB::table('pasien')
                ->insert([
                    'nik' =>$data['nik'],
                    'sim'=>$data['sim'],
                    'paspor' =>$data['paspor'],
                    'nama' =>$data['nama'],
                    'tempat_lahir' =>$data['tempat_lahir'],
                    'tanggal_lahir' =>$data['tanggal_lahir'],
                    'jenis_kelamin' =>$data['jenis_kelamin'],
                    'status' =>$data['status'],
                    'agama' =>$data['agama'],
                    'kebangsaan' =>$data['kebangsaan'],
                    'pekerjaan' =>$data['pekerjaan'],
                    'alamat' =>$data['alamat'],
                    'kelurahan' =>$data['kelurahan'],
                    'kecamatan' =>$data['kecamatan'],
                    'rt' =>$data['rt'],
                    'rw' =>$data['rw'],
                    'kabupaten' =>$data['kabupaten'],
                    'asuransi' =>$data['asuransi'],
                    'alamat2' =>$data['alamat2'],
                    'no_tlp' =>$data['no_tlp'],
                    'no_tlp2' =>$data['no_tlp2'],
                    'no_kantor' =>$data['no_kantor'],
                    'hp' =>$data['hp'],
                    'e_nama' =>$data['e_nama'],
                    'e_hubungan' =>$data['e_hubungan'],
                    'e_no_tlp' =>$data['e_no_tlp'],
                    'e_alamat' =>$data['e_alamat'],]);
            $nama=$data['nama'];
            $data[]="";
        return view('regsukses',['nama_register'=>$nama]);
    }
    public function logout(){        
//        $que=DB::transaction(function(){              
//                DB::table('user_login')
//                    ->where('id_user',session('id_user'))
//                    ->update(array('status_login' => 'f'));
//            });
        session()->forget('user_id');
        session()->flush();
        return redirect('/');
    }
}
