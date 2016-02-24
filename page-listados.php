<?php
    /*
    Template Name: Listados
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
                    <?php if ( is_page('servicios-hotel') ) { ?>
                        <div class="fixed-position">
                            <div class="title"><h2><? the_title();?></h2></div>
                            <div class="main-intro">
                                <p class="no-float"><?php the_excerpt();?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </header>
            <!--/header-->

            <?php if ( is_page('guia-de-servicios') ) { ?>
                <div id="main" class="clearfix">
                    <div class="cont-menu no-padding">
                        <div class="intro-guia shadow">
                            <div class="col-xs-10 no-float">
                                <p>Conocida como la capital del Valle de Elqui, Vicuña es una comuna que posee una gran variedad de servicios para viajeros, turistas y habitantes. Con nuestra guía de servicios te ayudamos a encontrar todo lo que necesitas.</p>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="item-servicios border-div clearfix">
                                <div class="col-xs-8 no-float clearfix">
                                    <div class="cont-circle">
                                        <span>01</span>
                                    </div>
                                    <div class="vertical"><p><strong>Hospital Juan de Dios:</strong> ​Servicio de atención médica de la comuna de Vicuña, ubicado en calle Ignacio Carrera Pinto s/n.</p></div>
                                </div>
                            </div>
                            <div class="item-servicios border-div clearfix">
                                <div class="col-xs-8 no-float clearfix">
                                    <div class="cont-circle">
                                        <span>02</span>
                                    </div>
                                    <div class="vertical"><p><strong>Carabineros:</strong> ​La ​Quinta Comisaría de Carabineros de Vicuña se encuentra en calle Las Delicias #599.</p></div>
                                </div>
                            </div>
                            <div class="item-servicios border-div clearfix">
                                <div class="col-xs-8 no-float clearfix">
                                    <div class="cont-circle">
                                        <span>03</span>
                                    </div>
                                    <div class="vertical"><p><strong>Cajero automático:</strong> Puedes encontrar un cajero automático dentro de la Quinta comisaría de Carabineros de Vicuña en calle Las Delicias #599, y también en el interior del supermercado Unimarc, ubicado en calle Chacabuco #302.</p></div>
                                </div>
                            </div>
                            <div class="item-servicios border-div clearfix">
                                <div class="col-xs-8 no-float clearfix">
                                    <div class="cont-circle">
                                        <span>04</span>
                                    </div>
                                    <div class="vertical"><p><strong>Farmacia:</strong> ​Existe una farmacia Cruz Verde en la calle Chacabuco #302, local 2, y otra en calle Arturo Prat #182. Además, Vicuña cuenta con la Farmacia Rivera en calle San Martín #219.</p></div>
                                </div>
                            </div>
                            <div class="item-servicios border-div clearfix">
                                <div class="col-xs-8 no-float clearfix">
                                    <div class="cont-circle">
                                        <span>05</span>
                                    </div>
                                    <div class="vertical"><p><strong>Bencinera:</strong> ​Si necesitas recargar combustible, encontrarás una bomba Copec en Av. Las Delicias con Av. Sargento Aldea. Y también una bomba Shell en calle Domingo Faustino Sarmiento con calle Libertador Bernardo O’Higgins.</p></div>
                                </div>
                            </div>
                            <div class="item-servicios border-div clearfix">
                                <div class="col-xs-8 no-float clearfix">
                                    <div class="cont-circle">
                                        <span>06</span>
                                    </div>
                                    <div class="vertical"><p><strong>Terminal de Buses:</strong> En Arturo Prat #150 se ubica el Terminal Rodoviario de Vicuña, estación de buses interurbanos desde donde se puede viajar a distintos destinos nacionales.</p></div>
                                </div>
                            </div>
                            <div class="item-servicios border-div clearfix">
                                <div class="col-xs-8 no-float clearfix">
                                    <div class="cont-circle">
                                        <span>07</span>
                                    </div>
                                    <div class="vertical"><p><strong>Banco:</strong> Puedes encontrar un BancoEstado situado en calle Chacabuco #394.</p></div>
                                </div>
                            </div>
                            <div class="item-servicios border-div clearfix">
                                <div class="col-xs-8 no-float clearfix">
                                    <div class="cont-circle">
                                        <span>08</span>
                                    </div>
                                    <div class="vertical"><p><strong>Oficina de correos:</strong>  ​La oficina de correos Chilexpress se localiza en la calle Arturo Prat #331.</p></div>
                                </div>
                            </div>
                            <div class="item-servicios border-div clearfix">
                                <div class="col-xs-8 no-float clearfix">
                                    <div class="cont-circle">
                                        <span>09</span>
                                    </div>
                                    <div class="vertical"><p><strong>Oficina de información turística:</strong> En la Plaza de Armas de Vicuña, en la conocida Torre Bauer, encontrarás una oficina con información turística del Valle de Elqui.</p></div>
                                </div>
                            </div>
                            <div class="item-servicios border-div clearfix">
                                <div class="col-xs-8 no-float clearfix">
                                    <div class="cont-circle">
                                        <span>10</span>
                                    </div>
                                    <div class="vertical"><p><strong>Municipalidad de Vicuña:</strong>  En la calle San Martín #275 se ubica el municipio de la comuna.</p></div>
                                </div>
                            </div>
                            <div class="item-servicios border-div no-border clearfix">
                                <div class="col-xs-8 no-float clearfix">
                                    <div class="cont-circle">
                                        <span>11</span>
                                    </div>
                                    <div class="vertical"><p><strong>Bomberos:</strong> La Segunda Compañía de Bomberos de Vicuña está emplazada en calle San Martín, al lado del supermercado Unimarc.</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } elseif (is_page('servicios-hotel')) { ?>
                <!--main-->
                <div id="main" class="clearfix">
                    <div class="cont-menu no-padding">
                        <div class="clearfix">
                            <div class="cover clearfix">
                                <div class="item-servicios border-div clearfix">
                                    <div class="col-xs-10 no-float clearfix">
                                        <img src="<?php bloginfo('template_url'); ?>/imag/auxi/salon_icon.png" class="img-responsive" />
                                        <div class="vertical"><p><strong>Salón de eventos:</strong> Entregamos un servicio integral para que tu encuentro sea inolvidable. Tenemos una capacidad para 100 personas, y puedes contratar el proyector con telón, amplificación y coffe break si es que los necesitas.</p></div>
                                    </div>
                                </div>
                                <div class="item-servicios border-div clearfix">
                                    <div class="col-xs-10 no-float clearfix">
                                        <img src="<?php bloginfo('template_url'); ?>/imag/auxi/desayuno_icon.png" class="img-responsive" />
                                        <div class="vertical"><p><strong>Desayuno Buffet:</strong> Desde las 7:30 hasta las 10:30 horas ofrecemos un delicioso desayuno Vicuñense, de campo, para comenzar el día de la mejor forma.</p></div>
                                    </div>
                                </div>
                                <div class="item-servicios border-div clearfix">
                                    <div class="col-xs-10 no-float clearfix">
                                        <img src="<?php bloginfo('template_url'); ?>/imag/auxi/piscina_icon.png" class="img-responsive" />
                                        <div class="vertical"><p><strong>Piscina:</strong> Al aire libre, de 72 m2, perfecta para refrescarse en un caluroso día de Vicuña. Operativa todo el año, apta para niños y niñas.</p></div>
                                    </div>
                                </div>
                                <div class="item-servicios border-div clearfix">
                                    <div class="col-xs-10 no-float clearfix">
                                        <img src="<?php bloginfo('template_url'); ?>/imag/auxi/habitacion_icon.png" class="img-responsive" />
                                        <div class="vertical"><p><strong>Servicio a la habitación:</strong> El desayuno a la cama y los mejores aperitivos pueden estar a sólo un llamado de distancia, con nuestro servicio de atención personalizado entre las 08:00 y 22:30 horas.</p></div>
                                    </div>
                                </div>
                                <div class="item-servicios border-div clearfix">
                                    <div class="col-xs-10 no-float clearfix">
                                        <img src="<?php bloginfo('template_url'); ?>/imag/auxi/recepcion_icon.png" class="img-responsive" />
                                        <div class="vertical"><p><strong>Recepción:</strong> Atenta a tus necesidades las 24 horas del día.</p></div>
                                    </div>
                                </div>
                                <div class="item-servicios border-div clearfix">
                                    <div class="col-xs-10 no-float clearfix">
                                        <img src="<?php bloginfo('template_url'); ?>/imag/auxi/bilingue_icon.png" class="img-responsive" />
                                        <div class="vertical"><p><strong>Personal bilingüe:</strong> Dispuestos a responder a todas tus dudas.</p></div>
                                    </div>
                                </div>
                                <div class="item-servicios border-div clearfix">
                                    <div class="col-xs-10 no-float clearfix">
                                        <img src="<?php bloginfo('template_url'); ?>/imag/auxi/wifi_icon.png" class="img-responsive" />
                                        <div class="vertical"><p><strong>Wi-Fi:</strong> Disponible en habitaciones e instalaciones de Terral Hotel &amp; Spa.</p></div>
                                    </div>
                                </div>
                                <div class="item-servicios border-div clearfix">
                                    <div class="col-xs-10 no-float clearfix">
                                        <img src="<?php bloginfo('template_url'); ?>/imag/auxi/tv_icon.png" class="img-responsive" />
                                        <div class="vertical"><p><strong>TV Cable:</strong> Satelital, habilitado en cada habitación para la entretención de nuestros huéspedes.</p></div>
                                    </div>
                                </div>
                                <div class="item-servicios border-div clearfix">
                                    <div class="col-xs-10 no-float clearfix">
                                        <img src="<?php bloginfo('template_url'); ?>/imag/auxi/climatizacion_icon.png" class="img-responsive" />
                                        <div class="vertical"><p><strong>Edificio climatizado:</strong> Con aire acondicionado y calefacción, para responder a las condiciones climáticas del Valle de Elqui.</p></div>
                                    </div>
                                </div>
                                <div class="item-servicios border-div clearfix">
                                    <div class="col-xs-10 no-float clearfix">
                                        <img src="<?php bloginfo('template_url'); ?>/imag/auxi/estacionamiento_icon.png" class="img-responsive" />
                                        <div class="vertical"><p><strong>Estacionamiento:</strong> Vigilado las 24 horas del día, con capacidad para 50 vehículos. Gratuito para huéspedes.</p></div>
                                    </div>
                                </div>
                                <div class="item-servicios border-div clearfix">
                                    <div class="col-xs-10 no-float clearfix">
                                        <img src="<?php bloginfo('template_url'); ?>/imag/auxi/overlanders_icon.png" class="img-responsive" />
                                        <div class="vertical"><p><strong>Estacionamiento para overlanders:</strong> Podemos albergar hasta 18 motorhomes en Terral Hotel &amp; Spa, donde caravanas provenientes de diversos lugares del mundo podrán disfrutar de nuestros servicios junto a lo mejor del Valle de Elqui.</p></div>
                                    </div>
                                </div>
                                <div class="item-servicios border-div clearfix">
                                    <div class="col-xs-10 no-float clearfix">
                                        <img src="<?php bloginfo('template_url'); ?>/imag/auxi/traslados_icon.png" class="img-responsive" />
                                        <div class="vertical"><p><strong>Traslados desde / hacia aeropuerto:</strong> La distancia entre Terral Hotel &amp; Spa y el aeropuerto “La Florida” de La Serena es de aprox. 62 kilómetros. Para su comodidad, ofrecemos a nuestros huéspedes un servicio de traslado confiable y puntual.</p></div>
                                    </div>
                                </div>
                                <div class="item-servicios border-div clearfix">
                                    <div class="col-xs-10 no-float">
                                        <img src="<?php bloginfo('template_url'); ?>/imag/auxi/safe_icon.png" class="img-responsive" />
                                        <div class="vertical"><p><strong>Caja de seguridad:</strong> En cada habitación, para la protección de nuestros huéspedes.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/main-->
            <?php } ?>
        <?php endwhile; endif; ?>
    <?php get_footer(); ?>