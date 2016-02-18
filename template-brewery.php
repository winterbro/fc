<?php
/**
 * Template Name: Brewery Template
 */
?>

<section class="skew-left">
</section>
<section class="page-brewery col-md-6 col-sm-8 center text-center">
<!--         <h1><?php the_title(); ?></h1>
 -->
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
</div>

<div class="megamap">
    <div style="overflow:hidden;width:100%;height:400px;resize:none;max-width:100%;"><div id="my-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Flying+Couch+Brewing+v/Peter+Sonne,+København,+Danmark&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="embedded-map-html" rel="nofollow" href="https://www.bootstrapskins.com" id="grab-map-data">bootstrapskins</a><style>#my-map-canvas .text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
</div>