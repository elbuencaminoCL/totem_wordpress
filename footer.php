        <!--FOOTER-->
        <?php if ( is_page('servicios-hotel') ) { ?>
            <footer id="footer" class="clearfix">
                <div class="scroll-top clearfix">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-10 no-float">
                        <button id="downClick">Hacia Abajo</button>
                    </div>
                </div>
            </footer>
        <?php } elseif ( is_page('restaurant-y-bar-pataska') ) { ?>
            <footer id="footer" class="clearfix">
                <div class="related">
                    <img src="<?php bloginfo('template_url'); ?>/imag/main/foot_carta_bar.png" class="img-responsive" />
                    <div class="title block-2">
                        <h3><a href="http://totem.terralhotel.cl/inicio/restaurant-y-bar-pataska/carta-restaurant/">Carta Restaurant</a></h3>
                    </div>
                </div>
                <div class="related">
                    <img src="<?php bloginfo('template_url'); ?>/imag/main/foot_carta_restaurant.png" class="img-responsive" />
                    <div class="title block-2">
                        <h3><a href="http://totem.terralhotel.cl/inicio/restaurant-y-bar-pataska/carta-bar/">Carta<br/>Bar</a></h3>
                    </div>
                </div>
            </footer>
        <?php } elseif ( is_page('carta-bar') || is_page('carta-restaurant') ) { ?>
            <footer id="footer" class="clearfix">
                <div class="related">
                    <?php if ( is_page('carta-bar') ) { ?>
                        <img src="<?php bloginfo('template_url'); ?>/imag/main/foot_carta_bar.png" class="img-responsive" />
                    <? } else { ?>
                        <img src="<?php bloginfo('template_url'); ?>/imag/main/foot_carta_restaurant.png" class="img-responsive" />
                    <? } ?>
                    <?php if ( is_page('carta-bar') ) { ?>
                        <div class="title block-2">
                            <h3><a href="http://totem.terralhotel.cl/inicio/restaurant-y-bar-pataska/carta-restaurant/">Carta Restaurant</a></h3>
                        </div>
                    <? } else { ?>
                        <div class="title block-2">
                            <h3><a href="http://totem.terralhotel.cl/inicio/restaurant-y-bar-pataska/carta-bar/">Carta Bar</a></h3>
                        </div>
                    <? } ?>
                </div>
            </footer>
        <?php } elseif ( is_singular('tours') ) { ?>
            <footer id="footer" class="clearfix footer-ficha">
                <div class="container cont-testimonios shadow">
                    <div class="col-xs-11 no-float">
                        <?php
                            $connected = new WP_Query( array(
                                'connected_type' => 'testimonios_to_tours',
                                'connected_items' => get_queried_object(),
                                'nopaging' => true,
                            ) );
                            if ( $connected->have_posts() ) :
                        ?>
                        <?php $i=0; while ( $connected->have_posts() ) : $connected->the_post(); ?>
                            <div class="testimonios">
                                <? the_content();?>
                            </div>
                        <?php $i++; endwhile; ?>
                        <?php wp_reset_postdata();
                            endif;
                        ?>
                    </div>
                </div>
            </footer>
        <?php } else { ?>
            <footer id="footer" class="clearfix no-footer">
            </footer>
        <?php } ?>
        <!--/FOOTER-->
    </div>
<?php wp_footer(); ?>
</body>
</html>