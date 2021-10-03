<header>
    <div id="pageHeader">
        <!-- Title -->
        <h1 id="pageTitle"><a href="<?php bloginfo("home") ?>"><?php bloginfo("title"); ?></a></h1>
        
        <?php
        // Main menu
        $menuArgs = array(
            'theme_location' => "main-menu",
            'container' => "nav",
            'container_id' => "pageMenu",
            'items_wrap' => '<ul>%3$s</ul>'
        );
        wp_nav_menu($menuArgs);
        ?>

        <!-- Tools -->
        <div id="pageTools">
            <h1 id="searchBoxTransmitter">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/icons/search-solid.svg" alt="Search" width="30" height="30">
            </h1>
            <h1 id="menuTransmitter" class="hidden">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/icons/bars-solid.svg" alt="Menu" width="30" height="30">
            </h1>
        </div>
    </div>
</header>