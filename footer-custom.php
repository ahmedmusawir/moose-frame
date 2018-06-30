<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wandervale
 */

?>
<?php wp_footer(); ?>

<div class="footer-container">

	<footer class="footer-main">

	<section class="footer-body  container">
		
		<div class="row">
		

			<article class="img-box col-md-4">

				<aside id="text-2" class="widget widget_text">

					<?php 
						if ( ! is_active_sidebar( 'footer-sidebar-1' ) ) {
							return;
						}

						dynamic_sidebar( 'footer-sidebar-1' ); 

					?>

			   	</aside>

			
			</article>

			<article class="img-box col-md-4">

				<aside id="nav_menu-2" class="widget widget_nav_menu">

					<?php 

						if ( ! is_active_sidebar( 'footer-sidebar-2' ) ) {
							return;
						}

						dynamic_sidebar( 'footer-sidebar-2' ); 

					?>
			      
			    </aside>

			</article>

			

			<article class="img-box col-md-4">

			    <aside id="recent-posts-2" class="widget widget_recent_entries">

			    	<?php 

						if ( ! is_active_sidebar( 'footer-sidebar-3' ) ) {
							return;
						}

						dynamic_sidebar( 'footer-sidebar-3' ); 

					?>
			      
			   	</aside>
			
			</article>

	
 

	</div>


	</section>
	<div id="copyright" class="copyright">
		<p class="text-center">All Rights Reserved Moose Frame &copy; <?php echo date('Y'); ?>. SEO and Development by <a href="www.htmlfivedev.com">HTMLfiveDev.com</a></p>
	</div>

</footer>
</div> <!-- FOOTER CONTAINER ENDED -->



	</div> <!-- End of id="content" class="site-content" -->
</div> <!-- End of id="page" class="site" -->



</body>
</html>
