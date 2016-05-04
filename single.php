    <?php get_header(); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="map-contents">
            <!--header-->
                <header id="header" class="header clearfix shadow">
                    <div id="gallery" class="gallery-head block-image clearfix block">
                        <? get_gallery_images(); ?>
                    </div>
                </header>
                <!--/header-->

                <!--main-->
                <div id="main" class="clearfix">
                    <div class="cont-map">
                        <div class="clearfix top-detail">
                            <h4><? the_title();?></h4>
                            <? the_content();?>
                            <div class="related">
                            </div>
                        </div>
                    </div>
                </div>
                <!--/main-->
        </div>
        <?php endwhile; endif; ?>
    <?php get_footer(); ?>