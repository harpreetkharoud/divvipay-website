<?php
	
	/*---------------------------First highlight color-------------------*/

	$vw_mobile_app_first_color = get_theme_mod('vw_mobile_app_first_color');

	$custom_css = '';

	if($vw_mobile_app_first_color != false){
		$custom_css .='.error-btn a:hover, a.content-bttn:hover, .pagination .current, .pagination a:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce span.onsale{';
			$custom_css .='background-color: '.esc_html($vw_mobile_app_first_color).';';
		$custom_css .='}';
	}
	if($vw_mobile_app_first_color != false){
		$custom_css .='a, #footer h3, .post-main-box:hover h3 a, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, .entry-content a{';
			$custom_css .='color: '.esc_html($vw_mobile_app_first_color).';';
		$custom_css .='}';
	}
	if($vw_mobile_app_first_color != false){
		$custom_css .='{';
			$custom_css .='border-color: '.esc_html($vw_mobile_app_first_color).';';
		$custom_css .='}';
	}
	if($vw_mobile_app_first_color != false){
		$custom_css .='#about-us hr, .post-info hr{';
			$custom_css .='border-top-color: '.esc_html($vw_mobile_app_first_color).';';
		$custom_css .='}';
	}

	/*---------------------------Second highlight color-------------------*/

	$vw_mobile_app_second_color = get_theme_mod('vw_mobile_app_second_color');

	if($vw_mobile_app_second_color != false){
		$custom_css .='.pagination span, .pagination a, #comments a.comment-reply-link, .toggle-nav i{';
			$custom_css .='background-color: '.esc_html($vw_mobile_app_second_color).';';
		$custom_css .='}';
	}
	if($vw_mobile_app_second_color != false){
		$custom_css .='#sidebar .custom-social-icons i:hover, #footer .custom-social-icons i:hover, .main-navigation ul.sub-menu a:hover, .page-template-custom-home-page .main-navigation a:hover, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a{';
			$custom_css .='color: '.esc_html($vw_mobile_app_second_color).';';
		$custom_css .='}';
	}
	if($vw_mobile_app_second_color != false){
		$custom_css .='.main-navigation ul ul{';
			$custom_css .='border-top-color: '.esc_html($vw_mobile_app_second_color).';';
		$custom_css .='}';
	}
	if($vw_mobile_app_second_color != false){
		$custom_css .='.main-navigation ul ul{';
			$custom_css .='border-bottom-color: '.esc_html($vw_mobile_app_second_color).';';
		$custom_css .='}';
	}

	if($vw_mobile_app_second_color != false || $vw_mobile_app_first_color != false){
		$custom_css .='.scrollup i, #sidebar .custom-social-icons i, #footer .custom-social-icons i, #footer .tagcloud a:hover, input[type="submit"], #footer-2, #sidebar input[type="submit"], #sidebar .tagcloud a:hover, .error-btn a, a.content-bttn, #header, #comments input[type="submit"].submit, nav.woocommerce-MyAccount-navigation ul li, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, #sidebar .widget_price_filter .ui-slider .ui-slider-range, #sidebar .widget_price_filter .ui-slider .ui-slider-handle, #sidebar .woocommerce-product-search button, #footer .widget_price_filter .ui-slider .ui-slider-range, #footer .widget_price_filter .ui-slider .ui-slider-handle, #footer .woocommerce-product-search button{
		background: linear-gradient(to right, '.esc_html($vw_mobile_app_second_color).', '.esc_html($vw_mobile_app_first_color).');
	 	}';
	}

	/*---------------------------Width Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_mobile_app_width_option','Full Width');
    if($theme_lay == 'Boxed'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Wide Width'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Full Width'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$theme_lay = get_theme_mod( 'vw_mobile_app_slider_opacity_color','0.5');
	if($theme_lay == '0'){
		$custom_css .='#banner img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
		}else if($theme_lay == '0.1'){
		$custom_css .='#banner img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
		}else if($theme_lay == '0.2'){
		$custom_css .='#banner img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
		}else if($theme_lay == '0.3'){
		$custom_css .='#banner img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
		}else if($theme_lay == '0.4'){
		$custom_css .='#banner img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
		}else if($theme_lay == '0.5'){
		$custom_css .='#banner img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
		}else if($theme_lay == '0.6'){
		$custom_css .='#banner img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
		}else if($theme_lay == '0.7'){
		$custom_css .='#banner img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
		}else if($theme_lay == '0.8'){
		$custom_css .='#banner img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
		}else if($theme_lay == '0.9'){
		$custom_css .='#banner img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_mobile_app_slider_content_option','Left');
    if($theme_lay == 'Left'){
		$custom_css .='.box-content, .box-content h1{';
			$custom_css .='text-align:left; left:10%; right:55%;';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='.box-content, .box-content h1{';
			$custom_css .='text-align:center; left:30%; right:30%;';
		$custom_css .='}';
	}else if($theme_lay == 'Right'){
		$custom_css .='.box-content, .box-content h1{';
			$custom_css .='text-align:right; left:55%; right:10%;';
		$custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_mobile_app_blog_layout_option','Default');
    if($theme_lay == 'Default'){
		$custom_css .='.post-main-box{';
			$custom_css .='';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$custom_css .='text-align:center;';
		$custom_css .='}';
		$custom_css .='.post-info, .content-bttn{';
			$custom_css .='margin-top:10px;';
		$custom_css .='}';
		$custom_css .='.post-info hr{';
			$custom_css .='margin:15px auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Left'){
		$custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$custom_css .='text-align:Left;';
		$custom_css .='}';
		$custom_css .='.content-bttn{';
			$custom_css .='margin:20px 0;';
		$custom_css .='}';
		$custom_css .='.post-info{';
			$custom_css .='margin-top:20px;';
		$custom_css .='}';
	}

	/*------------------------------Responsive Media -----------------------*/

	$stickyheader = get_theme_mod( 'vw_mobile_app_stickyheader_hide_show',true);
    if($stickyheader == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.page-template-custom-home-page #header .header-fixed, #header .header-fixed{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($stickyheader == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.page-template-custom-home-page #header .header-fixed, #header .header-fixed{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$metabox = get_theme_mod( 'vw_mobile_app_metabox_hide_show',true);
    if($metabox == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.post-info{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($metabox == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.post-info{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$sidebar = get_theme_mod( 'vw_mobile_app_sidebar_hide_show',true);
    if($sidebar == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='#sidebar{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($sidebar == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='#sidebar{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	/*---------------- Button Settings ------------------*/

	$vw_mobile_app_button_padding_top_bottom = get_theme_mod('vw_mobile_app_button_padding_top_bottom');
	$vw_mobile_app_button_padding_left_right = get_theme_mod('vw_mobile_app_button_padding_left_right');
	if($vw_mobile_app_button_padding_top_bottom != false || $vw_mobile_app_button_padding_left_right != false){
		$custom_css .='a.content-bttn{';
			$custom_css .='padding-top: '.esc_html($vw_mobile_app_button_padding_top_bottom).'; padding-bottom: '.esc_html($vw_mobile_app_button_padding_top_bottom).';padding-left: '.esc_html($vw_mobile_app_button_padding_left_right).';padding-right: '.esc_html($vw_mobile_app_button_padding_left_right).';';
		$custom_css .='}';
	}

	$vw_mobile_app_button_border_radius = get_theme_mod('vw_mobile_app_button_border_radius');
	if($vw_mobile_app_button_border_radius != false){
		$custom_css .='a.content-bttn{';
			$custom_css .='border-radius: '.esc_html($vw_mobile_app_button_border_radius).'px;';
		$custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_mobile_app_copyright_alingment = get_theme_mod('vw_mobile_app_copyright_alingment');
	if($vw_mobile_app_copyright_alingment != false){
		$custom_css .='.copyright p{';
			$custom_css .='text-align: '.esc_html($vw_mobile_app_copyright_alingment).';';
		$custom_css .='}';
	}

	$vw_mobile_app_copyright_padding_top_bottom = get_theme_mod('vw_mobile_app_copyright_padding_top_bottom');
	if($vw_mobile_app_copyright_padding_top_bottom != false){
		$custom_css .='#footer-2{';
			$custom_css .='padding-top: '.esc_html($vw_mobile_app_copyright_padding_top_bottom).'; padding-bottom: '.esc_html($vw_mobile_app_copyright_padding_top_bottom).';';
		$custom_css .='}';
	}