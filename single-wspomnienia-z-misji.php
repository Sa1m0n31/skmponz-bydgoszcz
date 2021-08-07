<?php
get_header();
?>

<main>
    <div class="tablica">
        <img class="tablicaImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/spichrze.jpg'?>" alt="tablica" />
    </div>

    <div class="mainSite pageContent">
        <?php
            if(have_posts()) {
                while(have_posts()) {
                    the_post();
                    ?>
                    <h2 class="headerYellow">
                        <?php
                        echo the_title();
                        ?>
                    </h2>

                    <?php the_content(); ?>

        <?php
                }
            }

        ?>
    </div>

</main>

<?php
get_footer();
?>
