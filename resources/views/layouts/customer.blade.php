<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Shoe Addict</title>
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fabulous/css/styles.css') }}" media="all">
    <style>
        .main-container {
            min-height: calc(100vh - 193px) !important;
        }
    </style>
    @yield('css')
</head>

<body>
    <!-- Mobile Menu -->
    <div id="jtv-mobile-menu">
        <ul>
            <li>
                <div class="mm-search">
                    <form id="mob-search" name="search">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <input type="text" class="form-control simple" placeholder="Search ..."
                                    name="srch-term" id="srch-term">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            <li><a href="index.html">Home</a>
                <ul>
                    <li><a href="index.html">Home Shop 1</a></li>
                    <li><a href="version2/index.html">Home Shop 2</a></li>
                    <li><a href="version3/index.html">Home Shop 3</a></li>
                    <li><a href="version4/index.html">Home Shop 4</a></li>
                </ul>
            </li>
            <li><a href="#">Pages</a>
                <ul>
                    <li><a href="shop-shop-grid-sidebar.html">Shop Grid</a></li>
                    <li><a href="shop-grid-sidebar.html">Shop Grid Sidebar</a></li>
                    <li><a href="shop-shop-list-sidebar.html">Shop List</a></li>
                    <li><a href="shop-list-sidebar.html">Shop List Sidebar</a></li>
                    <li><a href="product-detail.html">Product Detail</a></li>
                    <li><a href="product-detail-sidebar.html">Product Detail Sidebar</a></li>
                    <li><a href="shopping-cart.html">Shopping Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                    <li><a href="dashboard.html">Dashboard</a></li>
                    <li><a href="compare.html">Compare Products</a></li>
                    <li><a href="complete-order.html">Complete Order</a></li>
                    <li><a href="my-account-information.html">Account Information</a></li>
                    <li><a href="about-us.html">About us</a></li>
                    <li><a href="blog.html">Blog</a>
                        <ul>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-archive.html">Blog Archive</a></li>
                            <li><a href="blog_single_post.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="contact.html">Contact us</a></li>
                    <li><a href="404error.html">404 Error Page</a></li>
                </ul>
            </li>
            <li><a href="#">Men's</a>
                <ul>
                    <li><a href="#">Jackets</a>
                        <ul>
                            <li><a href="shop-grid-sidebar.html">Coats</a></li>
                            <li><a href="shop-grid-sidebar.html">Outerwear</a></li>
                            <li><a href="shop-grid-sidebar.html">Bags</a></li>
                            <li><a href="shop-grid-sidebar.html">Dresses</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-grid-sidebar.html">Watches</a>
                        <ul>
                            <li><a href="shop-grid-sidebar.html">Fastrack</a></li>
                            <li><a href="shop-grid-sidebar.html">Casio</a></li>
                            <li><a href="shop-grid-sidebar.html">Sonata</a></li>
                            <li><a href="shop-grid-sidebar.html">Maxima</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-grid-sidebar.html">Footwear</a>
                        <ul>
                            <li><a href="shop-grid-sidebar.html">Sports</a></li>
                            <li><a href="shop-grid-sidebar.html">Flat Sandals</a></li>
                            <li><a href="shop-grid-sidebar.html">Casual</a></li>
                            <li><a href="shop-grid-sidebar.html">Sneakers</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-grid-sidebar.html">Jwellery</a>
                        <ul>
                            <li><a href="shop-grid-sidebar.html">Bracelets</a></li>
                            <li><a href="shop-grid-sidebar.html">Necklaces &amp; Pendent</a></li>
                            <li><a href="shop-grid-sidebar.html">Pendants</a></li>
                            <li><a href="shop-grid-sidebar.html">Pins &amp; Brooches</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-grid-sidebar.html">Suits</a>
                        <ul>
                            <li><a href="shop-grid-sidebar.html">Casual Dresses</a></li>
                            <li><a href="shop-grid-sidebar.html">Evening</a></li>
                            <li><a href="shop-grid-sidebar.html">Designer</a></li>
                            <li><a href="shop-grid-sidebar.html">Party</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-grid-sidebar.html">Accessories</a>
                        <ul>
                            <li><a href="shop-grid-sidebar.html">Trousers</a></li>
                            <li><a href="shop-grid-sidebar.html">Jeans</a></li>
                            <li><a href="shop-grid-sidebar.html">Clothing</a></li>
                            <li><a href="shop-grid-sidebar.html">Shirts</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="shop-grid-sidebar.html">Women's </a>
                <ul>
                    <li><a href="shop-grid-sidebar.html">Clothing</a>
                        <ul>
                            <li><a href="shop-grid-sidebar.html">Dress sale</a></li>
                            <li><a href="shop-grid-sidebar.html">Sarees</a></li>
                            <li><a href="shop-grid-sidebar.html">Kurta & kurti</a></li>
                            <li><a href="shop-grid-sidebar.html">Dress materials</a></li>
                            <li><a href="shop-grid-sidebar.html">Salwar kameez sets</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-grid-sidebar.html">Jewellery</a>
                        <ul>
                            <li><a href="shop-grid-sidebar.html">Rings</a></li>
                            <li><a href="shop-grid-sidebar.html">Earrings</a></li>
                            <li><a href="shop-grid-sidebar.html">Jewellery sets</a></li>
                            <li><a href="shop-grid-sidebar.html">Pendants & lockets</a></li>
                            <li><a href="shop-grid-sidebar.html">Plastic jewellery</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-grid-sidebar.html">Beauty</a>
                        <ul>
                            <li><a href="shop-grid-sidebar.html">Make up</a></li>
                            <li><a href="shop-grid-sidebar.html">Hair care</a></li>
                            <li><a href="shop-grid-sidebar.html">Deodorants</a></li>
                            <li><a href="shop-grid-sidebar.html">Bath & body</a></li>
                            <li><a href="shop-grid-sidebar.html">Skin care</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-grid-sidebar.html">Watches</a>
                        <ul>
                            <li><a href="shop-grid-sidebar.html">Fasttrack</a></li>
                            <li><a href="shop-grid-sidebar.html">Casio</a></li>
                            <li><a href="shop-grid-sidebar.html">Titan</a></li>
                            <li><a href="shop-grid-sidebar.html">Tommy-Hilfiger</a></li>
                            <li><a href="shop-grid-sidebar.html">Fossil</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-grid-sidebar.html">Footwear</a>
                        <ul>
                            <li><a href="shop-grid-sidebar.html">Flats</a></li>
                            <li><a href="shop-grid-sidebar.html">Heels</a></li>
                            <li><a href="shop-grid-sidebar.html">Boots</a></li>
                            <li><a href="shop-grid-sidebar.html">Slippers</a></li>
                            <li><a href="shop-grid-sidebar.html">Shoes</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-grid-sidebar.html">Accesories</a>
                        <ul>
                            <li><a href="shop-grid-sidebar.html">Backpacks</a></li>
                            <li><a href="shop-grid-sidebar.html">Wallets</a></li>
                            <li><a href="shop-grid-sidebar.html">Laptops Bags</a></li>
                            <li><a href="shop-grid-sidebar.html">Belts</a></li>
                            <li><a href="shop-grid-sidebar.html">Handbags</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="shop-grid-sidebar.html">Kids</a>
                <ul>
                    <li><a href="shop-grid-sidebar.html">Clothing</a>
                        <ul>
                            <li><a href="shop-grid-sidebar.html">T-Shirts</a></li>
                            <li><a href="shop-grid-sidebar.html">Shirts</a></li>
                            <li><a href="shop-grid-sidebar.html">Trousers</a></li>
                            <li><a href="shop-grid-sidebar.html">Sleep Wear</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-grid-sidebar.html">Accesories</a>
                        <ul>
                            <li><a href="shop-grid-sidebar.html">Backpacks</a></li>
                            <li><a href="shop-grid-sidebar.html">Wallets</a></li>
                            <li><a href="shop-grid-sidebar.html">Laptops Bags</a></li>
                            <li><a href="shop-grid-sidebar.html">Belts</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-grid-sidebar.html">Watches</a>
                        <ul>
                            <li><a href="shop-grid-sidebar.html">Fastrack</a></li>
                            <li><a href="shop-grid-sidebar.html">Casio</a></li>
                            <li><a href="shop-grid-sidebar.html">Titan</a></li>
                            <li><a href="shop-grid-sidebar.html">Maxima</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-grid-sidebar.html">Footwear</a>
                        <ul>
                            <li><a href="shop-grid-sidebar.html">Casual</a></li>
                            <li><a href="shop-grid-sidebar.html">Sports</a></li>
                            <li><a href="shop-grid-sidebar.html">Formal</a></li>
                            <li><a href="shop-grid-sidebar.html">Sandals</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-grid-sidebar.html">Computer</a>
                        <ul>
                            <li><a href="shop-grid-sidebar.html">External Hard Disk</a></li>
                            <li><a href="shop-grid-sidebar.html">Pendrives</a></li>
                            <li><a href="shop-grid-sidebar.html">Headphones</a></li>
                            <li><a href="shop-grid-sidebar.html">PC Components</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-grid-sidebar.html">Appliances</a>
                        <ul>
                            <li><a href="shop-grid-sidebar.html">Vaccum Cleaners</a></li>
                            <li><a href="shop-grid-sidebar.html">Indoor Lighting</a></li>
                            <li><a href="shop-grid-sidebar.html">Kitchen Tools</a></li>
                            <li><a href="shop-grid-sidebar.html">Water Purifier</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="shop-grid-sidebar.html">Accessories </a>
                <ul>
                    <li><a href="shop-grid-sidebar.html">Sunglasses</a>
                        <ul>
                            <li><a href="shop-grid-sidebar.html">Over-Sized</a></li>
                            <li><a href="shop-grid-sidebar.html">Wayfarer</a></li>
                            <li><a href="shop-grid-sidebar.html">Premium Brands</a></li>
                            <li><a href="shop-grid-sidebar.html">Uv Glass</a></li>
                            <li><a href="shop-grid-sidebar.html">Colores</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-grid-sidebar.html">Watches</a>
                        <ul>
                            <li><a href="shop-grid-sidebar.html">Fastrack</a></li>
                            <li><a href="shop-grid-sidebar.html">Timex</a></li>
                            <li><a href="shop-grid-sidebar.html">Titan</a></li>
                            <li><a href="shop-grid-sidebar.html">Fossil</a></li>
                            <li><a href="shop-grid-sidebar.html">Casio</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-grid-sidebar.html">Bags & Wallets</a>
                        <ul>
                            <li><a href="shop-grid-sidebar.html">Handbags</a></li>
                            <li><a href="shop-grid-sidebar.html">Sling Bags</a></li>
                            <li><a href="shop-grid-sidebar.html">Wallets & Belts</a></li>
                            <li><a href="shop-grid-sidebar.html">Totes</a></li>
                            <li><a href="shop-grid-sidebar.html">Travel Bags</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-grid-sidebar.html">Western Wear</a>
                        <ul>
                            <li><a href="shop-grid-sidebar.html">Jeans</a></li>
                            <li><a href="shop-grid-sidebar.html">Polo's & T-Shirts</a></li>
                            <li><a href="shop-grid-sidebar.html">Shirts Tops</a></li>
                            <li><a href="shop-grid-sidebar.html">Gymwear</a></li>
                            <li><a href="shop-grid-sidebar.html">Sleep Wear</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact-us.html">Contact Us</a></li>
        </ul>
        <div class="top-links">
            <ul class="links">
                <li><a title="My Account" href="my-account.html">My Account</a></li>
                <li><a title="Wishlist" href="wishlist.html">Wishlist</a></li>
                <li><a title="Checkout" href="checkout.html">Checkout</a></li>
                <li><a title="Blog" href="blog.html"><span>Blog</span></a></li>
                <li class="last"><a title="Login" href="login.html"><span>Login</span></a></li>
            </ul>
            <div class="language-box">
                <select class="selectpicker" data-width="fit">
                    <option>English</option>
                    <option>Francais</option>
                    <option>German</option>
                    <option>Español</option>
                </select>
            </div>
            <div class="currency-box">
                <form class="form-inline">
                    <div class="input-group">
                        <div class="currency-addon">
                            <select class="currency-selector">
                                <option data-symbol="$">USD</option>
                                <option data-symbol="€">EUR</option>
                                <option data-symbol="£">GBP</option>
                                <option data-symbol="¥">JPY</option>
                                <option data-symbol="$">CAD</option>
                                <option data-symbol="$">AUD</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="page">
        @include('components.customer.header')
        <!-- Main Container -->
        @yield('content')
        <!-- Main Container End -->
        @include('components.customer.footer')
    </div>

    <!-- JavaScript -->
    <script src="{{ asset('fabulous/js/jquery.min.js') }}"></script>
    <script src="{{ asset('fabulous/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fabulous/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('fabulous/js/main.js') }}"></script>
    <script src="{{ asset('fabulous/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('fabulous/js/mob-menu.js') }}"></script>
    <script src="{{ asset('fabulous/js/cloud-zoom.js') }}"></script>
    <script src="{{ asset('fabulous/js/revslider.js') }}"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
        });
    </script>
    @yield('js')
    @include('sweetalert::alert')
</body>
</html>
