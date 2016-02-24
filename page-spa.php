<?php
    /*
    Template Name: Spa
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
                        <div class="title block-2 no-float"><h2>Servicios<br/>SPA</h2></div>
                        <div class="main-intro">
                            <p class="no-float">Conoce nuestra propuesta pensada para el bienestar de tu cuerpo, mente y espíritu.</p>
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
                                <img src="<?php bloginfo('template_url'); ?>/imag/int/spa01.png" class="img-responsive" />
                                <div class="item-tour">
                                    <h4><a href="ficha_tours.html">Masajes</a></h4>
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
                                            <p>Aumenta la circulación sanguínea y libera endorfinas con nuestro masaje de relajación, que te ayudará a mejorar la oxigenación muscular de esos puntos tensionados del cuerpo. Y si el dolor es especialmente ...</p>
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
                                <img src="<?php bloginfo('template_url'); ?>/imag/int/spa02.png" class="img-responsive" />
                                <div class="item-tour">
                                    <h4><a href="ficha_tours.html">Hidromasajes</a></h4>
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
                                            <p>​Bajo el limpio cielo de Vicuña relájate en nuestras tinas de hidromasaje con agua caliente, que ayuda a eliminar toxinas y regenerar la piel. Con su efecto calmante y antiinflamatorio podrás combatir el insomnio ...</p>
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
                                <img src="<?php bloginfo('template_url'); ?>/imag/int/spa03.png" class="img-responsive" />
                                <div class="item-tour">
                                    <h4><a href="ficha_tours.html">Yoga</a></h4>
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
                                            <p>Activa tu energía con nuestras clases de Kundalini Yoga, que combina posturas, repetición de mantras, ejercicios de respiración, relajación y meditación, para aumentar tu bienestar físico y emocional ...</p>
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