<!--Services-->
<section id="services" class="services">
<?php
    $post_data = get_post( 88 );
    global $post;
    $post = $post_data;

    setup_postdata($post);
?>
    <div class="services-heading">
        <h2><?php the_title(); ?></h2>
    </div>
    <hr class="dash_dot_dash">

    <div class="services-wrapper">

        <div class="services-body">
            <div class="services-body-content">
                <img src="<?php the_field('abp_op_image1') ?>" alt="img" class="services-img">
            </div>
            <div class="services-body-content">
                <article>
                    <h3><?php the_field('abp_op_heading1'); ?></h3>
                    <p><?php the_field('abp_op_text1'); ?></p>
                </article>
            </div>
        </div>

        <div class="services-body services-body-lower">
            <div class="services-body-content">
                <article>
                    <h3><?php the_field('abp_op_heading2'); ?></h3>
                    <p><?php the_field('abp_op_text2'); ?></p>
                </article>
            </div>
            
            <div class="services-body-content">
                <img src="<?php the_field('abp_op_image2') ?>" alt="img" class="services-img">
            </div>
        </div>
        <?php wp_reset_postdata(); ?>

    </div>      

</section>