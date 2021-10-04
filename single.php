<?php
while (have_posts()) :
    the_post();
    setPostViews(get_the_ID());

    $postId = get_the_ID();
?>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#174E81">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <title><?php echo get_the_title() . " | " . get_bloginfo("name"); ?></title>
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
        ?>

        <!-- Article -->
        <article id="article">
            <div id="postData">
                <img loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" id="thumbnail">
                <div id="data">
                    <h1 id="postTitle"><?php the_title(); ?></h1>
                    <h2 id="postMoreData">
                        <span class="postMoreDataItem">by<span> <?php the_author(); ?></span></span>
                        <span class="postMoreDataItem"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/icons/calendar-solid.svg" alt="Date" width="20" height="20"><span><?php the_date(); ?></span></span>
                        <span class="postMoreDataItem"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/icons/clock-solid.svg" alt="Time" width="20" height="20"><span> <?php the_time(); ?></span></span>
                    </h2>
                    <div id="postCategories">
                        <?php
                        $categories = get_the_category($postId);
                        foreach ($categories as $category) :
                            // Check system categories
                            if ($category->name == "slider post") continue;
                        ?>
                            <span class="postCategory"><?php echo $category->name; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <p id="postContent"><?php the_content(); ?></p>

            <div id="tagsContainer">
                <span class="title">Tags:</span>
                <div id="tags">
                    <?php
                    $tags = get_the_tags($postId);
                    if ($tags) :
                        foreach ($tags as $tag) :
                    ?>
                            <div class="tag"><?php echo $tag->name; ?></div>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
            <?php
            // Comments
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>
        </article>

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
<?php
endwhile;
?>