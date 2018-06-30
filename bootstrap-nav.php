<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	
	<div class="container">

	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	        </button>
	    <a class="navbar-brand hidden-lg" href="#"><img src="<?php echo $siteLogo_mobile;  ?>" alt=""></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse navbar-ex1-collapse">

	    	<div class="logo hidden-sm hidden-xs hidden-md">
	        	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo $siteLogo_desktop;  ?>" alt=""></a>
	      	</div>
	        <?php
		        wp_nav_menu( array(
		            'theme_location' => 'primary',
		            'depth' => 2,
		            'container' => false,
		            'menu_class' => 'nav navbar-nav navbar-right',
		            'fallback_cb' => 'wp_page_menu',
		            //Process nav menu using our custom nav walker
		            'walker' => new wp_bootstrap_navwalker())
		        );
	        ?>
	    </div><!-- /.navbar-collapse --> 
	</div><!-- /.container-fluid -->

</nav>