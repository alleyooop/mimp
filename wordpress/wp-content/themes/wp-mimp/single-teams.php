<?php get_header(); ?>
  <div id="content" class="clearfix">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
      <div class="row">
        <header class="section-header">
          <h1 itemprop="headline"><?php the_title(); ?></h1>
        </header>
        
        <ol class="breadcrumb">
          <li><a href="<?php echo home_url( '/' ); ?>">Home</a></li>
          <li><a href="<?php echo home_url( '/teams/' ); ?>">Teams</a></li>
          <li class="active"><?php the_title(); ?></li>
        </ol>
        
      </div>
      
      <div class="row clearfix">
        <div id="main" class="col-sm-8" role="main">
          <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix service-main'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
				
            <section class="post_content clearfix well branded-well" itemprop="articleBody">
              <?php the_content(); ?>
              <?php wp_link_pages(); ?>
            </section> <!-- end article section -->

            <footer>
              <?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', '</p>'); ?>	
            </footer> <!-- end article footer -->
					
				  </article> <!-- end article -->
          
          <?php if(get_field('mimp_team_return')) : ?>
            <a class="btn btn-block btn-primary" href="<?php the_field('mimp_team_return'); ?>">Return to Service</a>
          <?php endif; ?>
          
        </div>
        
        <div id="sidebar" class="col-sm-4" role="complementary">
          
          <?php if(get_field('mimp_team_return')) : ?>
            <a class="btn btn-block btn-primary" href="<?php the_field('mimp_team_return'); ?>">Return to Service</a>
            <br>
          <?php endif; ?>
          
          <?php if ( in_category( 'medical-imaging' )) : ?>
          <div class="featured-image">
           <a href="<?php echo home_url( '/departments/radiography/' ); ?>"> 
            <img src="<?php echo content_url('/themes/wp-mimp/images/medical_imaging_holder.jpg'); ?>" width="100%" >
           </a>
          </div>
           <?php endif; ?>
          
          <?php if ( in_category( 'medical-physics' )) : ?>
          <div class="featured-image">
           <a href="<?php echo home_url( '/departments/medical-physics/' ); ?>"> 
            <img src="<?php echo content_url('/themes/wp-mimp/images/medical_physics_holder.jpg'); ?>" width="100%" >
           </a>
          </div>
           <?php endif; ?>
          
          <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
             <?php dynamic_sidebar( 'sidebar1' ); ?>
          <?php endif; ?>
          
       <section class="well" id="dropdown-buttons">
        <h4>Our Departments &amp; Services</h4>
        <p>Locate the dedicated department and service pages through our <a href="<?php echo home_url( '/departments-and-services/' ); ?>" alt="link to the department and service A-Z" class="">department &amp; services page</a> or the directory below:</p>
        <?php get_template_part( 'partials/department', 'button' ); ?> <?php get_template_part( 'partials/service', 'button' ); ?>
      </section>
          
          
        </div>
       </div> <!-- end #main -->
					
					
					<?php endwhile; ?>			
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>

        
        <?php endif; ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>