<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#174E81">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <title>New News</title>
</head>

<body>

    <!-- Loader -->
    <div id="loader">
        <div id="loaderElement"></div>
    </div>

    <!-- Search Box -->
    <form method="GET">
        <div id="searchBox" class="hidden">
            <input type="text" name="s" id="searchValue" placeholder="Search...">
            <button type="submit" id="submitSearch" name="submit">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/icons/search-solid.svg" alt="Search" width="30" height="35">
            </button>
            <button type="button" id="closeSearchBox">&#10005;</button>
        </div>
    </form>

    <!-- Header -->
    <header>
        <div id="pageHeader">
            <h1 id="pageTitle"><a>New News</a></h1>
            <nav id="pageMenu">
                <ul>
                    <li class="menuItem"><a href="http://" class="selectedItem">Home</a></li>
                    <li class="menuItem"><a href="http://">Menu</a></li>
                    <li class="menuItem"><a href="http://">Menu 2</a></li>
                    <li class="menuItem"><a href="http://">Lorem ipsum</a></li>
                    <li class="menuItem"><a href="http://">Lorem Ipsum 2</a></li>
                </ul>
            </nav>
            <div id="pageTools">
                <h1 id="searchBoxTransmitter">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/icons/search-solid.svg" alt="Search" width="30" height="30">
                </h1>
                <h1 id="menuTransmitter" class="hidden">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/icons/bars-solid.svg" alt="Menu" width="30" height="30">
                </h1>
            </div>
        </div>
    </header>

    <!-- Article -->
    <article id="article">
        <div id="postData">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/icons/Windows 11 Wallpaper 1.jpg" alt="Title" id="thumbnail">
            <div id="data">
                <h1 id="postTitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
                <h2 id="postMoreData">
                    <span class="postMoreDataItem">by<span> Nima Keshavarzian</span></span>
                    <span class="postMoreDataItem"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/icons/calendar-solid.svg" alt="Date" width="20" height="20"><span>2021-09-22</span></span>
                    <span class="postMoreDataItem"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/icons/clock-solid.svg" alt="Time" width="20" height="20"><span> 22:55:33 pm</span></span>
                </h2>
                <div id="postCategories">
                    <span class="postCategory">Category 1</span>
                    <span class="postCategory">Category 2</span>
                    <span class="postCategory">Category 3</span>
                    <span class="postCategory">Category 4</span>
                    <span class="postCategory">Category 5</span>
                </div>
            </div>
        </div>
        <p id="postContent">Laboris officia qui aliqua tempor mollit. Aute ex sunt sunt magna deserunt officia et voluptate velit ullamco tempor ipsum adipisicing. Sit occaecat amet proident aute tempor occaecat. Dolor commodo sit ullamco nostrud adipisicing nulla ut consequat
            sunt voluptate sint est. Quis cillum ex tempor occaecat sit mollit incididunt cillum eu duis. Reprehenderit culpa officia quis anim dolore ipsum quis do. Ut laboris officia nisi in cillum. Excepteur laborum fugiat pariatur velit enim qui dolore
            aliqua dolor culpa incididunt esse ad incididunt. Veniam adipisicing do consectetur nulla occaecat incididunt esse ullamco dolor non incididunt excepteur dolore. Ullamco esse eu velit nisi veniam fugiat adipisicing ullamco tempor. Commodo
            ex ut nostrud culpa deserunt reprehenderit et pariatur. Esse voluptate amet officia occaecat enim in voluptate. Aliqua occaecat nisi nostrud minim anim esse reprehenderit sunt laborum ex. Sit occaecat cillum et id minim. Pariatur sunt enim
            consequat culpa. Ut Lorem irure enim in ullamco minim. Mollit nisi consectetur veniam laboris est voluptate Lorem ea. Sit laboris pariatur est et eu labore consectetur amet fugiat laboris. Esse aute deserunt ad ullamco. Occaecat exercitation
            fugiat aute magna eu non nisi qui. Fugiat consectetur dolor cillum nostrud Lorem ea commodo ad aliquip ipsum. Enim tempor ullamco exercitation voluptate. Nostrud est id amet eu fugiat sint. Occaecat minim consequat ex laborum deserunt adipisicing
            dolor consequat nulla pariatur commodo. Ut officia velit adipisicing sint ut adipisicing qui irure cillum nostrud. Nostrud amet nisi voluptate consequat deserunt id aute exercitation sunt minim consequat non id incididunt. Aliquip excepteur
            nostrud velit ipsum esse pariatur sint ad. Aliquip ad dolore commodo aute cupidatat. Nisi adipisicing sit sint sint ad aliqua sit. Consectetur est consequat sunt in irure labore tempor ullamco velit ex. Elit id Lorem Lorem cupidatat. Deserunt
            et ullamco commodo aute aliqua nostrud excepteur ea labore enim Lorem. Aute consectetur reprehenderit dolore ullamco excepteur. Quis qui ad ad reprehenderit elit do. Occaecat consequat voluptate nisi nulla aliquip ipsum anim aute tempor dolor
            incididunt culpa. Cillum et magna pariatur eu fugiat consectetur ut mollit ut. Ullamco nisi sit labore dolor esse eu voluptate ea occaecat. Qui aute nisi magna laboris id eu mollit voluptate ut ullamco velit. Ex aute deserunt reprehenderit
            laborum ad ex aute. Consequat sunt ullamco veniam excepteur mollit. Nostrud Lorem anim cupidatat ea nulla velit sint elit laboris laborum.
        </p>
        <div id="tagsContainer">
            <span class="title">Tags:</span>
            <div id="tags">
                <div class="tag">Tag 1</div>
                <div class="tag">Tag 2</div>
                <div class="tag">Tag 3</div>
                <div class="tag">Tag 4</div>
            </div>
        </div>
    </article>

    <!-- Widgets -->
    <div id="widgets">
        <div class="widget">
            <h1 class="widgetTitle"><span>Categories</span></h1>
            <li class="widgetItem">Lorem Ipsum 1</li>
            <li class="widgetItem">Lorem Ipsum 2</li>
            <li class="widgetItem">Lorem Ipsum 3</li>
            <li class="widgetItem">Lorem Ipsum 4</li>
            <li class="widgetItem">Lorem Ipsum 5</li>
        </div>
        <div class="widget">
            <h1 class="widgetTitle"><span>Tags</span></h1>
            <li class="widgetItem">Lorem Ipsum 1</li>
            <li class="widgetItem">Lorem Ipsum 2</li>
            <li class="widgetItem">Lorem Ipsum 3</li>
            <li class="widgetItem">Lorem Ipsum 4</li>
            <li class="widgetItem">Lorem Ipsum 5</li>
            <li class="widgetItem">Lorem Ipsum 6</li>
            <li class="widgetItem">Lorem Ipsum 7</li>
            <li class="widgetItem">Lorem Ipsum 8</li>
            <li class="widgetItem">Lorem Ipsum 9</li>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div id="pageFooter">
            <h1 id="title"><a href="http://">New News</a></h1>
            <h2 id="desc">A news template for wordpress with beautiful parts</h2>

            <a href="mailto:nimakeshavarzian@gmail.com" id="adminMail">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/icons/envelope-solid.svg" alt="Email" width="20" height="20">nimakeshavarzian@gmail.com
            </a>

            <div id="footerWidget">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/icons/rss-solid.svg" alt="" width="30" height="30">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/icons/telegram-brands.svg" alt="" width="30" height="30">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/icons/twitter-brands.svg" alt="" width="30" height="30">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagram-brands.svg" alt="" width="30" height="30">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/icons/facebook-f-brands.svg" alt="" width="30" height="30">
            </div>

            <h3 id="copyright"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/icons/copyright-solid.svg" alt="" width="20" height="20">Copyright 2021</h3>

        </div>
    </footer>

    <!-- Scripts -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

</body>

</html>