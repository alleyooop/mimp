<?php
/*
Template Name: Patient Information Page
*/
?>

<?php get_header(); ?>
  <div id="content" class="clearfix">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
      <div class="row">
        <header class="section-header">
          <h1 id="top" itemprop="headline"><?php the_title(); ?></h1>
        </header>
        
        <ol class="breadcrumb">
          <li><a href="<?php echo home_url( '/' ); ?>">Home</a></li>
          <li class="active"><?php the_title(); ?></li>
        </ol>
        
      </div>
      
      <div class="row clearfix">
        <div id="main" class="col-sm-8 patient-main" role="main">
          <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
				
            <section class="post_content clearfix well branded-well" itemprop="articleBody">
              <?php the_content(); ?>
              <?php wp_link_pages(); ?>
            </section> <!-- end article section -->

            <footer>
              <?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', '</p>'); ?>	
            </footer> <!-- end article footer -->
					
				  </article> <!-- end article -->
          
          <!-- Qs -->
        <article class="well question" id="how_do_i_get_here">
          <header>
           <h3>How do I get here?</h3>
          </header>
          <section>
             <p><?php the_field('mimp_how_do_i_get_here'); ?></p>
             <a href="#">Back to the top</a>
          </section>
        </article>
          
        <article class="well question" id="how_do_i_make_an_appointment">
          <header>
           <h3>How do I make an appointment?</h3>
          </header>
          <section>
             <p><?php the_field('mimp_how_do_i_make_an_appointment'); ?></p>
             <a href="#">Back to the top</a>
          </section>
        </article>
          
        <article class="well question" id="how_do_i_change_an_appointment">
          <header>
           <h3>How do I change an appointment?</h3>
          </header>
          <section>
             <p><?php the_field('mimp_how_do_i_change_an_appointment'); ?></p>
             <a href="#">Back to the top</a>
          </section>
        </article>
          
        <article class="well question" id="how_do_i_cancel_an_appointment">
          <header>
           <h3>How do I cancel an appointment?</h3>
          </header>
          <section>
             <p><?php the_field('mimp_how_do_i_cancel_an_appointment'); ?></p>
             <a href="#">Back to the top</a>
          </section>
        </article>
          
        <article class="well question" id="what_should_i_expect_at_an_appointment">
          <header>
           <h3>What should I expect at an appointment?</h3>
          </header>
          <section>
             <p><?php the_field('mimp_what_should_i_expect_at_an_appointment'); ?></p>
             <a href="#">Back to the top</a>
          </section>
        </article>
          
        <article class="well question" id="what_should_i_do_before_an_appointment">
          <header>
           <h3>What should I do before an appointment?</h3>
          </header>
          <section>
             <p><?php the_field('mimp_what_should_i_do_before_an_appointment'); ?></p>
             <a href="#">Back to the top</a>
          </section>
        </article>
          
        <article class="well question" id="will_i_be_provided_any_medicine">
          <header>
           <h3>Will I be provided any medicine?</h3>
          </header>
          <section>
             <p><?php the_field('mimp_will_i_be_provided_any_medicine'); ?></p>
             <a href="#">Back to the top</a>
          </section>
        </article>
          
        <article class="well question" id="how_long_will_i_stay_at_hospital_how_am_i_evaluated">
          <header>
           <h3>How long will I stay at hospital, how am I evaluated?</h3>
          </header>
          <section>
             <p><?php the_field('mimp_how_long_will_i_stay_at_hospital_how_am_i_evaluated'); ?></p>
             <a href="#">Back to the top</a>
          </section>
        </article>
          
        <article class="well question" id="how_can_i_get_in_touch">
          <header>
           <h3>How can I get in touch?</h3>
          </header>
          <section>
             <p><?php the_field('mimp_how_can_i_get_in_touch'); ?></p>
             <a href="#">Back to the top</a>
          </section>
        </article>
          
          
        </div>
        
        <div id="sidebar" class="col-sm-4" role="complementary">
               
          <section class="well">
            <h4>Questions</h4>
            <ul class="list-unstyled">
              <li><a href="#how_do_i_get_here">How do I get here?</a></li>
              <li><a href="#how_do_i_make_an_appointment">How do I make an appointment?</a></li>
              <li><a href="#how_do_i_change_an_appointment">How do I change an appointment?</a></li>
              <li><a href="#how_do_i_cancel_an_appointment">How do I cancel an appointment?</a></li>
              <li><a href="#what_should_i_expect_at_an_appointment">What should I expect at an appointment?</a></li>
              <li><a href="#what_should_i_do_before_an_appointment">What should I do before an appointment?</a></li>
              <li><a href="#will_i_be_provided_any_medicine">Will I be provided any medicine?</a></li>
              <li><a href="#how_long_will_i_stay_at_hospital_how_am_i_evaluated">How long will I stay at hospital, how am I evaluated?</a></li>
              <li><a href="#how_can_i_get_in_touch">How can I get in touch?</a></li>
            </ul>
          </section>

         <section class="well" id="dropdown-buttons">
            <h4>Our Departments &amp; Services</h4>
            <p>Locate the dedicated department and service pages through our <a href="<?php echo home_url( '/departments-and-services/' ); ?>" alt="link to the department and service A-Z" class="">department &amp; services page</a> or the directory below:</p>
            <?php get_template_part( 'partials/department', 'button' ); ?> <?php get_template_part( 'partials/service', 'button' ); ?>
          </section>

          <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
             <?php dynamic_sidebar( 'sidebar1' ); ?>
          <?php endif; ?>

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