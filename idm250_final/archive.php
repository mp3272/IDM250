<?php
/* 
Template Name: Archives
*/
get_header(); ?>
 
<div id="primary" class="site-content">
<div id="content" role="main">
 
<?php while ( have_posts() ) : the_post(); ?>
                 
<h3 class="read">Read my blogs</h3>
 
<div class="entry-content">
 
<?php the_content(); ?>
 

 <div class="grid">
  <div class="card">
  <img src="<?php echo get_template_directory_uri(); ?>/images/taj.jpg" alt="John" style="width:100%">
  <h4>Taj Mahal trip</h4>
  
  
 <button><a href="single.html">Read more</button></a>
</div>
<div class="card">
  <img src="<?php echo get_template_directory_uri(); ?>/images/paris.jpg" alt="John" style="width:100%">
  <h4>Europe Trip</h4>
  
  
 <button><a href="single.html">Read more</button></a>
</div>  
<div class="card">
  <img src="<?php echo get_template_directory_uri(); ?>/images/nyc.jpg" alt="John" style="width:100%">
  <h4>NYC Trip</h4>
  
  
 <button><a href="single.html">Read more</button></a>
</div>
 <div class="card">
  <img src="<?php echo get_template_directory_uri(); ?>/images/mexico.jpg" alt="John" style="width:100%">
  <h4>Mexico Trip</h4>
  
  
 <button><a href="single.html">Read more</button></a>
</div>
 <div class="card">
  <img src="<?php echo get_template_directory_uri(); ?>/images/singapore.jpg" alt="John" style="width:100%">
  <h4>Singapore Trip</h4>
  
  
 <button><a href="single.html">Read more</button></a>
</div>
  <div class="card">
  <img src="<?php echo get_template_directory_uri(); ?>/images/malaysia.jpg" alt="John" style="width:100%">
  <h4>Malaysia Trip</h4>
  
  
 <button><a href="single.html">Read more</button></a>
</div>
</div>
 
 

 
</div><!-- .entry-content -->
 
<?php endwhile; // end of the loop. ?>
 
</div><!-- #content -->
</div><!-- #primary -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>