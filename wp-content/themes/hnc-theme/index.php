<?php get_header(); ?>
     <!-- Loop start -->
    <div id="primary" class="container mt-2 mb-2">
	        <?php  while(have_posts()) : the_post(); ?>
              <?php the_title('<h1>', '</h1>'); ?>
			        <?php the_content(); ?>
		      <?php endwhile; ?>
	  </div>
    <?php get_template_part( 'partials/email' ); ?>
  <!-- two carousel each pulls images from same api -->
  <?php get_template_part( 'partials/carousel' ); ?>

<div class="container mt-2 mb-2 pt-3">
<h2 class="text-center pt-2 pb-2">Choose the H&C plan that's right for you</h2>
<div class="tab pt-2 pb-2 text-center">
	<button id="subscriptions" type="button" onclick="changeclass1(this)" class="btn btn-lg btn-block btn-primary">Subscriptions</button>
	<button id="one-off-pass" type="button" onclick="changeclass2(this)" class="btn btn-lg btn-block btn-outline-primary">One-off pass</button>
	<!-- <a class="tabbuttons active" href="#">Subscriptions</a>
	<a class="tabbuttons" href="#">One-off pass</a> -->	
</div>
<?php get_template_part( 'partials/tab1' ); ?>
<?php get_template_part( 'partials/tab2' ); ?>




<?php
get_footer();