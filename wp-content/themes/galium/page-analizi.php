<?php
/**
* Template Name: Analizi

*/
?>

<?php get_header(); ?>


<?php 
    
if( have_rows('banner') ):

    while( have_rows('banner') ) : the_row();

    ?>
    <section class="page-banner page-banner--analizi mt-4 mb-4">
    <div class="container">
      <div class="row row-eq-height no-gutters">
        <div class="col-md-6">
          <div class="page-banner__left"  style="background-image: url(<?php echo the_sub_field('banner_image_background') ?>)" >
            <h1 ><?php echo the_sub_field('banner_header')?></h1>
            <ul class="page-banner__list">
              <?php echo the_sub_field('banner_text') ?>
            </ul>
          </div> 
        </div>      
        <div class="col-md-6">
          <div class="page-banner__right" style="background-image: url(<?php echo the_sub_field('banner_image') ?>)">
          </div>
        </div>      
      </div>
    </div>
  </section>
  
  <?php

    endwhile;

endif;

?>

<section class="price-area">
  <div class="container">
  <?php echo get_field('price_table'); ?>
  </div>
</section>


<?php get_footer(); ?>