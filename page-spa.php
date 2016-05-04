<?php
    /*
    Template Name: Spa
    */
?>

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
                    <div class="top" id="<? echo $post->post_name; ?>">
                        <?php if( get_field('_subir_imagen') ): ?>
                            <img src="<?php the_field('_subir_imagen'); ?>" class="img-responsive" />
                        <?php endif; ?>
                        <div class="fixed-position">
                            <div class="title"><h2><? the_title();?></h2></div>
                            <div class="main-intro">
                                <p class="no-float"><? the_excerpt();?></p>
                            </div>
                        </div>
                    </div>
                </header>
                <!--/header-->

                <!--main-->
                <div id="main" class="clearfix">
                    <div class="cont-servicios">
                        <div class="clearfix">
                            <div class="cont-grid-detail col-xs-12">
                                <?php
                                    $connected = new WP_Query( array(
                                        'connected_type' => 'tours_to_page',
                                        'connected_items' => get_queried_object(),
                                        'nopaging' => true,
                                    ) );
                                    if ( $connected->have_posts() ) :
                                ?>
                                <?php $i=0; while ( $connected->have_posts() ) : $connected->the_post(); ?>
                                    <? if ( $i === 0 ) $pos = ''; elseif ( $i > 2 ) $pos = 'bloque2'; else $pos = 'bloque1';?>
                                        <div class="block col-xs-12 noc <? echo $pos ;?>">
                                            <?php if(has_post_thumbnail()) :?>
                                                <?php the_post_thumbnail('wide', array('class' => 'img-responsive'));?>
                                            <?php endif; ?>
                                            <div class="item-tour">
                                                <h4><a href="<? the_permalink();?>"><? the_title();?></a></h4>
                                                <div class="description">
                                                    <div class="top-description">
                                                        <?
                                                            global $post;
                                                            if (has_excerpt( $post->ID )) {
                                                                echo '<p>'.get_the_excerpt().'</p>';
                                                            }
                                                        ?>
                                                    </div>
                                                    <div class="price-description">
                                                        <div class="price">
                                                            <div class="cont-buttons clearfix">
                                                                <a href="<? the_permalink();?>" class="button info">Más Info</a>
                                                                <!--<a href="<? bloginfo('wpurl')?>/reserva/" class="button reserva ajax">Reservar</a>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cont-hide">
                                                        <a href="#;" class="look-price">» Ver Precio</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php $i++; endwhile; ?>
                                <?php wp_reset_postdata();
                                    endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/main-->
            </div>
        <?php endwhile; endif; ?>
    <?php get_footer(); ?>