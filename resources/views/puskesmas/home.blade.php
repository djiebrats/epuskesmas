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
                            <h3 class="md-card-toolbar-heading-text">
                                Selamat datang <b>{{session('nama')}}</b>
									
                            </h3>
                        </div>
                        <div class="md-card-content">
                            Anda masuk sebagai login Puskesmas.
                            Ini adalah Applikasi Daftar Online Pasien Rujukan (ADOPR) yang memberikan fasilitas kepada puskesmas untuk membuat rujukan
                            secara online. <br>
                            Dalam login ini anda memiliki beberapa menu :
                        <ul>
                                <li><b>Setting Puskesmas</b> <br>
                                        <!--Menu untuk mensetting informasi mengenai data perpustakaan-->
                                </li>
<!--                                <li><b>Data Dokter</b> <br>
                                        Menu untuk melihat, menambah, merubah data dokter yang berada di puskesmas
                                </li>
                                <li><b>Data Pasien</b> <br>
                                        Menu untuk melihat, menambah, merubah data pasien pada puskesmas
                                </li>
                                <li><b>Data Rekam Medis</b> <br>
                                        Menu untuk melihat, menambah data rekam medis berdasarkan data pasien. terdapat menu pencarian pasien berdasarkan nama atau id pasien
                                </li>-->
                                <li><b>Rujukan Ke Rumah Sakit</b> <br>
                                        Menu untuk Melakukan rujukan ke rumah sakit terhadap seorang pasien. 
                                </li>

                        </ul>                
                        </div>
                    </div>
                </div>
			</div>
        </div>
    </div>
