<?php
/**
* Template Name: DRX

*/
?>

<?php get_header(); ?>


<!-- content -->

<?php

// check if the flexible content field has rows of data
if( have_rows('intro_section') ):

     // loop through the rows of data
    while ( have_rows('intro_section') ) : the_row();

        if( get_row_layout() == 'intro_section_content' ):
          ?>

          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-6">
                <?php the_sub_field('text'); ?>
              </div>
              <div class="col-md-6">
              <img class="img-fluid" src="<?php the_sub_field('image'); ?>" alt="">
              </div>
            </div>
          </div>

          <?php

        


        endif;

    endwhile;

else :

    // no layouts found

endif;

?>


<?php

// check if the flexible content field has rows of data
if( have_rows('treatment_section') ):

     // loop through the rows of data
    while ( have_rows('treatment_section') ) : the_row();
        if( get_row_layout() == 'treatment_section_content' ):
          ?>

          <section style="background-image: url(<?php the_sub_field('parallax_background') ?>)">
            <div class="rellax-wrp"> 
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-md-6">
                    <?php the_sub_field('parallax_text'); ?>
                  </div>
                  <div class="col-md-6">
                    <?php the_sub_field('video'); ?>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <?php        


        endif;

    endwhile;
else :
    // no layouts found

endif;

?>

<?php

// check if the flexible content field has rows of data
if( have_rows('bulge_disc_cause') ):

     // loop through the rows of data
    while ( have_rows('bulge_disc_cause') ) : the_row();

        if( get_row_layout() == 'bulge_disc_cause_content' ):
          ?>
        <section class="drx-cause">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-6">
                <?php the_sub_field('text'); ?>
              </div>
              <div class="col-md-6">
              <img class="img-fluid" src="<?php the_sub_field('image'); ?>" alt="">
              </div>
            </div>
          </div>
        </section>
          <?php

        


        endif;

    endwhile;

else :

    // no layouts found

endif;

?>


<!-- ACCORDION -->

<section>
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

<!-- end content -->


<?php get_footer(); ?>