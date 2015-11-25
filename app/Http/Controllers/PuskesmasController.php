<?php 
namespace App\Http\Controllers;
//session_start();
use Input;
use Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Session;
class PuskesmasController extends Controller {
  protected function regpasien(){
    $rowsPerPage=50;
    $idx=1;                
    $que=DB::table('pasien')
        ->select('id_rm','nama','alamat','kelurahan','kecamatan','rt','rw','kabupaten');
    $que=$que->paginate($rowsPerPage); 
            
     return view('puskesmas/regpasien',[ 'result'=>$que,'idx'=>$idx]);
    }
    
    protected function verifpasien(){
      $data = Input::all(); 
      //var_dump($data);
                $result = DB::table('pasien')   
                        ->addSelect('id_rm','nama','nik','alamat')                    
                        ->where('id_rm',$data['id_rm'])
                        ->get();
                if($result)
                {     
                      
                    return view('puskesmas/verifpasien');
                }
                else
                {
                      return view('puskesmas/verifgagal');
                }
                //return $result;
                //die;
            }  
    //}
    
    
}
