<?php
function numeric_posts_nav() {
if (is_singular()) return;
global $wp_query;
/** Stop execution if there's only 1 page */
if ($wp_query->max_num_pages <= 1) {
    echo '<div><ul id="pageNumber">' . "\n".'<li class="pageNumberItem" class="pageNumberItem selectedPage">1</li>';
    return;
}
$paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
$max = intval($wp_query->max_num_pages);
/** Add current page to the array */
if ($paged >= 1) $links[] = $paged;
/** Add the pages around the current page to the array */
if ($paged >= 3)
    {
    $links[] = $paged - 1;
    $links[] = $paged - 2;
    }

if (($paged + 2) <= $max)
    {
    $links[] = $paged + 2;
    $links[] = $paged + 1;
    }

echo '<div><ul id="pageNumber">' . "\n";
/** Previous Post Link */
if (get_previous_posts_link()) printf('<li class="pageNumberItem">%s</li>', get_previous_posts_link("<"));
/** Link to first page, plus ellipses if necessary */
if (!in_array(1, $links))
    {
    $class = 1 == $paged ? ' class="pageNumberItem selectedPage"' : '';
    printf('<li%s class="pageNumberItem"><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)) , '1');
    if (!in_array(2, $links)) echo '<li class="pageNumberItem">…</li>';
    }

/** Link to current page, plus 2 pages in either direction if necessary */
sort($links);
foreach((array)$links as $link)
    {
    $class = $paged == $link ? ' class="pageNumberItem selectedPage"' : '';
    printf('<li%s class="pageNumberItem"><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)) , $link);
    }

/** Link to last page, plus ellipses if necessary */
if (!in_array($max, $links))
    {
    if (!in_array($max - 1, $links)) echo '<li class="pageNumberItem">…</li>' . "\n";
    $class = $paged == $max ? ' class="pageNumberItem selectedPage"' : '';
    printf('<li%s class="pageNumberItem"><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)) , $max);
    }

/** Next Post Link */
if (get_next_posts_link()) printf('<li class="pageNumberItem">%s</li>', get_next_posts_link(">"));
echo '</ul></div>' . "\n";
}
