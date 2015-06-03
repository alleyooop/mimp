<?php
/*
Template Name: Departments & Services Template
*/
?>

<?php get_header(); ?>

<?php // Get all of the departments

    $args = array(
      'post_type' => 'departments'
    );

    $departments = new WP_Query( $args );

    if( $departments->have_posts() ){
      while( $departments->have_posts() ) {
        $departments->the_post();
        ?>

          <div class='well'>
          <h4><?php the_title() ?></h4>
          
            <?php the_excerpt(); ?>
          </div>


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

          <div class='well'>
          <h4><?php the_title() ?></h4>
          
            <?php the_excerpt(); ?>
          </div>


        <?php
      }
    }
  ?>

<?php get_footer(); ?>