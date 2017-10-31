<!--Albums-->
<?php
    $post_data = get_post( 134 );
    global $post;
    $post = $post_data;
    setup_postdata($post);
?>

<section id="albums" class="albums">
    <div class="albums-categories">
        <h2 class="type-work"><?php the_title(); ?></h2>
        <hr class="dash_dot_dash">
<?php wp_reset_postdata(); ?>
        
        <nav id="iso-options" class="albums-nav">
        
        <?php
            $page = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $my_query = new WP_Query(array(
                'post_type' => 'Albums',
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order' => 'DESC',
                'paged' => $page,
            ));
            
if ( $my_query->have_posts() ) :
            
            // Generating filter
            
            $i = 1; $catList = array(); 
            while ($my_query->have_posts()) : $my_query->the_post();
            
                $cat = get_the_category();
            
                for( $j=0; $j<sizeof($cat); $j++ ) {
                    
                    $exist = false;
                    
                    for ( $k=0; $k<sizeof($catList); $k++ ) {
                        
                        if ( $cat[$j]->slug == $catList[$k] ) {
                            $exist = true;
                        }
                        
                    }
                    
                    if ( !$exist ) {
                        array_push( $catList, $cat[$j]->slug );
                    }
                }
            
            $i++; endwhile; 
            ?>

            <ul id="iso-filter" class="iso-filter" data-option-key="filter">
                <li class="iso-option"><a href="#filter" class="selected" data-option-value="*"><?php _e('All projects', 'vcs-starter'); ?></a></li>
                <?php for( $l=0; $l<sizeof($catList); $l++ ): ?>
                    <li class="iso-option"><a href="#filter" data-option-value=".<?php echo $catList[$l] ?>"><?php echo ucwords($catList[$l]); ?></a></li>
                <?php endfor; ?>
            </ul>
            
        </nav>
    </div>

    <div id="projects" class="albums-grid">
        <ul class="albums-grid-row">
            <?php $i = 1; while ($my_query->have_posts()) : $my_query->the_post();
            
            $cat = get_the_category();
            
            // Generate category list
            $output = "";
            for ($i=0; $i<sizeof($cat); $i++){
                if ( $i == sizeof($cat)-1 ) {
                    $output .= $cat[$i]->slug;
                } else {
                    $output .= $cat[$i]->slug . " ";
                }
            }
            ?>
            
            <li class="albums-item <?php echo $output; ?>">
                <a href="#">
                    <?php if ( has_post_thumbnail() ): ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                    <?php endif; ?>
                </a>
            </li>
            <?php $i++; endwhile; ?>
        </ul>
        <?php wp_reset_postdata(); unset($my_query); 
endif; ?>
    </div>

</section>