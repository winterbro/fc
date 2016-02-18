<section class="skew-right bg-black">
	</section>

<footer class="content-info bg-black z9" role="contentinfo">
	<div class="col-sm-10 center">
		<div class="col-xs-5">
		    <a href="http://www.flyingcouch.dk/"><img width="300" src="<?php bloginfo('template_directory'); ?>/assets/images/flyingcouch-logo2-black.jpg" /></a>
			<a class="copyright">© Copyright 2015</a>
		</div>
		<div class="col-xs-5">
			<?php
				if (has_nav_menu('footer_navigation')) :
				wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']);
				endif;
			?>
		</div>
		<div class="col-xs-2">
			<div class="social">
				<img height="25" src="https://cdn0.iconfinder.com/data/icons/shift-logotypes/32/Instagram-512.png" />
				<img height="25" src="https://thepolestar29.files.wordpress.com/2015/10/facebook-logo-png-transparent-background.png" />
				<h4>We're social!</h4>
			</div>
		</div>
	</div>
</footer>
