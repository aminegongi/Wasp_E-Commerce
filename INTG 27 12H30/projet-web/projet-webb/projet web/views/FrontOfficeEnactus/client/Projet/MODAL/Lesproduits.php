
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Categorie</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Little Closet template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="../assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="../assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="../assets/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/styles/category.css">
    <link rel="stylesheet" type="text/css" href="../assets/styles/category_responsive.css">
</head>
<body>

<!-- Menu -->

<div class="menu">

    <!-- Search -->
    <div class="menu_search">
        <form action="#" id="menu_search_form" class="menu_search_form">
            <input type="text" class="search_input" placeholder="Search Item" required="required">
            <button class="menu_search_button"><img src="../assets/images/search.png" alt=""></button>
        </form>
    </div>
    <!-- Navigation -->
    <div class="menu_nav">
        <ul>
            <li><a href="../assets/index.html">Acceuil</a></li>
            <li><a href="../assets/category.html">Categorie</a></li>
            <li><a href="../assets/#">Guide d'utilisation</a></li>
            <li><a href="../assets/#">Contact</a></li>
        </ul>
    </div>
    <!-- Contact Info -->
    <div class="menu_contact">
        <div class="menu_phone d-flex flex-row align-items-center justify-content-start">
            <div><div><img src="../assets/images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
            <div>+216 55 685 313</div>
        </div>
        <div class="menu_social">
            <ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
                <li><a href="../assets/#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="../assets/#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                <li><a href="../assets/#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="../assets/#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<div class="super_container">

    <!-- Header -->

    <header class="header">
        <div class="header_overlay"></div>
        <div class="header_content d-flex flex-row align-items-center justify-content-start">
            <div class="logo">
                <a href="../assets/#">
                    <div class="d-flex flex-row align-items-center justify-content-start">
                        <div><img src="../assets/images/logo_Escope.png" alt="E-Scope" width="200" height=auto ></div>
                    </div>
                </a>
            </div>
            <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
            <nav class="main_nav">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    <li><a href="../assets/index.html">Acceuil</a></li>
                    <li><a href="../assets/category.html">Categorie</a></li>
                    <li><a href="../assets/#">Guide d'utilisation</a></li>
                    <li><a href="../assets/#">Contact</a></li>
                </ul>
            </nav>
            <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
                <!-- Search -->
                <div class="header_search">
                    <form action="#" id="header_search_form">
                        <input type="text" class="search_input" placeholder="Recherche..." required="required">
                        <button class="header_search_button"><img src="../assets/images/search.png" alt=""></button>
                    </form>
                </div>
                <!-- User -->
                <div class="user"><a href="../assets/Login.html"><div><img src="../assets/images/user.svg" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
                <!-- Cart -->
                <div class="cart"><a href="../assets/cart.html"><div><img class="svg" src="../assets/images/cart.svg" alt="https://www.flaticon.com/authors/freepik"><div>1</div></div></a></div>
                <!-- Phone -->
                <!-- <div class="header_phone d-flex flex-row align-items-center justify-content-start">
                    <div><div><img src="../assets/images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
                    <div>+216 55 685 313</div>
                </div> -->
            </div>
        </div>
    </header>

    <div class="super_container_inner">
        <div class="super_overlay"></div>

        <!-- Home -->

        <div class="home">
            <div class="home_container d-flex flex-column align-items-center justify-content-end">
                <div class="home_content text-center">
                    <div class="home_title">Les Produits</div>
                    <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
                        <ul class="d-flex flex-row align-items-start justify-content-start text-center">
                            <li><a href="../assets/#">E-Scope</a></li>
                            <li><a href="../assets/index.html">Acceuil</a></li>
                            <li>Catégories</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products -->

        <div class="products">
            <div class="container">
                <div class="row products_bar_row">
                    <div class="col">
                        <div class="products_bar d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
                            <div class="products_bar_links">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="../assets/#">All</a></li>
                                    <li><a href="../assets/#">Produit Recommandé</a></li>
                                    <li class="active"><a href="../assets/#">Nouveau Produit</a></li>
                                </ul>
                            </div>
                            <div class="products_bar_side d-flex flex-row align-items-center justify-content-start ml-lg-auto">
                                <div class="products_dropdown product_dropdown_sorting">
                                    <div class="isotope_sorting_text"><span>Default Sorting</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
                                    <ul>
                                        <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'>Default</li>
                                        <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>Price</li>
                                        <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "name" }'>Name</li>
                                    </ul>
                                </div>
                                <div class="product_view d-flex flex-row align-items-center justify-content-start">
                                    <div class="view_item active"><img src="../assets/images/view_1.png" alt=""></div>
                                    <div class="view_item"><img src="../assets/images/view_2.png" alt=""></div>
                                    <div class="view_item"><img src="../assets/images/view_3.png" alt=""></div>
                                </div>
                                <div class="products_dropdown text-right product_dropdown_filter">
                                    <div class="isotope_filter_text"><span>Filter</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
                                    <ul>
                                        <li class="item_filter_btn" data-filter="*">All</li>
                                        <li class="item_filter_btn" data-filter=".hot">Hot</li>
                                        <li class="item_filter_btn" data-filter=".new">New</li>
                                        <li class="item_filter_btn" data-filter=".sale">Sale</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row products_row products_container grid">

                    <!-- Product -->
                    <div class="col-xl-4 col-md-6 grid-item new">
                        <div class="product">
                            <div class="product_image"><img src="../assets/images/product_1.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>
                                            <div class="product_name"><a href="../assets/product.html">Microscope</a></div>
                                            <div class="product_category">In <a href="../assets/category.html">Category</a></div>
                                        </div>
                                    </div>
                                    <div class="ml-auto text-right">
                                        <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="product_price text-right">3<span>.99</span>Dt</div>
                                    </div>
                                </div>
                                <div class="product_buttons">
                                    <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                        <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="../assets/images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                        <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="../assets/images/cart.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product -->
                    <div class="col-xl-4 col-md-6 grid-item hot">
                        <div class="product">
                            <div class="product_image"><img src="../assets/images/product_1.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>
                                            <div class="product_name"><a href="../assets/product.html">Microscope</a></div>
                                            <div class="product_category">In <a href="../assets/category.html">Category</a></div>
                                        </div>
                                    </div>
                                    <div class="ml-auto text-right">
                                        <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="product_price text-right">4<span>.99</span>Dt</div>
                                    </div>
                                </div>
                                <div class="product_buttons">
                                    <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                        <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="../assets/images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                        <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="../assets/images/cart.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product -->
                    <div class="col-xl-4 col-md-6 grid-item sale">
                        <div class="product">
                            <div class="product_image"><img src="../assets/images/product_1.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>
                                            <div class="product_name"><a href="../assets/product.html">Microscope</a></div>
                                            <div class="product_category">In <a href="../assets/category.html">Category</a></div>
                                        </div>
                                    </div>
                                    <div class="ml-auto text-right">
                                        <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="product_price text-right">13<span>.99</span>Dt</div>
                                    </div>
                                </div>
                                <div class="product_buttons">
                                    <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                        <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="../assets/images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                        <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="../assets/images/cart.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product -->
                    <div class="col-xl-4 col-md-6 grid-item sale">
                        <div class="product">
                            <div class="product_image"><img src="../assets/images/product_1.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>
                                            <div class="product_name"><a href="../assets/product.html">Microscope</a></div>
                                            <div class="product_category">In <a href="../assets/category.html">Category</a></div>
                                        </div>
                                    </div>
                                    <div class="ml-auto text-right">
                                        <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="product_price text-right">5<span>.99</span>Dt</div>
                                    </div>
                                </div>
                                <div class="product_buttons">
                                    <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                        <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="../assets/images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                        <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="../assets/images/cart.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product -->
                    <div class="col-xl-4 col-md-6 grid-item hot">
                        <div class="product">
                            <div class="product_image"><img src="../assets/images/product_1.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>
                                            <div class="product_name"><a href="../assets/product.html">Microscope</a></div>
                                            <div class="product_category">In <a href="../assets/category.html">Category</a></div>
                                        </div>
                                    </div>
                                    <div class="ml-auto text-right">
                                        <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="product_price text-right">7<span>.99</span>Dt</div>
                                    </div>
                                </div>
                                <div class="product_buttons">
                                    <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                        <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="../assets/images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                        <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="../assets/images/cart.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product -->
                    <div class="col-xl-4 col-md-6 grid-item new">
                        <div class="product">
                            <div class="product_image"><img src="../assets/images/product_1.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>
                                            <div class="product_name"><a href="../assets/product.html">Microscope</a></div>
                                            <div class="product_category">In <a href="../assets/category.html">Category</a></div>
                                        </div>
                                    </div>
                                    <div class="ml-auto text-right">
                                        <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="product_price text-right">12<span>.99</span>Dt</div>
                                    </div>
                                </div>
                                <div class="product_buttons">
                                    <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                        <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="../assets/images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                        <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="../assets/images/cart.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product -->
                    <div class="col-xl-4 col-md-6 grid-item sale">
                        <div class="product">
                            <div class="product_image"><img src="../assets/images/product_1.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>
                                            <div class="product_name"><a href="../assets/product.html">Microscope</a></div>
                                            <div class="product_category">In <a href="../assets/category.html">Category</a></div>
                                        </div>
                                    </div>
                                    <div class="ml-auto text-right">
                                        <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="product_price text-right">6<span>.99</span>Dt</div>
                                    </div>
                                </div>
                                <div class="product_buttons">
                                    <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                        <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="../assets/images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                        <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="../assets/images/cart.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product -->
                    <div class="col-xl-4 col-md-6 grid-item new">
                        <div class="product">
                            <div class="product_image"><img src="../assets/images/product_1.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>
                                            <div class="product_name"><a href="../assets/product.html">Microscope</a></div>
                                            <div class="product_category">In <a href="../assets/category.html">Category</a></div>
                                        </div>
                                    </div>
                                    <div class="ml-auto text-right">
                                        <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="product_price text-right">21<span>.99</span>Dt</div>
                                    </div>
                                </div>
                                <div class="product_buttons">
                                    <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                        <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="../assets/images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                        <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="../assets/images/cart.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product -->
                    <div class="col-xl-4 col-md-6 grid-item sale">
                        <div class="product">
                            <div class="product_image"><img src="../assets/images/product_1.jpg" alt=""></div>
                            <div class="product_content">
                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>
                                            <div class="product_name"><a href="../assets/product.html">Microscope</a></div>
                                            <div class="product_category">In <a href="../assets/category.html">Category</a></div>
                                        </div>
                                    </div>
                                    <div class="ml-auto text-right">
                                        <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="product_price text-right">7<span>.99</span>Dt</div>
                                    </div>
                                </div>
                                <div class="product_buttons">
                                    <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                        <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="../assets/images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                        <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                            <div><div><img src="../assets/images/cart.svg" class="svg" alt=""><div>+</div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row page_nav_row">
                    <div class="col">
                        <div class="page_nav">
                            <ul class="d-flex flex-row align-items-start justify-content-center">
                                <li class="active"><a href="../assets/#">01</a></li>
                                <li><a href="../assets/#">02</a></li>
                                <li><a href="../assets/#">03</a></li>
                                <li><a href="../assets/#">04</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->

        <footer class="footer">
            <div class="footer_content">
                <div class="container">
                    <div class="row">

                        <!-- About -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_about">
                                <div class="footer_logo">
                                    <a href="../assets/#">
                                        <div class="d-flex flex-row align-items-center justify-content-start">
                                            <div class="footer_logo_icon"><img src="../assets/images/logo_Escope.png" alt="E-Scope"  width="300" height=auto></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="footer_about_text">
                                    <p>Description ENACTUS</p>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Links -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_menu">
                                <div class="footer_title">Support</div>
                                <ul class="footer_list">
                                    <li>
                                        <a href="../assets/#"><div>Customer Service<div class="footer_tag_1">online now</div></div></a>
                                    </li>
                                    <li>
                                        <a href="../assets/#"><div>Return Policy</div></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Contact -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_contact">
                                <div class="footer_title">Abonnez Vous !</div>
                                <div class="newsletter">
                                    <form action="#" id="newsletter_form" class="newsletter_form">
                                        <input type="email" class="newsletter_input" placeholder="Votre Email..." required="required">
                                        <button class="newsletter_button">+</button>
                                    </form>
                                </div>
                                <div class="footer_social">
                                    <div class="footer_title">Social</div>
                                    <ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
                                        <li><a href="../assets/#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="../assets/#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                        <li><a href="../assets/#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="../assets/#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bar">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
                                <div class="copyright order-md-1 order-2">
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by WASP</div>
                                <nav class="footer_nav ml-md-auto order-md-2 order-1">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        <li><a href="../assets/category.html">Jare Drops</a></li>
                                        <li><a href="../assets/category.html">Acorn+</a></li>
                                        <li><a href="../assets/category.html">E-Scope</a></li>
                                        <li><a href="../assets/category.html">Pure Life</a></li>
                                        <li><a href="../assets/#">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</div>

<script src="../assets/js/jquery-3.2.1.min.js"></script>
<script src="../assets/styles/bootstrap-4.1.2/popper.js"></script>
<script src="../assets/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="../assets/plugins/greensock/TweenMax.min.js"></script>
<script src="../assets/plugins/greensock/TimelineMax.min.js"></script>
<script src="../assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../assets/plugins/greensock/animation.gsap.min.js"></script>
<script src="../assets/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../assets/plugins/easing/easing.js"></script>
<script src="../assets/plugins/progressbar/progressbar.min.js"></script>
<script src="../assets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="../assets/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="../assets/plugins/Isotope/fitcolumns.js"></script>
<script src="../assets/js/category.js"></script>
</body>
</html>