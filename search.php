<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#174E81">
    <link rel="stylesheet" href="./style.css">
    <title>New News</title>
</head>

<body id="archives">

    <!-- Loader -->
    <div id="loader">
        <div id="loaderElement"></div>
    </div>

    <!-- Search Box -->
    <form method="GET">
        <div id="searchBox" class="hidden">
            <input type="text" name="s" id="searchValue" placeholder="Search...">
            <button type="submit" id="submitSearch" name="submit">
                <img src="./assets/icons/search-solid.svg" alt="Search" width="30" height="35">
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
                    <img src="./assets/icons/search-solid.svg" alt="Search" width="30" height="30">
                </h1>
                <h1 id="menuTransmitter" class="hidden">
                    <img src="./assets/icons/bars-solid.svg" alt="Menu" width="30" height="30">
                </h1>
            </div>
        </div>
    </header>

    <!-- Articles -->
    <div id="articlesContainer">
        <div id="articles">
            <h1 id="articlesTitle">5 articles found for <span>"Search Value"</span></h1>
            <article class="post">
                <img src="./assets/icons/Windows 11 Wallpaper 3.jpg" alt="title" class="postThumbnail">
                <div class="postData">
                    <h1 class="postTitle"><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h1>
                    <h2 class="postMoreData">
                        <span class="postMoreDataItem">by<span> Nima Keshavarzian</span></span>
                        <span class="postMoreDataItem"><img src="./assets/icons/calendar-solid.svg" alt="Date" width="20" height="20"><span>2021-09-22</span></span>
                        <span class="postMoreDataItem"><img src="./assets/icons/clock-solid.svg" alt="Time" width="20" height="20"><span> 22:55:33 pm</span></span>
                    </h2>
                </div>
            </article>

            <article class="post">
                <img src="./assets/icons/Windows 11 Wallpaper 10.jpg" alt="title" class="postThumbnail">
                <div class="postData">
                    <h1 class="postTitle"><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h1>
                    <h2 class="postMoreData">
                        <span class="postMoreDataItem">by<span> Nima Keshavarzian</span></span>
                        <span class="postMoreDataItem"><img src="./assets/icons/calendar-solid.svg" alt="Date" width="20" height="20"><span>2021-09-22</span></span>
                        <span class="postMoreDataItem"><img src="./assets/icons/clock-solid.svg" alt="Time" width="20" height="20"><span> 22:55:33 pm</span></span>
                    </h2>
                </div>
            </article>

            <article class="post">
                <img src="./assets/icons/Windows 11 Wallpaper 13.jpg" alt="title" class="postThumbnail">
                <div class="postData">
                    <h1 class="postTitle"><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h1>
                    <h2 class="postMoreData">
                        <span class="postMoreDataItem">by<span> Nima Keshavarzian</span></span>
                        <span class="postMoreDataItem"><img src="./assets/icons/calendar-solid.svg" alt="Date" width="20" height="20"><span>2021-09-22</span></span>
                        <span class="postMoreDataItem"><img src="./assets/icons/clock-solid.svg" alt="Time" width="20" height="20"><span> 22:55:33 pm</span></span>
                    </h2>
                </div>
            </article>

            <article class="post">
                <img src="./assets/icons/Windows 11 Wallpaper 15.jpg" alt="title" class="postThumbnail">
                <div class="postData">
                    <h1 class="postTitle"><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h1>
                    <h2 class="postMoreData">
                        <span class="postMoreDataItem">by<span> Nima Keshavarzian</span></span>
                        <span class="postMoreDataItem"><img src="./assets/icons/calendar-solid.svg" alt="Date" width="20" height="20"><span>2021-09-22</span></span>
                        <span class="postMoreDataItem"><img src="./assets/icons/clock-solid.svg" alt="Time" width="20" height="20"><span> 22:55:33 pm</span></span>
                    </h2>
                </div>
            </article>

            <article class="post">
                <img src="./assets/icons/Windows 11 Wallpaper 1.jpg" alt="title" class="postThumbnail">
                <div class="postData">
                    <h1 class="postTitle"><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h1>
                    <h2 class="postMoreData">
                        <span class="postMoreDataItem">by<span> Nima Keshavarzian</span></span>
                        <span class="postMoreDataItem"><img src="./assets/icons/calendar-solid.svg" alt="Date" width="20" height="20"><span>2021-09-22</span></span>
                        <span class="postMoreDataItem"><img src="./assets/icons/clock-solid.svg" alt="Time" width="20" height="20"><span> 22:55:33 pm</span></span>
                    </h2>
                </div>
            </article>

            <ul id="pageCounter">
                <li>
                    <a>
                        <</a>
                </li>
                <li class="selectedPage"><a>1</a></li>
                <li><a>2</a></li>
                <li><a>3</a></li>
                <li><a>4</a></li>
                <li><a>5</a></li>
                <li><a>></a></li>
            </ul>
        </div>

        <div id="moreData">
            <div class="moreDataItem">
                <h1 class="moreDataTitle">Suggestions</h1>
                <article class="moreDataPost">
                    <img src="./assets/icons/Windows 11 Wallpaper 15.jpg" alt="Title">
                    <h1 class="moreDataPostTitle"><a href="http://">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h1>
                </article>
                <article class="moreDataPost">
                    <img src="./assets/icons/Windows 11 Wallpaper 1.jpg" alt="Title">
                    <h1 class="moreDataPostTitle"><a href="http://">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h1>
                </article>
                <article class="moreDataPost">
                    <img src="./assets/icons/Windows 11 Wallpaper 11.jpg" alt="Title">
                    <h1 class="moreDataPostTitle"><a href="http://">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h1>
                </article>
            </div>

            <div class="moreDataItem">
                <h1 class="moreDataTitle" id="popularTitle">Popular</h1>
                <article class="moreDataPost">
                    <img src="./assets/icons/Windows 11 Wallpaper 11.jpg" alt="Title">
                    <h1 class="moreDataPostTitle"><a href="http://">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h1>
                </article>
                <article class="moreDataPost">
                    <img src="./assets/icons/Windows 11 Wallpaper 20.jpg" alt="Title">
                    <h1 class="moreDataPostTitle"><a href="http://">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h1>
                </article>
                <article class="moreDataPost">
                    <img src="./assets/icons/Windows 11 Wallpaper 26.jpg" alt="Title">
                    <h1 class="moreDataPostTitle"><a href="http://">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h1>
                </article>
            </div>
        </div>

    </div>

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
                <img src="./assets/icons/envelope-solid.svg" alt="Email" width="20" height="20">nimakeshavarzian@gmail.com
            </a>

            <div id="socialMediaIcons">
                <img src="./assets/icons/rss-solid.svg" alt="" width="30" height="30">
                <img src="./assets/icons/telegram-brands.svg" alt="" width="30" height="30">
                <img src="./assets/icons/twitter-brands.svg" alt="" width="30" height="30">
                <img src="./assets/icons/instagram-brands.svg" alt="" width="30" height="30">
                <img src="./assets/icons/facebook-f-brands.svg" alt="" width="30" height="30">
            </div>

            <h3 id="copyright"><img src="./assets/icons/copyright-solid.svg" alt="" width="20" height="20">Copyright 2021</h3>

        </div>
    </footer>

    <!-- Scripts -->
    <script src="./assets/js/main.js"></script>
</body>

</html>