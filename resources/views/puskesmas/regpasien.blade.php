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
                            
                            <h3 class="heading_b uk-margin-top">Daftar Pasien Rumah Sakit</h3>
                            
                        </div>
                                                    
                                                    
                                                    
                        <div class="md-card-content">
                            <!--start of modal box-->
                            <button class="md-btn md-btn-primary" data-uk-modal="{target:'#modal_header_footer'}">Tambah</button>
                            <!--end of modal-->
                            <div class="portlet box blue">
                            <div class="uk-overflow-container">    
                            <table class="uk-table uk-text-nowrap">
                                <thead>
                                <tr>
                                <th >ID</th>
                                <th style="text-align: left">Nama</th>
                                <th style="text-align: center">Alamat</th>
                                <th style="text-align: center">Aksi</th>
                                </tr>
                                </thead>
                                <tbody  >
                                    @if (count($result)>0)
                                    @foreach ($result as $rs)
                                    <tr class="odd gradeX">
                                        <td ><span style="display:none">{{ $idx++ }}</span> {{$rs->id_rm}}</td>
                                        <td>{{$rs->nama}}</td>
                                        <td>{{$rs->alamat}}<br>RT/RW:{{$rs->rt}}/{{$rs->rw}}
                                            <br>Kelurahan : {{$rs->kelurahan}}
                                            <br>Kecamatan : {{$rs->kecamatan}}
                                            <br>Kabupaten : {{$rs->kabupaten}}
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                                    @endforeach
                                    @else
                                    <tr>
                                    <td colspan="4" style="text-align: center">Data Pasien Kosong</td>
                                    </tr>
                                    @endif
                            </table>
                                <div class="pagination"> </div>
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