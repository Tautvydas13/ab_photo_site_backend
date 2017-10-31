<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
    

    
<head>
    
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title><?php wp_title(); ?></title>
        
    <link rel="icon" href="<?php echo ASSETS_URL . "/assets/images/favicon.ico"; ?>" type="image/gif">
    
    <?php wp_head(); ?>
    
    <script type="text/javascript">
        /* ==================================================
           Auto toggle Home background image
        ================================================== */

        // current|previous image CLASS toggle
        function toggleClass(picNo) {
            var activeElementId = "background-pic-" + picNo;

            var previousElement1 = (picNo == 0) ? images.length - 1 : picNo - 1;
            var previousElementId1 = "background-pic-" + previousElement1;
            var previousElement2 = (previousElement1 == 0) ? images.length - 1 : previousElement1 - 1;
            var previousElementId2 = "background-pic-" + previousElement2;
            var previousElement3 = (previousElement2 == 0) ? images.length - 1 : previousElement2 - 1;
            var previousElementId3 = "background-pic-" + previousElement3;

            //previous elements
            document.getElementById(previousElementId1).classList.remove();
            document.getElementById(previousElementId1).className = "fa fa-circle-o";
            document.getElementById(previousElementId2).classList.remove();
            document.getElementById(previousElementId2).className = "fa fa-circle-o";
            document.getElementById(previousElementId3).classList.remove();
            document.getElementById(previousElementId3).className = "fa fa-circle-o";

            //current element
            document.getElementById(activeElementId).classList.remove();
            document.getElementById(activeElementId).className = "fa fa-circle";
        }

        // IMAGE toggle
        function displayImage(i) {
            document.getElementById("home-background").style.backgroundImage = images[i];
            toggleClass(i);
        }

        function displayNextImage() {
            x = (x === images.length - 1) ? 0 : x + 1;
            document.getElementById("home-background").style.backgroundImage = images[x];
            toggleClass(x);
        }

        var x = -1;
        var images = [
        <?php if(have_rows('abp_home_carousel', 'option') ): ?>
            <?php while(have_rows('abp_home_carousel', 'option') ) :
            the_row(); ?>
        
            <?php 
                echo $carousel_img_url = ' "url( ' . " ' " . get_sub_field('abp_home_carousel_image', 'option') . " ' " . ' )", ';
            ?>    
            <?php endwhile; ?>
        <?php endif; ?>
        ];
        
        // start|stop timer for auto toggle
        var go = false;

        function timer() {
            if(!go) {return;}
            displayNextImage();
            setTimeout(timer, 5000);
        }

        function stopTimer(){
            go = false;  
        } 

        function startTimer(){
            go = true;
            timer();
        }
    </script>
    
</head>

<body onload="startTimer()">
    
    <div class="wrapper" id="wrapper">
        
    <?php get_template_part('elements/site-header'); ?>
    <?php get_template_part('elements/aboutme'); ?>
    <?php get_template_part('elements/albums'); ?>
    <?php get_template_part('elements/services'); ?>
    <?php get_template_part('elements/contact'); ?>
    
