<?php

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
        <?php dynamic_sidebar( 'custom-header-widget' ); ?>
    </div>

<?php endif; ?>