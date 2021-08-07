<?php
get_header();
?>

<main>
    <div class="tablica">
        <img class="tablicaImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/spichrze.jpg'?>" alt="tablica" />
    </div>

    <div class="mainSite pageContent">
        <h2 class="headerYellow komunikatyYellow">
            <?php
            echo the_title();
            ?>
        </h2>

        <?php
        $args = array(
            'post_type' => 'Kom organizacyjne',
            'posts_per_page' => 100
        );

        $q = new WP_Query($args);

        if($q->have_posts()) {
            while($q->have_posts()) {
                $q->the_post();
                ?>

                <div class="komunikatyItem">
                    <h4 class="komunikatyDate">
                        Bydgoszcz<br/>
                        <?php echo the_date(); ?>
                    </h4>

                    <h3 class="komunikatyTitle">
                        <?php echo the_title(); ?>
                    </h3>

                        <?php echo the_content(); ?>
                </div>


        <?php
            }
            wp_reset_postdata();
        }
        ?>
    </div>

</main>

<?php
get_footer();
?>
