<?php
/*
Template Name: Landing
*/
?>

    <?php get_header(); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!--header-->
            <header id="header" class="header clearfix shadow">
                <div class="top clearfix">
                    <div class="col-xs-12">
                        <?php if( get_field('_subir_imagen') ): ?>
                            <img src="<?php the_field('_subir_imagen'); ?>" class="img-responsive" />
                        <?php endif; ?>
                        <h1><a href="<?php bloginfo('wpurl'); ?>"><img src="<?php bloginfo('template_url'); ?>/imag/logo/logo.png" class="img-responsive" /></a></h1>
                    </div>
                </div>
            </header>
            <!--/header-->

        	<!--main-->
            <div id="main" class="clearfix">
                <div class="intro clearfix">
                    <div class="col-xs-12">
                        <div class="container">
                            <div class="col-xs-5 no-float">
                                <div class="cont-landing">
                                    <h3>Seleccione su idioma</h3>
                                    <h4>Select your language</h4>
                                    <div class="cont-buttons">
                                        <a href="<?php bloginfo('wpurl'); ?>/inicio/" class="button clearfix">Español</a>
                                        <a href="<?php bloginfo('wpurl'); ?>/en/inicio/" class="button clearfix">English</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/main-->
        <?php endwhile; endif; ?>
    <?php get_footer(); ?>