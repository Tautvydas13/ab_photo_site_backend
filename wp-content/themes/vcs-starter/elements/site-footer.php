<!--Footer-->
<section id="footer" class="footer">

    <div class="footer-wrapper">

        <div class="footer-signature">
            <a href="<?php echo home_url(); ?>" class="signature"><?php bloginfo('name'); ?></a>
        </div>

        <div class="footer-text">
            <?php the_field('abp_footer_text', 'option') ?>
        </div>

        <div class="footer-icons">

            <ul class="icons-ul">
                <li><a href="<?php the_field('abp_sl_facebook', 'option') ?>" target="_blank"><div class="ring"><span class="fa fa-facebook" aria-hidden="true"></span></div></a></li>
                <li><a href="<?php the_field('abp_sl_instagram', 'option') ?>" target="_blank"><div class="ring"><span class="fa fa-instagram" aria-hidden="true"></span></div></a></li>
                <li><a href="<?php the_field('abp_sl_pinterest', 'option') ?>" target="_blank"><div class="ring"><span class="fa fa-pinterest-p" aria-hidden="true"></span></div></a></li>
                <li><a href="<?php the_field('abp_sl_500px', 'option') ?>" target="_blank"><div class="ring"><span class="fa fa-500px" aria-hidden="true"></span></div></a></li>
                <li><a href="<?php the_field('abp_sl_google-plus', 'option') ?>" target="_blank"><div class="ring"><span class="fa fa-google-plus" aria-hidden="true"></span></div></a></li>
                <li><a href="<?php the_field('abp_sl_blogspot', 'option') ?>" target="_blank"><div class="ring"><span class="fa fa-pencil" aria-hidden="true"></span></div></a></li>
            </ul>

        </div>

        <hr class="footer-hr">
        <div class="footer-copyright">
            &copy; <?php echo date('Y') ?> <a href="mailto:<?php the_field('abp_footer_email', 'option'); ?>" target="_blank"><?php the_field('abp_footer_author', 'option'); ?></a>. <?php _e('All rights reserved.', 'vcs-starter') ?> Website by: <a href="mailto:vtautvydas@gmail.com" target="_blank">Tautvydas Vaičius</a>
        </div>

    </div>

</section>