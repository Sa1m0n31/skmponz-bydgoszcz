<?php
get_header(); ?>

<main>
    <div class="tablica">
        <img class="tablicaImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/bigbox.png'?>" alt="tablica" />
    </div>

    <div class="mainSite">
        <h2 class="headerYellow">Aktualności</h2>
        <?php
            $args = array(
                    'post_type' => 'post',
                    'paged' => get_query_var( 'paged' )
            );

            $main = new WP_Query( $args );

            if($main->have_posts()) {
                while($main->have_posts()) {
                    $main->the_post();
                    ?>
                    <div class="aktualnosciItem">
                        <h4 class="aktualnosciDate">
                            <?php echo get_the_date(); ?>
                        </h4>

                        <h2 class="headerYellow aktualnosciTitle">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                        <p class="aktualnosciExcerpt">
                            <?php the_excerpt(); ?>
                        </p>

                        <button class="aktualnosciBtn">
                            <a href="<?php the_permalink(); ?>">
                                <span class="aktualnosciBtnText">Więcej</span>
                                <img class="aktualnosciBtnArrow" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/arrow_duo_right.svg'; ?>" alt="arrow" />
                            </a>
                        </button>
                    </div>
        <?php
                }
                posts_nav_link();
                wp_reset_query();
            }

        ?>
    </div>
</main>

<?php
get_footer();
?>
