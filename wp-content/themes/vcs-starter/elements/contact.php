<!--Contact-->

<?php
$post_data = get_post( 137 );

global $post;
$post = $post_data;
setup_postdata($post);
?>

<section id="contact" class="contact">

    <div class="contact-text">
        <h2><?php the_title();?></h2>
        <hr class="dash_dot_dash">
        <p><?php the_content(); ?></p>
    </div>
<?php wp_reset_postdata(); ?>
    
    <div class="contact-form">
        <?php echo do_shortcode('[contact-form-7 id="38" title="Contact form 1"]'); ?>        
    </div>

</section>