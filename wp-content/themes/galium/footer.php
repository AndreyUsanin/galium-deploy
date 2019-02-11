<section class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="footer-contacts">
                    <h2>Контакты:</h2>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <span class="icon-phone footer__icon"></span><?php echo get_field('header_phone', 'options'); ?>
                        </li>
                        <li class="footer__item">
                        <span class="icon-location footer__icon"></span><?php echo get_field('header_adress', 'options'); ?>
                        </li>
                        <li class="footer__item">
                        <span class="icon-phone footer__icon"></span><?php echo get_field('header_email', 'options'); ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <h2>Рабочие часы:</h2>
                <ul class="footer__list">
                    <li class="footer__item footer__item--schedule">
                        <span>Понедельник-Пятница:</span>
                        <?php echo get_field('schedule', 'options')['pn_pt']; ?>
                    </li>
                    <li class="footer__item footer__item--schedule">
                        <span>Суббота:</span>
                        <?php echo get_field('schedule', 'options')['sb']; ?>
                    </li>
                    <li class="footer__item footer__item--schedule">
                        <span>Воскресенье:</span> 
                        <?php echo get_field('schedule', 'options')['vs']; ?>
                    </li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h2>Мы в соцсетях:</h2>
                <ul class="footer__list footer__list--soc">
                    <li class="footer__socitem">
                        <a href="<?php echo get_field('soc', 'options')['vk']; ?>"><i class="fab fa-vk"></i></a>
                    </li>
                    <li class="footer__socitem">
                        <a href="<?php echo get_field('soc', 'options')['inst']; ?>"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
</div> <!-- offside container -->
<div class="offside-menu">
    <?php
    wp_nav_menu(array(
    'theme_location' => 'sideMenuLocation',
    'menu_class' => 'side-menu'
    )); ?>
</div>
<?php wp_footer(); ?>
</body>

</html>