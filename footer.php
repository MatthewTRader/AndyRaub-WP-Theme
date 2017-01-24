			<!-- footer -->
			<footer class="footer" role="contentinfo">
                 <div class="container">
                
                    <div class="row footerWidgets">
                        <div class="large-4 columns widgetOne">
                            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-1')) ?>
                        </div>
                         <div class="large-4 columns widgetTwo">
                            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-2')) ?>
                        </div>
                         <div class="large-4 columns widgetThree">
                            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-3')) ?>
                        </div>
                    </div>

                    <!-- copyright -->
                    <p class="copyright">
                        &copy; <?php echo date('Y'); ?> Copyright <a href="//.com" title="EncoreCoach"><?php bloginfo('name'); ?></a>.
                    </p>
                     
				<!-- /copyright -->
                </div>
			</footer>
			<!-- /footer -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
            
        (function($) {  
            $( document ).ready(function() {
                $('.mobileMenuButton').on('click', function(e) {
                  $('nav').toggleClass("mobileOn");
                    $('header').toggleClass("mobileOn");
                  e.preventDefault();
                });
                
                $('.search label').on('click', function(e) {
                  $('header .search').toggleClass("openInput");
                  e.preventDefault();
                });
                
            });
            
        })(jQuery);
            
		</script>

	</body>
</html>
