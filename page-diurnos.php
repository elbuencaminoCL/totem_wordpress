<?php
/*
Template Name: Tours Diurnos
*/
?>

    <?php get_header(); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="container">
                <div class="cont-servicios">
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
                            <div class="fixed-position">
                                <div class="title block-3 no-float"><h2><? the_title();?></h2></div>
                                <div class="main-intro">
                                    <p class="no-float"><? the_excerpt();?></p>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!--/header-->

                    <?
                        $template = get_post_meta( $post->ID, '_seleccione_template', true);
                        if($template=='4 bloques + 1 destacado') {
                            include(TEMPLATEPATH .'/inc/block-5.php');
                        } 
                        if($template=='4 bloques') {
                            if(function_exists('diurnos_pages')) diurnos_pages("id=".$post->ID."&class=dp&childs=true");
                        } 
                        if($template=='3 bloques') {
                            include(TEMPLATEPATH .'/inc/block-3.php');
                        }
                    ?>
                </div>
            </div>
        <?php endwhile; endif; ?>
    <?php get_footer(); ?>