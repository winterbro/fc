<header id="sticker" class="banner" role="banner">
  <div class="container">
    <nav  role="navigation">
      <?php
      if (has_nav_menu('left_navigation')) :
        wp_nav_menu(['theme_location' => 'left_navigation', 'menu_class' => 'nav']);
      endif;
      ?>

      <div id="logo">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/flyingcouch-logo-transparent.png" />
      </div>
      
      <?php
      if (has_nav_menu('right_navigation')) :
        wp_nav_menu(['theme_location' => 'right_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
      <div class="social">
        <img height="25" src="https://cdn0.iconfinder.com/data/icons/shift-logotypes/32/Instagram-512.png" />
        <img height="25" src="https://thepolestar29.files.wordpress.com/2015/10/facebook-logo-png-transparent-background.png" />
      </div>
    </nav>
       </div>
</header>

<?php if(is_front_page() ) {

  echo '<div class="landing-background-wrap">';

} else if(is_page("our-beers")) {

  echo '<div class="beers-background-wrap">';

} else {

  echo '<div class="header-background-wrap">';

} ?>

  <div class="background-filter"></div>
  <div class="background"></div>
</div>
