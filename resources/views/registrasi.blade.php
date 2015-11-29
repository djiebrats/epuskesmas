@extends('main')
@section ('container')
   
    <div id="page_content" >
            <div id="utama">
            <div class="uk-width-medium-1">
                <div class="md-card">
                    <div class="md-card-content">
                <h3 class="heading_a">Formulir Registrasi Pasien Baru</h3>
                <form action="daftarbarupasien" method="POST">
                <div class="uk-grid" data-uk-grid-margin="">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="uk-width-medium-1-2">
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>NIK</label>
                                <input type="text" name="nik" id="nik"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>SIM</label>
                                <input type="text" name="sim" id="sim"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>Paspor</label>
                                <input type="text" name="paspor" id="paspor"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>nama</label>
                                <input type="text" name="nama" id="nama"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>Tanggal Lahir</label>
                                <input class="md-input" type="text" name="tanggal_lahir" data-uk-datepicker="{format:'DD-MM-YYYY'}">
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <label>Jenis Kelamin</label>
                            <div class="uk-width-medium-3-5">
                                <span class="icheck-inline">
                                    <div class="iradio_md">
                                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin"
                                               value="L" >
                                    </div>
                                    <label for="jk_1" class="inline-label">Laki-Laki</label>
                                </span>
                                <span class="icheck-inline">
                                    <div class="iradio_md">
                                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin"
                                               value="P" >
                                    </div>
                                    <label for="jk_2" class="inline-label">Perempuan</label>
                                </span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <label>Status</label>
                            <div class="uk-width-medium-3-5">
                                <span class="icheck-inline">
                                    <div class="iradio_md">
                                        <input type="radio" name="status" id="status"
                                               value="1" >
                                    </div>
                                    <label for="status1" class="inline-label">Menikah</label>
                                </span>
                                <span class="icheck-inline">
                                    <div class="iradio_md">
                                        <input type="radio" name="status" id="status2"
                                               value="2" >
                                    </div>
                                    <label for="status3" class="inline-label">Belum Menikah</label>
                                </span>
                                <span class="icheck-inline">
                                    <div class="iradio_md">
                                        <input type="radio" name="status" id="status3"
                                               value="3" >
                                    </div>
                                    <label for="status3" class="inline-label">Cerai</label>
                                </span>
                                <span class="icheck-inline">
                                    <div class="iradio_md">
                                        <input type="radio" name="status" id="status4"
                                               value="4" >
                                    </div>
                                    <label for="status4" class="inline-label">Duda/Janda</label>
                                </span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <label>Agama</label>
                            <div class="uk-width-medium-3-5">
                                <span class="icheck-inline">
                                    <div class="iradio_md">
                                        <input type="radio" name="agama" id="agama"
                                               value="islam" >
                                    </div>
                                    <label for="agama" class="inline-label">Islam</label>
                                </span>
                                <span class="icheck-inline">
                                    <div class="iradio_md">
                                        <input type="radio" name="agama" id="agama"
                                               value="Kristen" >
                                    </div>
                                    <label for="agama" class="inline-label">Kristen</label>
                                </span>
                                <span class="icheck-inline">
                                    <div class="iradio_md">
                                        <input type="radio" name="agama" id="agama"
                                               value="Katolik" >
                                    </div>
                                    <label for="agama" class="inline-label">Katolik</label>
                                </span>
                                <span class="icheck-inline">
                                    <div class="iradio_md">
                                        <input type="radio" name="agama" id="agama"
                                               value="Hindu" >
                                    </div>
                                    <label for="agama" class="inline-label">Hindu</label>
                                </span>
                                <span class="icheck-inline">
                                    <div class="iradio_md">
                                        <input type="radio" name="agama" id="agama"
                                               value="Budha" >
                                    </div>
                                    <label for="agama" class="inline-label">Budha</label>
                                </span>
                                <span class="icheck-inline">
                                    <div class="iradio_md">
                                        <input type="radio" name="agama" id="agama"
                                               value="Lainnya" >
                                    </div>
                                    <label for="agama" class="inline-label">Lainnya</label>
                                </span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>Kebangsaan</label>
                                <input type="text" name="kebangsaan" id="kebangsaan"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>Pekerjaan</label>
                                <input type="text" name="pekerjaan" id="pekerjaan"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>Alamat</label>
                                <input type="text" name="alamat" id="alamat"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>Kelurahan</label>
                                <input type="text" name="kelurahan" id="kelurahan"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>Kecamatan</label>
                                <input type="text" name="kecamatan" id="kecamatan"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>RT</label>
                                <input type="text" name="rt" id="rt"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>RW</label>
                                <input type="text" name="rw" id="rw"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>Kabupaten</label>
                                <input type="text" name="kabupaten" id="kabupaten"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>Nama Asuransi</label>
                                <input type="text" name="asuransi" id="asuransi"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="uk-width-medium-1-2">
                        <h3 class="heading_a">Diisi bila alamat tempat tinggal sekarang berbeda dengan yang tercantum di KTP / ID pasien :</h3>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>Alamat</label>
                                <input type="text" name="alamat2" id="alamat2"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>No Tlp</label>
                                <input type="text" name="no_tlp" id="no_tlp"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>No Tlp Rumah</label>
                                <input type="text" name="no_tlp2" id="no_tlp2"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>No Kantor</label>
                                <input type="text" name="no_kantor" id="no_kantor"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>HP</label>
                                <input type="text" name="hp" id="hp"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <br><br>
                        <h3 class="heading_a">Dalam Keadaan Darurat</h3>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>Nama</label>
                                <input type="text" name="e_nama" id="e_nama"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>Hubungan</label>
                                <input type="text" name="e_hubungan" id="e_hubungan"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>No Telepon</label>
                                <input type="text" name="e_no_tlp" id="e_no_tlp"
                                       class="md-input label-fixed ng-pristine ng-untouched ng-valid ng-isolate-scope md-input-processed" >
                                <span class="md-input-bar"></span>
                            </div>
                        </div>
                        <div class="uk-form-row">
                            <div class="md-input-wrapper">
                                <label>Alamat Lengkap</label>
                                <input type="text" name="e_alamat" id="e_alamat"
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