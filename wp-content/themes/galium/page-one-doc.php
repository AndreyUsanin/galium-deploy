<?php
/**
* Template Name: One Doc

*/
?>


<?php get_header(); ?>

<div class="container mt-4 mb-4">
  <div class="row">
    <div class="col-sm-12">
        <img class="doc-card-page__image mb-4" src=<?php echo get_field('one_page_doc_photo')['sizes']['page_doc_thumb']; ?> />
        <div class="doc-card-page">
          <div class="doc-card-page__imgholder">
            <img  src="<?php echo get_field('one_page_doc_photo')['sizes']['page_doc_main']; ?>" alt="<?php echo $alt; ?>" />
          </div>
          <div class="doc-card-page__inner">
          <!-- content -->
            <div class="doc-card-page__content">
              <div>
                <h2 class="doc-card-page__name"><?php echo the_field('one_page_doc_name'); ?></h2>
                <span class="doc-card-page__spec"><?php echo the_field('one_page_doc_spec'); ?></span>  
              </div>
              <span class="doc-card-page__price">прием от: <?php echo the_field('one_page_doc_price'); ?>р</span>
              <div>
                <ul class="doc-card-page__list">
                  <li class="doc-card-page__listitem">
                    <span class="doc-card-page__feature"><span class="icon-expirience  doc-card-page__icon"></span><?php echo the_field('one_page_doc_exp'); ?> лет опыта</span>
                  </li>  
                  <?php if(get_field('one_page_doc_kids')) : ?>      
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
  </div>
</div>

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
  <?php echo get_field('price_table'); ?>
  </div>
</section>

<?php get_footer(); ?>