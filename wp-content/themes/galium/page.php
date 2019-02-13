<?php get_header(); ?>
<div class="container">
</div>
<section class="frontpage-slider">
  <div class="container">

    <div class="slider-controls">
      <?php

      // check if the repeater field has rows of data
      if( have_rows('page_slider') ):
          // loop through the rows of data
          while ( have_rows('page_slider') ) : the_row();
          
          $image = get_sub_field('page_doc_thumbnail');

          // vars
          $url = $image['url'];
          $title = $image['title'];
          $alt = $image['alt'];

          // thumbnail
          $size = 'page_doc_thumb';
          $thumb = $image['sizes'][ $size ];
          $width = $image['sizes'][ $size . '-width' ];
          $height = $image['sizes'][ $size . '-height' ];
                  
          ?>
          <div class="slider-controls__box">
            <img class="slider-controls__image" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
          </div>
        <?php            
                      endwhile;
                  else :

                      // no rows found

                  endif;

                  ?>
        </div>


    <div class="slider mt-4 mb-4">


      <?php
        // check if the repeater field has rows of data
        if( have_rows('page_slider') ):
            // loop through the rows of data
            while ( have_rows('page_slider') ) : the_row();
            
                        
          $fullImage = get_sub_field('page_doc_photo');

          // vars
          $url =  $fullImage['url'];
          $title =  $fullImage['title'];
          $alt =  $fullImage['alt'];

          // thumbnail
          $fullSize = 'page_doc_main';
          $mainDoc = $fullImage['sizes'][ $fullSize ];
          // $width = $fullImage['sizes'][ $fullSize . '-width' ];
          // $height = $fullImage['sizes'][ $fullSize . '-height' ];
            
            ?>
        <!-- slide -->
            <div class="slide">
              <div class="doc-card-page">
                <div class="doc-card-page__imgholder">
                  <img  src="<?php echo $mainDoc; ?>" alt="<?php echo $alt; ?>" />
                </div>
                <div class="doc-card-page__inner">
                <!-- content -->
                  <div class="doc-card-page__content">
                    <div>
                      <h2 class="doc-card-page__name"><?php echo the_sub_field('page_doc_name'); ?></h2>
                      <span class="doc-card-page__spec"><?php echo the_sub_field('page_doc_spec'); ?></span>  
                    </div>
                    <span class="doc-card-page__price">прием от: <?php echo the_sub_field('page_doc_price'); ?>р</span>
                    <div>
                      <ul class="doc-card-page__list">
                        <li class="doc-card-page__listitem">
                          <span class="doc-card-page__feature"><span class="icon-expirience  doc-card-page__icon"></span><?php echo the_sub_field('page_doc_exp'); ?> лет опыта</span>
                        </li>  
                        <?php if(get_sub_field('page_doc_kids')) : ?>      
                        <li class="doc-card-page__listitem">          
                          <span class="doc-card-page__feature"><span class="icon-kids-doctor doc-card-page__icon"></span>принимает детей</span>
                        </li>  
                        <?php endif; ?>
                      </ul>
                    </div>
                  </div>
                <!-- end content -->
                  <div class="doc-card-page__footer">
                      <a href="#" class="button button--page-doc doc-card-page__button"  data-micromodal-trigger="modal">Запись на прием</a>
                      <a href="tel:<?php echo get_field('header_phone', 'options'); ?>" class="doc-card-page__phone" >Запись по телефону:  <?php echo get_field('header_phone', 'options'); ?></a>
                  </div>
                </div>
              </div>
            </div>
          <!-- end slide -->
            <?php            
            endwhile;

        else :

            // no rows found

        endif;

        ?>
    </div>
  </div>
</section>


<div class="container">
  <div class="napr-info">
    <div class="napr-info__inner">
      <span class="icon-info-circle napr-info__icon"></span>
      <p>
        <?php echo get_field('page_info'); ?>
      </p>
    </div>
  </div>
</div>



<div id="modal" class="modal micromodal-slide" aria-hidden="true">
  <div class="modal__overlay" tabindex="-1">
    <div class="modal__container">
      <div tabindex="-1" data-micromodal-close>
        <div role="dialog" aria-modal="true" aria-labelledby="modal-title">
          <header class="modal__header">
            <h2 id="modal-title">Запись на прием</h2>
            <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
          </header>
          <div class="modal__content" id="modal-content">
             <?php echo get_field('page_form'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="price-area">
  <div class="container">
    <?php if(is_page(43)) : ?>
    <ul class="tabs__nav">
      <li>
        <a href="#tab_1" class="tabs__link is-active">
          <h3>УЗИ Взрослым</h3>
        </a>
      </li>
      <li>
        <a href="#tab_2" class="tabs__link">
          <h3>УЗИ Детям</h3>
        </a>
      </li>
    </ul>
    <div class="tabs__content">
      <div id="tab_1" class="tabs__item is-visible">
        <?php echo supsystic_tables_get(1); ?>
      </div>
      <div id="tab_2" class="tabs__item">
        <?php echo do_shortcode("[supsystic-tables id=3]"); ?>
      </div>
    </div>
    <?php  else :
   echo get_field('price_table');
       ?>

       <?php
      endif;
    ?>



  </div>
</section>

<?php get_footer(); ?>