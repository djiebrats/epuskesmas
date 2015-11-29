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
                ->addSelect('id_rm','nama','nik','alamat','rt','rw','kelurahan','kecamatan','kabupaten')                    
                ->where('id_rm',$data['id_rm'])
                ->first();
        if($result)
        {     

            return view('puskesmas/verifpasien',['result'=>$result]);
        }
        else
        {
              return view('puskesmas/verifgagal');
        }
        //return $result;
        //die;
    }  
    
    protected function makerujukan(){
        $data = Input::all();
        DB::table('rujukan')
                ->insert([
                    'user_id'=>$data['user_id'],
                    'username'=>$data['user_name'],
                    'id_rm'=>$data['id_rekammedis'],
                    'nama_pasien'=>$data['nama_pasien'],
                    'alamat_pasien'=>$data['alamat_pasien'],
                    'rt'=>$data['rt_pasien'],
                    'rw'=>$data['rw_pasien'],
                    'kelurahan'=>$data['kel_pasien'],
                    'kecamatan'=>$data['kec_pasien'],
                    'tanggal'=>date("Y-m-d", strtotime($data['tgl_rujukan'])),
                    'poli'=>$data['poli'],]);
     // dd($data);
      $result = DB::table('rujukan')   
                ->addSelect('id','username','id_rm','user_id','nama_pasien','alamat_pasien','rt','rw','kelurahan','kecamatan','tanggal','poli')                    
                ->where('user_id',$data['user_id'])
                ->where('id_rm',$data['id_rekammedis'])
                ->where('tanggal',date("Y-m-d", strtotime($data['tgl_rujukan'])))
                ->first();
      
        return view('puskesmas/rujukansukses',['result'=>$result]);
    }
    
}
