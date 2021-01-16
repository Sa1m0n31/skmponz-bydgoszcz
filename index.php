<?php
get_header(); ?>

<main>
    <div class="tablica">
        <img class="tablicaImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/bigbox.png'?>" alt="tablica" />
    </div>

    <div class="mainSite">
        <h2 class="headerYellow">Władze koła</h2>

        <h3 class="headerWhite">1. Zarząd Koła</h3>

        <div class="zarzadInner">
            <div class="zarzadItem">
                <img class="zarzadItemImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/Keller.png'; ?>" alt="ryszard-keller" />

                <h4 class="zarzadItemName">
                    <span class="bold">Ryszard Keller</span> (UNEF II - Egipt) - <span class="bold">Prezes</span>
                </h4>
            </div>

            <div class="zarzadItem">
                <img class="zarzadItemImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/Chlebosz.png'; ?>" alt="krzysztof-chlebosz" />

                <h4 class="zarzadItemName">
                    <span class="bold">Krzysztof Chlebosz</span>  (UNEF II - Liban) - <span class="bold">Wiceprezes</span>
                </h4>
            </div>

            <div class="zarzadItem">
                <img class="zarzadItemImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/kol-Przyjemski.jpg'; ?>" alt="jerzy-przyjemski" />

                <h4 class="zarzadItemName">
                    <span class="bold">Jerzy Przyjemski</span>  (UNEF II – Egipt) - <span class="bold">Członek</span>
                </h4>
            </div>

            <div class="zarzadItem">
                <img class="zarzadItemImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/Jarzebowski.png'; ?>" alt="andrzej-jarzebowski" />

                <h4 class="zarzadItemName">
                    <span class="bold">Andrzej Jarzębowski</span> (UNIFIL - Liban, IF - Irak) - <span class="bold">Sekretarz</span>
                </h4>
            </div>

            <div class="zarzadItem">
                <img class="zarzadItemImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/Kozlowski.png'; ?>" alt="wojciech-kozlowski" />

                <h4 class="zarzadItemName">
                    <span class="bold">Wojciech Kozłowski</span> (UNIFIL - Liban, UNDOF- Syria) - <span class="bold">Skarbnik</span>
                </h4>
            </div>
        </div>

        <h3 class="headerWhite">2. Komisja rewizyjna</h3>

        <div class="zarzadInner">
            <div class="zarzadItem">
                <img class="zarzadItemImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/Eugeniusz-Trzcinski.png'; ?>" alt="eugeniusz-trzcinski" />

                <h4 class="zarzadItemName">
                    <span class="bold">Eugeniusz Trzciński</span> (UNIFIL - Liban) - <span class="bold">Przedowniczący</span>
                </h4>
            </div>

            <div class="zarzadItem">
                <img class="zarzadItemImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/krzysztof-Gorski.png'; ?>" alt="krzysztof-gorski" />

                <h4 class="zarzadItemName">
                    <span class="bold">Krzysztof Górski</span> (UNDOF – Syria) - <span class="bold">Wiceprzewodniczący</span>
                </h4>
            </div>

            <div class="zarzadItem">
                <img class="zarzadItemImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/Zbyszek-Rogalski.png'; ?>" alt="wojciech-kozlowski" />

                <h4 class="zarzadItemName">
                    <span class="bold">Zbigniew Rogalski</span> (UNEF II - Egipt) - <span class="bold">Członek</span>
                </h4>
            </div>
        </div>

        <div class="deklaracja">
            <h2 class="headerYellow">
                Deklaracja członkowska
            </h2>

            <h3>Wzor deklaracji dostepny jest <a>TUTAJ</a></h3>

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
        </div>
    </div>
</main>

<?php
get_footer();
?>
