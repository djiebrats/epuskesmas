@extends('main')
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
                    <a href="../public/ppk"  >
                        <span class="menu_icon"><i class="material-icons">&#xE88A;</i></span>
                        <span class="menu_title">Home</span>
                    </a>
                </li>
                <li title="Daftar Kegiatan">
                    <a onclick='ppk_kegiatan_list()'>
                        <span class="menu_icon"><i class="material-icons">&#xE8C9;</i></span>
                        <span class="menu_title">Kegiatan</span>
                    </a>
                </li>
				
                <li title="Daftar Kegiatan">
                    <a onclick='ppk_pekerjaan_list()'>
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
    
    <script>
    $(function() {
        var $switcher = $('#style_switcher'),
            $switcher_toggle = $('#style_switcher_toggle'),
            $theme_switcher = $('#theme_switcher'),
            $mini_sidebar_toggle = $('#style_sidebar_mini');

        $switcher_toggle.click(function(e) {
            e.preventDefault();
            $switcher.toggleClass('switcher_active');
        });

        $theme_switcher.children('li').click(function(e) {
            e.preventDefault();
            var $this = $(this),
                this_theme = $this.attr('data-app-theme');

            $theme_switcher.children('li').removeClass('active_theme');
            $(this).addClass('active_theme');
            $('body')
                .removeClass('app_theme_a app_theme_b app_theme_c app_theme_d app_theme_e app_theme_f app_theme_g')
                .addClass(this_theme);

            if(this_theme == '') {
                localStorage.removeItem('altair_theme');
            } else {
                localStorage.setItem("altair_theme", this_theme);
            }

        });

        // change input's state to checked if mini sidebar is active
        if((localStorage.getItem("altair_sidebar_mini") !== null && localStorage.getItem("altair_sidebar_mini") == '1') || $('body').hasClass('sidebar_mini')) {
            $mini_sidebar_toggle.iCheck('check');
        }

        // toggle mini sidebar
        $mini_sidebar_toggle
            .on('ifChecked', function(event){
                $switcher.removeClass('switcher_active');
                localStorage.setItem("altair_sidebar_mini", '1');
                location.reload(true);
            })
            .on('ifUnchecked', function(event){
                $switcher.removeClass('switcher_active');
                localStorage.removeItem('altair_sidebar_mini');
                location.reload(true);
            });

        // hide style switcher
        $document.on('click keyup', function(e) {
            if( $switcher.hasClass('switcher_active') ) {
                if (
                    ( !$(e.target).closest($switcher).length )
                    || ( e.keyCode == 27 )
                ) {
                    $switcher.removeClass('switcher_active');
                }
            }
        });

        if(localStorage.getItem("altair_theme") !== null) {
            $theme_switcher.children('li[data-app-theme='+localStorage.getItem("altair_theme")+']').click();
        }
    });
</script>