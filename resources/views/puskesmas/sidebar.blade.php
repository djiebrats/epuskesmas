 <!-- main sidebar -->
    <aside id="sidebar_main">
        <div class="sidebar_main_header">
            <div class="sidebar_logo">
                <a href="index.html" class="sSidebar_hide"><img src="{{asset('assets/img/logo_main.png')}}" alt="" /></a>
                <a href="index.html" class="sSidebar_show"><img src="{{asset('assets/img/logo_main_small.png')}}" alt="" height="32" width="32"/></a>
            </div>
           
        </div>
        <div class="menu_section">
            
				<!--<input type="hidden" name="_token" value="{!! csrf_token() !!}">-->
            <ul>
                
                <li title="Home">
                    <a href="{{URL::to('main/puskesmas')}}">
                        <span class="menu_icon"><i class="material-icons">&#xE88A;</i></span>
                        <span class="menu_title">Home</span>
                    </a>
                </li>
                <li title="Rujukan">
                    <a href="{{URL::to('main/rujukan')}}">
                        <span class="menu_icon"><i class="material-icons">&#xE548;</i></span>
                        <span class="menu_title">Rujukan</span>
                    </a>
                </li>
					
				
            </ul>
        </div>
    </aside><!-- main sidebar end -->