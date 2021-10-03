<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#174E81">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <title><?php echo get_bloginfo("name")." | ".get_bloginfo("description"); ?></title>
</head>

<body>

    <!-- Loader -->
    <div id="loader">
        <div id="loaderElement"></div>
    </div>

    <?php
    // Search Box
    require('inc/search_box.php');
    // Header
    get_header();
    // Slider
    require('inc/slider.php');
    ?>
    <div id="articlesContainer">
        <?php
        // Articles
        $title = "RECENT";
        require('inc/articles.php');
        // More data
        get_sidebar();
        ?>
    </div>
    <?php
    // Widgets Template
    require('inc/widgets.php');
    // Footer
    get_footer();
    ?>

    <!-- Scripts -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

</body>

</html>