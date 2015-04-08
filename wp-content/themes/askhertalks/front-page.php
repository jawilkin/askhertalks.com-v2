<?php get_header( 'home' ); ?>
    
    <div class="jumbotron">

      <div class="container">

        <img src="<?php bloginfo('stylesheet_directory');?>/images/askher_header.png" class="img-responsive header-hor">

        <img src="<?php bloginfo('stylesheet_directory');?>/images/askher_header_sm.png" class="img-responsive header-ver">

        <div class="col-sm-7 col-sm-offset-5" id="tagline">

          <img src="<?php bloginfo('stylesheet_directory');?>/images/askher_header_tagline_reverse.png" class="img-responsive">

        </div>

      </div>

    </div>
    

    <div class="container main-content">

        <div class="row">

          <!--Page Content-->
          <div class="col-sm-9" id="front-page-content"> 
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; endif; ?>
          </div>
          <!--End Page Content-->

          <!--Sidebar Widgets-->
          <div class="col-sm-3" id="front-page-sidebar">

            <div class="row city-widget">
              <div class="city-widget-inner">
                <?php if ( dynamic_sidebar( 'front-left' ) ); ?>
              </div>
            </div>

            <div class="row city-widget">
              <div class="city-widget-inner">
                <?php if ( dynamic_sidebar( 'front-center' ) ); ?>
              </div>
            </div>

            <div class="row city-widget">
              <div class="city-widget-inner">
                <?php if ( dynamic_sidebar( 'front-right' ) ); ?>
              </div>
            </div>

          </div>
          <!--End Sidebar Widgets-->

        </div>

      </div>

    
<?php get_footer(); ?>