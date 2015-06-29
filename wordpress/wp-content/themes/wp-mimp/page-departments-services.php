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
        <div id="main" class="col-sm-12" role="main">
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
          
         <div id="services-featured" class="row">
         </div>
          
        <div id="services-all">
          <article class="filter">
            <div class="row">

            <?php // Get all of the departments

                $args = array(
                  'post_type' => 'departments',
                  'orderby'   => 'title',
		              'order'     => 'ASC',
                  'posts_per_page' => -1
                );

                $departments = new WP_Query( $args );

                

                if( $departments->have_posts() ){
                  while( $departments->have_posts() ) {
                    $departments->the_post();
                    ?>

                      
                      <section class="col-sm-4 col-md-3">
                         <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                        <?php if ( has_post_thumbnail()) : ?>
                         <?php the_post_thumbnail('full', array('class' => 'img-responsive hidden-xs')); ?>
                        <?php else : ?>
                          <img src="<?php echo content_url('/themes/wp-mimp/images/had.jpg'); ?>" width="100%" class="img-responsive hidden-xs">
                        <?php endif; ?>
                        <div class="well well-preview">
                          <h3><?php the_title() ?></h3>
                          <p>Department</p>
                        </div>
                        </a>
                      </section>
                      
                      
                    <?php
                  }
                }
              ?>
            </div>


            <?php // Get all of the services

                $args = array(
                  'post_type' => 'services',
                  'orderby'   => 'title',
		              'order'     => 'ASC',
                  'posts_per_page' => -1
                );

                $i = 0;
                echo '<div class="row">';

                $services = new WP_Query( $args );

                if( $services->have_posts() ){
                  while( $services->have_posts() ) {
                    $services->the_post();
                    ?>

                      <?php  if($i % 4 == 0) {echo '</div><div class="row">';} ?>
                      
                      <section class="col-sm-4 col-md-3">
                        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                        <?php if ( has_post_thumbnail()) : ?>
                         <?php the_post_thumbnail('full', array('class' => 'img-responsive hidden-xs')); ?>
                        <?php else : ?>
                          <img src="<?php echo content_url('/themes/wp-mimp/images/had.jpg'); ?>" width="100%" class="img-responsive hidden-xs">
                        <?php endif; ?>
                        <div class="well well-preview">
                          <h3><?php the_title() ?></h3>
                          <p>Service</p>
                        </div>
                       </a>
                      </section>
            
                    <?php $i++; ?>

                    <?php
                  }
                }
              ?>

            </article>
          </div>


        </div> <!-- end col-12 -->
         
      </div> <!-- end row -->

<?php get_footer(); ?>