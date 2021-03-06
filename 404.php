<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#174E81">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <title>New News</title>
</head>

<body id="notFound">

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

    <!-- 404 main Content -->
    <div id="mainContent">
        <h1 id="errorCode">404</h1>
        <h2 id="errorDesc">sorry, your page wasn't found. <span><a href="#">Do you want to back home?</a></span></h2>
    </div>

    <!-- Scripts -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
</body>

</html>