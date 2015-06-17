<?php get_header(); ?>
  <div id="content" class="clearfix">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
      <div class="row">
        <header class="section-header">
          <h1 itemprop="headline"><?php the_title(); ?></h1>
        </header>
        
        <ol class="breadcrumb">
          <li><a href="<?php echo home_url( '/' ); ?>">Home</a></li>
          <li><a href="<?php echo home_url( '/departments-and-services/' ); ?>">Departments &amp; Services</a></li>
          <li class="active"><?php the_title(); ?></li>
        </ol>
        
      </div>
      
      <div class="row clearfix">
        <div id="main" class="col-sm-8 department-main" role="main">
          <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
				
            <section class="post_content clearfix well branded-well" itemprop="articleBody">
              <?php the_content(); ?>
              <?php wp_link_pages(); ?>
            </section> <!-- end article section -->

            <footer>
              <?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', '</p>'); ?>	
            </footer> <!-- end article footer -->
					
				  </article> <!-- end article -->
          
          <?php if(get_field('mimp_service_patient_information')) : ?>
           <section id="patient-information" class="department-main">
              <div class="well">
                  <?php the_field('mimp_service_patient_information'); ?>
              </div>
              </section>
            <?php endif; ?>   
          
          <?php if(get_field('mimp_team')) : ?>
              <section class="team">
                <div class="well">
                <?php the_field('mimp_team'); ?>
                </div>
             </section>
            <?php endif; ?>
        </div>
        
        <div id="sidebar" class="col-sm-4" role="complementary">
                  
          <section class="well">
            <h4>Contact us</h4>
            <?php the_field('mimp_contact_text'); ?>
            <a href="mailto:<?php the_field('mimp_contact_email'); ?>" class="btn btn-warning" alt="email address">Email us</a>
            <a href="tel:<?php the_field('mimp_contact_number'); ?>" class="btn btn-link" alt="Radiography's telephone number">Call us</a>
          </section>

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
					
					<?php comments_template('',true); ?>
					
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