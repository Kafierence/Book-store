
<?php if(isset($_SESSION["userID"])){
    header("location:../index.php");
    exit();
} ?>
<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Book store</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/css/style.css" />
        <script src="../assets/js/main.js" defer></script>
    </head>
    <body>
        <header class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header__home">
                        <!-- Ẩn trên giao diện desktop -->
                        <div class="header--mobile">
                            <div
                                class="menu-open-btn"
                                data-menu-open="menu-open"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="27"
                                    height="17"
                                    viewBox="0 0 27 17"
                                >
                                    <path
                                        id="Menu"
                                        d="M74,735a1,1,0,0,1-1-1v-1a1,1,0,0,1,1-1H99a1,1,0,0,1,1,1v1a1,1,0,0,1-1,1Zm0-7a1,1,0,0,1-1-1v-1a1,1,0,0,1,1-1H99a1,1,0,0,1,1,1v1a1,1,0,0,1-1,1Zm0-7a1,1,0,0,1-1-1v-1a1,1,0,0,1,1-1H99a1,1,0,0,1,1,1v1a1,1,0,0,1-1,1Z"
                                        transform="translate(-73 -718)"
                                        fill="#6c757d"
                                    />
                                </svg>
                            </div>
                            <div
                                class="menu-toggle"
                                data-menu-toggle="menu-toggle"
                            >
                                <div class="menu--open">
                                    <div class="menu__header">
                                        <div
                                            class="menu-close-btn"
                                            data-menu-close="menu-close"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="20"
                                                height="20"
                                                viewBox="0 0 23.5 23.5"
                                            >
                                                <g
                                                    id="Close"
                                                    transform="translate(-49.676 -155.176)"
                                                >
                                                    <rect
                                                        id="Rectangle_14"
                                                        data-name="Rectangle 14"
                                                        width="31.199"
                                                        height="2.035"
                                                        rx="1"
                                                        transform="translate(49.676 177.237) rotate(-45)"
                                                        fill="#6c757d"
                                                    />
                                                    <rect
                                                        id="Rectangle_15"
                                                        data-name="Rectangle 15"
                                                        width="31.199"
                                                        height="2.035"
                                                        rx="1"
                                                        transform="translate(51.115 155.176) rotate(45)"
                                                        fill="#6c757d"
                                                    />
                                                </g>
                                            </svg>
                                        </div>
                                        <h3 class="menu__tile">Menu</h3>
                                    </div>
                                    <div class="menu__body">
                                        <div class="menu-item">
                                            <img
                                                src="../assets/images/avatar.jpg"
                                                alt="user-avatar"
                                                class="user-avatar"
                                            />
                                            <p class="user-name">

                                            <?php 
                                                   if(isset($_SESSION["userName"])){
                                                    echo $_SESSION["userName"];
                                                   }
                                                   
                                             ?>
                                            </p>
                                        </div>
                                        <div class="menu-item">
                                            <div
                                                class="menu-item__icon home-icon"
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="20"
                                                    height="22"
                                                    viewBox="0 0 23 25"
                                                >
                                                    <g
                                                        id="Home_Icon_"
                                                        data-name="Home Icon "
                                                        transform="translate(-54 -53)"
                                                    >
                                                        <path
                                                            id="Path_7"
                                                            data-name="Path 7"
                                                            d="M4.5,11.05,15,3l10.5,8.05V23.7A2.317,2.317,0,0,1,23.167,26H6.833A2.317,2.317,0,0,1,4.5,23.7Z"
                                                            transform="translate(50.5 51)"
                                                            fill="currentColor"
                                                            stroke="#fff"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                        />
                                                        <path
                                                            id="Path_8"
                                                            data-name="Path 8"
                                                            d="M13.5,29.816V18h7.089V29.816"
                                                            transform="translate(48.455 47.184)"
                                                            fill="currentColor"
                                                            stroke="#fff"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                        />
                                                    </g>
                                                </svg>
                                            </div>
                                            <p class="menu-item__menu-name">
                                                Trang chủ
                                            </p>
                                        </div>
                                        <div class="menu-item">
                                            <div class="menu-item__icon">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="20"
                                                    height="20"
                                                    viewBox="0 0 23 23"
                                                >
                                                    <g
                                                        id="Settings_Icon"
                                                        data-name="Settings Icon"
                                                        transform="translate(128 140)"
                                                    >
                                                        <path
                                                            id="Path_5"
                                                            data-name="Path 5"
                                                            d="M19.455,16.478A2.978,2.978,0,1,1,16.478,13.5,2.978,2.978,0,0,1,19.455,16.478Z"
                                                            transform="translate(-132.978 -144.978)"
                                                            fill="none"
                                                            stroke="currentColor"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                        />
                                                        <path
                                                            id="Path_6"
                                                            data-name="Path 6"
                                                            d="M19.064,14.864a1.575,1.575,0,0,0,.315,1.737l.057.057a1.91,1.91,0,1,1-2.7,2.7l-.057-.057a1.588,1.588,0,0,0-2.692,1.126v.162a1.909,1.909,0,1,1-3.818,0V20.5a1.575,1.575,0,0,0-1.031-1.441,1.575,1.575,0,0,0-1.737.315l-.057.057a1.91,1.91,0,1,1-2.7-2.7l.057-.057a1.588,1.588,0,0,0-1.126-2.692H3.409a1.909,1.909,0,0,1,0-3.818h.086A1.575,1.575,0,0,0,4.936,9.136,1.575,1.575,0,0,0,4.621,7.4l-.057-.057a1.91,1.91,0,1,1,2.7-2.7l.057.057a1.575,1.575,0,0,0,1.737.315h.076a1.575,1.575,0,0,0,.955-1.441V3.409a1.909,1.909,0,0,1,3.818,0v.086A1.588,1.588,0,0,0,16.6,4.621l.057-.057a1.91,1.91,0,1,1,2.7,2.7l-.057.057a1.575,1.575,0,0,0-.315,1.737v.076a1.575,1.575,0,0,0,1.441.955h.162a1.909,1.909,0,1,1,0,3.818H20.5a1.575,1.575,0,0,0-1.441.955Z"
                                                            transform="translate(-128.5 -140.5)"
                                                            fill="none"
                                                            stroke="currentColor"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                        />
                                                    </g>
                                                </svg>
                                            </div>
                                            <p class="menu-item__menu-name">
                                                Cài đặt
                                            </p>
                                        </div>
                                        <div class="menu-item">
                                            <div class="menu-item__icon">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="17.6"
                                                    height="22.2"
                                                    viewBox="0 0 17.6 22.2"
                                                >
                                                    <path
                                                        id="ic_subdirectory_arrow_right_24px"
                                                        d="M21.6,18.365,14.56,26.2l-1.666-1.854,4.212-4.675H4V4H6.347V17.059H17.106l-4.212-4.675,1.666-1.854Z"
                                                        transform="translate(-4 -4)"
                                                        fill="currentColor"
                                                    />
                                                </svg>
                                            </div>
                                            <p class="menu-item__menu-name">
                                             <a href="logic/logout.inc.php">Đăng Xuất</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="menu__overlay"
                                data-overlay="overlay"
                            ></div>
                        </div>
                        <!-- Hiển thị trên giao diện desktop -->
                        <div class="container header--desktop">
                            <div class="row">
                                <div
                                    class="col-md-4 col-lg-4 d-flex align-items-center"
                                >
                                    <div class="search-group">
                                        <input
                                            type="text"
                                            class="seacrh-input"
                                            placeholder="Tìm kiếm"
                                        />
                                        <div class="search-icon">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="18"
                                                height="18"
                                                viewBox="0 0 26.262 26.262"
                                            >
                                                <g
                                                    id="Icon_feather-search"
                                                    data-name="Icon feather-search"
                                                    transform="translate(-3 -3)"
                                                >
                                                    <path
                                                        id="Path_17"
                                                        data-name="Path 17"
                                                        d="M24.625,14.563A10.063,10.063,0,1,1,14.563,4.5,10.063,10.063,0,0,1,24.625,14.563Z"
                                                        fill="none"
                                                        stroke="#6c757d"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="3"
                                                    />
                                                    <path
                                                        id="Path_18"
                                                        data-name="Path 18"
                                                        d="M30.447,30.447l-5.472-5.472"
                                                        transform="translate(-3.306 -3.306)"
                                                        fill="none"
                                                        stroke="#6c757d"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="3"
                                                    />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-md-4 col-lg-4 d-flex justify-content-center"
                                >
                                    <div class="logo"></div>
                                </div>

                                <div
                                    class="col-md-4 col-lg-4 d-flex justify-content-end"
                                >
                                    <div class="dropdown-container" data-dropdown="dropdown">
                                        <div class="user-dropdown-menu hide-dropdown" data-dropdown-menu="dropdown-menu">
                                            <div class="menu-item">
                                                <img
                                                    src="../assets/images/avatar.jpg"
                                                    alt="user-avatar"
                                                    class="user-avatar"
                                                />
                                                <h4 class="user-name">
                                                   <?php 
                                                   if(isset($_SESSION["userName"])){
                                                    echo $_SESSION["userName"];
                                                   }
                                                   
                                                   ?>
                                                </h4>
                                            </div>
                                            <div class="menu-item">
                                                <div class="menu-item__icon">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="20"
                                                        height="20"
                                                        viewBox="0 0 23 23"
                                                    >
                                                        <g
                                                            id="Settings_Icon"
                                                            data-name="Settings Icon"
                                                            transform="translate(128 140)"
                                                        >
                                                            <path
                                                                id="Path_5"
                                                                data-name="Path 5"
                                                                d="M19.455,16.478A2.978,2.978,0,1,1,16.478,13.5,2.978,2.978,0,0,1,19.455,16.478Z"
                                                                transform="translate(-132.978 -144.978)"
                                                                fill="none"
                                                                stroke="currentColor"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                stroke-width="2"
                                                            />
                                                            <path
                                                                id="Path_6"
                                                                data-name="Path 6"
                                                                d="M19.064,14.864a1.575,1.575,0,0,0,.315,1.737l.057.057a1.91,1.91,0,1,1-2.7,2.7l-.057-.057a1.588,1.588,0,0,0-2.692,1.126v.162a1.909,1.909,0,1,1-3.818,0V20.5a1.575,1.575,0,0,0-1.031-1.441,1.575,1.575,0,0,0-1.737.315l-.057.057a1.91,1.91,0,1,1-2.7-2.7l.057-.057a1.588,1.588,0,0,0-1.126-2.692H3.409a1.909,1.909,0,0,1,0-3.818h.086A1.575,1.575,0,0,0,4.936,9.136,1.575,1.575,0,0,0,4.621,7.4l-.057-.057a1.91,1.91,0,1,1,2.7-2.7l.057.057a1.575,1.575,0,0,0,1.737.315h.076a1.575,1.575,0,0,0,.955-1.441V3.409a1.909,1.909,0,0,1,3.818,0v.086A1.588,1.588,0,0,0,16.6,4.621l.057-.057a1.91,1.91,0,1,1,2.7,2.7l-.057.057a1.575,1.575,0,0,0-.315,1.737v.076a1.575,1.575,0,0,0,1.441.955h.162a1.909,1.909,0,1,1,0,3.818H20.5a1.575,1.575,0,0,0-1.441.955Z"
                                                                transform="translate(-128.5 -140.5)"
                                                                fill="none"
                                                                stroke="currentColor"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                stroke-width="2"
                                                            />
                                                        </g>
                                                    </svg>
                                                </div>
                                                <p class="menu-item__menu-name">
                                                    Cài đặt
                                                </p>
                                            </div>
                                            <div class="menu-item">
                                                <div class="menu-item__icon">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="17.6"
                                                        height="22.2"
                                                        viewBox="0 0 17.6 22.2"
                                                    >
                                                        <path
                                                            id="ic_subdirectory_arrow_right_24px"
                                                            d="M21.6,18.365,14.56,26.2l-1.666-1.854,4.212-4.675H4V4H6.347V17.059H17.106l-4.212-4.675,1.666-1.854Z"
                                                            transform="translate(-4 -4)"
                                                            fill="currentColor"
                                                        />
                                                    </svg>
                                                </div>
                                                <p class="menu-item__menu-name">
                                                   <a href="logic/logout.inc.php">Đăng Xuất</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="container main">
            <div class="row">
                <section class="hero">
                    <h3 class="hero__title">Khám phá</h3>
                    <p class="hero__sub-title">
                        Thế giới tri thức trong tầm tay
                    </p>
                </section>
            </div>
            <!-- Ẩn trên giao diện desktop -->
            <div class="row d-flex justify-content-center">
                <div class="search-group search-group--mobile">
                    <input
                        type="text"
                        class="seacrh-input"
                        placeholder="Tìm kiếm"
                    />
                    <div class="search-icon">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="18"
                            height="18"
                            viewBox="0 0 26.262 26.262"
                        >
                            <g
                                id="Icon_feather-search"
                                data-name="Icon feather-search"
                                transform="translate(-3 -3)"
                            >
                                <path
                                    id="Path_17"
                                    data-name="Path 17"
                                    d="M24.625,14.563A10.063,10.063,0,1,1,14.563,4.5,10.063,10.063,0,0,1,24.625,14.563Z"
                                    fill="none"
                                    stroke="#6c757d"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="3"
                                />
                                <path
                                    id="Path_18"
                                    data-name="Path 18"
                                    d="M30.447,30.447l-5.472-5.472"
                                    transform="translate(-3.306 -3.306)"
                                    fill="none"
                                    stroke="#6c757d"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="3"
                                />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <!-- Ẩn trên giao diện mobile -->
            <!-- <div class="row">
                <section class="banner">
                    <img
                        src="../assets/images/banner-1.jpg"
                        alt="banner-1"
                        class="banner-item"
                    />
                    <img
                        src="../assets/images/banner-2.jpg"
                        alt="banner-2"
                        class="banner-item"
                    />
                    <img
                        src="../assets/images/banner-3.png"
                        alt="banner-3"
                        class="banner-item"
                    />
                </section>
            </div> -->
            <!-- Hiển thị trên tất cả thiết bị -->
            <!-- CATEGORIES -->
            <div class="row justify-content-center">
                <section class="categories">
                    <div class="category-item">
                        <div class="category-item__icon">
                            <svg
                                id="icons8-ibooks"
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    id="Path_2878"
                                    data-name="Path 2878"
                                    d="M9.935,26h12.13A3.935,3.935,0,0,0,26,22.065V9.935A3.935,3.935,0,0,0,22.065,6H9.935A3.935,3.935,0,0,0,6,9.935v12.13A3.935,3.935,0,0,0,9.935,26Z"
                                    transform="translate(-6 -6)"
                                    fill="#ccc"
                                />
                                <path
                                    id="Path_2879"
                                    data-name="Path 2879"
                                    d="M17.041,26.3c-1.182-2.648-4.028-3.04-6.041-.608V15.966c2.014-2.432,4.531-1.824,6.041,0Z"
                                    transform="translate(-7.951 -10.332)"
                                    fill="#fff"
                                />
                                <path
                                    id="Path_2880"
                                    data-name="Path 2880"
                                    d="M17.041,26.3c-1.182-2.648-4.028-3.04-6.041-.608V15.966c2.014-2.432,4.531-1.824,6.041,0Z"
                                    transform="translate(-0.091 -10.332)"
                                    fill="#fff"
                                />
                            </svg>
                        </div>
                        <p class="category-item__name">Truyện tranh</p>
                    </div>
                    <div class="category-item">
                        <div class="category-item__icon">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="18"
                                height="21"
                                viewBox="0 0 18 21"
                            >
                                <path
                                    id="ic_local_florist_24px"
                                    d="M12,22a9,9,0,0,0,9-9A9,9,0,0,0,12,22ZM5.6,10.25a2.5,2.5,0,0,0,3.92,2.06l-.02.19a2.5,2.5,0,0,0,5,0l-.02-.19a2.464,2.464,0,0,0,1.42.44A2.494,2.494,0,0,0,16.97,8a2.5,2.5,0,1,0-2.49-4.31l.02-.19a2.5,2.5,0,0,0-5,0l.02.19A2.464,2.464,0,0,0,8.1,3.25,2.494,2.494,0,0,0,7.03,8,2.491,2.491,0,0,0,5.6,10.25ZM12,5.5A2.5,2.5,0,1,1,9.5,8,2.5,2.5,0,0,1,12,5.5ZM3,13a9,9,0,0,0,9,9A9,9,0,0,0,3,13Z"
                                    transform="translate(-3 -1)"
                                    fill="#ccc"
                                />
                            </svg>
                        </div>
                        <p class="category-item__name">Đời sống</p>
                    </div>
                    <div class="category-item">
                        <div class="category-item__icon">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    id="ic_extension_24px"
                                    d="M19.619,10.524H18.19V6.714a1.91,1.91,0,0,0-1.9-1.9h-3.81V3.381a2.381,2.381,0,1,0-4.762,0V4.81H3.9a1.9,1.9,0,0,0-1.9,1.9v3.619H3.429a2.571,2.571,0,0,1,0,5.143H2V19.1A1.91,1.91,0,0,0,3.9,21H7.524V19.571a2.571,2.571,0,1,1,5.143,0V21h3.619a1.91,1.91,0,0,0,1.9-1.9v-3.81h1.429a2.381,2.381,0,1,0,0-4.762Z"
                                    transform="translate(-2 -1)"
                                    fill="#ccc"
                                />
                            </svg>
                        </div>
                        <p class="category-item__name">Khoa học - Công nghệ</p>
                    </div>
                </section>
            </div>
            <!-- PRODUCTS -->
            <div class="row">
                <section class="products">
                    <div class="row">
                        <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                            <div class="product-item">
                                <img
                                    src="../assets/images/Dac-nhan-tam.jpeg"
                                    alt="book"
                                    class="product-item__image"
                                />
                                <h5 class="product-item__name">Đắc nhân tâm</h5>
                                <p class="product-item__price">76.000 đ</p>
                                <div class="product-item__hover-overlay">
                                    <div class="add-to-cart-btn">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 20 20"
                                        >
                                            <path
                                                id="ic_shopping_cart_24px"
                                                d="M7,18a2,2,0,1,0,2,2A2,2,0,0,0,7,18ZM1,2V4H3l3.6,7.59L5.25,14.04A1.933,1.933,0,0,0,5,15a2.006,2.006,0,0,0,2,2H19V15H7.42a.248.248,0,0,1-.25-.25l.03-.12L8.1,13h7.45a1.991,1.991,0,0,0,1.75-1.03l3.58-6.49A.977.977,0,0,0,21,5a1,1,0,0,0-1-1H5.21L4.27,2H1ZM17,18a2,2,0,1,0,2,2A2,2,0,0,0,17,18Z"
                                                transform="translate(-1 -2)"
                                                fill="#007bff"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                            <div class="product-item">
                                <img
                                    src="../assets/images/caphe-tony.png"
                                    alt="book"
                                    class="product-item__image"
                                />
                                <h5 class="product-item__name">
                                    Cà phê cùng Tony buổi sáng
                                </h5>
                                <p class="product-item__price">72.000 đ</p>
                                <div class="product-item__hover-overlay">
                                    <div class="add-to-cart-btn">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 20 20"
                                        >
                                            <path
                                                id="ic_shopping_cart_24px"
                                                d="M7,18a2,2,0,1,0,2,2A2,2,0,0,0,7,18ZM1,2V4H3l3.6,7.59L5.25,14.04A1.933,1.933,0,0,0,5,15a2.006,2.006,0,0,0,2,2H19V15H7.42a.248.248,0,0,1-.25-.25l.03-.12L8.1,13h7.45a1.991,1.991,0,0,0,1.75-1.03l3.58-6.49A.977.977,0,0,0,21,5a1,1,0,0,0-1-1H5.21L4.27,2H1ZM17,18a2,2,0,1,0,2,2A2,2,0,0,0,17,18Z"
                                                transform="translate(-1 -2)"
                                                fill="#007bff"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                            <div class="product-item">
                                <img
                                    src="../assets/images/tren-duong-bang.jpg"
                                    alt="book"
                                    class="product-item__image"
                                />
                                <h5 class="product-item__name">
                                    Trên đường băng
                                </h5>
                                <p class="product-item__price">80.000 đ</p>
                                <div class="product-item__hover-overlay">
                                    <div class="add-to-cart-btn">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 20 20"
                                        >
                                            <path
                                                id="ic_shopping_cart_24px"
                                                d="M7,18a2,2,0,1,0,2,2A2,2,0,0,0,7,18ZM1,2V4H3l3.6,7.59L5.25,14.04A1.933,1.933,0,0,0,5,15a2.006,2.006,0,0,0,2,2H19V15H7.42a.248.248,0,0,1-.25-.25l.03-.12L8.1,13h7.45a1.991,1.991,0,0,0,1.75-1.03l3.58-6.49A.977.977,0,0,0,21,5a1,1,0,0,0-1-1H5.21L4.27,2H1ZM17,18a2,2,0,1,0,2,2A2,2,0,0,0,17,18Z"
                                                transform="translate(-1 -2)"
                                                fill="#007bff"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                            <div class="product-item">
                                <img
                                    src="../assets/images/tempest.jpg"
                                    alt="book"
                                    class="product-item__image"
                                />
                                <h5 class="product-item__name">Tempest</h5>
                                <p class="product-item__price">206.000 đ</p>
                                <div class="product-item__hover-overlay">
                                    <div class="add-to-cart-btn">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 20 20"
                                        >
                                            <path
                                                id="ic_shopping_cart_24px"
                                                d="M7,18a2,2,0,1,0,2,2A2,2,0,0,0,7,18ZM1,2V4H3l3.6,7.59L5.25,14.04A1.933,1.933,0,0,0,5,15a2.006,2.006,0,0,0,2,2H19V15H7.42a.248.248,0,0,1-.25-.25l.03-.12L8.1,13h7.45a1.991,1.991,0,0,0,1.75-1.03l3.58-6.49A.977.977,0,0,0,21,5a1,1,0,0,0-1-1H5.21L4.27,2H1ZM17,18a2,2,0,1,0,2,2A2,2,0,0,0,17,18Z"
                                                transform="translate(-1 -2)"
                                                fill="#007bff"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                            <div class="product-item">
                                <img
                                    src="../assets/images/hanh-trinh-ve-phuong-dong.jpg"
                                    alt="book"
                                    class="product-item__image"
                                />
                                <h5 class="product-item__name">
                                    Hành trình về Phương Đông
                                </h5>
                                <p class="product-item__price">106.000 đ</p>
                                <div class="product-item__hover-overlay">
                                    <div class="add-to-cart-btn">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 20 20"
                                        >
                                            <path
                                                id="ic_shopping_cart_24px"
                                                d="M7,18a2,2,0,1,0,2,2A2,2,0,0,0,7,18ZM1,2V4H3l3.6,7.59L5.25,14.04A1.933,1.933,0,0,0,5,15a2.006,2.006,0,0,0,2,2H19V15H7.42a.248.248,0,0,1-.25-.25l.03-.12L8.1,13h7.45a1.991,1.991,0,0,0,1.75-1.03l3.58-6.49A.977.977,0,0,0,21,5a1,1,0,0,0-1-1H5.21L4.27,2H1ZM17,18a2,2,0,1,0,2,2A2,2,0,0,0,17,18Z"
                                                transform="translate(-1 -2)"
                                                fill="#007bff"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                            <div class="product-item">
                                <img
                                    src="../assets/images/muon-kiep-nhan-sinh.jpg"
                                    alt="book"
                                    class="product-item__image"
                                />
                                <h5 class="product-item__name">
                                    Muôn kiếp nhân sinh
                                </h5>
                                <p class="product-item__price">128.000 đ</p>
                                <div class="product-item__hover-overlay">
                                    <div class="add-to-cart-btn">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 20 20"
                                        >
                                            <path
                                                id="ic_shopping_cart_24px"
                                                d="M7,18a2,2,0,1,0,2,2A2,2,0,0,0,7,18ZM1,2V4H3l3.6,7.59L5.25,14.04A1.933,1.933,0,0,0,5,15a2.006,2.006,0,0,0,2,2H19V15H7.42a.248.248,0,0,1-.25-.25l.03-.12L8.1,13h7.45a1.991,1.991,0,0,0,1.75-1.03l3.58-6.49A.977.977,0,0,0,21,5a1,1,0,0,0-1-1H5.21L4.27,2H1ZM17,18a2,2,0,1,0,2,2A2,2,0,0,0,17,18Z"
                                                transform="translate(-1 -2)"
                                                fill="#007bff"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- CONTACT -->
            <div class="row">
                <section class="contact-area">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-2">
                            <div class="contact-form">
                                <input
                                    type="text"
                                    class="contact-input"
                                    placeholder="Họ và tên"
                                />
                                <input
                                    type="text"
                                    class="contact-input"
                                    placeholder="Số điện thoại"
                                />
                                <input
                                    type="email"
                                    class="contact-input"
                                    placeholder="Email"
                                />
                                <textarea
                                    class="contact-message"
                                    placeholder="Nội dung liên hệ"
                                ></textarea>
                                <div class="btn btn-primary">Gửi phản hồi</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 order-md-1">
                            <div class="contact-banner"></div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <footer class="container-fluid footer">
            <div class="row">
                <div class="col-12">
                    <div class="row footer-container">
                        <div class="row">
                            <div class="footer-subscribe col-lg-4">
                                <h3 class="subscribe-shop-name">Books</h3>
                                <p class="subscribe-intro">
                                    Đăng ký để nhận thêm bản tin của chúng tôi
                                    để biết thêm về các sản phẩm mới, xu hướng
                                    và ưu đãi.
                                </p>
                                <input
                                    type="email"
                                    class="subscribe-email"
                                    placeholder="Email của bạn"
                                />
                                <div
                                    class="btn btn-outline-light btn-subscribe"
                                >
                                    Đăng ký
                                </div>
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="footer-info-block col-lg-2">
                                <h5 class="info-block__title">
                                    Tài khoản của tôi
                                </h5>
                                <p class="info-block__item">
                                    Tài khoản của tôi
                                </p>
                                <p class="info-block__item">Lịch sử đơn hàng</p>
                                <p class="info-block__item">
                                    Danh sách yêu thích
                                </p>
                                <p class="info-block__item">Thư thông báo</p>
                            </div>
                            <div class="footer-info-block col-lg-2">
                                <h5 class="info-block__title">Thông tin</h5>
                                <p class="info-block__item">Về chúng tôi</p>
                                <p class="info-block__item">Blog</p>
                                <p class="info-block__item">
                                    Liên lạc với chúng tôi
                                </p>
                                <p class="info-block__item">Cửa hàng</p>
                                <p class="info-block__item">
                                    Xem thêm thông tin
                                </p>
                            </div>
                            <div class="footer-info-block col-lg-2">
                                <h5 class="info-block__title">Liên hệ</h5>
                                <p class="info-block__item">
                                    Email: email@domain.com
                                </p>
                                <p class="info-block__item">
                                    SĐT: (+84) 370 651 963
                                </p>
                                <p class="info-block__item">
                                    Nhà sách: 56 Linh Chiểu, Thủ Đức, Tp.HCM
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div
                                class="footer-social-contact col-lg-8 order-lg-2"
                            >
                                <div class="social-icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25.079"
                                        height="24.927"
                                        viewBox="0 0 25.079 24.927"
                                    >
                                        <path
                                            id="Icon_simple-facebook"
                                            data-name="Icon simple-facebook"
                                            d="M25.079,12.539a12.539,12.539,0,1,0-14.5,12.387V16.164H7.4V12.539H10.58V9.777c0-3.143,1.872-4.879,4.736-4.879a19.284,19.284,0,0,1,2.807.245V8.229H16.542A1.812,1.812,0,0,0,14.5,10.187v2.352h3.478l-.556,3.625H14.5v8.762A12.543,12.543,0,0,0,25.079,12.539Z"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </div>
                                <div class="social-icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="22.901"
                                        height="22.901"
                                        viewBox="0 0 22.901 22.901"
                                    >
                                        <g
                                            id="Icon_feather-instagram"
                                            data-name="Icon feather-instagram"
                                            transform="translate(1 1)"
                                        >
                                            <path
                                                id="Path_2875"
                                                data-name="Path 2875"
                                                d="M8.225,3h10.45A5.225,5.225,0,0,1,23.9,8.225v10.45A5.225,5.225,0,0,1,18.676,23.9H8.225A5.225,5.225,0,0,1,3,18.676V8.225A5.225,5.225,0,0,1,8.225,3Z"
                                                transform="translate(-3 -3)"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                            />
                                            <path
                                                id="Path_2876"
                                                data-name="Path 2876"
                                                d="M20.38,15.5a4.18,4.18,0,1,1-3.522-3.522A4.18,4.18,0,0,1,20.38,15.5Z"
                                                transform="translate(-5.749 -5.71)"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                            />
                                            <path
                                                id="Path_2877"
                                                data-name="Path 2877"
                                                d="M26.25,9.75h0"
                                                transform="translate(-10.052 -5.047)"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                            />
                                        </g>
                                    </svg>
                                </div>
                                <div class="social-icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="23.117"
                                        height="18.811"
                                        viewBox="0 0 23.117 18.811"
                                    >
                                        <path
                                            id="Icon_ionic-logo-twitter"
                                            data-name="Icon ionic-logo-twitter"
                                            d="M24.53,6.729a9.588,9.588,0,0,1-2.724.749,4.759,4.759,0,0,0,2.087-2.626A9.424,9.424,0,0,1,20.88,6a4.741,4.741,0,0,0-8.205,3.243,4.643,4.643,0,0,0,.122,1.083A13.44,13.44,0,0,1,3.02,5.367a4.752,4.752,0,0,0,1.474,6.339,4.632,4.632,0,0,1-2.155-.593v.059a4.747,4.747,0,0,0,3.806,4.654,4.774,4.774,0,0,1-1.249.167A4.474,4.474,0,0,1,4,15.9a4.75,4.75,0,0,0,4.433,3.3,9.509,9.509,0,0,1-5.893,2.033,9.614,9.614,0,0,1-1.132-.069,13.257,13.257,0,0,0,7.26,2.146A13.414,13.414,0,0,0,22.178,9.8c0-.206,0-.411-.015-.612A9.654,9.654,0,0,0,24.53,6.729Z"
                                            transform="translate(-1.413 -4.5)"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </div>
                                <div class="social-icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="21.492"
                                        height="21.492"
                                        viewBox="0 0 21.492 21.492"
                                    >
                                        <path
                                            id="Icon_metro-youtube"
                                            data-name="Icon metro-youtube"
                                            d="M8.724,1.928,7.272,4.808,5.82,1.928H3.968L6.585,6.489,6.6,6.48V9.987H7.944V6.48l.015.009,2.617-4.561Zm3.921,2.686a.681.681,0,0,1,.672.672V7.973a.672.672,0,1,1-1.343,0V5.286A.681.681,0,0,1,12.645,4.615Zm0-1.343A2.021,2.021,0,0,0,10.63,5.286V7.973a2.015,2.015,0,1,0,4.03,0V5.286a2.021,2.021,0,0,0-2.015-2.015Zm6.045,0V8.56c-.586.489-1.343.784-1.343-.958V3.271H16v4.6h0c.021,1.11.255,3.11,2.684,1.484v.629h1.343V3.271H18.69ZM20.7,16.7a.672.672,0,0,0-.672.672v.672h1.343v-.672A.672.672,0,0,0,20.7,16.7Zm-6.045.672V20.9c.455.455,1.343.5,1.343-.168V17.585C16,16.914,15.332,16.7,14.66,17.375Zm9.293-3.242a2.793,2.793,0,0,0-2.746-2.693c-1.465-.073-4.816-.109-7.76-.109s-6.533.036-8,.109A2.793,2.793,0,0,0,2.7,14.133c-.088,1.577-.132,2.148-.132,2.936s.044,1.971.132,3.547A2.793,2.793,0,0,0,5.449,23.31c1.465.073,5.054.109,8,.109s6.3-.036,7.76-.109a2.793,2.793,0,0,0,2.746-2.693q.11-1.971.11-3.547c0-1.051-.037-1.623-.11-2.936ZM6.6,22.077H5.257V15.36H3.914V14.017h4.03V15.36H6.6Zm5.373,0H10.63v-.629c-2.554,1.433-2.664.046-2.684-1.064h0V16.7H9.287v3.7c0,.812.757.733,1.343.244V16.7h1.343Zm5.373-1.362c0,1.4-1.438,1.813-2.686.722v.641H13.317V14.017H14.66V16.2c1.343-1.343,2.686-.84,2.686.5Zm5.373-2.667v.672H20.033v1.343a.672.672,0,1,0,1.343,0V19.39h1.343v.672a2.015,2.015,0,1,1-4.03,0V17.375a2.015,2.015,0,1,1,4.03,0v.672Z"
                                            transform="translate(-2.571 -1.928)"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </div>
                            </div>
                            <div class="footer-copy-right col-lg-4 order-lg-1">
                                <h5 class="copy-right__title">
                                    Books đã đăng ký bản quyền
                                </h5>
                                <div class="copy-right__group">
                                    <p class="copy-right__item">
                                        Chính sách bảo mật
                                    </p>
                                    <p class="copy-right__item">
                                        Điều khoản sử dụng
                                    </p>
                                    <p class="copy-right__item">Liên hệ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
