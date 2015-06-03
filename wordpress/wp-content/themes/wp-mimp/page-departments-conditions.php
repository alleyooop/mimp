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
        
        <ol class="breadcrumb">
          <li><a href="<?php echo home_url( '/' ); ?>">Home</a></li>
          <li class="active"><?php the_title(); ?></li>
        </ol>
        
      </div>

       <div class="row clearfix">
        <div id="main" class="col-sm-8" role="main">
           <article class="filter-main">
              <section class="well branded-well">
                <p class="lead">Duis autem vel eum iriure dolor in hendrerit in vulputate veli in hendrerit in vulputate veli. in hendrerit in vulputate veli in hendrerit in vulputate veli in hendrerit in vulputate veli</p>
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
                  'post_type' => 'departments'
                );

                $departments = new WP_Query( $args );

                if( $departments->have_posts() ){
                  while( $departments->have_posts() ) {
                    $departments->the_post();
                    ?>

                      <section class='well'>
                      <h3><?php the_title() ?></h3>

                        <?php the_excerpt(); ?>
                      </section>


                    <?php
                  }
                }
              ?>


            <?php // Get all of the services

                $args = array(
                  'post_type' => 'services'
                );

                $services = new WP_Query( $args );

                if( $services->have_posts() ){
                  while( $services->have_posts() ) {
                    $services->the_post();
                    ?>

                      <section class='well'>
                      <h3><?php the_title() ?></h3>

                        <?php the_excerpt(); ?>
                      </section>


                    <?php
                  }
                }
              ?>

            </article>

        </div> <!-- end col-8 -->
         
         
         
         
      </div> <!-- end row -->

<?php get_footer(); ?>