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
                            <h3 class="heading_b uk-margin-top">Verif Berhasil</h3>
                        </div>
                        <div class="md-card-content">
                           Masukkan nomor rekam medis dari pasien yang akan anda rujuk ke rumah sakit. lalu silahkan tekan verifikasi 
                           
                           <div class="login_page">
                                 <br>       
                                <form action='verifpasien' method='post' id='myform'>
                                    <div class="uk-form-row">
                                    <label for="id_rm">No Rekam Medis</label>
                                    <input class="md-input uk-width-medium-1-1" Maxlength="7"  type="text" id="id_rm"  />
                                    </div>
                                    
                                    <div class="uk-margin-medium-top">
                                    <button   class="md-btn md-btn-primary md-btn-block md-btn-large uk-width-medium-1-1" id="btn_verif" type="submit">Verifikasi Data</button>
                                    </div>
                                    <br>
                                    <div id="pesan_error" style="color: red"></div>
                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                </form>
                        </div>
                    </div>
                </div>
			</div>
        </div>
    </div>
