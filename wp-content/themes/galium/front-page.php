<?php get_header(); ?>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-4 d-none d-none d-lg-block">
            <img class="maindoc" src="<?php echo get_field('mainimg')['sizes']['medium_large']; ?>" alt="">
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="napr-card">
                <div class="d-flex align-items-center mb-4"> 
                    <div class="napr-card__iconbox mr-4"> 
                        <span class="napr-card__icon icon-health-care"></span>
                    </div> 
                    <h1 class="napr-card__title">Записаться на прием</h1> 
                </div>
                <?php
                    wp_nav_menu(array(
                    'theme_location' => 'mainMenuLocation',
                    'menu_class' => 'napr-card__list'
                )); ?>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">  
             <div class="napr-card mb-4">
                <div class="d-flex align-items-center mb-4"> 
                    <div class="napr-card__iconbox mr-4"> 
                        <span class="napr-card__icon icon-uzi"></span>
                    </div> 
                    <h1 class="napr-card__title">Сделать узи</h1> 
                </div>
                <div>
                    <p>УЗИ врослым, детям. УЗИ по гинекологии и беременности всех сроков.</p>
                    <a href="<?php echo site_url('/uzi-tambov'); ?>">Подробнее</a>
                </div>
             </div>   

             <div class="napr-card">
                <div class="d-flex align-items-center mb-4"> 
                    <div class="napr-card__iconbox mr-4"> 
                        <span class="napr-card__icon icon-analizi"></span>
                    </div> 
                    <h1 class="napr-card__title">Сдать анализы</h1> 
                </div>
                <div>
                    <p>Более 1000 видов анализов. Результаты на следующее утро.</p>
                    <a href="<?php echo site_url('/lab-researc-2'); ?>">Подробнее</a>
                </div>
             </div>   
        </div>
    </div>
</div>

<section class="discount pt-5">
    <div class="container">
        <div class="row  align-items-center">
            <div class="col-lg-6 col-md-12">
              <div class="discount__content">
                <h1 class="discount__title">
                    <?php echo get_field('dis_title'); ?>
                </h1>
                <span class="discount__value mb-4"><?php echo get_field('discount_value'); ?></span>
                <p class="discount__desc pb-4">
                    <?php echo get_field('dis_desc'); ?>
                </p>
                <a class="button button--drx" href="<?php echo get_field('dis_link'); ?>">Подробнее</a>
            </div>  
            </div>
            <div class="col-lg-6 col-md-12 align-items-end">
                <img class="img-fluid align-self-end" src="<?php echo get_field('dis_image')['sizes']['medium_large']; ?>" alt="">
            </div>
        </div>
    </div>
</section>

<section class="frontpage-slider pt-5 pb-5">
    <div class="container">
         <div class="row">
             <div class="col-sm-12">
                <div class="doc-slider-holder mt-4 mb-5">
                    <h1>Наши специалисы:</h1>
                    <div class="doc-slider__controls">
                        <button><span class="icon-chevron-left"></span></button>
                        <button><span class="icon-chevron-right"></span></button>
                    </div>
                </div>
             </div>
         </div>      
        <div class="doc-slider">

                <?php
                // check if the repeater field has rows of data
                if( have_rows('slider') ):

                    // loop through the rows of data
                    while ( have_rows('slider') ) : the_row();
                    $fullImage = get_sub_field('doc_photo');

                    // vars
                    $url =  $fullImage['url'];
                    $title =  $fullImage['title'];
                    $alt =  $fullImage['alt'];
          
                    // thumbnail
                    $fullSize = 'page_doc_main';
                    $mainDoc = $fullImage['sizes'][ $fullSize ];    
                    ?>                   

                       <div class="slide">

                        <div class="doc-card">

                            <div class="doc-card__rel">
                                <div class="doc-card__imageholder" style="background-image: url(<?php echo  $mainDoc  ?>)">
                                    <!-- <img src="" alt=""> -->
                                </div>
                                <h2 class="doc-card__name"><?php echo the_sub_field('doc_name'); ?></h2>
                            </div> 

                            <div class="doc-card__info">
                                <span class="doc-card__spec"><?php echo the_sub_field('doc_spec') ?></span>
                                <span class="doc-card__cat"><?php echo the_sub_field('doc_category') ?></span>
                                <a href="<?php echo the_sub_field('doc_link') ?>">Цены и запись</a>
                            </div>

                        </div>

                       </div> 
                <?php            
                    endwhile;

                else :

                    // no rows found

                endif;

                ?>  

        </div>
    </div>
</section>

<div class="dms-area pt-5 pb-5">
    <div class="container">
        <div class="row align-items-center">
                <div class="col-sm-6">
                    <h1 class="dms__title">Есть полис ДМС?</h1>
                    <p>Выбирайте проверенных врачей, которые входят в вашу программу страхования.</p>
                </div>
                <div class="col-sm-6">
                    <?php echo get_field('dms_form'); ?>
                </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>