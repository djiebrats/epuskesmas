 <!-- main sidebar -->
    <aside id="sidebar_main">
        <div class="sidebar_main_header">
            <div class="sidebar_logo">
                <a href="index.html" class="sSidebar_hide"><img src="{{asset('assets/img/logo_main.png')}}" alt="" /></a>
                <a href="index.html" class="sSidebar_show"><img src="{{asset('assets/img/logo_main_small.png')}}" alt="" height="32" width="32"/></a>
            </div>
           
        </div>
        <div class="menu_section">
		
				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <ul>
                <li title="Home">
                    <a href="{{URL::to('rumahsakit/home')}}">
                        <span class="menu_icon"><i class="material-icons">&#xE88A;</i></span>
                        <span class="menu_title">Home</span>
                    </a>
                </li>
                <li title="Daftar Kegiatan">
                    <a href="{{URL::to('rumahsakit/daftarpasien')}}">
                        <span class="menu_icon"><i class="material-icons">&#xE8C9;</i></span>
                        <span class="menu_title">Kegiatan</span>
                    </a>
                </li>
				
                <li title="Daftar Kegiatan">
                    <a href="{{URL::to('rumahsakit/daftarrujukan')}}">
                        <span class="menu_icon"><i class="material-icons ">&#xE8CA;</i></span>
                        <span class="menu_title">Pekerjaan</span>
                    </a>
                </li>
				
				
                <li title="Daftar Dokumen Kontrak">
                    <a onclick="ppk_kontrak_list(0)">
                        <span class="menu_icon"><i class="material-icons">&#xE02F;</i></span>
                        <span class="menu_title">Dokumen Kontrak</span>
                    </a>
                </li>
				
				
            </ul>
        </div>
    </aside><!-- main sidebar end -->