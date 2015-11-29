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
                            <h3 class="heading_b uk-margin-top">Rujukan Telah berhasil disimpan</h3>
                        </div>
                        <div class="md-card-content" align="center">
                            <table border="0">
                                <tr>
                                    <td colspan="3">Data Rujukan atas nama pasien :</td>
                                </tr>
                                <tr>
                                    <td>No Rekam Medis</td>
                                    <td>:</td>
                                    <td>{{$result->id_rm}}</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{$result->nama_pasien}}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>{{$result->alamat_pasien}} &nbsp;&nbsp; RT/RW: {{$result->rt.'/'.$result->rw}}</td>
                                </tr>
                                <tr>
                                    <td>Kelurahan</td>
                                    <td>:</td>
                                    <td>{{$result->kelurahan}}</td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td>:</td>
                                    <td>{{$result->kecamatan}} </td>
                                </tr>
                                <tr>
                                    <td>Tanggal Rujukan</td>
                                    <td>:</td>
                                    <td>{{date('d-m-Y',strtotime($result->tanggal))}}</td>
                                </tr>
                                <tr>
                                    <td>Poli</td>
                                    <td>:</td>
                                    <td>{{$result->poli}}</td>
                                </tr>
                                <tr>
                                    <td>ID Rujukan</td>
                                    <td>:</td>
                                    <td><font color="red" size="18"><B>{{$result->id}}</b></font></td>
                                </tr>
                            </table>
                            <br>
                            Silahkan Simpan atau cetak dan tunjukkan pada loket di rumahsakit sebagai tanda bukti rujukan.
                        </div>
                    </div>
                </div>
			</div>
        </div>
    </div>