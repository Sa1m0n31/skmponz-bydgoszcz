<?php
get_header(); ?>

<main>
    <div class="tablica">
        <img class="tablicaImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/spichrze.jpg'?>" alt="tablica" />
    </div>

    <div class="mainSite">
        <h2 class="headerYellow">Udział członków SKMP ONZ koła nr 22 w Grudziądzu w misjach poza granicami kraju</h2>


        <?php
            the_content();
        ?>
    </div>

<?php get_footer(); ?>