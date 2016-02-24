<?php
    /*
    Template Name: Tours Nocturnos
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
                    <div class="fixed-position">
                        <div class="subtitle">
                            <h2>Tours Nocturnos</h2>
                            <h3>Turismo Astronómico</h3>
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
                            <div class="block col-xs-12 noc">
                                <img src="<?php bloginfo('template_url'); ?>/imag/int/nocturno01.png" class="img-responsive" />
                                <div class="item-tour">
                                    <h4><a href="ficha_tours.html">Bicicleta Altoguaz Horcón</a></h4>
                                    <div class="tour-detail clearfix">
                                        <div class="left">
                                            <span>Lugar: Pisco del Elqui</span>
                                        </div>
                                        <div class="right">
                                            <span>Duración: 4 hrs. aprox.</span>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <div class="top-description">
                                            <p>Al interior de Vicuña y cerca de viñedos se encuentra Alfa Aldea, un observatorio con anfiteatro al aire libre, atención personalizada, y una cúpula desde donde puedes observar la galaxia a través de sus modernos ...</p>
                                        </div>
                                        <div class="price-description">
                                            <div class="price">
                                                Desde <span>CLP 40 000 / USD 54.37</span>
                                            </div>
                                            <div class="cont-buttons clearfix">
                                                <a href="ficha_tours.html" class="button info">Más Info</a>
                                                <a href="#" class="button reserva">Reservar</a>
                                            </div>
                                        </div>
                                        <div class="cont-hide">
                                            <a href="#;" class="look-price">» Ver Precio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block col-xs-12 noc">
                                <img src="<?php bloginfo('template_url'); ?>/imag/int/nocturno02.png" class="img-responsive" />
                                <div class="item-tour">
                                    <h4><a href="ficha_tours.html">Bicicleta Altoguaz Horcón</a></h4>
                                    <div class="tour-detail clearfix">
                                        <div class="left">
                                            <span>Lugar: Pisco del Elqui</span>
                                        </div>
                                        <div class="right">
                                            <span>Duración: 4 hrs. aprox.</span>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <div class="top-description">
                                            <p>​Al caer la noche redescubre los cielos del Valle de Elqui con este trekking de 4 kilómetros por la montaña. Junto a un experimentado guía caminarás por senderos arrieros de Pisco de Elqui, desde donde podrás ...</p>
                                        </div>
                                        <div class="price-description">
                                            <div class="price">
                                                Desde <span>CLP 40 000 / USD 54.37</span>
                                            </div>
                                            <div class="cont-buttons clearfix">
                                                <a href="ficha_tours.html" class="button info">Más Info</a>
                                                <a href="#" class="button reserva">Reservar</a>
                                            </div>
                                        </div>
                                        <div class="cont-hide">
                                            <a href="#;" class="look-price">» Ver Precio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block col-xs-12 noc">
                                <img src="<?php bloginfo('template_url'); ?>/imag/int/nocturno03.png" class="img-responsive" />
                                <div class="item-tour">
                                    <h4><a href="ficha_tours.html">Bicicleta Altoguaz Horcón</a></h4>
                                    <div class="tour-detail clearfix">
                                        <div class="left">
                                            <span>Lugar: Pisco del Elqui</span>
                                        </div>
                                        <div class="right">
                                            <span>Duración: 4 hrs. aprox.</span>
                                        </div>
                                    </div>
                                    <div class="description">
                                        <div class="top-description">
                                            <p>38 kilómetros al sur de Vicuña, en la localidad de Pisco de Elqui, comienza esta Astro Experiencia. En el sector de quebrada Las Gredas, en la montaña, el guía relatará los misterios que se esconden...</p>
                                        </div>
                                        <div class="price-description">
                                            <div class="price">
                                                Desde <span>CLP 40 000 / USD 54.37</span>
                                            </div>
                                            <div class="cont-buttons clearfix">
                                                <a href="ficha_tours.html" class="button info">Más Info</a>
                                                <a href="#" class="button reserva">Reservar</a>
                                            </div>
                                        </div>
                                        <div class="cont-hide">
                                            <a href="#;" class="look-price">» Ver Precio</a>
                                        </div>
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