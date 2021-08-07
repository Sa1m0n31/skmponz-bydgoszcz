<?php
get_header();
?>

<main>
    <div class="tablica">
        <img class="tablicaImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/spichrze.jpg'?>" alt="tablica" />
    </div>

    <div class="mainSite pageContent">
        <h2 class="headerYellow">
            <?php
            echo the_title();
            ?>
        </h2>

        <!-- WSTEP -->
        <?php the_content(); ?>

        <ul class="wspomieniaZMisjiList">
        <?php
            $args = array(
                'post_type' => 'Wspomnienia z misji'
            );

            $wm = new WP_Query($args);

            if($wm->have_posts()) {
                while($wm->have_posts()) {
                    $wm->the_post(); ?>

                    <li class="wspomieniaItem">
                        <a href="<?php the_permalink(); ?>">
                        <?php

                        ?>
                        <img class="wspomieniaThumbnail"
                            src="<?php $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                            echo $url ?>
                            "
                             alt="wspomnienia-z-misji" />

                        <h4 class="wspomieniaTitle">
                            <?php echo the_title(); ?>
                        </h4>
                         </a>
                    </li>


        <?php
                }
                wp_reset_postdata();
            }
        ?>
        </ul>

    </div>

</main>

<?php
get_footer();
?>
