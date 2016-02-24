    <?php get_header(); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="container">
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
                    <div class="cont-servicios">
                        <div class="clearfix">
                            <div class="tour-title">
                                <h4><? the_title();?></h4>
                            </div>
                            <div class="cont-data shadow clearfix">
                                <ul class="clearfix">
                                    <? 
                                        if(get_post_meta($post->ID, '_duracion_tour', true)){
                                            echo '<li>';
                                                echo '<span>Duración:</span> '.get_post_meta($post->ID, '_duracion_tour', true);
                                            echo '</li>';
                                        }
                                    ?>
                                    <? 
                                        if(get_post_meta($post->ID, '_cantidad_personas', true)){
                                            echo '<li>';
                                                echo '<span>C. Personas:</span> '.get_post_meta($post->ID, '_cantidad_personas', true);
                                            echo '</li>';
                                        }
                                    ?>
                                    <? 
                                        if(get_post_meta($post->ID, '_esfuerzo', true)){
                                            echo '<li>';
                                                echo '<span>Esfuerzo:</span> '.get_post_meta($post->ID, '_esfuerzo', true);
                                            echo '</li>';
                                        }
                                    ?>
                                    <? 
                                        if(get_post_meta($post->ID, '_precio_pesos', true)){
                                            echo '<li>';
                                                echo '<span>Precio:</span> CLP '.get_post_meta($post->ID, '_precio_pesos', true);
                                            echo '</li>';
                                        }
                                    ?>
                                    <li><a href="#" class="button reserva">Reservar</a></li>
                                </ul>
                            </div>
                            <div class="cont-cell col-xs-12 shadow clearfix">
                                <div class="white-col col-xs-7">
                                    <div class="cont-description">
                                        <h5>Descripción:</h5>
                                        <? the_content();?>
                                    </div>
                                </div>
                                <div class="brown-col col-xs-5">
                                    <div class="top-col shadow">
                                        <?php if( get_field('_incluye') ): ?>
                                            <div class="cont-top">
                                                <?php the_field('_incluye'); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="foot-col">
                                        <div class="price">
                                            <div class=""><span>Precio</span> clp 23.000 / usd 32</div>
                                            <a href="#" class="button reserva upper">Reservar</a>
                                        </div>
                                    </div>
                                </div>
                            </diV>
                        </div>
                    </div>
                </div>
                <!--/main-->
            </div>
        <?php endwhile; endif; ?>
    <?php get_footer(); ?>