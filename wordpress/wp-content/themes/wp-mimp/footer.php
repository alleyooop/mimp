</div> <!-- end #container -->			

<footer role="contentinfo">
			
        <section class="main-footer">
          <div class="container">
            <div class="row">
              <div id="widget-footer" class="clearfix row">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		            <?php endif; ?>
                <div id="text-6" class="widget col-sm-3 widget_text">
                  <h3 class="widgettitle">Departments &amp; Services</h3>
                  <div class="textwidget">
                     <p>Locate the dedicated department and service pages through our <a href="<?php echo home_url( '/departments-and-services/' ); ?>" alt="link to the department and service A-Z" class="">department &amp; services page</a> or the directory below:</p>
                      <?php get_template_part( 'partials/department', 'button' ); ?> <?php get_template_part( 'partials/service', 'button' ); ?>
                  </div>
                </div>
       
		          </div>  
            </div>            
          </div>
        </section>
        
        
        <section class="sub-footer">
          <div class="container">
            <div class="row">
              <div class="clearfix">
                <p class="pull-right"><a href="#" title="Back to the top">back to the top</a></p>
                <p class="attribution">&copy; <?php bloginfo('name'); ?></p>
              </div>
            </div>
          </div>
        </section>
			</footer> <!-- end footer -->
		
		
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>