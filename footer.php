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
                        <h3><a href="#">Carta Restaurant</a></h3>
                    </div>
                </div>
                <div class="related">
                    <img src="<?php bloginfo('template_url'); ?>/imag/main/foot_carta_restaurant.png" class="img-responsive" />
                    <div class="title block-2">
                        <h3><a href="#">Carta<br/>Bar</a></h3>
                    </div>
                </div>
            </footer>
        <?php } elseif ( is_page('evalua-tu-estadia') ) { ?>
            <footer id="footer" class="clearfix absolute-footer">
                <div class="nav-buttons">
                </div>
            </footer>
        <?php } else { ?>
            <footer id="footer" class="clearfix no-footer">
            </footer>
        <?php } ?>
        <!--/FOOTER-->
    </div>
    <?php if ( is_page('evalua-tu-estadia') ) { ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/jquery.liquid-slider.min.js"></script>  
        <script>
            $('#main-slider').liquidSlider({
                hideSideArrows: true,
                dynamicTabs: true,
                hoverArrows: false,
                dynamicArrowsGraphical: false,
                dynamicArrowLeftText: 'ANTERIOR',
                dynamicArrowRightText: 'SIGUIENTE'
            });
        </script>
    <?php } ?>
<?php wp_footer(); ?>
</body>
</html>