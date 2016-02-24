<?php
    /*
    Template Name: Restaurant-Bar
    */
?>

    <?php get_header(); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
                <div class="top">
                    <?php if( get_field('_subir_imagen') ): ?>
                        <img src="<?php the_field('_subir_imagen'); ?>" class="img-responsive" />
                    <?php endif; ?>
                    <div class="fixed-title">
                        <img src="<?php bloginfo('template_url'); ?>/imag/logo/logo_restaurant.png" class="img-responsive top-img" />
                    </div>
                    <div class="fixed-position">
                        <div class="main-intro">
                            <p class="no-float"><a href="#"><img src="<?php bloginfo('template_url'); ?>/imag/auxi/play.png" width="209" /></a></p>
                        </div>
                    </div>
                </div>
            </header>
            <!--/header-->

            <!--main-->
            <div id="main" class="clearfix">
                <div class="intro extra-padding shadow clearfix">
                    <div class="col-xs-12">
                        <div class="container">
                            <div class="col-xs-9 no-float">
                                <? the_content();?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/main-->
        <?php endwhile; endif; ?>
    <?php get_footer(); ?>