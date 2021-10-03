<footer>
    <div id="pageFooter">
        <h1 id="title"><a href="<?php bloginfo("home"); ?>"><?php bloginfo("title"); ?></a></h1>
        <h2 id="desc"><?php bloginfo("description"); ?></h2>

        <a href="mailto:<?php bloginfo('admin_email'); ?>" id="adminMail">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/icons/envelope-solid.svg" alt="Email" width="20" height="20">
            <?php bloginfo('admin_email'); ?>
        </a>

        <div id="footerWidget">
            <?php dynamic_sidebar('footer-widget') ?>
        </div>

        <h3 id="copyright">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/icons/copyright-solid.svg" alt="" width="20" height="20"><?php echo "Copyright ".date("20y"); ?>
        </h3>
        <?php wp_footer(); ?>
    </div>
</footer>