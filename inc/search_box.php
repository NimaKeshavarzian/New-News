<!-- Search Box -->
<form method="GET">
    <div id="searchBox" class="hidden">
        <input type="text" name="s" id="searchValue" placeholder="Search...">
        <button type="submit" id="submitSearch">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/icons/search-solid.svg" alt="Search" width="30" height="35">
        </button>
        <button type="button" id="closeSearchBox">&#10005;</button>
    </div>
</form>