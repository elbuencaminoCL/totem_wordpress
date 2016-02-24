<?php
    /*
    Template Name: Encuesta
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
                        <div class="absolute">
                            <div class="col-xs-9 no-float cont-encuesta">
                                <div id="main-slider" class="liquid-slider">
                                    <div>
                                        <h2 class="title"><span>1.</span> Terral Hotel y Spa cuenta con todas las comodidades y servicios necesarios para tener una estadía placentera y agradable</h2>
                                        <div class="enc">
                                            <div class="radio">
                                                <input id="011" type="radio" name="encuesta" value="totalmente en desacuerdo">
                                                <label for="011">.1</label>
                                                <input id="012" type="radio" name="encuesta" value="en desacuerdo">
                                                <label for="012">.2</label>
                                                <input id="013" type="radio" name="encuesta" value="neutral">
                                                <label for="013">.3</label>
                                                <input id="014" type="radio" name="encuesta" value="de acuerdo">
                                                <label for="014">.4</label>
                                                <input id="015" type="radio" name="encuesta" value="totalmente de acuerdo">
                                                <label for="015">.5</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h2 class="title"><span>2.</span> La limpieza de la habitación utilizada, así como de instalaciones de Terral Hotel y Spa me parecieron adecuadas</h2>
                                        <div class="enc">
                                            <div class="radio">
                                                <input id="021" type="radio" name="encuesta" value="totalmente en desacuerdo">
                                                <label for="021">.1</label>
                                                <input id="022" type="radio" name="encuesta" value="en desacuerdo">
                                                <label for="022">.2</label>
                                                <input id="023" type="radio" name="encuesta" value="neutral">
                                                <label for="023">.3</label>
                                                <input id="024" type="radio" name="encuesta" value="de acuerdo">
                                                <label for="024">.4</label>
                                                <input id="025" type="radio" name="encuesta" value="totalmente de acuerdo">
                                                <label for="025">.5</label>
                                            </div>
                                        </div>
                                    </div>          
                                    <div>
                                        <h2 class="title"><span>3.</span> La atención entregada por el personal de Terral Hotel y Spa, y la rapidez en la resolución de dudas y/o situaciones fueron óptimas</h2>
                                        <div class="enc">
                                            <div class="radio">
                                                <input id="031" type="radio" name="encuesta" value="totalmente en desacuerdo">
                                                <label for="031">.1</label>
                                                <input id="032" type="radio" name="encuesta" value="en desacuerdo">
                                                <label for="032">.2</label>
                                                <input id="033" type="radio" name="encuesta" value="neutral">
                                                <label for="033">.3</label>
                                                <input id="034" type="radio" name="encuesta" value="de acuerdo">
                                                <label for="034">.4</label>
                                                <input id="035" type="radio" name="encuesta" value="totalmente de acuerdo">
                                                <label for="035">.5</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h2 class="title"><span>4.</span> Las ofertas turísticas y actividades ofrecidas por Terral y Spa, permiten disfrutar de las maravillas del Valle del Elqui</h2>
                                        <div class="enc">
                                            <div class="radio">
                                                <input id="041" type="radio" name="encuesta" value="totalmente en desacuerdo">
                                                <label for="041">.1</label>
                                                <input id="042" type="radio" name="encuesta" value="en desacuerdo">
                                                <label for="042">.2</label>
                                                <input id="043" type="radio" name="encuesta" value="neutral">
                                                <label for="043">.3</label>
                                                <input id="044" type="radio" name="encuesta" value="de acuerdo">
                                                <label for="044">.4</label>
                                                <input id="045" type="radio" name="encuesta" value="totalmente de acuerdo">
                                                <label for="045">.5</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h2 class="title"><span>5.</span> Volvería a hospedarme en Terral Hotel y Spa</h2>
                                        <div class="enc">
                                            <div class="radio">
                                                <input id="051" type="radio" name="encuesta" value="totalmente en desacuerdo">
                                                <label for="051">.1</label>
                                                <input id="052" type="radio" name="encuesta" value="en desacuerdo">
                                                <label for="052">.2</label>
                                                <input id="053" type="radio" name="encuesta" value="neutral">
                                                <label for="053">.3</label>
                                                <input id="054" type="radio" name="encuesta" value="de acuerdo">
                                                <label for="054">.4</label>
                                                <input id="055" type="radio" name="encuesta" value="totalmente de acuerdo">
                                                <label for="055">.5</label>
                                            </div>
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