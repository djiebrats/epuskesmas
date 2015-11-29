@extends('main')
@extends('puskesmas/menu')
@extends('puskesmas/sidebar')

@section ('container')

    <div id="page_content" >
        <div id="page_content_inner">
			<div id="utama">
            <div class="uk-width-medium-1">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <h3 class="heading_b uk-margin-top">Verifikasi berhasil Berhasil</h3>
                        </div>
                    <div class="md-card-content">
                        <div class="uk-width-medium-1-2">
                            <form action="makerujukan" method="POST">
<!--                                <input type="hidden" name="_method" value="PUT">-->
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="user_id" value="{{session('user_id')}}">
                                <input type="hidden" name="user_name" value="{{session('nama')}}">
                                <input type="hidden" name="id_rekammedis" value="{{$result->id_rm}}">
                            <div class="md-input-wrapper md-input-filled md-input-wrapper-disabled">
                                <label>ID Rekam Medis</label>
                                <input type="text" class="md-input" name="id_rm" value="{{$result->id_rm}}" disabled="">
                                <span class="md-input-bar"></span>
                            </div>
                            <div class="md-input-wrapper md-input-filled">
                                <label>Nama</label>
                                <input type="text" class="md-input" name="nama_pasien" value="{{$result->nama}}">
                                <span class="md-input-bar"></span>
                            </div>
                            <div class="md-input-wrapper md-input-filled">
                                <label>Alamat</label>
                                <input type="text" class="md-input" name="alamat_pasien" value="{{$result->alamat}}">
                                <span class="md-input-bar"></span>
                            </div>
                            <div class="md-input-wrapper md-input-filled">
                                <label>RT</label>
                                <input type="text" class="md-input" name="rt_pasien" value="{{$result->rt}}">
                                <span class="md-input-bar"></span>
                            </div>
                            <div class="md-input-wrapper md-input-filled">
                                <label>RW</label>
                                <input type="text" class="md-input" name="rw_pasien" value="{{$result->rw}}">
                                <span class="md-input-bar"></span>
                            </div>
                            <div class="md-input-wrapper md-input-filled">
                                <label>Kelurahan</label>
                                <input type="text" class="md-input"  name="kel_pasien" value="{{$result->kelurahan}}">
                                <span class="md-input-bar"></span>
                            </div>
                            <div class="md-input-wrapper md-input-filled">
                                <label>Kecamatan</label>
                                <input type="text" class="md-input" name="kec_pasien" value="{{$result->kecamatan}}">
                                <span class="md-input-bar"></span>
                            </div>
                            <div class="uk-input-group">
                                <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                                <div class="md-input-wrapper">
                                    <label for="uk_dp_1">Tanggal Rujukan</label>
                                    <input class="md-input" type="text" name="tgl_rujukan" data-uk-datepicker="{format:'DD-MM-YYYY'}">
                                    <span class="md-input-bar"></span></div>
                                        
                            </div>
                            <div class="md-card-content">
                            <h3 class="heading_a">Poli</h3>
                            <div class="uk-grid" data-uk-grid-margin="">
                                <div class="uk-width-medium-3-9">
                                    <span class="icheck-inline">
                                        <div class="iradio_md">
                                            <input type="radio" name="poli" value="syaraf"  >
                                        </div>
                                        <label  class="">Syaraf</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <div class="iradio_md">
                                            <input type="radio" name="poli" value="anak"  >
                                        </div>
                                        <label  class="">Anak</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <div class="iradio_md">
                                            <input type="radio" name="poli" value="bedah"  >
                                        </div>
                                        <label  class="">Bedah</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <div class="iradio_md">
                                            <input type="radio" name="poli" value="bedah_syaraf"  >
                                        </div>
                                        <label  class="">Bedah Syaraf</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <div class="iradio_md">
                                            <input type="radio" name="poli" value="dalam"  >
                                        </div>
                                        <label  class="">Dalam</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <div class="iradio_md">
                                            <input type="radio" name="poli" value="gizi"  >
                                        </div>
                                        <label  class="">Gizi</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <div class="iradio_md">
                                            <input type="radio" name="poli" value="jantung"  >
                                        </div>
                                        <label  class="">Jantung</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <div class="iradio_md">
                                            <input type="radio" name="poli" value="kulit_kelamin"  >
                                        </div>
                                        <label  class="">Kulit dan Kelamin</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <div class="iradio_md">
                                            <input type="radio" name="poli" value="mata"  >
                                        </div>
                                        <label  class="">Mata</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <div class="iradio_md">
                                            <input type="radio" name="poli" value="obsgyn"  >
                                        </div>
                                        <label  class="">Obsgyn</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <div class="iradio_md">
                                            <input type="radio" name="poli" value="ortopedi"  >
                                        </div>
                                        <label  class="">Ortopedi</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <div class="iradio_md">
                                            <input type="radio" name="poli" value="paru"  >
                                        </div>
                                        <label  class="">Paru</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <div class="iradio_md">
                                            <input type="radio" name="poli" value="psikiatri"  >
                                        </div>
                                        <label  class="">Psikiatri</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <div class="iradio_md">
                                            <input type="radio" name="poli" value="tht"  >
                                        </div>
                                        <label  class="">THT</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <div class="iradio_md">
                                            <input type="radio" name="poli" value="urologi"  >
                                        </div>
                                        <label  class="">urologi</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <div class="iradio_md">
                                            <input type="radio" name="poli" value="vct-cst"  >
                                        </div>
                                        <label  class="">VCT-CST</label>
                                    </span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid">
                            <div class="uk-width-1-2">
                                <button type="submit" class="md-btn md-btn-primary"> Kirim Rujukan</button>
                            </div>
                        </div>
                            </form>
                        </div>
                    </div>
                </div>
			</div>
        </div>
    </div>
