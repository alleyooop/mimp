<?php
/*
Template Name: Departments & Services Template
*/
?>

<?php get_header(); ?>

      <div class="row">
        
        <header class="section-header">
          <h1 itemprop="headline"><?php the_title(); ?></h1>
        </header>
        
        <?php if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb();
        } ?>
        
      </div>

       <div class="row clearfix">
        <div id="main" class="col-sm-8" role="main">
           <article class="filter-main">
              <section class="well branded-well">
                <p class="lead">Medical Imaging &amp; Medical Physics is a multi-disciplinary department in the heart of South Yorkshire. Find the our range of departments and services below</p>
                <p>To use the search functionality on this page, start typing into the white box below.</p>
                <script>
                jQuery(document).ready(function() {
                  jQuery("article.filter").sieve({ itemSelector: "section" });
                  }); 
              </script>
              </section>
            </article>  
          
          <article class="filter">

            <?php // Get all of the departments

                $args = array(
                  'post_type' => 'departments',
                  'orderby'   => 'title',
		              'order'     => 'ASC'
                );

                $departments = new WP_Query( $args );

                if( $departments->have_posts() ){
                  while( $departments->have_posts() ) {
                    $departments->the_post();
                    ?>

                      <section>
                        <div class="well">
                          <h3><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a></h3>
                          <?php the_excerpt(); ?>
                        </div>
                      </section>
                      

                    <?php
                  }
                }
              ?>


            <?php // Get all of the services

                $args = array(
                  'post_type' => 'services',
                  'orderby'   => 'title',
		              'order'     => 'ASC'
                );

                $services = new WP_Query( $args );

                if( $services->have_posts() ){
                  while( $services->have_posts() ) {
                    $services->the_post();
                    ?>

                      <section>
                        <div class="well">
                          <h3><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a></h3>
                          <?php the_excerpt(); ?>
                        </div>
                      </section>

                    <?php
                  }
                }
              ?>

            </article>

        </div> <!-- end col-8 -->
         
         
         <div id="sidebar" class="col-sm-4" role="complementary">
           
           <section class="well" id="dropdown-buttons">
            <h4>Our Departments &amp; Services</h4>
            <p>Locate the dedicated department and service pages through the directory below:</p>
            <?php get_template_part( 'partials/department', 'button' ); ?> <?php get_template_part( 'partials/service', 'button' ); ?>
          </section>
           
           <section>
            <?php // place an image here of about 360 by 320 ?>
           </section>
                  
          <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
             <?php dynamic_sidebar( 'sidebar1' ); ?>
          <?php endif; ?>

        </div>
         
         
         
         
      </div> <!-- end row -->

<?php get_footer(); ?>