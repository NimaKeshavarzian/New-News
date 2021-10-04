<div id="commentsContainer">
    <h1 id="commentsPartTitle">Comments</h1>
    <div id="comments">
        <?php
        if (post_password_required()) {
            return;
        }

        //Get only the approved comments
        $args = array(
            'status' => 'approve',
            'avatar_size' => 34
        );

        // The comment Query
        $comments_query = new WP_Comment_Query;
        $comments = $comments_query->query($args);

        // Comment Loop
        if ($comments) :
            foreach ($comments as $comment) :
        ?>
                <div class="comment">
                    <header class="userData">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/inc/Windows 11 Wallpaper 1.jpg" alt="Username" class="userAvatar" loading="lazy">
                        <h1 class="userName"><?php echo $comment->comment_author; ?></h1>
                        <h2 class="commentDate"><?php echo $comment->comment_date; ?></h2>
                    </header>
                    <p class="commentContent"><?php echo $comment->comment_content; ?></p>
                </div>
        <?php
            endforeach;
        endif;
        ?>
    </div>
</div>
<style lang="scss">
    .userData {
        height: 6em;
        @include grid(1fr 8fr, repeat(2, 1fr));
        border-bottom: 5px solid $lineColor;
        padding: 0.3em 0.75em 0.5em;

        * {
            width: 100%;
            height: 100%;
        }

        // Avatar
        .userAvatar {
            grid-row: 1/3;
            // Border
            border: 1px solid $lineColor;
            border-radius: map-get($borderRadiusSize, "level1");
        }

        // Data
        .userName,
        .commentDate {
            padding: 0.2em 0.4em 0;
            @include font('overpass-bold', 1.2rem, normal, bold);
        }

        .userName {
            color: map-get($generalColors, "primary");
        }

        .commentDate {
            font-size: 1rem;
            color: map-get($generalColors, "secondary");
        }
    }
</style>