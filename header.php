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
                            Koło Nr 22 w Grudziądzu
                        </a>
                    </h2>
                </div>

                <button class="hamburgerMenu" onclick="menuOpen()">
                    <span class="hamburgerMenuLine"></span>
                    <span class="hamburgerMenuLine"></span>
                    <span class="hamburgerMenuLine"></span>
                </button>
            </div>

            <div class="headerRight">
                <img class="headerOrder" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/herb-grudziadza.jpg' ?>" alt="medal-stulecia-bydgoszczy" />
            </div>
        </header>

        <menu class="mainMenu">
            <h3 class="mainMenu__header">
                Menu
            </h3>
            <ul>
                <?php
                    wp_nav_menu(array('theme_location' => 'menu-1'));
                ?>
            </ul>
        </menu>

        <!-- SRODEK - TABLICA I TRESC STRONY -->
        <aside class="sidebar">
            <?php

            if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                <div id="widget-area" class="chw-widget-area widget-area" role="complementary">
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                </div>

            <?php endif; ?>

<!--            --><?php
//                echo do_shortcode('[apvc_embed type="customized" border_size="2" border_radius="5" background_color="" font_size="14" font_style="" font_color="" counter_label="Licznik odwiedzin:" today_cnt_label="Licznik odwiedzin:" global_cnt_label="Licznik odwiedzin:" border_color="" border_style="solid" padding="5" width="200" global="true" today="false" current="false" icon_position="" widget_template="None" ]');
//            ?>

        </aside>

