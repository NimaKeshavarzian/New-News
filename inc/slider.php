<?php
$sliderQuery = new WP_Query(array(
    "category_name" => "slider",
    "posts_per_page" => "5"
));
$sliderPostsNumber = 0;
if($sliderQuery->post_count >= 3) :
?>
<div id="slider">
    <div id="leftSlider">
        <?php
        if ($sliderQuery->have_posts()) :
            while ($sliderQuery->have_posts()) :
                if (($sliderPostsNumber++) == 3) break;
                $sliderQuery->the_post();
        ?>
                <article class="sliderItem">
                    <img loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="sliderItemImg">
                    <h1 class="sliderItemTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                </article>
            <?php
            endwhile;
            ?>
    </div>
    <div id="rightSlider">
        <?php
            while ($sliderQuery->have_posts()) :
                if (($sliderPostsNumber++) == 3) break;
                $sliderQuery->the_post();
        ?>
            <article class="sliderItem">
                <img loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="sliderItemImg">
                <h1 class="sliderItemTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            </article>
        <?php
            endwhile;
            wp_reset_postdata();
        ?>
    </div>

<?php endif; ?>
</div>
<?php endif; ?>