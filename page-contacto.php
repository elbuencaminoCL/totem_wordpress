<?php
    /*
    Template Name: Contacto
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
                <div class="top" id="<? echo $post->post_name; ?>">
                    <?php if( get_field('_subir_imagen') ): ?>
                        <img src="<?php the_field('_subir_imagen'); ?>" class="img-responsive" />
                    <?php endif; ?>
                    <div class="fixed-position">
                        <div class="title"><h2><? the_title();?></h2></div>
                    </div>
                </div>
            </header>
            <!--/header-->

            <!--main-->
            <div id="main" class="clearfix">
                <div class="cont-menu no-padding">
                    <div class="cont-info">
                        <div class="col-xs-8 no-float">
                            <p class="first">Para dudas o consultas llama al <strong>+56 512412217</strong> o envía un mail a <strong>reservas@terralhotel.cl</strong></p>
                            <h3>Síguenos en:</h3>
                            <div class="social">
                                <ul>
                                    <li class="facebook-totem">/TerralHotelSpa</li>
                                    <li class="twitter-totem">@TerralHotelSpa</li>
                                </ul>
                            </div>
                            <p>y entérate de todas nuestras ofertas y novedades</p>
                        </div>
                        <div class="keyboard">
                            <div class="col-xs-9 no-float">
                                <label>Ingresa tu email</label>
                                <? echo do_shortcode('[contact-form-7 id="777" title="Contacto"]');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/main-->
        <?php endwhile; endif; ?>
    <?php get_footer(); ?>