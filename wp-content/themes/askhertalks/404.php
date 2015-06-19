<?php get_header(); ?>

  <div class="container">

    <div class="row">
      <div class="col-md-9">
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="page-header">
            <h1><?php the_title(); ?></h1>
          </div>

          <?php the_content(); ?>

        <?php endwhile; else: ?>

          <div class="container page-container">

            <div class="row">

              <div class="col-md-12 page-main-content">

                <div class="page-header" style="margin-top:80px !important;">
                  <h1>Page Not Found</h1>
                </div>

                <p style="margin-top: 20px;">Oops! It looks like nothing was found at this location. Please try selecting a page from the site menu above.</p>

              </div>
            </div>
          </div>


        <?php endif; ?>

      </div>


    </div>

<?php get_footer(); ?>