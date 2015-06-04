<?php 

    //  use it like this get_template_part( 'partials/service', 'button' ); 
    //  the service part is the first section of the partial file
    //  and the button bit is the second half
    

?>

<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    Services <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    
    <?php // Get all of the departments

                $args = array(
                  'post_type' => 'services'
                );

                $services = new WP_Query( $args );

                if( $services->have_posts() ){
                  while( $services->have_posts() ) {
                    $services->the_post();
                    ?>

                       <li><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a></li>

                    <?php
                  }
                }
              ?>
  </ul>
</div>