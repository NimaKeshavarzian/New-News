<div id="articles">
    <h1 id="articlesTitle"><?php echo $title; ?></h1>
    <?php
    if (have_posts()) : while (have_posts()) : the_post();
    ?>
            <article class="post">
                <img loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="postThumbnail">
                <div class="postData">
                    <h1 class="postTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <h2 class="postMoreData">
                        <span class="postMoreDataItem">by <span><?php the_author(); ?></span></span>
                        <span class="postMoreDataItem"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/icons/calendar-solid.svg" alt="Date" width="20" height="20"><span> <?php echo get_the_date(); ?></span></span>
                        <span class="postMoreDataItem"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/icons/clock-solid.svg" alt="Time" width="20" height="20"><span> <?php echo get_the_time() ?></span></span>
                    </h2>
                </div>
            </article>
    <?php
        endwhile;
    endif;
    numeric_posts_nav();
    ?>
</div>
</div>