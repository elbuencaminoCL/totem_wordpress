<?php
    /*
    Template Name: Lugares de Interés
    */
?>

    <?php get_header(); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="container">
                <div class="cont-lugares">
                    <!--header-->
                    <header id="header" class="header clearfix shadow">
                        <div class="cont-auxi">
                            <div class="left-auxi">
                                <a href="javascript:history.back(1);">Volver</a>
                            </div>
                            <div class="right-auxi">
                                <?php  
                                    if ( qtrans_getLanguage() == 'es' ) {
                                        echo '<a href="'.get_bloginfo('wpurl').'/inicio/">Inicio</a>';
                                    }
                                    elseif ( qtrans_getLanguage() == 'en' ) {
                                        echo '<a href="'.get_bloginfo('wpurl').'/en/inicio/">Inicio</a>';
                                    }
                                ?>
                            </div>
                        </div>
                    </header>
                    <!--/header-->

                    <!--main-->
                    <div id="main" class="clearfix">
                        <div class="cont-interes">
                            <div class="container clearfix">
                                <div class="cont-select no-float">
                                    <p>Selecciona una localidad en este mapa del Valle de Elqui para desplegar más información</p>
                                </div>
                            </div>
                        </div>
                        <div class="cont-mapa">
                            <div class="mapa">
                                <img src="<?php bloginfo('template_url'); ?>/imag/main/mapa.png" alt="" width="1080" height="556" usemap="#vicuna"/>
                                <map name="vicuna">
                                    <area shape="circle" coords="184,342,10" class="ajax-modal" href="http://totem.terralhotel.cl/observatorio-cerro-tololo/">
                                    <area shape="circle" coords="43,268,10" class="ajax-modal" href="http://totem.terralhotel.cl/embalse-puclaro/">
                                    <area shape="circle" coords="550,288,10" class="ajax-modal" href="http://totem.terralhotel.cl/paihuano/">
                                    <area shape="circle" coords="621,308,10" class="ajax-modal" href="http://totem.terralhotel.cl/monte-grande/">
                                    <area shape="circle" coords="789,340,12" class="ajax-modal" href="http://totem.terralhotel.cl/los-nichos/">
                                    <area shape="rect" coords="212,197,242,239" class="ajax-modal" href="http://totem.terralhotel.cl/vicuna/">
                                    <area shape="circle" coords="687,328,10" class="ajax-modal" href="http://totem.terralhotel.cl/pisco-elqui/">
                                    <area shape="circle" coords="803,226,11" class="ajax-modal" href="http://totem.terralhotel.cl/cochiguaz/">
                                    <area shape="circle" coords="865,331,9" class="ajax-modal" href="http://totem.terralhotel.cl/horcon-alcohuaz/">
                                    <area shape="circle" coords="962,308,10" class="ajax-modal" href="http://totem.terralhotel.cl/horcon-alcohuaz/">
                                    <area shape="circle" coords="927,78,9" class="ajax-modal" href="http://totem.terralhotel.cl/cordillera-de-los-andes/">
                                </map>
                            </div>
                        </div>
                    </div>
                    <!--/main-->
                </div>
            </div>
        <?php endwhile; endif; ?>
    <?php get_footer(); ?>