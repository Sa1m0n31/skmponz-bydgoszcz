<?php
get_header();
?>

    <main>
        <div class="tablica">
            <img class="tablicaImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/spichrze.jpg'?>" alt="tablica" />
        </div>

        <div class="mainSite">
            <h2 class="headerYellow">Archiwum za <?php single_month_title(' '); ?></h2>
            <?php
            if(have_posts()) {
                while(have_posts()) {
                    the_post();
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
            }

            ?>
        </div>
    </main>

<?php
get_footer();
?>