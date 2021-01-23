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
            <?php

                $args = array(
                        //'category_name' => 'Posiedzenia zarzadu',
                        'type' => 'yearly'
                );

                wp_get_archives($args);

                /*$pos = new WP_Query($args);

                if($pos->have_posts()) {
                    while($pos->have_posts()) {
                        $pos->the_post();
                        echo 'posiedzenie';
                    }
                    wp_reset_postdata();
                } */
            ?>
        </div>

    </div>

<?php
get_footer();
?>
