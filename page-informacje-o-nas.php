<?php
get_header();
?>

<main>
    <div class="tablica">
        <img class="tablicaImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/spichrze.jpg'?>" alt="tablica" />
    </div>

    <div class="mainSite">
        <h2 class="headerYellow">Władze koła</h2>

        <div class="zarzadInner">

            <?php
                $args = array(
                        'post_type' => 'zarzad'
                );

                $zarzad = new WP_Query($args);

                if($zarzad->have_posts()) {
                    while($zarzad->have_posts()) {
                        $zarzad->the_post();
                            ?>
                            <div class="zarzadItem">
                                <img class="zarzadItemImg" src="<?php echo get_field('zdjecie'); ?>" alt="<?php echo get_field('czlonek'); ?>" />

                                <h4 class="zarzadItemName">
                                    - <?php echo get_field('czlonek'); ?>
                                </h4>
                            </div>
            <?php
                    }
                    wp_reset_postdata();
                }

            ?>
        </div>

        <!--<div class="deklaracja">
            <h2 class="headerYellow">
                Deklaracja członkowska
            </h2>

            <h3>Wzor deklaracji dostepny jest <a href="<?php echo get_page_link(get_page_by_title('Statut / Zapisy')->ID); ?>">TUTAJ</a></h3>

            <p>
                Składki miesięczne / roczne członkowskie oraz doraźne wpłaty  - można je wnosić na bieżąco ,  w formie przelewu elektronicznego na konto prowadzone przez naszego skarbnika kol. Wojciecha Kozłowskiego.
            </p>

            <h3 class="numerKonta">PKO BP SA  I Oddz./Bydgoszcz<br/>
                45 1020 1462 0000 7802 0221 3270<br/>
                Wojciech Kozłowski</h3>
        </div>

        <div class="dotacjaImg">
            <img src="<?php echo get_bloginfo('stylesheet_directory') . '/img/Dotacja.png'; ?>" alt="dotacja" />
            <img src="<?php echo get_bloginfo('stylesheet_directory') . '/img/KRSa.png'; ?>" alt="dotacja" />
        </div>-->
        <?php
        the_content();
        ?>
    </div>
</main>

<?php
get_footer();
?>
