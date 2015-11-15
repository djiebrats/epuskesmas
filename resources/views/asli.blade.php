<?php 

use Illuminate\Support\Facades\DB;


?>
<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32">

    <title>ePuskesmas | Halaman Utama</title>


    <!-- uikit -->
    <link rel="stylesheet" href="{{asset('bower_components/uikit/css/uikit.almost-flat.min.css')}}" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="{{asset('assets/icons/flags/flags.min.css')}}" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" media="all">
	
<script src="{{asset('assets/js/jquery.js')}}"></script>
    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
        <script type="text/javascript" src="{{asset('bower_components/matchMedia/matchMedia.js')}}"></script>
        <script type="text/javascript" src="{{asset('bower_components/matchMedia/matchMedia.addListener.js')}}"></script>
    <![endif]-->
<script src="{{asset('action.js')}}"></script>
</head>
<body class="sidebar_main_open sidebar_main_swipe">
    <!-- main header -->
    <header id="header_main">
        <div class="header_main_content">
            <nav class="uk-navbar">
                <!-- main sidebar switch -->
                <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
                    <span class="sSwitchIcon"></span>
                </a>
                <!-- secondary sidebar switch -->
                <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
                    <span class="sSwitchIcon"></span>
                </a>
                <div id="menu_top" class="uk-float-left uk-hidden-small">
                    <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
                        <a href="#" class="top_menu_toggle"><i class="material-icons md-24">&#xE8F0;</i></a>
                        <div class="uk-dropdown uk-dropdown-width-3">
                            <div class="uk-grid uk-dropdown-grid" data-uk-grid-margin>
                                <div class="uk-width-2-3">
                                    <div class="uk-grid uk-grid-width-medium-1-3 uk-margin-top uk-margin-bottom uk-text-center" data-uk-grid-margin>
                                        <a  href="../public/ppk">
                                            <i class="material-icons md-36">&#xE88A;</i>
                                            <span class="uk-text-muted uk-display-block">Home</span>
                                        </a>
										
										<a  onclick='ppk_kegiatan_list()' >
                                            <i class="material-icons md-36">&#xE8C9;</i>
                                            <span class="uk-text-muted uk-display-block">Kegiatan</span>
                                        </a>
                                      
									  
									  
										<a  onclick='ppk_pekerjaan_list()' >
											<i class="material-icons md-36">&#xE8CA;</i>
                                            <span class="uk-text-muted uk-display-block">Pekerjaan</span>
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
                            <a href="#" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE7F4;</i><span class="uk-badge">16</span></a>
                            <div class="uk-dropdown uk-dropdown-xlarge uk-dropdown-flip">
                                <div class="md-card-content">
                                    <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#header_alerts',animation:'slide-horizontal'}">
                                        <li class="uk-width-1-2 uk-active"><a href="#" class="js-uk-prevent uk-text-small">Messages (12)</a></li>
                                        <li class="uk-width-1-2"><a href="#" class="js-uk-prevent uk-text-small">Alerts (4)</a></li>
                                    </ul>
                                    <ul id="header_alerts" class="uk-switcher uk-margin">
                                        <li>
                                            <ul class="md-list md-list-addon">
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <span class="md-user-letters md-bg-cyan">fg</span>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Ut harum dolores.</a></span>
                                                        <span class="uk-text-small uk-text-muted">Quam sunt eveniet ut ullam odit mollitia veritatis suscipit ea quis.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <img class="md-user-image md-list-addon-avatar" src="{{asset('assets/img/avatars/avatar_07_tn.png')}}" alt=""/>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Ut omnis voluptatibus.</a></span>
                                                        <span class="uk-text-small uk-text-muted">Est molestias assumenda placeat reiciendis et.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <span class="md-user-letters md-bg-light-green">ew</span>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Ut nihil dolores.</a></span>
                                                        <span class="uk-text-small uk-text-muted">Fuga deleniti ipsum ut molestias perferendis in autem.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <img class="md-user-image md-list-addon-avatar" src="{{asset('assets/img/avatars/avatar_02_tn.png')}}" alt=""/>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Qui ab sed.</a></span>
                                                        <span class="uk-text-small uk-text-muted">Vel quisquam labore voluptatibus non ab et.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <img class="md-user-image md-list-addon-avatar" src="{{asset('assets/img/avatars/avatar_09_tn.png')}}" alt=""/>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Iure magni quia.</a></span>
                                                        <span class="uk-text-small uk-text-muted">Non aut est repellat voluptatem recusandae.</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="uk-text-center uk-margin-top uk-margin-small-bottom">
                                                <a href="page_mailbox.html" class="md-btn md-btn-flat md-btn-flat-primary js-uk-prevent">Show All</a>
                                            </div>
                                        </li>
                                        <li>
                                            <ul class="md-list md-list-addon">
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons uk-text-warning">&#xE8B2;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading">Quasi deleniti aliquid.</span>
                                                        <span class="uk-text-small uk-text-muted uk-text-truncate">Omnis odit voluptatibus nesciunt aspernatur libero laudantium tempora ut.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons uk-text-success">&#xE88F;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading">Soluta aut.</span>
                                                        <span class="uk-text-small uk-text-muted uk-text-truncate">Ut est voluptatem temporibus.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons uk-text-danger">&#xE001;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading">Dignissimos maxime reprehenderit.</span>
                                                        <span class="uk-text-small uk-text-muted uk-text-truncate">Et autem assumenda autem et enim.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons uk-text-primary">&#xE8FD;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading">Soluta totam est.</span>
                                                        <span class="uk-text-small uk-text-muted uk-text-truncate">Qui pariatur non aliquam ipsum consequuntur.</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li data-uk-dropdown="{mode:'click'}">
                            <a href="#" class="user_action_image"><img class="md-user-image" src="{{asset('assets/img/smiley.png')}}" alt=""/></a>
                            <div class="uk-dropdown uk-dropdown-small uk-dropdown-flip">
                                <ul class="uk-nav js-uk-prevent">
                                    <li><a >Ubah Password</a></li>
                                    <li><a href="../public" >Logout</a></li>
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
		
		   tes </i>
		   	
		
		</div>
    </header><!-- main header end -->

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


    @yield('container')

    <!-- google web fonts -->
    <script >
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- common functions -->
    <script src="{{asset('assets/js/common.min.js')}}"></script>
    <!-- uikit functions -->
    <script src="{{asset('assets/js/uikit_custom.min.js')}}"></script>
    <!-- altair common functions/helpers -->
    <script src="{{asset('assets/js/altair_admin_common.min.js')}}"></script>


    <script  type="text/javascript" >
        $(function() {
            // enable hires images
            altair_helpers.retina_images();
            // fastClick (touch devices)
            if(Modernizr.touch) {
                FastClick.attach(document.body);
            }
        });
    </script>

<div id="style_switcher">
    <div id="style_switcher_toggle"><i class="material-icons">&#xE8B8;</i></div>
    <div class="uk-margin-medium-bottom">
        <h4 class="heading_c uk-margin-bottom">Colors</h4>
        <ul class="switcher_app_themes" id="theme_switcher">
            <li class="app_style_default active_theme" data-app-theme="">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_a" data-app-theme="app_theme_a">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_b" data-app-theme="app_theme_b">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_c" data-app-theme="app_theme_c">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_d" data-app-theme="app_theme_d">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_e" data-app-theme="app_theme_e">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_f" data-app-theme="app_theme_f">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
            <li class="switcher_theme_g" data-app-theme="app_theme_g">
                <span class="app_color_main"></span>
                <span class="app_color_accent"></span>
            </li>
        </ul>
    </div>
    <div class="uk-visible-large">
        <h4 class="heading_c">Sidebar</h4>
        <p>
            <input type="checkbox" name="style_sidebar_mini" id="style_sidebar_mini" data-md-icheck />
            <label for="style_sidebar_mini" class="inline-label">Mini Sidebar</label>
        </p>
    </div>
</div>

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
            $mini_sidebar_toggle.iCheck('state');
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


</body>

</html>