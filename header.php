<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>
<body>
<div class="container">
    <div class="content">
        <header>
            <div class="menuMobile">
                <button class="exit" onclick="menuClose()">
                    <img class="exitImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/exit.svg'; ?>" alt="exit" />
                </button>

                <h1 class="mobileMenuHeader">
                    Menu
                </h1>

                <menu>
                    <ul>
                        <?php
                        wp_nav_menu(array('theme_location' => 'menu-1'));
                        ?>
                    </ul>

                    <?php
                    if ( is_active_sidebar( 'sidebar-mobile' ) ) : ?>
                        <div id="widget-area" class="chw-widget-area widget-area mobileOnly" role="complementary">
                            <?php dynamic_sidebar( 'sidebar-mobile' ); ?>
                        </div>

                    <?php endif; ?>
                </menu>
            </div>

            <div class="headerLeft">
                <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                ?>
                <img class="headerOrder" src="<?php echo $image[0]; ?>" alt="luczniczka">
<!--                <div class="wrapperHelper">-->
<!--                    <img class="headerOrder" src="--><?php //echo get_bloginfo('stylesheet_directory') . '/img/order4.png' ?><!--" alt="medal" />-->
<!--                </div>-->
            </div>

            <div class="headerMain">

                <img class="headerOrder" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/skmponz-logo.png' ?>" alt="medal" />

                <div class="headerMainTitle">
                    <h1>
                        <a href="<?php echo home_url(); ?>">
                            Stowarzyszenie Kombatantów Misji Pokojowych ONZ
                        </a>
                    </h1>
                    <h2>
                        <a href="<?php echo home_url(); ?>">
                            Koło nr 1 w Bydgoszczy
                        </a>
                    </h2>
                </div>

                <img class="headerOrder" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/medal1.png' ?>" alt="medal-stulecia-bydgoszczy" />
                <img class="headerOrder" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/medal2.png' ?>" alt="medal-marszalka" />

                <button class="hamburgerMenu" onclick="menuOpen()">
                    <span class="hamburgerMenuLine"></span>
                    <span class="hamburgerMenuLine"></span>
                    <span class="hamburgerMenuLine"></span>
                </button>
            </div>
        </header>

        <menu class="mainMenu">
            <ul>
                <?php
                    wp_nav_menu(array('theme_location' => 'menu-1'));
                ?>
            </ul>
        </menu>

        <!-- SRODEK - TABLICA I TRESC STRONY -->

        <aside class="sidebar">
            <!--<h2 class="marginBottom">
                Kontakt:
            </h2>

            <h3>
                Adres do korespondencji:
            </h3>
            <h4>Stowarzyszenie Kombatantów</h4>
            <h4>Misji Pokojowych ONZ</h4>
            <h4>Koło Nr 1 w Bydgoszczy</h4>
            <h4>ul. Sułkowskiego 52a</h4>
            <h4>85-915 Bydgoszcz</h4>


            <h3 class="marginTop">
                Telefony, adres e-mail:
            </h3>
            <h4>Prezes: 605 625 899,</h4>
            <h4 class="marginBottom">e-mail: r.keller@op.pl</h4>

            <h4 class="marginBottom">Skarbnik 602 380 159</h4>-->

            <?php

            if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                <div id="widget-area" class="chw-widget-area widget-area" role="complementary">
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                </div>

            <?php endif; ?>

            <?php
            echo do_shortcode('[apvc_embed type="customized" border_size="2" border_radius="5" background_color="" font_size="14" font_style="" font_color="" counter_label="Licznik odwiedzin:" today_cnt_label="Licznik odwiedzin:" global_cnt_label="Licznik odwiedzin:" border_color="" border_style="solid" padding="5" width="200" global="true" today="false" current="false" icon_position="" widget_template="None" ]');
            ?>

        </aside>

