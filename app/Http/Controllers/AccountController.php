<?php 
namespace App\Http\Controllers;
//session_start();
use Input;
use Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Session;
class AccountController extends Controller {
  protected function validasiUser($folder){       
        $value = session('user_id');     
        //print_r($value.' '.$folder);exit;
        if($value){
            $que = DB::table('users')
                    ->where('id',$value)
                    ->where('username',session('user_name'))
                    ->value('username');
            return view($folder.'.home',['username'=>$que]);
        }
        else{
            session()->forget('user_id');
            session()->flush();
            return redirect('/');
        }
    }
}
