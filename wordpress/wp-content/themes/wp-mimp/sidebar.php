				<div id="sidebar1" class="col-sm-4" role="complementary">
				
					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php endif; ?>
          
      <section class="well" id="dropdown-buttons">
        <h4>Our Departments &amp; Services</h4>
        <p>Locate the dedicated department and service pages through our <a href="<?php echo home_url( '/departments-and-services/' ); ?>" alt="link to the department and service A-Z" class="">department &amp; services page</a> or the directory below:</p>
        <?php get_template_part( 'partials/department', 'button' ); ?> <?php get_template_part( 'partials/service', 'button' ); ?>
      </section>

				</div>