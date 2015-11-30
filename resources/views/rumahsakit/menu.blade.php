 <!-- main header -->
    <header id="header_main">
        <div class="header_main_content">
            <nav class="uk-navbar">
                <!-- main sidebar switch -->
                <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left ">
                    <span class="sSwitchIcon"></span>
                </a>
                <!-- secondary sidebar switch -->
                <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
                    <span class="sSwitchIcon"></span>
                </a>
                <div id="menu_top" class="uk-float-left sSwitchIcon">
                    <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
                        <a href="#" class="top_menu_toggle">
                            <i class="material-icons md-36">&#xE8F0;</i>
                        </a>
                        <div class="uk-dropdown uk-dropdown-width-2">
                            <div class="uk-grid uk-dropdown-grid" data-uk-grid-margin>
                                <div class="uk-width-2-2">
                                    <div class="uk-grid uk-grid-width-medium-1-3 uk-margin-top uk-margin-bottom uk-text-center" data-uk-grid-margin>
                                        <a  href="{{URL::to('rumahsakit/home')}}">
                                            <i class="material-icons md-36">&#xE88A;</i>
                                            <span class="uk-text-muted uk-display-block">Home</span>
                                        </a>
										
                                        <a  href="{{URL::to('rumahsakit/daftarpasien')}}" >
                                            <i class="material-icons md-36">&#xE85E;</i>
                                            <span class="uk-text-muted uk-display-block">Daftar Pasien</span>
                                        </a>
                                        <a  href="{{URL::to('rumahsakit/daftarrujukan')}}" >
                                            <i class="material-icons md-36">&#xE548;</i>
                                            <span class="uk-text-muted uk-display-block">Daftar Rujukan</span>
                                        </a>
                                    </div>
									
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav user_actions">
                        <li><a href="#" id="main_search_btn" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE8B6;</i></a></li>
                        
                        <li data-uk-dropdown="{mode:'click'}">
                            <a href="#" class="user_action_image"><img class="md-user-image" src="{{asset('assets/img/smiley.png')}}" alt=""/></a>
                            <div class="uk-dropdown uk-dropdown-small uk-dropdown-flip">
                                <ul class="uk-nav js-uk-prevent">
                                    <li><a >Ubah Password</a></li>
                                    <li><a href="{{URL::to('logout')}}">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
		
        <div class="header_main_search_form">
            <i class="md-icon header_main_search_close material-icons">&#xE5CD;</i>
            <form class="uk-form">
                <input type="text" class="header_main_search_input" />
                <button class="header_main_search_btn uk-button-link"><i class="md-icon material-icons">&#xE8B6;</i></button>
            </form>
        </div>
		
		<div style="color: white;margin-top: -30px ; margin-right: 200px; float: right">
		
		   Selamat datang, {{session('nama')}} </i>
		   	
		
		</div>
    </header><!-- main header end -->
