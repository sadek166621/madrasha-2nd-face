<!doctype html>
<html lang="en-US">
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta charset="UTF-8">

	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Overpass:wght@300;400;600;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.maateen.me/kalpurush/font.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">


	<title>{{ $setting->site_name }}</title>
<meta name='robots' content='max-image-preview:large' />

<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Govt. College Name &raquo; Feed" href="#" />
<link rel="alternate" type="application/rss+xml" title="Govt. College Name &raquo; Comments Feed" href="#" />

<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 0.07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='{{ asset("assets-frontend") }}/css/style.min.css?ver=5.9.7' type='text/css' media='all' />
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
</style>
<link rel='stylesheet' id='contact-form-7-css'  href='{{ asset("assets-frontend") }}/css/7form/styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='sumoselect-css'  href='{{ asset("assets-frontend") }}/css/photo-gallery/sumoselect.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='mCustomScrollbar-css'  href='{{ asset("assets-frontend") }}/css/photo-gallery/jquery.mCustomScrollbar.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='bwg_googlefonts-css'  href='https://fonts.googleapis.com/css?family=Ubuntu&#038;subset=greek,latin,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic' type='text/css' media='all' />
<link rel='stylesheet' id='bwg_frontend-css'  href='{{ asset("assets-frontend") }}/css/photo-gallery/styles.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='websdevusaecom-google-font-css'  href='https://fonts.googleapis.com/css?family=Open+Sans&#038;ver=5.9.7' type='text/css' media='all' />
<link rel='stylesheet' id='animate-css'  href='{{ asset("assets-frontend") }}/css/themes/animate.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='{{ asset("assets-frontend") }}/css/themes/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-css'  href='{{ asset("assets-frontend") }}/css/themes/owl.carousel.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='owl-theme-css'  href='{{ asset("assets-frontend") }}/css/themes/owl.theme.default.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='simplelightbox-css'  href='{{ asset("assets-frontend") }}/css/themes/simplelightbox.min.css?ver=5.9.7' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='{{ asset("assets-frontend") }}/css/themes/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='websdevusaecom-main-nav-css'  href='{{ asset("assets-frontend") }}/css/themes/main-nav.css' type='text/css' media='all' />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel='stylesheet' id='websdevusaecom-style-css'  href='{{ asset("assets-frontend") }}/css/themes/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='websdevusaecom-media-style-css'  href='{{ asset("assets-frontend") }}/css/themes/media-style.css' type='text/css' media='all' />
<script type='text/javascript' src='https://ngdc.ac.bd/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
<script type='text/javascript' src='https://ngdc.ac.bd/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
<script type='text/javascript' src='https://ngdc.ac.bd/wp-content/plugins/photo-gallery/js/jquery.sumoselect.min.js?ver=3.3.24' id='sumoselect-js'></script>
<script type='text/javascript' src='https://ngdc.ac.bd/wp-content/plugins/photo-gallery/js/jquery.mobile.min.js?ver=1.4.5' id='jquery-mobile-js'></script>
<script type='text/javascript' src='https://ngdc.ac.bd/wp-content/plugins/photo-gallery/js/jquery.mCustomScrollbar.concat.min.js?ver=3.1.5' id='mCustomScrollbar-js'></script>
<script type='text/javascript' src='https://ngdc.ac.bd/wp-content/plugins/photo-gallery/js/jquery.fullscreen.min.js?ver=0.6.0' id='jquery-fullscreen-js'></script>
<script type='text/javascript' id='bwg_frontend-js-extra'>
/* <![CDATA[ */
var bwg_objectsL10n = {"bwg_field_required":"field is required.","bwg_mail_validation":"This is not a valid email address.","bwg_search_result":"There are no images matching your search.","bwg_select_tag":"Select Tag","bwg_order_by":"Order By","bwg_search":"Search","bwg_show_ecommerce":"Show Ecommerce","bwg_hide_ecommerce":"Hide Ecommerce","bwg_show_comments":"Show Comments","bwg_hide_comments":"Hide Comments","bwg_restore":"Restore","bwg_maximize":"Maximize","bwg_fullscreen":"Fullscreen","bwg_exit_fullscreen":"Exit Fullscreen","bwg_search_tag":"SEARCH...","bwg_tag_no_match":"No tags found","bwg_all_tags_selected":"All tags selected","bwg_tags_selected":"tags selected","play":"Play","pause":"Pause","is_pro":"","bwg_play":"Play","bwg_pause":"Pause","bwg_hide_info":"Hide info","bwg_show_info":"Show info","bwg_hide_rating":"Hide rating","bwg_show_rating":"Show rating","ok":"Ok","cancel":"Cancel","select_all":"Select all","lazy_load":"0","lazy_loader":"https:\/\/ngdc.ac.bd\/wp-content\/plugins\/photo-gallery\/images\/ajax_loader.png","front_ajax":"0","bwg_tag_see_all":"see all tags","bwg_tag_see_less":"see less tags"};
/* ]]> */
</script>
<script type='text/javascript' src='https://ngdc.ac.bd/wp-content/plugins/photo-gallery/js/scripts.min.js?ver=1.6.2' id='bwg_frontend-js'></script>
<script type='text/javascript' src='https://ngdc.ac.bd/wp-content/themes/ngdcrajit/js/owl.carousel.js?ver=5.9.7' id='owl-carousel-js'></script>
<script type='text/javascript' src='https://ngdc.ac.bd/wp-content/themes/ngdcrajit/js/simple-lightbox.min.js?ver=5.9.7' id='simple-lightbox-js'></script>
<script type='text/javascript' src='https://ngdc.ac.bd/wp-content/themes/ngdcrajit/js/popper.min.js?ver=5.9.7' id='popper-js'></script>
<script type='text/javascript' src='https://ngdc.ac.bd/wp-content/themes/ngdcrajit/js/bootstrap.min.js?ver=5.9.7' id='bootstrap-js'></script>
<script type='text/javascript' src='https://ngdc.ac.bd/wp-content/themes/ngdcrajit/js/jquery.ez-plus-custom.js?ver=5.9.7' id='jquery-ez-plus-js'></script>
<script type='text/javascript' src='https://ngdc.ac.bd/wp-content/themes/ngdcrajit/js/jquery.sticky-sidebar.min.js?ver=5.9.7' id='jquery-sticky-sidebar-js'></script>
<script type='text/javascript' src='https://ngdc.ac.bd/wp-content/themes/ngdcrajit/js/skip-link-focus-fix.js?ver=5.9.7' id='websdevusaecom-skip-link-focus-fix-js'></script>
<script type='text/javascript' id='websdevusaecom-custom-script-js-extra'>
/* <![CDATA[ */
var websdevusaecom_script_obj = {"rtl":"","sticky_header":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://ngdc.ac.bd/wp-content/themes/ngdcrajit/js/custom-script.js?ver=5.9.7' id='websdevusaecom-custom-script-js'></script>
<!--[if lt IE 9]>
<script type='text/javascript' src='https://ngdc.ac.bd/wp-content/themes/ngdcrajit/js/respond.min.js?ver=5.9.7' id='respond-js'></script>
<![endif]-->
<!--[if lt IE 9]>
<script type='text/javascript' src='https://ngdc.ac.bd/wp-content/themes/ngdcrajit/js/html5shiv.js?ver=5.9.7' id='html5shiv-js'></script>
<![endif]-->
<link rel="https://api.w.org/" href="https://ngdc.ac.bd/wp-json/" /><link rel="alternate" type="application/json" href="https://ngdc.ac.bd/wp-json/wp/v2/pages/3390" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://ngdc.ac.bd/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://ngdc.ac.bd/wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 5.9.7" />
<link rel="canonical" href="https://school-college.online/" />
<link rel='shortlink' href='https://school-college.online/' />
<link rel="alternate" type="application/json+oembed" href="https://ngdc.ac.bd/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fngdc.ac.bd%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://ngdc.ac.bd/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fngdc.ac.bd%2F&#038;format=xml" />
<link rel="icon" href="{{ asset('assets') }}/images/uploads/settings/{{ $setting->site_icon }}" sizes="32x32" />
<link rel="icon" href="{{ asset('assets') }}/images/uploads/settings/{{ $setting->site_icon }}" sizes="192x192" />
<link rel="apple-touch-icon" href="#" />
<link rel="stylesheet" href="{{ asset('assets') }}/plugins/toastr/toastr.min.css">

<meta name="msapplication-TileImage" content="#" />

	<script type="text/javascript">
<!--
    function toggle_visibility(foo) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>
</head>

<body class="home page-template page-template-templates page-template-page-home page-template-templatespage-home-php page page-id-3390 full">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0.49803921568627" /><feFuncG type="table" tableValues="0 0.49803921568627" /><feFuncB type="table" tableValues="0 0.49803921568627" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 0.27843137254902" /><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0" /><feFuncG type="table" tableValues="0 0.64705882352941" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.78039215686275 1" /><feFuncG type="table" tableValues="0 0.94901960784314" /><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.44705882352941 0.4" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.098039215686275 1" /><feFuncG type="table" tableValues="0 0.66274509803922" /><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><div id="page-websdevusa" class="site-websdevusa no-ecommerce-web">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

	<div class="container">
<section id="slider" class="slider">
    <div class="row">
        <div class="col-md-9" >
            <a href="{{ route('home') }}">
				<img src="{{ asset('assets') }}/images/uploads/sliders/2023-10-11-6526ac8c39ab1.png" alt="image" style="height:99px;margin-top:7px;width: 100%;margin-left: 10px;" >
			</a>
         </div>
        <div class="col-md-3">
            <p style="font-size: small; margin-top: 16px;"><i class="fa fa-envelope" aria-hidden="true"></i> dtmquranacademy@gmail.com <br>
                <i class="fa fa-globe"></i><a href="https://www.dtmqa.org/"> dtmqa.org </a> <br>
                <i class="fa fa-facebook"></i><a href="https://www.facebook.com/dtmqa"> www.facebook.com/dtmqa</a> <br>
                <i class="fa fa-address-book" aria-hidden="true"></i> 01915054987
			</p>
        </div>
    </div>
	<div id="banner" class="banner slider-header">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  	<ol class="carousel-indicators">
	  	@foreach($sliders as $key => $slider)
			<!-- <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li> -->
			<li data-target="#carousel-example-generic" data-slide-to="{{ $key }}" @if($key == 0) class="active" @endif></li>
		@endforeach
	</ol>

  <!-- Wrapper for slides -->
  	<div class="carousel-inner" role="listbox">
  		<div class="banner-bg">
        </div>
		<div class="carousel-caption">
			<div class="banner-text">
				<div class="site-branding">
					<h1 class="site-title animated fadeInRight text-center" style="display:none;"><a class="text-white-50" href="{{ route('home') }}" rel="home">DTMQA</a></h1>
					<!--<h1 class="site-title text-center text-white-50"><a class="text-white-50" href="{{ route('home') }}" rel="home"><img src="" alt="" class=""></a></h1>-->
				</div>
			</div>
        </div>
		@foreach($sliders as $key => $slider)
			<div class="carousel-item  @if($key == 0) active @endif">
				<img data-animation="animated zoomIn" src="{{ asset('assets') }}/images/uploads/sliders/{{ $slider->image }}" alt="" style='height:350px;' class="img-responsive"/>
			</div>
		@endforeach
	</div>

  <!-- Controls -->
<a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>
<script>
   // $('#carousel-example-generic').carousel({
 // interval: 3000,
 // pause: null
//})
/* Demo Scripts for Bootstrap Carousel and Animate.css article
* on SitePoint by Maria Antonietta Perna
*animation effects:https://mdbootstrap.com/docs/jquery/css/animations/
*/

(function( $ ) {

	//Function to animate slider captions
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';

		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}

	//Variables on page load
	var $myCarousel = $('#carousel-example-generic'),
		$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

	//Initialize carousel
	$myCarousel.carousel();

	//Animate captions in first slide on page load
	doAnimations($firstAnimatingElems);

	//Pause carousel
	$myCarousel.carousel('pause');


	//Other slides to be animated on carousel slide event
	$myCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	});

})(jQuery);
</script>
	</div>
</section>

@include('frontend.include.header')

<!-- #masthead -->
</div>
	@yield('content')

    @include('frontend.include.footer')
	<!-- #colophon -->
</div><!-- #page -->

<script type='text/javascript' src='https://ngdc.ac.bd/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9' id='regenerator-runtime-js'></script>
<script type='text/javascript' src='https://ngdc.ac.bd/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/ngdc.ac.bd\/wp-json\/","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://ngdc.ac.bd/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.5.6' id='contact-form-7-js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		{!! Toastr::message() !!}

        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
  $('#summernote').summernote();
});
</script>

@stack('js')
</body>
</html>
