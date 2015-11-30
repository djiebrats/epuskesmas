@extends('main')
@extends('rumahsakit/menu')
@extends('rumahsakit/sidebar')

@section ('container')
   
    <div id="page_content" >
        <div id="page_content_inner">
            <div id="utama">
            <div class="uk-width-medium-1">
                <div class="md-card">
                    <div class="md-card-content">
                <h3 class="heading_a">Formulir Registrasi Pasien Baru</h3>
                <form action={{URL::to('rumahsakit/saverm')}} method="POST">
                <div class="uk-grid" data-uk-grid-margin="">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id" value="{{$result->id}}">
                    <div class="uk-width-medium-1-2">
                        <div class="uk-form-row">
                            <div class="md-input-wrapper ">
                                <label>No Rekam Medik</label>
                                <input type="text" name="id_rm" id="id_rm" value="{{$result->id_rm}}" Maxlength="6"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled">
                                <label>NIK</label>
                                <input type="text" name="nik" id="nik" value="{{$result->nik}}"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled" >
                                <label>SIM</label>
                                <input type="text" name="sim" id="sim" value="{{$result->sim}}"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled" >
                                <label>Paspor</label>
                                <input type="text" name="paspor" id="paspor" value="{{$result->paspor}}"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled" >
                                <label>nama</label>
                                <input type="text" name="nama" id="nama" value="{{$result->nama}}"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled" >
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{$result->tempat_lahir}}"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled" >
                                <label>Tanggal Lahir</label>
                                <input class="md-input" type="text" name="tanggal_lahir"  value="{{$result->tanggal_lahir}}" data-uk-datepicker="{format:'DD-MM-YYYY'}">
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <label>Jenis Kelamin</label>
                            <div class="uk-width-medium-3-5">
                                <table border='0'>
                                    <tr>
                                        <td>
                                            @if($result->jenis_kelamin=='L')
                                            <span class="icheck-inline">
                                            <div class="iradio_md">
                                                <input type="radio" name="jenis_kelamin" id="jenis_kelamin"  checked
                                                       value="L" >
                                            </div>
                                            <label for="jk_1" class="inline-label">Laki-Laki</label>
                                            </span>
                                            @else
                                            <span class="icheck-inline">
                                            <div class="iradio_md">
                                                <input type="radio" name="jenis_kelamin" id="jenis_kelamin"  
                                                       value="L" >
                                            </div>
                                            <label for="jk_1" class="inline-label">Laki-Laki</label>
                                            </span>
                                            
                                            @endif
                                        </td>
                                        <td>
                                            @if($result->jenis_kelamin=='P')
                                            <span class="icheck-inline">
                                                <div class="iradio_md">
                                                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" checked
                                                           value="P" >
                                                </div>
                                                <label for="jk_2" class="inline-label">Perempuan</label>
                                            </span>
                                            @else
                                            <span class="icheck-inline">
                                                <div class="iradio_md">
                                                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin"
                                                           value="P" >
                                                </div>
                                                <label for="jk_2" class="inline-label">Perempuan</label>
                                            </span>
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <label>Status</label>
                            <div class="uk-width-medium-3-5">
                                <table border='0'>
                                    <tr>
                                        <td>
                                            <span class="icheck-inline">
                                                <div class="iradio_md">
                                                    <input type="radio" name="status" id="status" <?php if($result->status == '1') { echo 'checked';}?>
                                                           value="1" >
                                                </div>
                                                <label for="status1" class="inline-label">Menikah</label>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="icheck-inline">
                                                <div class="iradio_md">
                                                    <input type="radio" name="status" id="status2" <?php if($result->status == '2') { echo 'checked';}?>
                                                           value="2" >
                                                </div>
                                                <label for="status3" class="inline-label">Belum Menikah</label>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="icheck-inline">
                                                <div class="iradio_md">
                                                    <input type="radio" name="status" id="status3" <?php if($result->status == '3') { echo 'checked';}?>
                                                           value="3" >
                                                </div>
                                                <label for="status3" class="inline-label">Cerai</label>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="icheck-inline">
                                                <div class="iradio_md">
                                                    <input type="radio" name="status" id="status4" <?php if($result->status == '4') { echo 'checked';}?>
                                                           value="4" >
                                                </div>
                                                <label for="status4" class="inline-label">Duda/Janda</label>
                                            </span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <label>Agama</label>
                            <div class="uk-width-medium-3-5">
                                <table border='0'>
                                    <tr>
                                        <td>
                                            <span class="icheck-inline">
                                                <div class="iradio_md">
                                                    <input type="radio" name="agama" id="agama" <?php if($result->agama == 'islam') { echo 'checked';}?>
                                                           value="islam" >
                                                </div>
                                                <label for="agama" class="inline-label">Islam</label>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="icheck-inline">
                                                <div class="iradio_md">
                                                    <input type="radio" name="agama" id="agama" <?php if($result->agama == 'Kristen') { echo 'checked';}?>
                                                           value="Kristen" >
                                                </div>
                                                <label for="agama" class="inline-label">Kristen</label>
                                            </span>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="icheck-inline">
                                                <div class="iradio_md">
                                                    <input type="radio" name="agama" id="agama" <?php if($result->agama == 'Hindu') { echo 'checked';}?>
                                                           value="Hindu" >
                                                </div>
                                                <label for="agama" class="inline-label">Hindu</label>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="icheck-inline">
                                                <div class="iradio_md">
                                                    <input type="radio" name="agama" id="agama" <?php if($result->agama == 'Budha') { echo 'checked';}?>
                                                           value="Budha" >
                                                </div>
                                                <label for="agama" class="inline-label">Budha</label>
                                            </span>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="icheck-inline">
                                                <div class="iradio_md">
                                                    <input type="radio" name="agama" id="agama"
                                                           value="Katolik" >
                                                </div>
                                                <label for="agama" class="inline-label">Katolik</label>
                                            </span>
                                        </td>
                                        <td>
                                            
                                            <span class="icheck-inline">
                                                <div class="iradio_md">
                                                    <input type="radio" name="agama" id="agama" <?php if($result->agama == 'Lainnya') { echo 'checked';}?>
                                                           value="Lainnya" >
                                                </div>
                                                <label for="agama" class="inline-label">Lainnya</label>
                                            </span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled" >
                                <label>Kebangsaan</label>
                                <input type="text" name="kebangsaan" id="kebangsaan" value="{{$result->kebangsaan}}"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled" >
                                <label>Pekerjaan</label>
                                <input type="text" name="pekerjaan" id="pekerjaan"  value="{{$result->pekerjaan}}"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled" >
                                <label>Alamat</label>
                                <input type="text" name="alamat" id="alamat" value="{{$result->alamat}}"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled">
                                <label>Kelurahan</label>
                                <input type="text" name="kelurahan" id="kelurahan" value="{{$result->kelurahan}}"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled">
                                <label>Kecamatan</label>
                                <input type="text" name="kecamatan" id="kecamatan" value="{{$result->kecamatan}}"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled">
                                <label>RT</label>
                                <input type="text" name="rt" id="rt" value="{{$result->rt}}"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled">
                                <label>RW</label>
                                <input type="text" name="rw" id="rw" value="{{$result->rw}}"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled">
                                <label>Kabupaten</label>
                                <input type="text" name="kabupaten" id="kabupaten" value="{{$result->kabupaten}}"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled">
                                <label>Nama Asuransi</label>
                                <input type="text" name="asuransi" id="asuransi" value="{{$result->asuransi}}"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="uk-width-medium-1-2">
                        <h3 class="heading_a">Diisi bila alamat tempat tinggal sekarang berbeda dengan yang tercantum di KTP / ID pasien :</h3>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled">
                                <label>Alamat</label>
                                <input type="text" name="alamat2" id="alamat2" value="{{$result->alamat2}}"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled">
                                <label>No Tlp</label>
                                <input type="text" name="no_tlp" id="no_tlp" value="{{$result->no_tlp}}"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled">
                                <label>No Tlp Rumah</label>
                                <input type="text" name="no_tlp2" id="no_tlp2" value="{{$result->no_tlp2}}"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled">
                                <label>No Kantor</label>
                                <input type="text" name="no_kantor" id="no_kantor" value="{{$result->no_kantor}}"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled">
                                <label>HP</label>
                                <input type="text" name="hp" id="hp" value="{{$result->hp}}"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <br><br>
                        <h3 class="heading_a">Dalam Keadaan Darurat</h3>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled">
                                <label>Nama</label>
                                <input type="text" name="e_nama" id="e_nama" value="{{$result->e_nama}}"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled">
                                <label>Hubungan</label>
                                <input type="text" name="e_hubungan" id="e_hubungan" value="{{$result->e_hubungan}}"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled">
                                <label>No Telepon</label>
                                <input type="text" name="e_no_tlp" id="e_no_tlp" value="{{$result->e_no_tlp}}"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper md-input-filled">
                                <label>Alamat Lengkap</label>
                                <input type="text" name="e_alamat" id="e_alamat" value="{{$result->e_alamat}}"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="uk-width-medium-2-10">
                                        <button type="submit" class="md-btn md-btn-primary"> Daftar</button>
                            </div>
                        </div>
                    </div>
                </div>
                    </form>
                
            </div>


                 </div>                            
                                                    
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

<!--popup-->
<div class="uk-modal" id="modal_header_footer">
    <div class="uk-modal-dialog">
        <div class="uk-modal-header">
        <h3 class="uk-modal-title">Pendaftaran Pasien Baru</h3>
        </div>
        <div class="uk-width-medium-1-1">
                <label>ID Rekam Medis</label>
                <input type="text" class="md-input" id="id_rm" />
        </div>
        <div class="uk-width-medium-1-1">
                <label>NIK</label>
                <input type="text" class="md-input" id="nik" />
        </div>
        <div class="uk-width-medium-1-1">
                <label>SIM</label>
                <input type="text" class="md-input" id="sim" />
        </div>
        <div class="uk-width-medium-1-1">
                <label>Pasport</label>
                <input type="text" class="md-input" id="paspor" />
        </div>
        <div class="uk-width-medium-1-1">
                <label>Nama</label>
                <input type="text" class="md-input" id="nama" />
        </div>
        <div class="uk-width-medium-1-1">
                <label>Tempat Lahir</label>
                <input type="text" class="md-input" id="tempat_lahir" />
        </div>
        <div class="uk-width-medium-1-1">
                <label>Tanggal Lahir</label>
                <input type="text" class="md-input" id="tanggal_lahir" />
        </div>
        <div class="uk-width-medium-1-1">
                <label>Jenis Kelamin</label>
                <input type="radio" class="md-list" checked name="sex" id="jenis_kelamin">Laki-laki
                <input type="radio"  class="md-list" name="sex" id="jenis_kelamin">Perempuan
        </div>
    </div>
</div>