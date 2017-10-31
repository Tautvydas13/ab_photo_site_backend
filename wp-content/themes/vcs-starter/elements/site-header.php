<!--Home-->
<section id="home" class="home" id="home">
    <div class="home-inner" id="home-background">
        <div class="home-body">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">

                    <!--Logo-->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="<?php echo home_url(); ?>" class="signature"><?php bloginfo('name'); ?></a>
                    </div>

                    <!--Menu Items-->
                    <div class="collapse navbar-collapse" id="main-navbar">
                        <?php mainMenu('primary-navigation', 'nav navbar-nav navbar-right') ?>
                    </div>

                </div>
            </nav>

            <div class="home-body-bottom">
                <ul>
                    <li>
                        <button type="button" onclick="displayImage(0)"><span id="background-pic-0" class="fa fa-circle" aria-hidden="true"></span></button>
                    </li>
                    <li>
                        <button type="button" onclick="displayImage(1)"><span id="background-pic-1" class="fa fa-circle-o" aria-hidden="true"></span></button>
                    </li>
                    <li>
                        <button type="button" onclick="displayImage(2)"><span id="background-pic-2" class="fa fa-circle-o" aria-hidden="true"></span></button>
                    </li>
                    <li>
                        <button type="button" onclick="displayImage(3)"><span id="background-pic-3" class="fa fa-circle-o" aria-hidden="true"></span></button>
                    </li>
                    <div class="toggle-control">
                        <li>
                            <button type="button" onclick="startTimer()"><span class="fa fa-play" aria-hidden="true"></span></button>
                        </li>
                        <li>
                            <button type="button" onclick="stopTimer()"><span class="fa fa-stop" aria-hidden="true"></span></button>
                        </li>
                    </div>

                </ul>
            </div>
        </div>
    </div>
</section>