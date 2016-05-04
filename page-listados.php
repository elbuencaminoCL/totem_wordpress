<?php
    /*
    Template Name: Listados
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
                    <div class="top" id="<? echo $post->post_name; ?>">
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
                                    <? the_content();?>
                                </div>
                            </div>
                            <div class="clearfix">
                                <?php if( have_rows('_ingresar_servicio') ): ?>
                                    <?php while( have_rows('_ingresar_servicio') ): the_row(); 
                                        $serv = get_sub_field('_nombre_servicio');
                                        $num = get_sub_field('_numero_servicio');
                                        $descripcion = get_sub_field('_descripcion_servicio');
                                    ?>
                                        <div class="item-servicios border-div clearfix">
                                            <div class="col-xs-10 no-float clearfix">
                                                <?php echo '<img src="'.$icon.'" class="img-responsive">'; ?>
                                                <div class="vertical"><p><strong><?php echo $serv; ?>:</strong> <?php echo $descripcion; ?></p></div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>

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
                                    <?php if( have_rows('_ingresar_servicio') ): ?>
                                        <?php while( have_rows('_ingresar_servicio') ): the_row(); 
                                            $serv = get_sub_field('_nombre_servicio');
                                            $icon = get_sub_field('_icono_servicio');
                                            $descripcion = get_sub_field('_descripcion_servicio');
                                        ?>
                                            <div class="item-servicios border-div clearfix">
                                                <div class="col-xs-10 no-float clearfix">
                                                    <?php echo '<img src="'.$icon.'" class="img-responsive">'; ?>
                                                    <div class="vertical"><p><strong><?php echo $serv; ?>:</strong> <?php echo $descripcion; ?></p></div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/main-->
                </div>    
            <?php } ?>
        <?php endwhile; endif; ?>
    <?php get_footer(); ?>