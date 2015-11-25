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
