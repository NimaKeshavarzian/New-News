<div id="moreData">
    <div class="moreDataItem">
        <h1 class="moreDataTitle">Suggestions</h1>
        <?php
        // Suggestions
        $suggestionPostsQuery = new WP_Query(array(
            "category_name" => "suggestions",
            "posts_per_page" => 5
        ));
        if ($suggestionPostsQuery->have_posts()) : while ($suggestionPostsQuery->have_posts()) : $suggestionPostsQuery->the_post();
        ?>
                <article class="moreDataPost">
                    <img loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <h1 class="moreDataPostTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                </article>
        <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>

    <div class="moreDataItem">
        <h1 class="moreDataTitle" id="popularTitle">Popular</h1>
        <?php
        // Most visited posts
        query_posts('meta_key=post_views_count&showposts=4&orderby=meta_value_num&order=DESC&posts_per_page=5');
        if (have_posts()) : while (have_posts()) : the_post();
        ?>
                <article class="moreDataPost">
                    <img loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <h1 class="moreDataPostTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                </article>
        <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
</div>