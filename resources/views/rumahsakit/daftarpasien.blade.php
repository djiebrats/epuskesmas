@extends('main')
@extends('rumahsakit/menu')
@extends('rumahsakit/sidebar')

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
                            <form action="daftarpasien" method="POST">
                            <div class="uk-grid" data-uk-grid-margin="">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                <div class="uk-width-medium-2-10">
                                    <div class="md-input-wrapper"><label >ID REKAM MEDIS</label>
                                        <input type="text" class="md-input ng-pristine ng-valid ng-isolate-scope md-input-processed ng-touched" 
                                               id="id_rm" name="id_rm" ng-model="filter.price" md-input=""><span class="md-input-bar"></span>
                                    </div>
                                </div>
                                <div class="uk-width-medium-2-10">
                                    <div class="md-input-wrapper"><label >Nama</label>
                                        <input type="text" class="md-input ng-pristine ng-valid ng-isolate-scope md-input-processed ng-touched" 
                                               id="nama" name="nama" ng-model="filter.price" md-input=""><span class="md-input-bar"></span>
                                    </div>
                                </div>
                                
                                <div class="uk-width-medium-2-10">
                                    <button type="submit" class="md-btn md-btn-primary"> Filter</button>
                                    
                                </div>
                            </div>
                                </form>
                            <a  href="{{URL::to('rumahsakit/registrasi')}}" >
                                <!--data-uk-modal="{target:'#modal_header_footer'}"-->
                                <button class="md-btn md-btn-primary" >Tambah</button>
                            </a>
                        </div>                            
                                                    
                                                    
            <div class="md-card-content">
                <div class="uk-grid" data-uk-grid-margin="">
                    <div class="uk-width-1-1 ng-binding">

                        <div class="uk-overflow-container">
                            <table class="uk-table uk-table-nowrap">
                                <thead><!--start of modal box-->
                                    <tr>
                                    <th >No Rekam Medis</th>
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

                                    </td>
                                    <td>
                                        @if(!$rs->id_rm)
                                        <a title="Verifikasi Data" data-uk-modal="{target:'#modal_header_rekammedis'}"
                                           href="{{URL::to('rumahsakit/verifpasien/'.$rs->id)}}">
                                                            <i class="md-icon material-icons md-24">note_add</i>
                                        </a>
                                        @endif
                                    </td>
                                </tr>
                                </tbody>
                                    @endforeach
                                    @else
                                    <tr>
                                    <td colspan="4" style="text-align: center">Data Pasien tidak ditemukan</td>
                                    </tr>
                                    @endif
                            </table>
                            <tfoot>
                                <tr>
                                    <td colspan="4">{!! str_replace('/?', '?',$result->render()) !!}</td>
                                </tr>
                            </tfoot>
                        </div>
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


<div class="uk-modal" id="modal_header_rekammedis">
    <div class="uk-modal-dialog">
        <div class="uk-modal-header">
        <h3 class="uk-modal-title">Masukkan No Rekam Medis </h3>
        </div>
        <div class="uk-width-medium-1-1">
                <label>ID Rekam Medis</label>
                <input type="text" class="md-input" id="id_rm" />
        </div>
        
    </div>
</div>