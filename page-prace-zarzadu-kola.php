<?php
get_header();
?>

<main>
    <div class="tablica">
        <img class="tablicaImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/bigbox.png'?>" alt="tablica" />
    </div>

    <div class="mainSite pageContent">
        <h2 class="headerYellow komunikatyYellow">
            <?php
            echo the_title();
            ?>
        </h2>

        <div class="praceZarzaduArchive">

        </div>

    </div>

<?php
get_footer();
?>
