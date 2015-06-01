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
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer4') ) : ?>
		            <?php endif; ?>
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