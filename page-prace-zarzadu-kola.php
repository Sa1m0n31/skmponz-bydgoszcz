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
            <div class="praceZarzaduTopPanel">
                <h3>Idź do:</h3>
                <ul>
                    <?php
                        for($i=date("Y"); $i>=2014; $i--) {
                            ?>
                        <li onclick="<?php echo 'goTo(' . $i .  ')'; ?>">
                                <?php echo $i; ?>
                        </li>
                    <?php
                        }
                    ?>
                </ul>
            </div>

            <?php
                for($i=date('Y'); $i>=2014; $i--) {
                    $args = array(
                        'post_type' => 'Posiedzenia zarzadu',
                        'date_query' => array(
                                'year' => $i
                        )
                    );
                    $year = new WP_Query($args);

                    if($year->have_posts()) {
                        ?>
                        <h2 class="posiedzeniaBigHeader">
                            <span class="pos" id="<?php echo 'pos' . $i; ?>"></span>
                            Archiwum za rok <?php echo $i; ?>
                        </h2>
            <?php
                        while($year->have_posts()) {
                            $year->the_post();
                            ?>
                            <div class="komunikatyItem">
                                <h3 class="komunikatyTitle">
                                    <?php echo the_title(); ?>
                                </h3>

                                <?php echo the_content(); ?>
                            </div>

            <?php
                        }
                        wp_reset_postdata();
                    }
                }
            ?>
        </div>

    </div>

<?php
get_footer();
?>
