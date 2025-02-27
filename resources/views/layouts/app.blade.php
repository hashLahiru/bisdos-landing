<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">

<head>
    <meta charset="utf-8">

    {{-- <!-- Viewport --> --}}
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    {{-- <!-- SEO Meta Tags --> --}}
    <title>BisDos</title>
    <meta name="description" content="Cartzilla - Multipurpose E-Commerce Bootstrap HTML Template">
    <meta name="keywords"
        content="online shop, e-commerce, online store, market, multipurpose, product landing, cart, checkout, ui kit, light and dark mode, bootstrap, html5, css3, javascript, gallery, slider, mobile, pwa">
    <meta name="author" content="Createx Studio">

    {{-- <!-- Webmanifest + Favicon / App icons --> --}}
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="manifest" href="manifest.json">
    <link rel="icon" type="image/png" href="assets/app-icons/icon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="assets/app-icons/icon-180x180.png">

    {{-- <!-- Theme switcher (color modes) --> --}}
    <script src="assets/js/theme-switcher.js"></script>

    {{-- <!-- Preloaded local web font (Inter) --> --}}
    <link rel="preload" href="assets/fonts/inter-variable-latin.woff2" as="font" type="font/woff2" crossorigin="">

    {{-- <!-- Font icons --> --}}
    <link rel="preload" href="assets/icons/cartzilla-icons.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="stylesheet" href="assets/icons/cartzilla-icons.min.css">

    {{-- <!-- Vendor styles --> --}}
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/vendor/glightbox/glightbox.min.css">

    {{-- <!-- Bootstrap + Theme styles --> --}}
    <link rel="preload" href="assets/css/theme.min.css" as="style">
    <link rel="preload" href="assets/css/theme.rtl.min.css" as="style">
    <link rel="stylesheet" href="assets/css/theme.min.css" id="theme-styles">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- <!-- Customizer --> --}}
    <script src="assets/js/customizer.min.js"></script>
</head>

{{-- <!-- Body --> --}}

<body>

    {{-- <!-- Customizer offcanvas --> --}}
    <div style="display: none;" class="offcanvas offcanvas-end" id="customizer" tabindex="-1">
        <div class="offcanvas-header border-bottom">
            <h4 class="h5 offcanvas-title">Customize theme</h4>
            <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            {{-- <!-- Customizer settings --> --}}
            <div class="customizer-collapse show collapse" id="customizerSettings">

                {{-- <!-- Colors --> --}}
                <div class="mb-2 pb-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="ci-paint text-body-tertiary fs-5 me-2"></i>
                        <h5 class="fs-lg mb-0">Colors</h5>
                    </div>
                    <div class="row row-cols-2 g-3" id="theme-colors">
                        <div class="col">
                            <h6 class="fs-sm mb-2">Primary</h6>
                            <div class="color-swatch d-flex gap-3 rounded border p-2" id="theme-primary"
                                data-color-labels="[&quot;theme-primary&quot;, &quot;primary&quot;, &quot;primary-rgb&quot;]">
                                <input type="text" class="form-control rounded-0 border-0 bg-transparent p-1"
                                    value="#f55266">
                                <label for="primary"
                                    class="ratio ratio-1x1 w-100 rounded-circle flex-shrink-0 cursor-pointer"
                                    style="max-width: 38px; background-color: #f55266"></label>
                                <input type="color" class="visually-hidden" id="primary" value="#f55266">
                            </div>
                        </div>
                        <div class="col">
                            <h6 class="fs-sm mb-2">Success</h6>
                            <div class="color-swatch d-flex gap-3 rounded border p-2" id="theme-success"
                                data-color-labels="[&quot;theme-success&quot;, &quot;success&quot;, &quot;success-rgb&quot;]">
                                <input type="text" class="form-control rounded-0 border-0 bg-transparent p-1"
                                    value="#33b36b">
                                <label for="success"
                                    class="ratio ratio-1x1 w-100 rounded-circle flex-shrink-0 cursor-pointer"
                                    style="max-width: 38px; background-color: #33b36b"></label>
                                <input type="color" class="visually-hidden" id="success" value="#33b36b">
                            </div>
                        </div>
                        <div class="col">
                            <h6 class="fs-sm mb-2">Warning</h6>
                            <div class="color-swatch d-flex gap-3 rounded border p-2" id="theme-warning"
                                data-color-labels="[&quot;theme-warning&quot;, &quot;warning&quot;, &quot;warning-rgb&quot;]">
                                <input type="text" class="form-control rounded-0 border-0 bg-transparent p-1"
                                    value="#fc9231">
                                <label for="warning"
                                    class="ratio ratio-1x1 w-100 rounded-circle flex-shrink-0 cursor-pointer"
                                    style="max-width: 38px; background-color: #fc9231"></label>
                                <input type="color" class="visually-hidden" id="warning" value="#fc9231">
                            </div>
                        </div>
                        <div class="col">
                            <h6 class="fs-sm mb-2">Danger</h6>
                            <div class="color-swatch d-flex gap-2 rounded border p-2" id="theme-danger"
                                data-color-labels="[&quot;theme-danger&quot;, &quot;danger&quot;, &quot;danger-rgb&quot;]">
                                <input type="text" class="form-control rounded-0 border-0 bg-transparent p-1"
                                    value="#f03d3d">
                                <label for="danger"
                                    class="ratio ratio-1x1 w-100 rounded-circle flex-shrink-0 cursor-pointer"
                                    style="max-width: 38px; background-color: #f03d3d"></label>
                                <input type="color" class="visually-hidden" id="danger" value="#f03d3d">
                            </div>
                        </div>
                        <div class="col">
                            <h6 class="fs-sm mb-2">Info</h6>
                            <div class="color-swatch d-flex gap-2 rounded border p-2" id="theme-info"
                                data-color-labels="[&quot;theme-info&quot;, &quot;info&quot;, &quot;info-rgb&quot;]">
                                <input type="text" class="form-control rounded-0 border-0 bg-transparent p-1"
                                    value="#2f6ed5">
                                <label for="info"
                                    class="ratio ratio-1x1 w-100 rounded-circle flex-shrink-0 cursor-pointer"
                                    style="max-width: 38px; background-color: #2f6ed5"></label>
                                <input type="color" class="visually-hidden" id="info" value="#2f6ed5">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <!-- Direction --> --}}
                <div class="mb-2 pb-4">
                    <div class="d-flex align-items-center mb-2 pb-1">
                        <i class="ci-sort text-body-tertiary fs-lg me-2" style="transform: rotate(90deg)"></i>
                        <h5 class="fs-lg mb-0">Direction</h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-between rounded border p-3">
                        <div class="me-3">
                            <h6 class="mb-1">RTL</h6>
                            <p class="fs-sm mb-0">Change text direction</p>
                        </div>
                        <div class="form-check form-switch m-0">
                            <input type="checkbox" class="form-check-input" role="switch" id="rtl-switch">
                        </div>
                    </div>
                    <div class="alert alert-info mb-0 mt-2 p-2">
                        <div class="d-flex text-body-emphasis fs-xs py-1 pe-1">
                            <i class="ci-info text-info fs-lg mb-sm-0 mb-2" style="margin-top: .125rem"></i>
                            <div class="ps-2">To switch the text direction of your webpage from LTR to RTL, please
                                consult the detailed instructions provided in the relevant section of our documentation.
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <!-- Border width --> --}}
                <div class="mb-2 pb-4">
                    <div class="d-flex align-items-center mb-2 pb-1">
                        <i class="ci-menu text-body-tertiary fs-lg me-2"></i>
                        <h5 class="fs-lg mb-0">Border width, px</h5>
                    </div>
                    <div class="slider-input d-flex align-items-center gap-3 rounded border p-3" id="border-input">
                        <input type="range" class="form-range" min="0" max="10" step="1"
                            value="1">
                        <input type="number" class="form-control" id="border-width" min="0" max="10"
                            value="1" style="max-width: 5.5rem">
                    </div>
                </div>

                {{-- <!-- Rounding --> --}}
                <div class="d-flex align-items-center mb-2 pb-1">
                    <i class="ci-maximize text-body-tertiary fs-lg me-2"></i>
                    <h5 class="fs-lg mb-0">Rounding, rem</h5>
                </div>
                <div class="slider-input d-flex align-items-center gap-3 rounded border p-3">
                    <input type="range" class="form-range" min="0" max="5" step=".05"
                        value="0.5">
                    <input type="number" class="form-control" id="border-radius" min="0" max="5"
                        step=".05" value="0.5" style="max-width: 5.5rem">
                </div>
            </div>

            {{-- <!-- Customizer code --> --}}
            <div class="customizer-collapse collapse" id="customizerCode">
                <div class="nav mb-3">
                    <a class="nav-link animate-underline fs-base p-0" href=".html" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="customizerSettings customizerCode">
                        <i class="ci-chevron-left fs-lg ms-n1 me-1"></i>
                        <span class="animate-target">Back to settings</span>
                    </a>
                </div>
                <p class="fs-sm pb-1">To apply the provided styles to your webpage, enclose them within a
                    <code>&lt;style&gt;</code> tag and insert this tag into the <code>&lt;head&gt;</code> section of
                    your HTML document after the following link to the main stylesheet:<br><code>&lt;link
                        href="assets/css/theme.min.css"&gt;</code>
                </p>
                <div class="position-relative bg-body-tertiary overflow-hidden rounded pt-3">
                    <div class="position-absolute w-100 start-0 top-0 p-3">
                        <button type="button" class="btn btn-sm btn-outline-dark w-100"
                            data-copy-text-from="#generated-styles" data-done-label="Code copied">
                            <i class="ci-copy fs-sm me-1"></i>
                            Copy code
                        </button>
                    </div>
                    <pre class="fs-xs text-body-emphasis text-wrap border-0 bg-transparent p-4 pt-5" id="generated-styles"></pre>
                </div>
            </div>
        </div>

        {{-- <!-- Offcanvas footer (Action buttons) --> --}}
        <div class="offcanvas-header border-top d-none gap-3" id="customizer-btns">
            <button type="button" class="btn btn-lg btn-secondary w-100 fs-sm" id="customizer-reset">
                <i class="ci-trash fs-lg ms-n1 me-2"></i>
                Reset
            </button>
            <button class="btn btn-lg btn-primary hiding-collapse-toggle w-100 fs-sm collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target=".customizer-collapse" aria-expanded="false"
                aria-controls="customizerSettings customizerCode">
                <i class="ci-code fs-lg ms-n1 me-2"></i>
                Show code
            </button>
        </div>
    </div>


    {{-- <!-- Shopping cart offcanvas (Empty state) --> --}}
    <div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="shoppingCart" tabindex="-1"
        aria-labelledby="shoppingCartLabel" style="width: 500px">
        <div class="offcanvas-header pt-lg-4 py-3">
            <h4 class="offcanvas-title" id="shoppingCartLabel">Shopping cart</h4>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body text-center">
            <svg class="d-block mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" width="60"
                viewBox="0 0 29.5 30">
                <path class="text-body-tertiary"
                    d="M17.8 4c.4 0 .8-.3.8-.8v-2c0-.4-.3-.8-.8-.8-.4 0-.8.3-.8.8v2c0 .4.3.8.8.8zm3.2.6c.4.2.8 0 1-.4l.4-.9c.2-.4 0-.8-.4-1s-.8 0-1 .4l-.4.9c-.2.4 0 .9.4 1zm-7.5-.4c.2.4.6.6 1 .4s.6-.6.4-1l-.4-.9c-.2-.4-.6-.6-1-.4s-.6.6-.4 1l.4.9z"
                    fill="currentColor"></path>
                <path class="text-body-emphasis"
                    d="M10.7 24.5c-1.5 0-2.8 1.2-2.8 2.8S9.2 30 10.7 30s2.8-1.2 2.8-2.8-1.2-2.7-2.8-2.7zm0 4c-.7 0-1.2-.6-1.2-1.2s.6-1.2 1.2-1.2 1.2.6 1.2 1.2-.5 1.2-1.2 1.2zm11.1-4c-1.5 0-2.8 1.2-2.8 2.8a2.73 2.73 0 0 0 2.8 2.8 2.73 2.73 0 0 0 2.8-2.8c0-1.6-1.3-2.8-2.8-2.8zm0 4c-.7 0-1.2-.6-1.2-1.2s.6-1.2 1.2-1.2 1.2.6 1.2 1.2-.6 1.2-1.2 1.2zM8.7 18h16c.3 0 .6-.2.7-.5l4-10c.2-.5-.2-1-.7-1H9.3c-.4 0-.8.3-.8.8s.4.7.8.7h18.3l-3.4 8.5H9.3L5.5 1C5.4.7 5.1.5 4.8.5h-4c-.5 0-.8.3-.8.7s.3.8.8.8h3.4l3.7 14.6a3.24 3.24 0 0 0-2.3 3.1C5.5 21.5 7 23 8.7 23h16c.4 0 .8-.3.8-.8s-.3-.8-.8-.8h-16a1.79 1.79 0 0 1-1.8-1.8c0-1 .9-1.6 1.8-1.6z"
                    fill="currentColor"></path>
            </svg>
            <h6 class="mb-2">Your shopping cart is currently empty!</h6>
            <p class="fs-sm mb-4">Add item(s) to the cart to proceed with your purchase.</p>
            <button type="button" class="btn btn-dark rounded-pill" data-bs-dismiss="offcanvas"
                aria-label="Close">Continue shopping</button>
        </div>
    </div>


    {{-- <!-- Navigation bar (Page header) --> --}}
    <header class="navbar-sticky sticky-top z-fixed container mt-3 px-2" data-sticky-element="">
        <div class="navbar navbar-expand-lg bg-body rounded-pill mx-1 flex-nowrap ps-0 shadow">
            <div class="position-absolute w-100 h-100 bg-dark rounded-pill d-none d-block-dark start-0 top-0 z-0">
            </div>

            {{-- <!-- Mobile offcanvas menu toggler (Hamburger) --> --}}
            <button type="button" class="navbar-toggler ms-3" data-bs-toggle="offcanvas"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- <!-- Navbar brand (Logo) --> --}}
            <a class="navbar-brand position-relative z-1 ms-sm-5 ms-lg-4 me-sm-0 me-lg-3 me-2 ms-4"
                href="index.html">BisDos</a>

            {{-- <!-- Main navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) --> --}}
            <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
                <div class="offcanvas-header py-3">
                    <h5 class="offcanvas-title" id="navbarNavLabel">Browse Cartzilla</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body py-lg-0 mx-lg-auto pb-4 pt-3">
                    <ul class="navbar-nav position-relative">
                        <li class="nav-item me-lg-n2 me-xl-0">
                            <a class="nav-link fs-sm" href="/">Home</a>
                        </li>
                        <li class="nav-item me-lg-n2 me-xl-0">
                            <a class="nav-link fs-sm" href="/teams">Team Cards</a>
                        </li>
                        <li class="nav-item me-lg-n2 me-xl-0">
                            <a class="nav-link fs-sm" href="/faqs">FAQ</a>
                        </li>
                        <li class="nav-item me-lg-n2 me-xl-0">
                            <a class="nav-link fs-sm" href="/about">About</a>
                        </li>
                        <li class="nav-item me-lg-n2 me-xl-0">
                            <a class="nav-link fs-sm" href="/contact">Contact</a>
                        </li>
                        {{-- <li class="nav-item dropdown position-static me-lg-n1 me-xl-0">
                            <a class="nav-link dropdown-toggle fs-sm" href="#" role="button"
                                data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Shop</a>
                            <div class="dropdown-menu p-4" style="--cz-dropdown-spacer: 1rem">
                                <div class="d-flex flex-column flex-lg-row gap-4">
                                    <div style="min-width: 190px">
                                        <div class="h6 mb-2">Electronics Store</div>
                                        <ul class="nav flex-column mt-0 gap-2">
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="shop-categories-electronics.html">Categories Page</a>
                                            </li>
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="shop-catalog-electronics.html">Catalog with Side Filters</a>
                                            </li>
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="shop-product-general-electronics.html">Product General
                                                    Info</a>
                                            </li>
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="shop-product-details-electronics.html">Product Details</a>
                                            </li>
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="shop-product-reviews-electronics.html">Product Reviews</a>
                                            </li>
                                        </ul>
                                        <div class="h6 mb-2 pt-4">Fashion Store</div>
                                        <ul class="nav flex-column mt-0 gap-2">
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="shop-catalog-fashion.html">Catalog with Side Filters</a>
                                            </li>
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="shop-product-fashion.html">Product Page</a>
                                            </li>
                                        </ul>
                                        <div class="h6 mb-2 pt-4">Furniture Store</div>
                                        <ul class="nav flex-column mt-0 gap-2">
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="shop-catalog-furniture.html">Catalog with Top Filters</a>
                                            </li>
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="shop-product-furniture.html">Product Page</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div style="min-width: 190px">
                                        <div class="h6 mb-2">Grocery Store</div>
                                        <ul class="nav flex-column mt-0 gap-2">
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="shop-catalog-grocery.html">Catalog with Side Filters</a>
                                            </li>
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="shop-product-grocery.html">Product Page</a>
                                            </li>
                                        </ul>
                                        <div class="h6 mb-2 pt-4">Marketplace</div>
                                        <ul class="nav flex-column mt-0 gap-2">
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="shop-catalog-marketplace.html">Catalog with Top Filters</a>
                                            </li>
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="shop-product-marketplace.html">Digital Product Page</a>
                                            </li>
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="checkout-marketplace.html">Cart / Checkout</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div style="min-width: 190px">
                                        <div class="h6 mb-2">Checkout v.1</div>
                                        <ul class="nav flex-column mt-0 gap-2">
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="checkout-v1-cart.html">Shopping Cart</a>
                                            </li>
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="checkout-v1-delivery-1.html">Delivery Info (Step 1)</a>
                                            </li>
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="checkout-v1-delivery-2.html">Delivery Info (Step 2)</a>
                                            </li>
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="checkout-v1-shipping.html">Shipping Address</a>
                                            </li>
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="checkout-v1-payment.html">Payment</a>
                                            </li>
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="checkout-v1-thankyou.html">Thank You Page</a>
                                            </li>
                                        </ul>
                                        <div class="h6 mb-2 pt-4">Checkout v.2</div>
                                        <ul class="nav flex-column mt-0 gap-2">
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="checkout-v2-cart.html">Shopping Cart</a>
                                            </li>
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="checkout-v2-delivery.html">Delivery Info</a>
                                            </li>
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="checkout-v2-pickup.html">Pickup from Store</a>
                                            </li>
                                            <li class="d-flex w-100 pt-1">
                                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                    href="checkout-v2-thankyou.html">Thank You Page</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown me-lg-n1 me-xl-0">
                            <a class="nav-link dropdown-toggle fs-sm" href="#" role="button"
                                data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside"
                                aria-expanded="false">Account</a>
                            <ul class="dropdown-menu" style="--cz-dropdown-spacer: 1rem">
                                <li class="dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#!" role="button"
                                        data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Auth
                                        Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="account-signin.html">Sign In</a></li>
                                        <li><a class="dropdown-item" href="account-signup.html">Sign Up</a></li>
                                        <li><a class="dropdown-item" href="account-password-recovery.html">Password
                                                Recovery</a></li>
                                    </ul>
                                </li>
                                <li class="dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#!" role="button"
                                        data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Shop
                                        User</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="account-orders.html">Orders History</a>
                                        </li>
                                        <li><a class="dropdown-item" href="account-wishlist.html">Wishlist</a></li>
                                        <li><a class="dropdown-item" href="account-payment.html">Payment Methods</a>
                                        </li>
                                        <li><a class="dropdown-item" href="account-reviews.html">My Reviews</a></li>
                                        <li><a class="dropdown-item" href="account-info.html">Personal Info</a></li>
                                        <li><a class="dropdown-item" href="account-addresses.html">Addresses</a></li>
                                        <li><a class="dropdown-item"
                                                href="account-notifications.html">Notifications</a></li>
                                    </ul>
                                </li>
                                <li class="dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#!" role="button"
                                        data-bs-toggle="dropdown" data-bs-trigger="hover"
                                        aria-expanded="false">Marketplace User</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="account-marketplace-dashboard.html">Dashboard</a></li>
                                        <li><a class="dropdown-item"
                                                href="account-marketplace-products.html">Products</a></li>
                                        <li><a class="dropdown-item" href="account-marketplace-sales.html">Sales</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="account-marketplace-payouts.html">Payouts</a></li>
                                        <li><a class="dropdown-item"
                                                href="account-marketplace-purchases.html">Purchases</a></li>
                                        <li><a class="dropdown-item"
                                                href="account-marketplace-favorites.html">Favorites</a></li>
                                        <li><a class="dropdown-item"
                                                href="account-marketplace-settings.html">Settings</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown me-lg-n1 me-xl-0">
                            <a class="nav-link dropdown-toggle fs-sm" href="#" role="button"
                                data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside"
                                aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu" style="--cz-dropdown-spacer: 1rem">
                                <li class="dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#!" role="button"
                                        data-bs-toggle="dropdown" data-bs-trigger="hover"
                                        aria-expanded="false">About</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="about-v1.html">About v.1</a></li>
                                        <li><a class="dropdown-item" href="about-v2.html">About v.2</a></li>
                                    </ul>
                                </li>
                                <li class="dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#!" role="button"
                                        data-bs-toggle="dropdown" data-bs-trigger="hover"
                                        aria-expanded="false">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="blog-grid-v1.html">Grid View v.1</a></li>
                                        <li><a class="dropdown-item" href="blog-grid-v2.html">Grid View v.2</a></li>
                                        <li><a class="dropdown-item" href="blog-list.html">List View</a></li>
                                        <li><a class="dropdown-item" href="blog-single-v1.html">Single Post v.1</a>
                                        </li>
                                        <li><a class="dropdown-item" href="blog-single-v2.html">Single Post v.2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#!" role="button"
                                        data-bs-toggle="dropdown" data-bs-trigger="hover"
                                        aria-expanded="false">Contact</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="contact-v1.html">Contact v.1</a></li>
                                        <li><a class="dropdown-item" href="contact-v2.html">Contact v.2</a></li>
                                        <li><a class="dropdown-item" href="contact-v3.html">Contact v.3</a></li>
                                    </ul>
                                </li>
                                <li class="dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#!" role="button"
                                        data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Help
                                        Center</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="help-topics-v1.html">Help Topics v.1</a>
                                        </li>
                                        <li><a class="dropdown-item" href="help-topics-v2.html">Help Topics v.2</a>
                                        </li>
                                        <li><a class="dropdown-item" href="help-single-article-v1.html">Help Single
                                                Article v.1</a></li>
                                        <li><a class="dropdown-item" href="help-single-article-v2.html">Help Single
                                                Article v.2</a></li>
                                    </ul>
                                </li>
                                <li class="dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#!" role="button"
                                        data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">404
                                        Error</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="404-electronics.html">404 Electronics</a>
                                        </li>
                                        <li><a class="dropdown-item" href="404-fashion.html">404 Fashion</a></li>
                                        <li><a class="dropdown-item" href="404-furniture.html">404 Furniture</a></li>
                                        <li><a class="dropdown-item" href="404-grocery.html">404 Grocery</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="terms-and-conditions.html">Terms &amp;
                                        Conditions</a></li>
                            </ul>
                        </li>
                        <li class="nav-item me-lg-n2 me-xl-0">
                            <a class="nav-link fs-sm" href="docs/installation.html">Docs</a>
                        </li>
                        <li class="nav-item me-lg-n2 me-xl-0">
                            <a class="nav-link fs-sm" href="docs/typography.html">Components</a>
                        </li> --}}
                    </ul>
                </div>
            </nav>

            {{-- <!-- Button group --> --}}
            <div class="d-flex gap-sm-1 position-relative z-1">

                {{-- <!-- Theme switcher (light/dark/auto) --> --}}
                <div class="dropdown me-1" style="display:none;">
                    <button type="button"
                        class="theme-switcher btn btn-icon btn-outline-secondary fs-lg rounded-circle animate-scale border-0"
                        data-bs-toggle="dropdown" data-bs-display="dynamic" aria-expanded="false"
                        aria-label="Toggle theme (light)">
                        <span class="theme-icon-active d-flex animate-target">
                            <i class="ci-sun"></i>
                        </span>
                    </button>
                    <ul class="dropdown-menu start-50 translate-middle-x"
                        style="--cz-dropdown-min-width: 9rem; --cz-dropdown-spacer: 1rem">
                        <li>
                            <button type="button" class="dropdown-item active" data-bs-theme-value="light"
                                aria-pressed="false">
                                <span class="theme-icon d-flex fs-base me-2">
                                    <i class="ci-sun"></i>
                                </span>
                                <span class="theme-label">Light</span>
                                <i class="item-active-indicator ci-check ms-auto"></i>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item" data-bs-theme-value="dark"
                                aria-pressed="true">
                                <span class="theme-icon d-flex fs-base me-2">
                                    <i class="ci-moon"></i>
                                </span>
                                <span class="theme-label">Dark</span>
                                <i class="item-active-indicator ci-check ms-auto"></i>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item" data-bs-theme-value="auto"
                                aria-pressed="false">
                                <span class="theme-icon d-flex fs-base me-2">
                                    <i class="ci-auto"></i>
                                </span>
                                <span class="theme-label">Auto</span>
                                <i class="item-active-indicator ci-check ms-auto"></i>
                            </button>
                        </li>
                    </ul>
                </div>

                <style>
                    .fs-lg {
                        font-size: 1.5rem !important;
                    }
                </style>
                <div class="dropdown me-1">
                    <button type="button"
                        class="theme-switcher btn btn-icon btn-outline-secondary fs-lg rounded-circle animate-scale border-0"
                        data-bs-toggle="dropdown" data-bs-display="dynamic" aria-expanded="false"
                        aria-label="Toggle theme (light)">
                        <span class="theme-icon-active d-flex animate-target">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>

                {{-- <!-- Cart button --> --}}
                {{-- <button type="button" class="btn btn-warning rounded-pill" data-bs-toggle="offcanvas"
                    data-bs-target="#shoppingCart" aria-controls="shoppingCart" aria-label="Shopping cart">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                </button> --}}
            </div>
        </div>
    </header>


    {{-- <!-- Page content --> --}}
    <main class="content-wrapper">
        @yield('content')
    </main>


    {{-- <!-- Page footer --> --}}
    <footer class="footer pb-4">
        <div class="pb-sm-2 pb-md-3 container">
            <div class="position-relative pe-lg-3 pe-xxl-0 px-4 py-3">
                <div class="row align-items-center position-relative z-1">
                    <div class="col-lg-4 col-xxl-5 order-lg-2 mb-lg-0 mb-2">
                        <div class="nav justify-content-center justify-content-lg-start">
                            <a class="nav-link animate-underline fs-xs px-3" href="#!">
                                <span class="animate-target">Privacy</span>
                            </a>
                            <a class="nav-link animate-underline fs-xs px-3" href="#!">
                                <span class="animate-target">Affiliates</span>
                            </a>
                            <a class="nav-link animate-underline fs-xs px-3" href="#!">
                                <span class="animate-target"> Terms of use</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex gap-sm-3 justify-content-center order-lg-3 mb-lg-0 mb-2 gap-2">
                        <div>
                            <img src="assets/img/payment-methods/visa-light-mode.svg" class="d-none-dark"
                                alt="Visa">
                            <img src="assets/img/payment-methods/visa-dark-mode.svg" class="d-none d-block-dark"
                                alt="Visa">
                        </div>
                        <div>
                            <img src="assets/img/payment-methods/paypal-light-mode.svg" class="d-none-dark"
                                alt="PayPal">
                            <img src="assets/img/payment-methods/paypal-dark-mode.svg" class="d-none d-block-dark"
                                alt="PayPal">
                        </div>
                        <div>
                            <img src="assets/img/payment-methods/mastercard.svg" alt="Mastercard">
                        </div>
                        <div>
                            <img src="assets/img/payment-methods/google-pay-light-mode.svg" class="d-none-dark"
                                alt="Google Pay">
                            <img src="assets/img/payment-methods/google-pay-dark-mode.svg" class="d-none d-block-dark"
                                alt="Google Pay">
                        </div>
                        <div>
                            <img src="assets/img/payment-methods/apple-pay-light-mode.svg" class="d-none-dark"
                                alt="Apple Pay">
                            <img src="assets/img/payment-methods/apple-pay-dark-mode.svg" class="d-none d-block-dark"
                                alt="Apple Pay">
                        </div>
                    </div>
                    <div class="col-lg-4 col-xxl-3 order-lg-1">
                        <p class="fs-xs text-lg-start order-md-1 mb-0 text-center">
                            © All rights reserved. Made by <span class="animate-underline"><a
                                    class="animate-target text-dark-emphasis text-decoration-none"
                                    href="https://createx.studio/" target="_blank" rel="noreferrer">Createx
                                    Studio</a></span>
                        </p>
                    </div>
                </div>
                <div class="position-absolute w-100 h-100 d-lg-none start-0 top-0">
                    <span
                        class="position-absolute w-100 h-100 rounded-5 d-none-dark start-0 top-0 bg-white shadow"></span>
                    <span
                        class="position-absolute w-100 h-100 bg-body-tertiary rounded-5 d-none d-block-dark start-0 top-0"></span>
                </div>
                <div class="position-absolute w-100 h-100 d-none d-lg-block start-0 top-0">
                    <span
                        class="position-absolute w-100 h-100 rounded-pill d-none-dark start-0 top-0 bg-white shadow"></span>
                    <span
                        class="position-absolute w-100 h-100 bg-body-tertiary rounded-pill d-none d-block-dark start-0 top-0"></span>
                </div>
            </div>
        </div>
    </footer>


    {{-- <!-- Back to top button --> --}}
    <div class="floating-buttons position-fixed top-50 z-sticky me-xl-4 end-0 me-3 pb-4">
        <a class="btn-scroll-top btn btn-sm bg-body rounded-pill animate-slide-end border-0 shadow" href="#top">
            Top
            <i class="ci-arrow-right fs-base me-n1 animate-target ms-1"></i>
            <span class="position-absolute w-100 h-100 rounded-pill start-0 top-0 z-0 border"></span>
            <svg class="position-absolute w-100 h-100 z-1 start-0 top-0" viewBox="0 0 62 32" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect x=".75" y=".75" width="60.5" height="30.5" rx="15.25" stroke="currentColor"
                    stroke-width="1.5" stroke-miterlimit="10"></rect>
            </svg>
        </a>
        {{-- <a class="btn btn-sm btn-outline-secondary text-uppercase bg-body rounded-pill animate-rotate me-n5 ms-2 shadow"
            href="#customizer" style="font-size: .625rem; letter-spacing: .05rem;" data-bs-toggle="offcanvas"
            role="button" aria-controls="customizer">
            Customize<i class="ci-settings fs-base me-n2 animate-target ms-1"></i>
        </a> --}}
    </div>

    {{-- <!-- Vendor scripts --> --}}
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/glightbox.min.js"></script>

    {{-- <!-- Bootstrap + Theme scripts --> --}}
    <script src="assets/js/theme.min.js"></script>
</body>

</html>
