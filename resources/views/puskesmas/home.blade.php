@extends('main')
@extends('puskesmas/menu')
@extends('puskesmas/sidebar')

@section ('container')

    <div id="page_content">
        <div id="page_content_inner">
			<div id="utama">
            <div class="uk-width-medium-1">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <h3 class="md-card-toolbar-heading-text">
                                Selamat datang tes
									
                            </h3>
                        </div>
                        <div class="md-card-content">
                            Anda masuk sebagai login PPK. Dalam login ini anda memiliki beberapa menu :
							<ul>
								<li><b>Kegiatan</b> <br>
									Menu untuk masuk ke Daftar Kegiatan. 
									Untuk melihat kegiatan-kegiatan dalam E-Budgeting. Disini bisa dibandingkan komponen dan nilai yang dianggarkan dengan nilai yang teralokasi dalam pekerjaan
									
								</li>
								<li><b>Pekerjaan</b> <br>
									Menu untuk masuk ke Daftar Pekerjaan. 
									Untuk melihat Pekerjaan-pekerjaan yang sudah Anda buat. Disini anda dapat mengubah nilai-nilai komponen penyusun Pekerjaan.
									
								</li>
								
							</ul>                
                        </div>
                    </div>
                </div>
			</div>
        </div>
    </div>
