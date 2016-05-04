    <?php get_header(); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php if(is_page('reserva')) { ?>
                <div class="cont-contacto keyboard">
                    <? the_content();?>
                </div>
            <? } else { ?>
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
                    </div>
                </header>
                <!--/header-->

                <!--main-->
                <div id="main" class="clearfix">
                    <div class="intro extra-padding shadow clearfix">
                        <div class="col-xs-12">
                            <div class="container">
                                <div class="col-xs-9 no-float">
                                    <p><? the_excerpt();?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/main-->
            <? } ?>
        <?php endwhile; endif; ?>
    <?php get_footer(); ?>