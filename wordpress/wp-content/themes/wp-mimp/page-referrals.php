<?php
/*
Template Name: Referrals Information Page
*/
?>
<?php get_header(); ?>
  <div id="content" class="clearfix">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
      <div class="row">
        <header class="section-header">
          <h1 itemprop="headline"><?php the_title(); ?></h1>
        </header>
        
        <?php if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb();
        } ?>
        
      </div>   
      
      <div class="row clearfix">
        <div id="main" class="col-sm-8 referral-main" role="main">
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
        <article class="well question" id="irefer_service">
          <header>
           <h3>iRefer Service</h3>
          </header>
          <section>
             <p><?php the_field('mimp_irefer_service'); ?></p>
             <a href="#">Back to the top</a>
          </section>
        </article>
          
        <article class="well question" id="x-rays">
          <header>
           <h3>X-Rays</h3>
          </header>
          <section>
             <p><?php the_field('mimp_x-rays'); ?></p>
             <a href="#">Back to the top</a>
          </section>
        </article>
          
        <article class="well question" id="ct_mri_etc">
          <header>
           <h3>CT, MRI, Ultrasound scans &amp; Fluoroscopy examinations (Barium studies etc.)</h3>
          </header>
          <section>
             <p><?php the_field('mimp_ct_mri_etc'); ?></p>
             <a href="#">Back to the top</a>
          </section>
        </article>
          
        <article class="well question" id="breast_imaging">
          <header>
           <h3>Breast imaging</h3>
          </header>
          <section>
             <p><?php the_field('mimp_breast_imaging'); ?></p>
             <a href="#">Back to the top</a>
          </section>
        </article>
          
        <article class="well question" id="angiography">
          <header>
           <h3>Angiography</h3>
          </header>
          <section>
             <p><?php the_field('mimp_angiography'); ?></p>
             <a href="#">Back to the top</a>
          </section>
        </article>
          
        <article class="well question" id="accessing_other_examinations">
          <header>
           <h3>Accessing other examinations</h3>
          </header>
          <section>
             <p><?php the_field('mimp_accessing_other_examinations'); ?></p>
             <a href="#">Back to the top</a>
          </section>
        </article>
          
        <article class="well question" id="request_cards">
          <header>
           <h3>Request Cards</h3>
          </header>
          <section>
             <p><?php the_field('mimp_request_cards'); ?></p>
             <a href="#">Back to the top</a>
          </section>
        </article>
          
          
        </div>
        
        <div id="sidebar" class="col-sm-4" role="complementary">
          <section class="well">
            <h4>Questions</h4>
            <ul class="list-unstyled">
              <li><a href="#irefer_service">iRefer Service</a></li>
              <li><a href="#x-rays">X-Rays</a></li>
              <li><a href="#ct_mri_etc">CT, MRI, Ultrasound scans &amp; Fluoroscopy examinations (Barium studies etc.)</a></li>
              <li><a href="#breast_imaging">Breast Imaging</a></li>
              <li><a href="#angiography">Angiography</a></li>
              <li><a href="#accessing_other_examinations">Accessing other examinations</a></li>
              <li><a href="#request_cards">Request Cards</a></li>
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
					
					<?php endwhile; ?>			
					
					<?php else : ?>
        
        <?php endif; ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>