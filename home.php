<?php
    /*
        Template Name: Home
    */
?>

    <?php get_header(); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="container no-float">
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
                    <div class="intro shadow clearfix">
                        <div class="col-xs-12">
                            <div class="col-xs-9 no-float">
                                <p><? the_excerpt();?></p>
                            </div>
                        </div>
                    </div>
                    <div class="cont-servicios">
                        <div class="clearfix">
                            <div class="cont-interior col-xs-12">
                                <?php if(function_exists('home_pages')) home_pages("id=".$post->ID."&class=hpage&childs=true"); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/main-->
            </div>
        <?php endwhile; endif; ?>
    <?php get_footer(); ?>