<?php
    /*
    Template Name: Detalle Tours
    */
?>

    <?php get_header(); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="container no-float">
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
                        <div class="fixed-position fixed-subtitle">
                            <div class="subtitle">
                                <? 
                                    if(get_post_meta($post->ID, '_agregar_titulo_alternativo', true)){
                                        echo '<h2>'.get_post_meta($post->ID, '_agregar_titulo_alternativo', true).'</h2>';
                                    }
                                ?>
                                <? 
                                    if(get_post_meta($post->ID, '_agregar_subtitulo', true)){
                                        echo '<h3>'.get_post_meta($post->ID, '_agregar_subtitulo', true).'</h3>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </header>
                <!--/header-->

                <!--main-->
                <div id="main" class="clearfix">
                    <div class="cont-servicios">
                        <div class="clearfix">
                            <?php
                                $connected = new WP_Query( array(
                                    'connected_type' => 'tours_to_page',
                                    'connected_items' => get_queried_object(),
                                    'nopaging' => true,
                                ) );

                                if ( $connected->have_posts() ) :
                            ?>
                            <div class="cont-grid-detail <? if ($i>3) { ?>diurnos <? } ?>col-xs-12">
                                    <?php $i=0; while ( $connected->have_posts() ) : $connected->the_post(); ?>
                                        <? if ( $i === 0 ) $pos = ''; elseif ( $i > 2 ) $pos = 'bloque2'; else $pos = 'bloque1';?>
                                        <? if ($i=3) { ?>
                                        <div class="block col-xs-12 noc <? echo $pos ;?>">
                                        <? } else { ?>
                                        <div class="block col-xs-6 <? echo $pos ;?>">
                                        <? } ?>
                                            <? if ($i=3) { ?>
                                                <?php if(has_post_thumbnail()) :?>
                                                    <?php the_post_thumbnail('horizontal-image', array('class' => 'img-responsive'));?>
                                                <?php endif; ?>
                                            <? } else { ?>
                                                <?php if(has_post_thumbnail()) :?>
                                                    <?php the_post_thumbnail('ficha', array('class' => 'img-responsive'));?>
                                                <?php endif; ?>
                                            <? } ?>
                                            <div class="item-tour">
                                                <h4><a href="<? the_permalink();?>"><? the_title();?></a></h4>
                                                <div class="tour-detail clearfix">
                                                    <div class="left">
                                                        <? 
                                                            if(get_post_meta($post->ID, '_lugar', true)){
                                                                echo '<span>Lugar: '.get_post_meta($post->ID, '_lugar', true).'</span>';
                                                            }
                                                        ?>
                                                    </div>
                                                    <div class="right">
                                                        <? 
                                                            if(get_post_meta($post->ID, '_duracion_tour', true)){
                                                                echo '<span>Duración: '.get_post_meta($post->ID, '_duracion_tour', true).'</span>';
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="description">
                                                    <div class="top-description">
                                                        <?
                                                            global $post;
                                                            if (has_excerpt( $post->ID )) {
                                                                echo '<p>'.excerpt(35).' ...</p>';
                                                            }
                                                        ?>
                                                    </div>
                                                    <div class="price-description">
                                                        <? 
                                                            if(get_post_meta($post->ID, '_precio_pesos', true)){
                                                                echo '<div class="price">';
                                                                    echo 'Desde: <span>CLP '.get_post_meta($post->ID, '_precio_pesos', true).' / USD '.get_post_meta($post->ID, '_precio_dolares', true).'</span>';
                                                                echo '</div>';
                                                            }
                                                        ?>
                                                        <div class="cont-buttons clearfix">
                                                            <a href="<? the_permalink();?>" class="button info">Más Info</a>
                                                            <a href="#" class="button reserva">Reservar</a>
                                                        </div>
                                                    </div>
                                                    <div class="cont-hide">
                                                        <a href="#;" class="look-price">» Ver Precio</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php $i++; endwhile; ?>
                                </div>
                            <?php wp_reset_postdata();
                                endif;
                            ?>
                        </div>
                    </div>
                </div>
                <!--/main-->
            </div>
        <?php endwhile; endif; ?>
    <?php get_footer(); ?>