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
                            
                            <h3 class="heading_b uk-margin-top">Daftar Rujukan ke Rumah Sakit</h3>
                            
                        </div>
                        
                        <div class="md-card-content">
                            <form action="daftarrujukan" method="POST">
                            <div class="uk-grid" data-uk-grid-margin="">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="uk-width-medium-2-10">
                                    <div class="md-input-wrapper"><label >ID RUJUKAN</label>
                                        <input type="text" class="md-input ng-pristine ng-valid ng-isolate-scope md-input-processed ng-touched" 
                                               id="id_rujukan" name="id_rujukan" ng-model="filter.price" md-input=""><span class="md-input-bar"></span>
                                    </div>
                                </div>
                                <div class="uk-width-medium-2-10">
                                    <div class="md-input-wrapper"><label >ID REKAM MEDIS</label>
                                        <input type="text" class="md-input ng-pristine ng-valid ng-isolate-scope md-input-processed ng-touched" 
                                               id="id_rm" name="id_rm" ng-model="filter.price" md-input=""><span class="md-input-bar"></span>
                                    </div>
                                </div>
                                <div class="uk-width-medium-2-10">
                                    <div class="md-input-wrapper">
                                    <label for="uk_dp_1">Tanggal Rujukan</label>
                                    <input class="md-input" type="text" name="tgl_rujukan" data-uk-datepicker="{format:'DD-MM-YYYY'}">
                                    <span class="md-input-bar"></span></div>
                                </div>
                                <div class="uk-width-medium-2-10">
                                    <button type="submit" class="md-btn md-btn-primary"> Filter</button>
                                </div>
                            </div>
                                </form>
                        </div>                            
                        <div class="md-card-content">
                            <div class="uk-grid" data-uk-grid-margin="">
                                <div class="uk-width-1-1 ng-binding">

                                    <div class="uk-overflow-container">
                                        <table class="uk-table uk-table-nowrap">
                                            <thead>
                                                <tr>
                                                    <th >ID</th>
                                                    <th>Tanggal</th>
                                                    <th >Kiriman dari</th>
                                                    <th >ID Rekam Medis</th>
                                                    <th >Nama</th>
                                                    <th >Alamat</th>
                                                    <th >Poli</th>
                                                    <th >Dilayani</th>
                                                    <th >Rekam Medik</th>
                                                    <th >Antrian</th>
                                                    <th >Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (count($result)>0)
                                                @foreach ($result as $rs)
                                                <tr  class="ng-scope">
                                                    <td class="uk-width-1-6"><span style="display:none">{{ $idx++ }}</span> {{$rs->id}}</td>
                                                    <td class="uk-width-1-10 uk-text-large">{{date('d-m-Y',strtotime($rs->tanggal))}}</td> 
                                                    <td class="uk-width-1-10 uk-text-large">{{$rs->username}}</td>                                        
                                                    <td class="uk-width-1-10 ng-binding">{{$rs->id_rm}}</td>
                                                    <td>{{$rs->nama_pasien}}</td>
                                                    <td>{{$rs->alamat_pasien}}<br>RT/RW:{{$rs->rt}}/{{$rs->rw}}
                                                        <br>Kelurahan : {{$rs->kelurahan}}
                                                        <br>Kecamatan : {{$rs->kecamatan}}

                                                    </td>
                                                    <td>{{$rs->poli}}</td>
                                                    <td>
                                                        @if ($rs->status_layanan == 0)
                                                        <i class="material-icons">close</i>
                                                        @else
                                                        <i class="material-icons">check</i>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($rs->status_rm == 0)
                                                        <i class="material-icons">close</i>
                                                        @else
                                                        <i class="material-icons">check</i>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($rs->status_antrian == 0)
                                                        <i class="material-icons">close</i>
                                                        @else
                                                        <i class="material-icons">check</i>
                                                        @endif
                                                    </td>
                                                    <td class="uk-text-nowrap">
                                                        <a title="Tandai untuk dilayani" href="{{URL::to('rumahsakit/rujukan/layanan/'.$rs->id)}}">
                                                            <i class="md-icon material-icons md-24">person</i>
                                                        </a>
                                                        <a title="Tandai Untuk layanan Rekam Medik" href="{{URL::to('rumahsakit/rujukan/rekammedik/'.$rs->id)}}">
                                                            <i class="md-icon material-icons md-24">description</i>
                                                        </a>
                                                        <a title="Tandai untuk nomor antrian" href="{{URL::to('rumahsakit/rujukan/antrian/'.$rs->id)}}">
                                                            <i class="md-icon material-icons">plus_one</i>
                                                        </a>
                                                        <a title="Hapus Data" href="{{URL::to('rumahsakit/rujukan/hapus/'.$rs->id)}}">
                                                            <i class="md-icon material-icons md-24"></i>
                                                        </a>
                                                        
                                                    </td>
                                                </tr>

                                                @endforeach
                                                @else
                                                <tr>
                                                <td colspan="11" style="text-align: center">Data Pasien tidak ditemukan</td>
                                                </tr>
                                                @endif
                                                
                                                <!-- ngRepeat: product in products_data | filter: filter | multiSelectFilter: multiSelectData | itemsPerPage: pageSize -->
                                            </tbody>
                                            
                                        </table>
                                    </div>
                                    <dir-pagination-controls boundary-links="true"  class="ng-isolate-scope">
                                        <div class="ng-isolate-scope">{!! str_replace('/?', '?',$result->render()) !!}</div>
                                     
<!--                                         ngIf: 1 < pages.length || !autoHide -->
                                       
                                        <ul class="uk-pagination uk-margin-medium-top uk-margin-medium-bottom ng-scope" ng-if="1 < pages.length || !autoHide">
<!--                                             ngIf: boundaryLinks -->
                                            <li ng-if="boundaryLinks" ng-class="{ 'uk-disabled' : pagination.current == 1 }" class="ng-scope uk-disabled">
                                                <a href="" ng-click="setCurrent(1)"><i class="uk-icon-angle-double-left"></i></a>
                                            </li> 
                                            <!--end ngIf: boundaryLinks--> 
<!--                                             ngIf: directionLinks -->
                                            <li ng-if="directionLinks" ng-class="{ 'uk-disabled' : pagination.current == 1 }" class="ng-scope uk-disabled">
                                                <a href="" ng-click="setCurrent(pagination.current - 1)"><i class="uk-icon-angle-left"></i></a>
                                            </li> 
                                            <!--end ngIf: directionLinks--> 
<!--                                             ngRepeat: pageNumber in pages track by tracker(pageNumber, $index) -->
                                            <li ng-repeat="pageNumber in pages track by tracker(pageNumber, $index)" ng-class="{ 'uk-active' : pagination.current == pageNumber, 'uk-disabled' : pageNumber == '...' }" class="ng-scope uk-active">
                                                <a href="" ng-click="setCurrent(pageNumber)" class="ng-binding">1</a>
                                            </li> 
                                            <!--end ngRepeat: pageNumber in pages track by tracker(pageNumber, $index)--> 
                                            <li ng-repeat="pageNumber in pages track by tracker(pageNumber, $index)" ng-class="{ 'uk-active' : pagination.current == pageNumber, 'uk-disabled' : pageNumber == '...' }" class="ng-scope">
                                                <a href="" ng-click="setCurrent(pageNumber)" class="ng-binding">2</a>
                                            </li> 
                                            <!--end ngRepeat: pageNumber in pages track by tracker(pageNumber, $index)--> 
                                            <li ng-repeat="pageNumber in pages track by tracker(pageNumber, $index)" ng-class="{ 'uk-active' : pagination.current == pageNumber, 'uk-disabled' : pageNumber == '...' }" class="ng-scope">
                                                <a href="" ng-click="setCurrent(pageNumber)" class="ng-binding">3</a>
                                            </li>
                                            <!--end ngRepeat: pageNumber in pages track by tracker(pageNumber, $index)--> 
                                            <li ng-repeat="pageNumber in pages track by tracker(pageNumber, $index)" ng-class="{ 'uk-active' : pagination.current == pageNumber, 'uk-disabled' : pageNumber == '...' }" class="ng-scope">
                                                <a href="" ng-click="setCurrent(pageNumber)" class="ng-binding">4</a>
                                            </li> 
<!--                                            end ngRepeat: pageNumber in pages track by tracker(pageNumber, $index) 

                                             ngIf: directionLinks -->
                                            <li ng-if="directionLinks" ng-class="{ 'uk-disabled' : pagination.current == pagination.last }" class="ng-scope">
                                                <a href="" ng-click="setCurrent(pagination.current + 1)"><i class="uk-icon-angle-right"></i></a>
                                            </li> 
<!--                                            end ngIf: directionLinks 
                                             ngIf: boundaryLinks -->
                                             <li ng-if="boundaryLinks" ng-class="{ 'uk-disabled' : pagination.current == pagination.last }" class="ng-scope">
                                                <a href="" ng-click="setCurrent(pagination.last)"><i class="uk-icon-angle-double-right"></i></a>
                                            </li> 
<!--                                            end ngIf: boundaryLinks -->
                                        </ul> 
                                                <!--end ngIf: 1 < pages.length || !autoHide--> 
                                    </dir-pagination-controls>
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