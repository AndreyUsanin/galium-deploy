<?php
/**
* Template Name: Med Abort

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
        <div class="col-md-6" style="background-image: url(<?php echo the_sub_field('banner_image_background') ?>)">
          <div class="page-banner__left" >
            <h1 class="page-banner__title"><?php echo the_sub_field('banner_header')?></h1>
            <ul class="page-banner__list">
              <li class="page-banner__item"><span class="icon-chevron-right"></span>1000+ лабораторных анализов</li>
              <li class="page-banner__item"><span class="icon-chevron-right"></span>Результаты по e-mail или смс</li>
              <li class="page-banner__item"><span class="icon-chevron-right"></span>Бесплатный забор от 2000 рублей</li>
            </ul>
          </div> 
        </div>      
        <div class="col-md-6">
          <div class="page-banner__right">
            <img class="img-fluid" src="<?php echo get_sub_field('banner_image')?>" alt="">
          </div>
        </div>      
      </div>
    </div>
  </section>
  
  <?php

    endwhile;

endif;

?>

<div class="container">
  <div class="napr-info">
    <div class="napr-info__inner">
      <span class="icon-info-circle napr-info__icon"></span>
      <div>
        <p>
          <?php echo get_field('page_info'); ?>
        </p>
      </div>
    </div>
  </div>
</div>

<section class="price-area">
  <div class="container">
  <?php echo get_field('price_table'); ?>
  </div>
</section>


<section class="faq-area">
<div class="container">

<h2>Часто задаваемые вопросы:</h2>
  <dl class="js-badger-accordion">
<?php

// check if the repeater field has rows of data
if( have_rows('accordion_section') ):

 	// loop through the rows of data
    while ( have_rows('accordion_section') ) : the_row();
    ?>

    


      <dt>
          <h3 class="js-badger-accordion-header">
          <?php the_sub_field('accordion_title'); ?>
          </h3>
      </dt>
      <dd class="badger-accordion__panel js-badger-accordion-panel">
          <div class="js-badger-accordion-panel-inner">
            <?php the_sub_field('accordion_q'); ?>
          </div>
      </dd>


<?php

        // display a sub field value

;

    endwhile;

else :

    // no rows found

endif;

?>

</dl>

</div>
</section>


<?php get_footer(); ?>