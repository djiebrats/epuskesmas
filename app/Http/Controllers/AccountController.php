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
        if($value){
            $que = DB::table('users')->where('id',$value)->value('username');
            return view($folder.'.home',['nama_user'=>$que]);
        }
        else{
            session()->forget('user_id');
            session()->flush();
            return redirect('/');
        }
    }
}
