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
            <div class="headerLeft">
                <img class="headerOrder" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/order1.png' ?>" alt="medal" />
                <img class="headerOrder" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/order2.png' ?>" alt="medal" />
                <img class="headerOrder" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/order3.png' ?>" alt="medal" />
                <img class="headerOrder" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/order4.png' ?>" alt="medal" />
            </div>

            <div class="headerMain">
                <h1>
                    Stowarzyszenie Kombatantów Misji Pokojowych ONZ
                </h1>
                <h2>
                    Koło nr 1 w Bydgoszczy
                </h2>
            </div>
        </header>

        <menu>
            <ul>
                <?php
                    wp_nav_menu(array('theme_location' => 'menu-1'));
                ?>
            </ul>
        </menu>

        <!-- SRODEK - TABLICA I TRESC STRONY -->

        <aside class="sidebar">
            <h2 class="marginBottom">
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

            <h4 class="marginBottom">Skarbnik 602 380 159</h4>

            <h4>Strona internetowa kol. Andrzej Jarzębowski z pomocą
            <a href="https://skylo.pl" target="_blank" rel="noreferrer">skylo.pl</a></h4>

            <?php

            if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                <div id="widget-area" class="chw-widget-area widget-area" role="complementary">
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                </div>

            <?php endif; ?>

        </aside>

