<?php
get_header();
?>

    <main>
        <div class="tablica">
            <img class="tablicaImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/bigbox.png'?>" alt="tablica" />
        </div>

        <div class="mainSite">
            <?php
            if(have_posts()) {
                while(have_posts()) {
                    the_post();
                    ?>
                    <div class="aktualnosciItem articleItem">
                        <h4 class="aktualnosciDate">
                            <?php echo get_the_date(); ?>
                        </h4>

                        <h2 class="headerYellow aktualnosciTitle">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                        <div class="aktualnosciExcerpt">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <?php
                }
            }

            ?>
        </div>
    </main>

<?php
get_footer();
