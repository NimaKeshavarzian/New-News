<div id="commentsContainer">
    <h1 id="commentsPartTitle">Comments</h1>
    <?php
    if (post_password_required()) {
        return;
    }
    if (have_comments()) : ?>
        <div id="comments">
            <?php
            wp_list_comments(
                array(
                    'short_ping'  => true,
                    'avatar_size' => 50,
                    'style' => 'div'
                )
            );
            ?>
        </div><!-- .comment-list -->

        <?php if (!comments_open()) : ?>
            <p class="no-comments"><?php _e('Comments are closed.', 'New News'); ?></p>
    <?php endif;
    endif; // have_comments() 
    comment_form(); ?>
</div>