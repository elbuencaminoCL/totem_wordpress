<!DOCTYPE html>
<html class="not-ie" lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); if(is_home()||is_page('inicio')) { echo ' | '; bloginfo('description'); } ?></title>
    <?php if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php endwhile; endif; elseif(is_home()) : ?>
    <meta name="description" content="" />
    <?php else: ?>
    <meta name="description" content=""> 
    <?php endif; ?>
    <meta name="keywords" content="" /> 
    <?php if(is_home() || is_single() || is_page()) { echo '<meta name="robots" content="index,follow" />'; } else { echo '<meta name="robots" content="noindex,follow" />'; } ?>
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" media="screen">
    <link href=" <?php bloginfo('template_url'); ?>/css/no-responsive.css" rel="stylesheet" media="screen">
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-1.10.2.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-ui.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    <?php if(!is_page('reserva')) { ?>
        <link href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery.bxslider.css" rel="stylesheet" media="screen">
        <script src="<?php bloginfo('template_url'); ?>/js/jquery.jcarousel.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/jquery.lettering.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/jquery.bxslider.js" type="text/javascript"></script>
        <?php if (is_page('restaurant-y-bar-pataska') || is_page('carta-bar') || is_page('carta-restaurant')) { ?>
            <script type="text/javascript">
                $(document).ready(function(){
                    $('.bxslider').bxSlider({
                        pagerCustom: '#bx-pager',
                    });
                });
            </script>
        <?php } elseif(!is_page('info-de-contacto')) { ?>
            <script type="text/javascript">
                $(document).ready(function(){
                    $('.bxslider').bxSlider({
                        mode:'fade',
                        speed: 5000,
                        controls: false,
                        pagerCustom: '#bx-pager',
                        auto: true,
                    });
                });
            </script>
        <?php } ?>
        <?php if (is_page('inicio')) { ?>
            <script>
                $(document).ready(function() {
                    $(".block .title h2 a").lettering('words');
                });
            </script>
        <?php } ?>
        <?php if (is_page() && !is_page('inicio')) { ?>
            <script>
                $(document).ready(function() {
                    $(".top .title h2").lettering('words');
                    $(".block h3 a").lettering('words');
                    $(".cont-select p").lettering('words');
                });
            </script>
        <?php } ?>
        <?php if (is_page('servicios-spa') || is_singular('tours') || is_page('tours-y-actividades-nocturnos') || is_child(13)) { ?>
            <script>
                $(document).ready(function(){
                    $('.price-description').hide();
                    $('.description').each(function() {
                        var $dropdown = $(this);
                        $('.look-price', $dropdown).click(function(e) {
                            e.preventDefault();
                            $price = $('.price-description', $dropdown);
                            $price.slideToggle('fast', function() {
                                $('.look-price', $dropdown).toggleClass('current-open', $(this).is(':visible'));
                            });
                            $('.price-description').not($price).hide();
                            $('.price-description').not($price).parent().find('.look-price').text('» Ver Precio');
                            $(this).text('« Cerrar'); //texto activo
                            //remueve clases de otros contenedores
                            if($(this).hasClass('current-open')){
                                $('.look-price').removeClass('current-open');
                                $(this).text('» Ver Precio');
                            }
                            else{
                                $('.look-price').removeClass('current-open');
                                $(this).text('« Cerrar');
                            }
                            return false;
                        });
                    });
                    //oculta todos los precios
                    $('html').click(function(){
                        $('.price-description').hide();
                    });
                });
            </script>
        <?php } ?>
        <?php if(is_page('servicios-hotel')) { ?>
            <script>
                var scrolled=0;
                $(document).ready(function(){
                    $("#downClick").on("click" ,function(){
                        scrolled=scrolled+300;
                        $(".cover").animate({
                            scrollTop:  scrolled
                        });
                    });
                    $(".clearValue").on("click" ,function(){
                        scrolled=0;
                    });
                });
            </script>
        <?php } ?>
        <?php if(is_singular('tours') || is_page('servicios-spa') || is_page_template('page-detalle.php') || is_page_template('page-nocturnos.php')) { ?>
            <link href="<?php bloginfo('stylesheet_directory'); ?>/css/colorbox.css" rel="stylesheet" media="screen">
            <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.colorbox.js" type="text/javascript"></script>
            <script>
                $(document).ready(function(){
                    $(".ajax").colorbox({iframe:true, width:"70%", height:"70%"});
                });
            </script>
        <? } ?>
        <script type="text/javascript">
            setTimeout(onUserInactivity, 1000 * 600)
            function onUserInactivity() {
               window.location.href = "http://totem.terralhotel.cl"
            }
        </script>
        <?php if(is_single()) { ?>
            <link href="<?php bloginfo('stylesheet_directory'); ?>/css/colorbox.css" rel="stylesheet" media="screen">
            <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.colorbox.js" type="text/javascript"></script>
            <script>
                $(document).ready(function(){
                    $(".ajax").colorbox({iframe:true, width:"50%", height:"30%"});
                });
            </script>
        <? } ?>
        <?php if(is_page('lugares-de-interes')) { ?>
            <link href="<?php bloginfo('stylesheet_directory'); ?>/css/colorbox.css" rel="stylesheet" media="screen">
            <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.colorbox.js" type="text/javascript"></script>
            <script>
                $(document).ready(function(){
                    $(".ajax-modal").colorbox({iframe:true, width:"830px", height:"830px"});
                });
            </script>
        <? } ?>
    <? } ?>
    <?php if(is_page('info-de-contacto') || is_page('reserva') || is_page('evalua-tu-estadia')) { ?>   
        <!-- jQuery (required) & jQuery UI + theme (optional) -->
        <link href="<?php bloginfo('stylesheet_directory'); ?>/keyboard/docs/css/jquery-ui.min.css" rel="stylesheet">
        <script src="<?php bloginfo('stylesheet_directory'); ?>/keyboard/docs/js/jquery-1.12.0.min.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/keyboard/docs/js/jquery-ui.min.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/keyboard/docs/js/jquery-migrate-1.3.0.min.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.lettering.js" type="text/javascript"></script>
        <!-- keyboard widget css & script (required) -->
        <link href="<?php bloginfo('stylesheet_directory'); ?>/keyboard/css/keyboard.css" rel="stylesheet">
        <script src="<?php bloginfo('stylesheet_directory'); ?>/keyboard/js/jquery.keyboard.js"></script>
        <!-- keyboard extensions (optional) -->
        <script src="<?php bloginfo('stylesheet_directory'); ?>/keyboard/js/jquery.mousewheel.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/keyboard/js/jquery.keyboard.extension-typing.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/keyboard/js/jquery.keyboard.extension-autocomplete.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/keyboard/js/jquery.keyboard.extension-caret.js"></script>
        <!-- demo only -->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/keyboard/docs/css/font-awesome.min.css">
        <script src="<?php bloginfo('stylesheet_directory'); ?>/keyboard/docs/js/demo.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/keyboard/docs/js/jquery.tipsy.min.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/keyboard/docs/js/prettify.js"></script> <!-- syntax highlighting -->
        <script>
            $(document).ready(function(){
                $('#ipad-email, .quiz_end input[type="text"]').focus(function(){
                   $(this).removeAttr('placeholder');
                });
                $('#ipad-email, .quiz_end input[type="text"]').keyboard({
                    display: {
                        'bksp'   : '\u2190',
                        'enter'  : 'volver',
                        'default': 'ABC',
                        'meta1'  : '.?123',
                        'meta2'  : '#+=',
                        'accept' : '\u21d3'
                    },

                    layout: 'custom',
                    customLayout: {
                        'default': [
                            'q w e r t y u i o p {bksp}',
                            'a s d f g h j k l {enter}',
                            '{s} z x c v b n m @ . {s}',
                            '{meta1} {space} _ - {accept}'
                        ],
                        'shift': [
                            'Q W E R T Y U I O P {bksp}',
                            'A S D F G H J K L {enter}',
                            '{s} Z X C V B N M @ . {s}',
                            '{meta1} {space} _ - {accept}'
                        ],
                        'meta1': [
                            '1 2 3 4 5 6 7 8 9 0 {bksp}',
                            '` | { } % ^ * / \' {enter}',
                            '{meta2} $ & ~ # = + . {meta2}',
                            '{default} {space} ! ? {accept}'
                        ],
                        'meta2': [
                            '[ ] { } \u2039 \u203a ^ * " , {bksp}',
                            '\\ | / &lt; &gt; $ \u00a3 \u00a5 \u2022 {enter}',
                            '{meta1} \u20ac & ~ # = + . {meta1}',
                            '{default} {space} ! ? {accept}'
                        ]
                    }

                });
            });
        </script>
    <?php } ?>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-44982249-12', 'auto');
        ga('send', 'pageview');

    </script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php if(!is_page('reserva')) { ?>
    <div class="wrapper">
    <? } ?>