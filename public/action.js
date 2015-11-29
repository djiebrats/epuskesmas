$(document).ready(function(){
  $('#btn_login').click(function(){   
    $('#pesan_login').html("<img src='assets/img/loading.gif'>");
    $.ajax({
      url: 'login',
      type: "post",
      data: {'u':$('#u').val(),'p':$('#p').val(),'_token': $('input[name=_token]').val()},
      success: function(data){	  	
        data=data.trim();
        //alert(data);
        arr=data.split("|");
        //alert(arr[1].trim());
        if(arr[0]==1) 
        {
            //untuk puskesmas
            window.location.replace('main/'+arr[1]);
        }
        if(arr[0]==2) 
        {
            //untuk rumahsakit
            window.location.replace('rumahsakit/'+arr[1]);
        }
        if(arr[0]==9) 
        {
            //untuk administrator
            window.location.replace('main/'+arr[1]);
        }

        else if(arr[0]==0) 
        {
            $("#pesan_login").html("username atau password salah, atau login tidak aktif.<br>" );	
        }
      }
    });      
  }); 
});
$(document).ready(function(){
	$('#btn_daftar').click(function(){    
		$('#pesan_simpan').html("<img src='assets/img/loading.gif'>");
		$.ajax({
			url: 'registrasi',
			type: "post",
			data: {},
			success: function(data){	
				window.location.replace('registrasi');
			}
		});      
	}); 
});

$(document).ready(function(){
	$('#btn_verif').click(function(){    
		$('#pesan_simpan').html("<img src='assets/img/loading.gif'>");
		$.ajax({
			url: 'verifpasien',
			type: "post",
			data: {'id_rm':$('#id_rm').val()},
			success: function(data){	
				window.location.replace('main/verifpasien');
			}
		});      
	}); 
});

function regpasien()
{
	$("#utama").html('<img src="assets/img/loading.gif">');
	 $.ajax({
      url: 'regpasien',
      type: "post",
      data: {'_token': $('input[name=_token]').val()},
      success: function(data){
        $("#utama").html(data);	
        }
    });
	
}
function rujukan()
{
	$("#utama").html('<img src="assets/img/loading.gif">');
	 $.ajax({
      url: 'rujukan',
      type: "post",
      data: {'_token': $('input[name=_token]').val()},
      success: function(data){
        $("#utama").html(data);	
        }
    });
	
}

function ppk_kegiatan_list()
{
	$("#utama").html('<img src="assets/img/loading.gif">');
	
	 $.ajax({
      url: 'ppk_kegiatan',
      type: "post",
      data: {'_token': $('input[name=_token]').val()},
      success: function(data){
	  	

			$("#utama").html(data);	
		}
    });
	
}



function list_detail_kegiatan(id,kode,target)
{
	$("#"+target).html('<img src="assets/img/loading.gif">');
	
	 $.ajax({
      url: 'list_detail_kegiatan',
      type: "post",
      data: {'id':id,'kode':kode,'target':target,'_token': $('input[name=_token]').val()},
      success: function(data){
	  	

			$("#"+target).html(data);	
		}
    });
	
}


function ppk_pekerjaan_list()
{
	$("#utama").html('<img src="assets/img/loading.gif">');
	
	 $.ajax({
      url: 'ppk_pekerjaan',
      type: "post",
      data: {'_token': $('input[name=_token]').val()},
      success: function(data){
	  	

			$("#utama").html(data);	
		}
    });
	
}


function ppk_kontrak_list(id_pekerjaan)
{
	$("#utama").html('<img src="assets/img/loading.gif">');
	
	 $.ajax({
      url: 'ppk_kontrak/'+id_pekerjaan,
      type: "post",
      data: {'_token': $('input[name=_token]').val()},
      success: function(data){
	  	

			$("#utama").html(data);	
		}
    });
	
}



function simpan_pekerjaan_baru()
{
	//$("#utama").html('<img src="assets/img/loading.gif">');
	kode_kegiatan=$("#new_kegiatan").val();
	nama_pekerjaan=$("#new_pekerjaan").val();
	
	 $.ajax({
      url: 'ppk_pekerjaan_baru',
      type: "post",
      data: {'kode_kegiatan':kode_kegiatan,'nama_pekerjaan':nama_pekerjaan,  '_token': $('input[name=_token]').val()},
      success: function(data){
	  	
			//$("#utama").html(data);	
			ppk_pekerjaan_list();	
		}
    });
	
}




function simpan_kontrak_baru(id_pekerjaan)
{
	//$("#utama").html('<img src="assets/img/loading.gif">');
	nama_dokumen=$("#new_dokumen").val();
	nama_template=$("#new_template").val();
	
	 $.ajax({
      url: 'ppk_kontrak_baru',
      type: "post",
      data: {'nama_dokumen':nama_dokumen,'nama_template':nama_template,'id_pekerjaan':id_pekerjaan,  '_token': $('input[name=_token]').val()},
      success: function(data){
	  	
			//$("#utama").html(data);	
			ppk_kontrak_list(id_pekerjaan);	
		}
    });
	
}


function simpan_kontrak_edit(id,id_pekerjaan)
{
	//$("#utama").html('<img src="assets/img/loading.gif">');
	nama_dokumen=$("#edit_nama_dokumen_"+id).val();
	par1_isi=''+$("#edit_isi_kontrak_"+id+"_"+1).val();
	par2_isi=''+$("#edit_isi_kontrak_"+id+"_"+2).val();
	par3_isi=''+$("#edit_isi_kontrak_"+id+"_"+3).val();
	par4_isi=''+$("#edit_isi_kontrak_"+id+"_"+4).val();
	par5_isi=''+$("#edit_isi_kontrak_"+id+"_"+5).val();
	par6_isi=''+$("#edit_isi_kontrak_"+id+"_"+6).val();
	par7_isi=''+$("#edit_isi_kontrak_"+id+"_"+7).val();
	par8_isi=''+$("#edit_isi_kontrak_"+id+"_"+8).val();
	par9_isi=''+$("#edit_isi_kontrak_"+id+"_"+9).val();
	par10_isi=''+$("#edit_isi_kontrak_"+id+"_"+10).val();
	
	par11_isi=''+$("#edit_isi_kontrak_"+id+"_"+11).val();
	par12_isi=''+$("#edit_isi_kontrak_"+id+"_"+12).val();
	par13_isi=''+$("#edit_isi_kontrak_"+id+"_"+13).val();
	par14_isi=''+$("#edit_isi_kontrak_"+id+"_"+14).val();
	par15_isi=''+$("#edit_isi_kontrak_"+id+"_"+15).val();
	par16_isi=''+$("#edit_isi_kontrak_"+id+"_"+16).val();
	par17_isi=''+$("#edit_isi_kontrak_"+id+"_"+17).val();
	par18_isi=''+$("#edit_isi_kontrak_"+id+"_"+18).val();
	par19_isi=''+$("#edit_isi_kontrak_"+id+"_"+19).val();
	par20_isi=''+$("#edit_isi_kontrak_"+id+"_"+20).val();
	
	par21_isi=''+$("#edit_isi_kontrak_"+id+"_"+21).val();
	par22_isi=''+$("#edit_isi_kontrak_"+id+"_"+22).val();
	par23_isi=''+$("#edit_isi_kontrak_"+id+"_"+23).val();
	par24_isi=''+$("#edit_isi_kontrak_"+id+"_"+24).val();
	par25_isi=''+$("#edit_isi_kontrak_"+id+"_"+25).val();
	par26_isi=''+$("#edit_isi_kontrak_"+id+"_"+26).val();
	par27_isi=''+$("#edit_isi_kontrak_"+id+"_"+27).val();
	par28_isi=''+$("#edit_isi_kontrak_"+id+"_"+28).val();
	par29_isi=''+$("#edit_isi_kontrak_"+id+"_"+29).val();
	par30_isi=''+$("#edit_isi_kontrak_"+id+"_"+30).val();
	
	
	
	
	 $.ajax({
      url: 'ppk_kontrak_edit',
      type: "post",
      data: {'nama_dokumen':nama_dokumen,
	  'par1_isi':par1_isi,
	  'par2_isi':par2_isi,
	  'par3_isi':par3_isi,
	  'par4_isi':par4_isi,
	  'par5_isi':par5_isi,
	  'par6_isi':par6_isi,
	  'par7_isi':par7_isi,
	  'par8_isi':par8_isi,
	  'par9_isi':par9_isi,
	  'par10_isi':par10_isi,
	  
	  'par11_isi':par11_isi,
	  'par12_isi':par12_isi,
	  'par13_isi':par13_isi,
	  'par14_isi':par14_isi,
	  'par15_isi':par15_isi,
	  'par16_isi':par16_isi,
	  'par17_isi':par17_isi,
	  'par18_isi':par18_isi,
	  'par19_isi':par19_isi,
	  'par20_isi':par20_isi,
	  
	  'par21_isi':par21_isi,
	  'par22_isi':par22_isi,
	  'par23_isi':par23_isi,
	  'par24_isi':par24_isi,
	  'par25_isi':par25_isi,
	  'par26_isi':par26_isi,
	  'par27_isi':par27_isi,
	  'par28_isi':par28_isi,
	  'par29_isi':par29_isi,
	  'par30_isi':par30_isi,
	  'id':id,
	    '_token': $('input[name=_token]').val()},
      success: function(data){
	  	
			//$("#utama").html(data);	
			ppk_kontrak_list(id_pekerjaan);	
		}
    });
	
}



function simpan_detail_pekerjaan_baru(kode_kegiatan,id_pekerjaan,target)
{
	//$("#utama").html('<img src="assets/img/loading.gif">');
	detail_no=$("#new_komponen_"+id_pekerjaan).val();
	volume=$("#new_volume_"+id_pekerjaan).val();
	
	 $.ajax({
      url: 'ppk_detail_pekerjaan_baru',
      type: "post",
      data: {'detail_no':detail_no,  'volume':volume, 'id_pekerjaan':id_pekerjaan,'kode_kegiatan':kode_kegiatan,  '_token': $('input[name=_token]').val()},
      success: function(data){
	  	
			//$("#utama").html(data);	
			
			list_detail_pekerjaan(id_pekerjaan,kode_kegiatan,target);
			update_tot(id_pekerjaan);
		}
    });
	
}


function simpan_detail_pekerjaan_edit(id,kode_kegiatan,id_pekerjaan,target)
{
	//$("#utama").html('<img src="assets/img/loading.gif">');
	harga=$("#edit_harga_"+id).val();
	volume=$("#edit_volume_"+id).val();
	
	 $.ajax({
      url: 'ppk_detail_pekerjaan_edit',
      type: "post",
      data: {'id':id,  'harga':harga, 'volume':volume, 'id_pekerjaan':id_pekerjaan,'kode_kegiatan':kode_kegiatan,  '_token': $('input[name=_token]').val()},
      success: function(data){
	  	
			//$("#utama").html(data);	
			
			list_detail_pekerjaan(id_pekerjaan,kode_kegiatan,target);
			update_tot(id_pekerjaan);
		}
    });
	
}


function hapus_detail_pekerjaan(id,kode_kegiatan,id_pekerjaan,target)
{
	//$("#utama").html('<img src="assets/img/loading.gif">');
	
	 $.ajax({
      url: 'ppk_hapus_detail_pekerjaan',
      type: "post",
      data: {'id':id,  '_token': $('input[name=_token]').val()},
      success: function(data){
	  	
			//$("#utama").html(data);	
			
			list_detail_pekerjaan(id_pekerjaan,kode_kegiatan,target);
			update_tot(id_pekerjaan);
		}
    });
	
}


function hapus_kontrak(id)
{
	//$("#utama").html('<img src="assets/img/loading.gif">');
	
	 $.ajax({
      url: 'ppk_hapus_kontrak',
      type: "post",
      data: {'id':id,  '_token': $('input[name=_token]').val()},
      success: function(data){
	  	
			$("#tr_lihat_"+id).hide();	
			$("#tr2_lihat_"+id).hide();	
			$("#tr_edit_"+id).hide();	
			$("#tr2_edit_"+id).hide();	
			
						
		}
    });
	
}

function update_tot(id_pekerjaan)
{
	$.ajax({
      url: 'ppk_update_tot_pekerjaan',
      type: "post",
      data: { 'id_pekerjaan':id_pekerjaan,  '_token': $('input[name=_token]').val()},
      success: function(data){
	  	
			$("#tot_"+id_pekerjaan).html(data);	
			
		}
    });
}

function list_detail_pekerjaan(id_pekerjaan,kode_kegiatan,target)
{
	$("#"+target).html('<img src="assets/img/loading.gif">');
	
	 $.ajax({
      url: 'list_detail_pekerjaan',
      type: "post",
      data: {'id_pekerjaan':id_pekerjaan,'kode_kegiatan':kode_kegiatan,'target':target,'_token': $('input[name=_token]').val()},
      success: function(data){
	  	

			$("#"+target).html(data);	
		}
    });
	
}