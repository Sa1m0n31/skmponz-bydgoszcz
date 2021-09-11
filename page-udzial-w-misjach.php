<?php
get_header(); ?>

<main>
    <div class="tablica">
        <img class="tablicaImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/spichrze.jpg'?>" alt="tablica" />
    </div>

    <div class="mainSite mainSite--udzialWMisjach">
        <h2 class="headerYellow">Zestawienie udziału członków z Koła Nr 22 SKMP ONZ w Grudziądzu w misjach i operacjach wojskowych poza granicami państwa</h2>


        <?php
            the_content();
        ?>
    </div>

<?php get_footer(); ?>