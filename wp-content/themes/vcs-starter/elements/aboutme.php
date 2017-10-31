<!--About Me-->
<section id="aboutme" class="aboutme">
            
            <div class="aboutme-person">
                <img src="<?php the_field('abp_aboutme_author-pic', 'option'); ?>" alt="Artist Picture">
            </div>
            <div class="aboutme-text">
            
                <article>
                    <h3><?php the_field('abp_aboutme_title', 'option'); ?></h3>
                    <hr class="dash_dot_dash">
                    <p><?php the_field('abp_aboutme_description', 'option'); ?></p>
                </article>
            
            </div>
            <?php if ( $post = get_field('abp_aboutme_link', 'option') ): ?>
            <div class="aboutme-signature">
                <a href="#<?php echo $post->post_name; ?>" class="signature"><?php bloginfo('name'); ?></a>
            </div>
            <?php endif; ?>
            <div class="aboutme-icons">
            
                <ul class="icons-ul">
                    <li><a href="<?php the_field('abp_sl_facebook', 'option') ?>" target="_blank"><div class="ring"><span class="fa fa-facebook" aria-hidden="true"></span></div></a></li>
                    <li><a href="<?php the_field('abp_sl_instagram', 'option') ?>" target="_blank"><div class="ring"><span class="fa fa-instagram" aria-hidden="true"></span></div></a></li>
                    <li><a href="<?php the_field('abp_sl_pinterest', 'option') ?>" target="_blank"><div class="ring"><span class="fa fa-pinterest-p" aria-hidden="true"></span></div></a></li>
                    <li><a href="<?php the_field('abp_sl_500px', 'option') ?>" target="_blank"><div class="ring"><span class="fa fa-500px" aria-hidden="true"></span></div></a></li>
                    <li><a href="<?php the_field('abp_sl_google-plus', 'option') ?>" target="_blank"><div class="ring"><span class="fa fa-google-plus" aria-hidden="true"></span></div></a></li>
                    <li><a href="<?php the_field('abp_sl_blogspot', 'option') ?>" target="_blank"><div class="ring"><span class="fa fa-pencil" aria-hidden="true"></span></div></a></li>
                </ul>
            
            </div>
            
        </section>