<?php
    /*
    Template Name: Encuesta
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
                <div id="main" class="clearfix shadow">
                    <div class="cont-menu no-padding">
                        <div class="intro-evalua shadow">
                            <div class="col-xs-9 no-float upper">
                                <p>De la escala del 1 al 5, ¿qué tan de acuerdo estás con las siguientes afirmaciones?</p>
                            </div>
                        </div>
                        <div class="intro-guia shadow">
                            <div class="col-xs-10 no-float">
                                <p>Marca la opción tomando en cuenta que:<br/> <span>1</span> = Totalmente en desacuerdo, <span>2</span> = En desacuerdo, <span>3</span> =  Neutral,<br/> <span>4</span> = De acuerdo y <span>5</span> = Totalmente de acuerdo</p>
                            </div>
                        </div>
                        <div class="clearfix cont-int-encuesta">
                            <div class="relative">
                                <div class="col-xs-12 no-float cont-encuesta enc">
                                    <div id="main-slider" class="liquid-slider">
                                        <? the_content();?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/main-->
            <?php endwhile; endif; ?>
        </div>
    <?php get_footer(); ?>