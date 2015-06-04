<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			

      <!-- hack -->
        </div>
      <!-- hack -->

			<div id="content">
			
				<div id="main" class="clearfix" role="main">

					<section id="intro">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="brand-header">
                    <h1 class="brand-h1">Medical Imaging &amp; Medical Physics</h1>
                    <p class="lead">A multi-disciplinary department in the heart of South Yorkshire</p>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section id="mimp-blocks">
            <div class="container">
              <div class="row">
                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo home_url( '/patient-information/' ); ?>">
                      <img src="<?php echo content_url('/themes/wp-mimp/images/radiology-reception.jpg'); ?>" class="hidden-xs" width="100%">
                      <div class="well" id="">
                        <h2>Patient Information</h2>
                        <footer>Learn more about your patient journey and our services</footer>
                      </div>
                    </a>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo home_url( '/departments-and-services/' ); ?>">
                      <img src="<?php echo content_url('/themes/wp-mimp/images/services-stock.jpg'); ?>" class="hidden-xs" width="100%">
                      <div class="well" id="">
                        <h2>A-Z of Services</h2>
                        <footer>Explore our commercial and patient services</footer>
                      </div>
                    </a>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="#" class="hidden-xs" width="100%">
                      <img src="<?php echo content_url('/themes/wp-mimp/images/commercial.jpg'); ?>" class="hidden-xs" width="100%">
                      <div class="well" id="">
                        <h2>Commercial Services</h2>
                        <footer>Find out more about our world-class commerical services</footer>
                      </div>
                    </a>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo home_url( '/referral-information/' ); ?>">
                      <img src="<?php echo content_url('/themes/wp-mimp/images/doctor.jpg'); ?>" class="hidden-xs" width="100%">
                      <div class="well" id="">
                        <h2>Referral Information</h2>
                        <footer>Find out how to make a referral to our service</footer>
                      </div>
                    </a>
                  </div>
              </div>
            </div>
          </section>
			
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->

      <div class="container">
       

<?php get_footer(); ?>