<?php
get_header();
?>

<main class="historiaStowarzyszenia">
    <div class="tablica">
        <img class="tablicaImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/spichrze.jpg'?>" alt="tablica" />
    </div>

    <div class="mainSite pageContent">
        <h2 class="headerYellow">
            <?php
                echo the_title();
            ?>
        </h2>

        <?php the_content(); ?>
    </div>

</main>

<?php
get_footer();
?>
