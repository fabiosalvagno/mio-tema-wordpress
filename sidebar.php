<?php
if ( is_active_sidebar( 'barra-laterale-principale' ) ) : ?>
    <aside id="sidebar" class="widget-area">
        <?php dynamic_sidebar( 'barra-laterale-principale' ); ?>
    </aside>
<?php endif; ?>
