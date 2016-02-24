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
                                <div class="cont-select">
                                    <p>Selecciona una localidad en este mapa del Valle de Elqui para desplegar más información</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/main-->
                </div>
            </div>
        <?php endwhile; endif; ?>
    <?php get_footer(); ?>