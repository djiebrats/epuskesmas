@extends('main')
@extends('administrator/menu')
@extends('administrator/sidebar')

@section ('container')

    <div id="page_content" >
        <div id="page_content_inner">
			<div id="utama">
            <div class="uk-width-medium-1">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <h3 class="md-card-toolbar-heading-text">
                                Selamat datang {{session('nama')}}
									
                            </h3>
                        </div>
                        <div class="md-card-content">
                            Anda masuk sebagai login Rumah Sakit. Dalam login ini anda memiliki beberapa menu :
                        <ul>
                                <li><b>Data Pasien</b> <br>
                                        Menu untuk melihat, menambah, merubah data pasien pada Rumah Sakit
                                </li>
                                <li><b>Data Rekam Medis</b> <br>
                                        Menu untuk melihat, menambah data rekam medis berdasarkan data pasien. terdapat menu pencarian pasien berdasarkan nama atau id pasien
                                </li>
                                <li><b>Data Rujukan yang Masuk</b> <br>
                                        Menu untuk Melakukan rujukan ke rumah sakit terhadap seorang pasien. 
                                </li>

                        </ul>                
                        </div>
                    </div>
                </div>
			</div>
        </div>
    </div>
