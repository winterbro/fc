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
    </nav>
  </div>
</header>

<?php if(is_front_page() ) {

  echo '<div class="landing-background-wrap">';

} else {

  echo '<div class="header-background-wrap">';

} ?>

  <div class="background-filter"></div>
  <div class="background"></div>
</div>
