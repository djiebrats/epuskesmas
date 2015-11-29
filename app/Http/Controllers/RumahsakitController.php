<?php 
namespace App\Http\Controllers;
//session_start();
use Input;
use Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Pagination\LengthAwarePaginator;
use Session;
class RumahsakitController extends Controller {
    protected function registrasi(){
        return view('rumahsakit/registrasi');
    }
    protected function verifpasien($id){
        $que=DB::table('pasien')
            ->addselect('id','id_rm','nik','nama','alamat','kelurahan','kecamatan','rt','rw','kabupaten')
            ->where('id_rm',$id)
            ->first();
        return view('rumahsakit/verifpasien',['result'=>$que]);
    }
    public function daftarbarupasien(){        
            $data = Input::all();
            //dd($data);exit;
            DB::table('pasien')
                ->insert([
                    'id_rm'=>$data['id_rm'],
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
    protected function rujukan($aksi,$id){
        $idx=1;  
        
        if ($aksi == 'layanan'){
            $que=DB::table('rujukan')
            ->where('id', $id);
            $que=$que->update(['status_layanan' => 1]);
        }
        if ($aksi=='rekammedik'){
            $que=DB::table('rujukan')
            ->where('id', $id);
            $que=$que->update(['status_rm' => 1]);
        }
        if ($aksi=='antrian'){
            $que=DB::table('rujukan')
            ->where('id', $id);
            $que=$que->update(['status_antrian' => 1]);
        }
        if ($aksi=='hapus'){
            $que=DB::table('rujukan')
                ->where('id', $id);
            $que=$que->delete();
        }
            
        return $this->daftarrujukan();
        //return view('rumahsakit/daftarrujukan',[ 'result'=>$que,'idx'=>$idx]);
     
    }
    
    protected function daftarpasien(){
    $rowsPerPage=50;
    $data = Input::all();
    $f_id_rm="";
    $f_nama="";
    $idx=1;                
    $que=DB::table('pasien')
        ->select('id','id_rm','nik','nama','alamat','kelurahan','kecamatan','rt','rw','kabupaten');
    
    if (!empty($data['id_rm'])){
        $f_id_rm=$data['id_rm'];
        $que=$que->where('id_rm','=',$f_id_rm);
    }
    if (!empty($data['nama'])){
        $f_nama=$data['nama'];
        $que=$que->where('nama','like','%'.$f_nama.'%');
    }
    
    $que=$que->paginate($rowsPerPage); 
            
    return view('rumahsakit/daftarpasien',[ 'result'=>$que,'idx'=>$idx]);
    }
    protected function daftarrujukan(){
        //print_r('te');//exit;
        $data = Input::all();
        $f_id_rujukan="";
        $f_id_rm="";
        $f_tgl="";
        $rowsPerPage=50;
        $idx=1;                
        $que=DB::table('rujukan')
            ->select('id','user_id','username','id_rm','nama_pasien','alamat_pasien','rt','rw','kelurahan','kecamatan','tanggal','poli','status_layanan','status_rm','status_antrian');
            
        if (!empty($data['id_rujukan'])){
            $f_id_rujukan=$data['id_rujukan'];
            $que=$que->where('id','=',$f_id_rujukan);
        }
        if (!empty($data['id_rm'])){
            $f_id_rm=$data['id_rm'];
            $que=$que->where('id_rm','=',$f_id_rm);
        }
        if (!empty($data['tgl_rujukan'])){
            $f_tgl=date("Y-m-d", strtotime($data['tgl_rujukan']));
            //dd(date("Y-m-d", strtotime($f_tgl)));exit;
            $que=$que->where('tanggal','=',$f_tgl.'%');
        }
//            $que=$que->where('status_hapus','<>','1');
            $que=$que->where('status_layanan','is','null');
            $que=$que->orwhere('status_rm','is','null');
            $que=$que->orwhere('status_antrian','is','null');
            
        $que=$que->paginate($rowsPerPage); 

        return view('rumahsakit/daftarrujukan',[ 'result'=>$que,'idx'=>$idx]);
    }
   
    
    
    
}
