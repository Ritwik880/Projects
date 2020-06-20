<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Localmart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="ecommerce">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="user-scalable=no,initial-scale=1.0, maximum-scale=1.0 width=device-width" />
    <!-- Styles -->

    <link href="http://localhost/original/Projects/include/css/bootstrap.css" rel="stylesheet">
    <link href="http://localhost/original/Projects/include/css/bootstrap_extensions.css" rel="stylesheet">
    <link href="http://localhost/original/Projects/include/css/addons.css" rel="stylesheet">
    <link href="http://localhost/original/Projects/include/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="http://localhost/original/Projects/include/css/bootstrap_responsive_extensions.css" rel="stylesheet">
    <!-- lightbox plugin -->
    <link
        href="http://localhost/original/Projects/content/themes/default/js/lightbox/themes/default/jquery.lightbox.css"
        rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="http://localhost/original/Projects/content/themes/default/js/lightbox/themes/default/jquery.lightbox.ie6.css" />
	<![endif]-->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://localhost/original/Projects/include/js/html5shiv.js"></script>
    <![endif]-->
    <link href="http://localhost/original/Projects/content/themes/default/css/general-style.css" rel="stylesheet">
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="http://localhost/original/Projects/include/img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="http://localhost/original/Projects/include/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="http://localhost/original/Projects/include/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="http://localhost/original/Projects/include/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
        href="http://localhost/original/Projects/include/img/ico/apple-touch-icon-57-precomposed.png">
    <!--[if lt IE 9]>
        <script src="http://localhost/original/Projects/include/js/html5shiv.js"></script>
    <![endif]-->
    <link href="http://localhost/original/Projects/content/themes/default/css/slideshow.css" rel="stylesheet">

    <style>
    .img {
        font-size: 36px;
        font-family: cursive;
        padding-bottom: 15px;
        text-align: center;

    }
    </style>
</head>

<body>
    <div class="scroll_body_container">
        <!-- CONTAINER FOR NICESCROLL PLUGIN (FIX CHROME SCROLLING PROBLEM) this will be closed into footer.php file -->
        <section class="container-fluid" id="top-bar">
            <!-- CONTAINER -->
            <div class="container-semifluid">
                <div class="row-fluid">
                    <div class="span7">
                        <div id="top-login-form-container">
                            <form method="post" action="check.php" accept-charset="UTF-8" id="top-login-form">
                                <div class="control-group pull-left">
                                    <div class="controls">
                                        <div class="input-prepend">
                                            <span class="add-on"><i class="icon-user"></i></span>
                                            <input type="text" name="useridLog" id="top-useridLog" class="required"
                                                placeholder="UserID" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group pull-left">
                                    <div class="controls">
                                        <div class="input-prepend">
                                            <span class="add-on"><i class="icon icon-black icon-key"></i></span>
                                            <input type="password" name="passwordLog" id="top-passwordLog"
                                                class="required" placeholder="Password" value="" />
                                        </div>
                                    </div>
                                </div>
                                <span class="btn btn-info unbordered solid squared" id="top-btn-login"><i
                                        class="icon icon-white icon-unlocked"></i> Login</span>
                                <div class="clearfix"></div>
                            </form>
                            <a href="#" class="retrieve-data">Forgotten Data?</a> | <a
                                href="http://localhost/original/Projects/register.php">Sign up</a>
                        </div>
                        <div class="welcome-message">Welcome to Local Mart <a href="#" id="btn-login-link">Login</a> |
                            <a href="http://localhost/original/Projects/register.php">Sign up</a></div>
                    </div>
                    <div class="span1 text-right">
                        <select id="default_client_language"
                            class="change_language_on_the_fly bootstyl text-left solid unbordered"
                            name="default_client_language" data-verse="right">
                            <option
                                data-img-before='<img src="http://localhost/original/Projects/lang/en_US/en_US.png" style="margin-right:10px;" />'
                                value="en_US" selected></option>
                            <option
                                data-img-before='<img src="http://localhost/original/Projects/lang/it_IT/it_IT.png" style="margin-right:10px;" />'
                                value="it_IT"></option>
                        </select>

                    </div>
                    <div class="span4">
                        <div class="row-fluid">
                            <div class="span12 text-right">
                                <ul class="nav topcart">
                                    <li class="dropdown"> <span class="dropdown-toggle" data-toggle="dropdown"> <i
                                                class="icon32 icon-basket icon-black"></i> <span
                                                class="label label-info">0 Products</span> - $ 0.00 <b
                                                class="caret"></b></span>
                                        <ul class="dropdown-menu squared">
                                            <li>
                                                <table>
                                                    <tbody class="product-tbody-container">
                                                    </tbody>
                                                </table>
                                                <table>
                                                    <tbody class="counts-container">
                                                        <tr>
                                                            <td class="text-right"><strong>Subtotal:</strong></td>
                                                            <td class="text-right subtotal">$ 0.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right"><strong>VAT:</strong></td>
                                                            <td class="text-right tax">$ 0.00</td>
                                                        </tr>

                                                        <tr>
                                                            <td class="text-right"><strong>Total:</strong></td>
                                                            <td class="text-right total">$ 0.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="text-center cart-options-container"> <a
                                                        class="btn btn-info squared solid unbordered"
                                                        href="http://localhost/original/Projects/cart.php">Cart</a> <a
                                                        class="btn btn-primary squared solid unbordered"
                                                        href="http://localhost/original/Projects/check-out.php">Checkout</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <header>
            <section class="container-semifluid" id="header-container">
                <!-- CONTAINER -->
                <div class="row-fluid">
                    <!-- ROW -->
                    <div class="span4 logo-container">
                        <a href="http://localhost/original/Projects"><img
                                src="http://localhost/original/Projects/content/uploads/bc_logo.png"
                                alt="http&#58;//localhost/original/Projects" /></a>
                    </div>
                    <div class="span3 text-right">
                        <form id="search-form" class="form-search form-horizontal"
                            action="http://localhost/original/Projects/search.php" method="get">
                            <div class="input-append span12">
                                <input type="text" name="sp" class="search-query" placeholder="Search...">
                                <button type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="span5 main-menu-container text-right">
                        <a href="http://localhost/original/Projects/account.php"><i class="icon-user"></i> Your
                            Account</a>
                        <a href="http://localhost/original/Projects/cart.php"><i class="icon-shopping-cart"></i>
                            Shopping Cart</a>
                        <a href="http://localhost/original/Projects/check-out.php"><i class="icon-ok-circle"></i>
                            Checkout</a>
                        <a href="http://localhost/original/Projects/contacts.php"><i
                                class="icon icon-black icon-contacts"></i> Contact Us</a>
                    </div>
                </div> <!-- /ROW -->
            </section>
        </header>
        <div class="clearfix"></div>
        <section class="container-semifluid" id="main-container">
            <!-- CONTAINER -->

            <!-- --------- SLIDESHOW ----- -->
            <div class="wrapper slideshow container-semifluid">
                <!-- <div id="ei-slider" class="ei-slider">
                    <ul class="ei-slider-large">
                    </ul>
                    <ul class="ei-slider-thumbs">
                        <li class="ei-slider-element">Current</li>

                    </ul>
                </div>  -->

                <section class="text-gray-700 body-font">
                    <div class="container px-5 py-24 mx-auto">
                        <h1 class="img"><b>Grocery Items</b></h1>

                        <div class="flex flex-wrap -m-4">
                            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                <a class="block relative h-48 rounded overflow-hidden">
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                        src="grocery.jpg">
                                </a>
                                <div class="mt-4">
                                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                    <h2 class="text-gray-900 title-font text-lg font-medium">Vegetables</h2>
                                    <p class="mt-1">Price: 40</p>
                                </div>
                            </div>
                            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                <a class="block relative h-48 rounded overflow-hidden">
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                        src="grocery2.jpg">
                                </a>
                                <div class="mt-4">
                                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                    <h2 class="text-gray-900 title-font text-lg font-medium">More Vegetables</h2>
                                    <p class="mt-1">Price: 55</p>
                                </div>
                            </div>
                            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                <a class="block relative h-48 rounded overflow-hidden">
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                        src="grocery3.jpg">
                                </a>
                                <div class="mt-4">
                                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                    <h2 class="text-gray-900 title-font text-lg font-medium">Fruits</h2>
                                    <p class="mt-1">Price: 155</p>
                                </div>
                            </div>
                            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                <a class="block relative h-48 rounded overflow-hidden">
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                        src="grocery4.jpg">
                                </a>
                                <div class="mt-4">
                                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                    <h2 class="text-gray-900 title-font text-lg font-medium">Nutrients</h2>
                                    <p class="mt-1">Price: 255</p>
                                </div>
                            </div>
                            <!-- <h1 class="img1"><b>Automobiles</b></h1>  -->

                        </div>
                    </div>
                </section>

                <section class="text-gray-700 body-font">
                    <div class="container px-5 py-24 mx-auto">
                        <h1 class="img"><b>Automobiles</b></h1>

                        <div class="flex flex-wrap -m-4">
                            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                <a class="block relative h-48 rounded overflow-hidden">
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                        src="car.jpg">
                                </a>
                                <div class="mt-4">
                                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                    <h2 class="text-gray-900 title-font text-lg font-medium">Microfibre Cloth</h2>
                                    <p class="mt-1">Price: 940</p>
                                </div>
                            </div>
                            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                <a class="block relative h-48 rounded overflow-hidden">
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                        src="car1.webp">
                                </a>
                                <div class="mt-4">
                                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                    <h2 class="text-gray-900 title-font text-lg font-medium">Safety Helmet</h2>
                                    <p class="mt-1">Price: 3240</p>
                                </div>
                            </div>
                            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                <a class="block relative h-48 rounded overflow-hidden">
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                        src="car2.webp">
                                </a>
                                <div class="mt-4">
                                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                    <h2 class="text-gray-900 title-font text-lg font-medium">Bike Tools</h2>
                                    <p class="mt-1">Price: 2440</p>
                                </div>
                            </div>
                            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                <a class="block relative h-48 rounded overflow-hidden">
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                        src="car3.jpg">
                                </a>
                                <div class="mt-4">
                                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                    <h2 class="text-gray-900 title-font text-lg font-medium">Security</h2>
                                    <p class="mt-1">Price: 1440</p>
                                </div>
                            </div>




                        </div>
                        <!-- ------------- /SLIDESHOW ----  -->
                        <div class="row-fluid">
                            <!-- BODY ROW -->
                            <section style="margin-top:20px;" class="span12">
                                <div class="box-header">
                                    <span class="header-text">Latest Products</span>
                                </div>
                                <div class="carousel_wrapper">
                                    <span class="carousel-prev" id="carousel-new-prev"></span>
                                    <span class="carousel-next" id="carousel-new-next"></span>
                                    <!-- ------------- -->
                                    <ul>

                                    </ul>

                                    <!-- ------------- -->
                                </div>
                            </section>
                        </div><!-- /BODY ROW -->
                        <div class="row-fluid">

                        </div><!-- /BODY ROW -->
                </section> <!-- /CONTAINER -->
                <footer>
                    <div class="container-fluid" id="footer">
                        <div class="container-semifluid">
                            <div class="row-fluid">
                                <div class="span6">
                                    <img src="http://localhost/original/Projects/content/uploads/bc_logo_footer.png"
                                        alt="http&#58;//localhost/original/Projects" width="30%" />
                                    <p style="text-align:justify">
                                        India's biggest ecommerce website for buying all the essential things for your
                                        daily
                                        use.
                                        E-commerce website is the buying and selling of goods and services,
                                        or the transmitting of funds or data, over an electronic network, primarily the
                                        internet. These business transactions
                                        occur either as business-to-business, business-to-consumer, consumer-to-consumer
                                        or
                                        consumer-to-business.
                                    </p>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="span3">
                                    <div class="box-header">
                                        <span class="header-text" style="white-space:nowrap;">Your Account</span>
                                    </div>
                                    <ul class="menu-vertical-indicator">
                                        <li><a href="http://localhost/original/Projects/account.php">General Info</a>
                                        </li>
                                        <li><a
                                                href="http://localhost/original/Projects/account.php?type=address">Addresses</a>
                                        </li>
                                        <li><a
                                                href="http://localhost/original/Projects/account.php?type=orders">Orders</a>
                                        </li>
                                        <li><a href="http://localhost/original/Projects/contacts.php">Contact Us</a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="span3">
                                    <div class="box-header">
                                        <span class="header-text" style="white-space:nowrap;">Contact Us</span>
                                    </div>
                                    <ul>
                                        <li><img
                                                src="http://localhost/original/Projects/content/themes/default/img/footer-phone.png" />1234567890
                                        </li>
                                        <li><img
                                                src="http://localhost/original/Projects/content/themes/default/img/footer-email.png" />
                                            username@gmail.com</li>
                                        <li><img
                                                src="http://localhost/original/Projects/content/themes/default/img/footer-marker.png" />
                                            New Delhi, 201310 Delhi</li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                            <div class="row-fluid">
                                <div class="span12 text-center" style="border-top:1px solid #ccc;line-height:50px;">
                                    <span class="pull-left">ecommerce - 201310</span>
                                    <span class="pull-right">&#169; Copyright 2020 ecommerce - All Rights
                                        Reserved</span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- retrieve user's data form -->
                <div id="retrieve-data-modal" class="modal hide fade" tabindex="-1" role="dialog"
                    aria-labelledby="retrieve-data-modallabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <li class="icon-remove"></li>
                        </button>
                        <span id="retrieve-data-modallabel"><strong class="label label-info">Retrieve Your access
                                data</strong></span>
                    </div>
                    <div class="modal-body">
                        <div id="retrieve-result" class="hide"></div>
                        <form method="post" action="http://localhost/original/Projects/retrieve-data.php"
                            accept-charset="UTF-8" id="retrieve-data-form">
                            <div class="control-group">
                                <div class="controls">
                                    <label for="userid-retrieve">UserID</label>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-user"></i></span>
                                        <input type="text" name="userid_retrieve" id="userid-retrieve"
                                            class="leastoneinput" placeholder="UserID" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <label for="email-retrieve">E-mail</label>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-envelope"></i></span>
                                        <input type="text" name="email_retrieve" id="email-retrieve"
                                            class="leastoneinput email" placeholder="E-mail" value="" />
                                    </div>
                                </div>
                            </div>
                            <span class="btn btn-info unbordered solid squared pull-right" id="btn-retrieve-data"><i
                                    class="icon-white icon-wrench"></i> Retrieve data</span>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
                <!-- / retrieve user's data form -->
                <a id="go-to-top"></a>
            </div>
            <!-- CLOSE CONTAINER FOR NICESCROLL PLUGIN (FIX CHROME SCROLLING PROBLEM), div opened into body-header.php file -->
            <!-- ========================== Javascript ======================== -->
            <script src="http://localhost/original/Projects/include/js/jquery.js"></script>
            <script src="http://localhost/original/Projects/include/js/bootstrap.js"></script>
            <script src="http://localhost/original/Projects/include/js/bootstrap_extensions.js"></script>
            <script type="text/javascript" src="http://localhost/original/Projects/include/js/plugins/jsin.1.2.min.js">
            </script>
            <script type="text/javascript" src="http://localhost/original/Projects/lang/en_US/en_US.js"></script>
            <script type="text/javascript" src="http://localhost/original/Projects/include/js/plugins/validate.js">
            </script>
            <script type="text/javascript" src="http://localhost/original/Projects/include/js/plugins/ajaxForm.js">
            </script>
            <script type="text/javascript" src="http://localhost/original/Projects/include/js/plugins/livequery.js">
            </script>
            <script type="text/javascript" src="http://localhost/original/Projects/include/js/plugins/center-div.js">
            </script>
            <script type="text/javascript" src="http://localhost/original/Projects/include/js/plugins/loader.js">
            </script>
            <script type="text/javascript"
                src="http://localhost/original/Projects/content/themes/default/js/jquery.nicescroll.js"></script>
            <script type="text/javascript"
                src="http://localhost/original/Projects/content/themes/default/js/jquery.lazyload.min.js"></script>
            <script type="text/javascript"
                src="http://localhost/original/Projects/content/themes/default/js/jquery.bootstrap.generalalert.js">
            </script>
            <script type="text/javascript"
                src="http://localhost/original/Projects/content/themes/default/js/restyle-checkbox.js"></script>
            <script type="text/javascript"
                src="http://localhost/original/Projects/content/themes/default/js/restyle-radio.js">
            </script>
            <!-- lightbox plugin -->
            <script type="text/javascript"
                src="http://localhost/original/Projects/content/themes/default/js/lightbox/jquery.lightbox.min.js">
            </script>
            <!-- carousel plugin -->
            <script type="text/javascript"
                src="http://localhost/original/Projects/content/themes/default/js/jquery.carouFredSel-6.2.1.js">
            </script>
            <script type="text/javascript"
                src="http://localhost/original/Projects/content/themes/default/js/jquery.mousewheel.min.js"></script>
            <script type="text/javascript"
                src="http://localhost/original/Projects/content/themes/default/js/jquery.touchSwipe.min.js"></script>
            <script type="text/javascript"
                src="http://localhost/original/Projects/content/themes/default/js/jquery.transit.min.js"></script>
            <script type="text/javascript"
                src="http://localhost/original/Projects/content/themes/default/js/jquery.ba-throttle-debounce.min.js">
            </script>
            <!-- /carousel plugin -->
            <script type="text/javascript"
                src="http://localhost/original/Projects/content/plugins/businesstype/lang/en_US/en_US.js"></script>
            <script type="text/javascript" src="http://localhost/original/Projects/content/plugins/businesstype/b2b.js">
            </script>
            <script type="text/javascript">
            $(function() {
                /*$("html").niceScroll({cursorcolor:'#3A87AD',cursorborder:'1px solid #fff'});*/
                $('body').data('theme_path', 'http://localhost/original/Projects/content/themes/default');
                $('body').data('theme_img_path',
                    'http://localhost/original/Projects/content/themes/default/img');
                $('body').data('abs_client_path', 'http://localhost/original/Projects');
                $('body').data('thousands_separator', ',');
                $('body').data('decimals_separator', '.');
                $("html").niceScroll({
                    cursorcolor: '#3A87AD',
                    cursorborder: '0px solid #fff',
                    cursorwidth: 8
                });
                $('.responsiveHead').on('click', function(e) {
                    e.preventDefault();
                    if (!$(this).next('.responsiveMenu').is(':visible')) {
                        $(this).next('.responsiveMenu').slideDown('fast');
                    } else {
                        $(this).next('.responsiveMenu').slideUp('fast');
                    }
                });
            });
            </script>
            <!--[if lt IE 9]>
        <script type="text/javascript" src="http://localhost/original/Projects/content/themes/default/js/ie_hacks.js"></script>
    <![endif]-->
            <script type="text/javascript"
                src="http://localhost/original/Projects/content/themes/default/js/main_script.js">
            </script>

            <script type="text/javascript"
                src="http://localhost/original/Projects/content/themes/default/js/localized/jquery.eislideshow.js">
            </script>
            <script type="text/javascript"
                src="http://localhost/original/Projects/content/themes/default/js/localized/jquery.easing.1.3.js">
            </script>
</body>