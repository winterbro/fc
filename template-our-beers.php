<?php
/**
 * Template Name: Our Beers Template
 */
?>

<!-- <section class="skew-left">
</section> -->


<section class="infinite-carousel">

		<div class="carousel-viewport">
			<div class="slide slide-current">
        <img width="180" src="https://cdn6.bigcommerce.com/s-4dsnxp/templates/__custom/images/Hawthorn_Wit_Beer_Bottle.png">
        <h2 class="beer-title">Dude</h2>
        <h4 class="beer-type"><m class="txt-red"><< </m>American Pale Ale<m class="txt-red"> >></m></h4>
      </div>
			<div class="slide">
        <img width="180" src="https://cdn6.bigcommerce.com/s-4dsnxp/templates/__custom/images/Hawthorn_Wit_Beer_Bottle.png">
        <h2 class="beer-title">Douglas</h2>
        <h4 class="beer-type">American Pale Ale</h4>
      </div>
			<div class="slide">
        <img width="180" src="https://cdn6.bigcommerce.com/s-4dsnxp/templates/__custom/images/Hawthorn_Wit_Beer_Bottle.png">
        <h2 class="beer-title">Green Velvet</h2>
        <h4 class="beer-type">American Pale Ale</h4>
      </div>
			<div class="slide">
        <img width="180" src="https://cdn6.bigcommerce.com/s-4dsnxp/templates/__custom/images/Hawthorn_Wit_Beer_Bottle.png">
        <h2 class="beer-title">Dude</h2>
        <h4 class="beer-type">American Pale Ale</h4>
      </div>
      <div class="slide">
        <img width="180" src="https://cdn6.bigcommerce.com/s-4dsnxp/templates/__custom/images/Hawthorn_Wit_Beer_Bottle.png">
        <h2 class="beer-title">Green Velvet</h2>
        <h4 class="beer-type"><m class="txt-red"><< </m>American Pale Ale<m class="txt-red"> >></m></h4>
      </div>
		</div><!--.carousel-viewport-->

		<a class="carousel-control-previous">Prev</a>
		<a class="carousel-control-next">Next</a>

<!--.infinite-carousel-->
</section>

<section class="beer-post">
  <div class="col-lg-6 beer-post-wrap center">
  <?php $the_query = new WP_Query( 'posts_per_page=0' ); ?>

  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
  <?php $post_class = ('odd' == $post_class) ? 'even' : 'odd'; ?>

    <div class="col-lg-12 post <?php echo $post_class; ?>" id="post-<?php the_ID(); ?>">
      <div class="col-lg-8 text">
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
        <br>
        <button class="btn btn-default">FIND STORES</button>
        <button class="btn btn-default">BUY NOW</button>
      </div>
      
      <div class="col-lg-4 image">
      <?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
      </div>
      <div class"clearfix"></div>
      <br><br><br><br><br><br><br><br><br><br>
    </div>

  <?php 
  endwhile;
  wp_reset_postdata();
  ?>

  </div>
</section>
