<?php
/**
 * Template Name: Our Beers Template
 */
?>

<!-- <section class="skew-left">
</section> -->


<section class="infinite-carousel col-lg-8 col-md-10 col-sm-12 center">

		<div class="carousel-viewport">
			<div class="slide slide-current"><a href="#douglas">
        <img width="180" src="https://cdn6.bigcommerce.com/s-4dsnxp/templates/__custom/images/Hawthorn_Wit_Beer_Bottle.png">
        
        <div class="slide-text">
          <h2 class="beer-title">Douglas</h2>
          <div class="line"></div>
          <h4 class="beer-type">Pilsner</h4>
        </div></a>
      </div>
			<div class="slide"><a href="#douglas">
        <img width="180" src="https://cdn6.bigcommerce.com/s-4dsnxp/templates/__custom/images/Hawthorn_Wit_Beer_Bottle.png">
        
        <div class="slide-text">
          <h2 class="beer-title">Dude</h2>
          <div class="line"></div>
          <h4 class="beer-type">American Pale Ale</h4>
        </div></a>
      </div>
			<div class="slide"><a href="#green-velvet">
        <img width="180" src="https://cdn6.bigcommerce.com/s-4dsnxp/templates/__custom/images/Hawthorn_Wit_Beer_Bottle.png">
        
        <div class="slide-text">
          <h2 class="beer-title">Green Velvet</h2>
          <div class="line"></div>
          <h4 class="beer-type">India Pale Ale</h4>
        </div>
      </div>
			<div class="slide">
        <img width="180" src="https://cdn6.bigcommerce.com/s-4dsnxp/templates/__custom/images/Hawthorn_Wit_Beer_Bottle.png">
      
        <div class="slide-text">
          <h2 class="beer-title">Phister De Noel</h2>
          <div class="line"></div>
          <h4 class="beer-type">Imperial Stout</h4>
        </div>
      </div>
      <div class="slide">
        <img width="180" src="https://cdn6.bigcommerce.com/s-4dsnxp/templates/__custom/images/Hawthorn_Wit_Beer_Bottle.png">
        
        <div class="slide-text">
          <h2 class="beer-title">Uranium</h2>
          <div class="line"></div>
          <h4 class="beer-type">Pale Ale</h4>
        </div>
      </div>
		</div><!--.carousel-viewport-->

		<a class="carousel-control-previous arrow left"></a>
		<a class="carousel-control-next arrow right"></a>

<!--.infinite-carousel-->
</section>

<section class="skew-left">
</section>

<section class="beer-posts">
  <div class="scroll-top">
    <a id="back-to-top" class="to-top">BACK TO TOP</a>
  </div>
  <div class="col-lg-6 col-md-8 col-sm-10 beer-post-wrap center">
  <?php $args = array(
    'posts_per_page' => 0,
    'orderby' => 'name',
    'order' => 'ASC',
    );
  $the_query = new WP_Query( $args ); ?>

  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
  <?php $post_class = ('odd' == $post_class) ? 'even' : 'odd'; ?>

    <div class="col-xs-12 post <?php echo $post_class; ?>" id="<?php echo $post->post_name; ?>">
            <div class="col-md-6 col-sm-6 col-xs-12 image">
      <?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
      </div><div class="col-md-6 col-sm-6 col-xs-12 text">
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
        <button class="btn btn-default">FIND STORES</button>
        <button class="btn btn-default bg-black">BUY NOW</button>
      </div>
    </div>

  <?php 
  endwhile;
  wp_reset_postdata();
  ?>

  </div>
</section>
