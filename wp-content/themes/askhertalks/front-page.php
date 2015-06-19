<?php get_header( 'home' ); ?>
    
    <div class="jumbotron">

      <div class="container">

        <img src="<?php bloginfo('stylesheet_directory');?>/images/askher_header.png" class="img-responsive header-hor">

        <img src="<?php bloginfo('stylesheet_directory');?>/images/askher_header_sm.png" class="img-responsive header-ver">

        <div class="col-sm-7 col-sm-offset-5 hidden-xs" id="tagline">

          <img src="<?php bloginfo('stylesheet_directory');?>/images/askher_header_tagline.png" class="img-responsive">

        </div>

      </div>

    </div>
    

    <div class="container main-content">

        <div class="row">

          <!--<hr class="hidden-xs">-->

          <!--Page Content-->
          <div class="col-sm-9" id="front-page-content"> 
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; endif; ?>
          </div>
          <!--End Page Content-->

          <!--Sidebar Widgets-->
          <div class="col-sm-3" id="front-page-sidebar">

            <div class="row front-widget">
              <div class="front-widget-inner">
                <?php if ( dynamic_sidebar( 'front-one' ) ); ?>
              </div>
            </div>

            <div class="row front-widget">
              <div class="front-widget-inner">
                <?php if ( dynamic_sidebar( 'front-two' ) ); ?>
              </div>
            </div>

            <div class="row front-widget">
              <div class="front-widget-inner">
                <?php if ( dynamic_sidebar( 'front-three' ) ); ?>
              </div>
            </div>

          </div>
          <!--End Sidebar Widgets-->

        </div>

      </div>

    
<?php get_footer(); ?>