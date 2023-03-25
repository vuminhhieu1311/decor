@extends('layouts.customer')

@section('css')
    <style>
        .pagination>.active>a,
        .pagination>.active>a:focus,
        .pagination>.active>a:hover,
        .pagination>.active>span,
        .pagination>.active>span:focus,
        .pagination>.active>span:hover {
            background-color: #FF7B54;
            border-color: #FF7B54;
        }

        .pagination>li>a,
        .pagination>li>span {
            color: #7E7E7E;
        }

        .pagination>.active>a,
        .pagination>.active>a:focus,
        .pagination>.active>a:hover,
        .pagination>.active>span,
        .pagination>.active>span:focus,
        .pagination>.active>span:hover {
            color: #fff !important;
        }

        .product-pagination nav {
            border-bottom: none;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-9 col-sm-push-3 main-inner">
            <div class="category-description std">
                <div class="slider-items-products">
                    <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col1 owl-carousel owl-theme">
                            <div class="item"> <a href="#"><img alt="New Special Collection"
                                        src="fabulous/images/new-special.jpg"></a>
                                <div class="cat-img-title cat-bg cat-box">
                                    <h2 class="cat-heading">New Special<br>
                                        Collection</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </div>
                            </div>
                            <div class="item"> <a href="#"><img alt="New Fashion"
                                        src="fabulous/images/new-fashion.jpg"></a>
                                <div class="cat-img-title cat-bg cat-box">
                                    <h2 class="cat-heading">New Fashion</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <article class="col-main">
                <div class="page-title">
                    <h2>Clothing</h2>
                </div>
                <div class="category-products">
                    <ul class="products-grid">
                        @foreach ($products as $product)
                            <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info">
                                            <a class="product-image"
                                                href="{{ route('products.detail', ['product' => $product->id]) }}">
                                                <img src="{{ asset($product->avatar_url) }}"
                                                    style="height:300px;object-fit:contain;">
                                            </a>
                                            <div class="new-label new-top-left">new</div>
                                            <div class="sale-label sale-top-right">sale</div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a
                                                    href="{{ route('products.detail', ['product' => $product->id]) }}">{{ $product->name }}</a>
                                            </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price">
                                                            <span class="price">@money($product->final_price, 'VND')</span>
                                                        </span>
                                                        @if ($product->price != $product->final_price)
                                                            <p class="old-price">
                                                                <span class="price">@money($product->price, 'VND')</span>
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="toolbar bottom">
                    <div class="text-right product-pagination">
                        {{ $products->links() }}
                    </div>
                </div>
            </article>
        </div>
        <div class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
            <aside class="sidebar">
                <div class="block block-layered-nav">
                    <div class="block-title">
                        <h3>Shop By</h3>
                    </div>
                    <div class="block-content">
                        <p class="block-subtitle">Shopping Options</p>
                        <dl id="narrow-by-list">
                            <dt class="odd">Price</dt>
                            <dd class="odd">
                                <ol>
                                    <li><a href="#"><span class="price">$0.00</span> - <span
                                                class="price">$99.99</span></a> (6) </li>
                                    <li><a href="#"><span class="price">$100.00</span> and
                                            above</a> (6) </li>
                                </ol>
                            </dd>
                            <dt class="even">Manufacturer</dt>
                            <dd class="even">
                                <ol>
                                    <li><a href="#">Kids Dresses</a> (20) </li>
                                    <li><a href="#">Unisex Clothing</a> (25) </li>
                                    <li><a href="#">Winter Wear</a> (8) </li>
                                    <li><a href="#">Garments</a> (5) </li>
                                    <li><a href="#">Undergarments</a> (2) </li>
                                </ol>
                            </dd>
                            <dt class="odd">Clothing Material</dt>
                            <dd class="odd">
                                <ol class="bag-material">
                                    <li>
                                        <div class="pretty p-icon p-smooth">
                                            <input type="checkbox" name="Material" value="Cotton" />
                                            <div class="state p-success"> <i class="icon fa fa-check"></i>
                                                <label>Cotton</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pretty p-icon p-smooth">
                                            <input type="checkbox" name="Material" value="Denim" />
                                            <div class="state p-success"> <i class="icon fa fa-check"></i>
                                                <label>Denim</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pretty p-icon p-smooth">
                                            <input type="checkbox" name="Material" value="Linen" />
                                            <div class="state p-success"> <i class="icon fa fa-check"></i>
                                                <label>Linen</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pretty p-icon p-smooth">
                                            <input type="checkbox" name="Material" value="Rayon" />
                                            <div class="state p-success"> <i class="icon fa fa-check"></i>
                                                <label>Rayon</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pretty p-icon p-smooth">
                                            <input type="checkbox" name="Material" value="Synthetic" />
                                            <div class="state p-success"> <i class="icon fa fa-check"></i>
                                                <label>Synthetic</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pretty p-icon p-smooth">
                                            <input type="checkbox" name="Material" value="Satin" />
                                            <div class="state p-success"> <i class="icon fa fa-check"></i>
                                                <label>Satin</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pretty p-icon p-smooth">
                                            <input type="checkbox" name="Material" value="Silk" />
                                            <div class="state p-success"> <i class="icon fa fa-check"></i>
                                                <label>Silk</label>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </dd>
                            <dt class="odd">Size</dt>
                            <div class="size-area">
                                <div class="size">
                                    <ul>
                                        <li><a href="#">S</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XXL</a></li>
                                    </ul>
                                </div>
                            </div>
                            <dt class="odd">Color</dt>
                            <dd class="odd">
                                <ol>
                                    <li><a href="#">Green</a> (1) </li>
                                    <li><a href="#">White</a> (5) </li>
                                    <li><a href="#">Black</a> (5) </li>
                                    <li><a href="#">Gray</a> (4) </li>
                                    <li><a href="#">Dark Gray</a> (3) </li>
                                    <li><a href="#">Blue</a> (1) </li>
                                </ol>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="block product-price-range ">
                    <div class="block-title">
                        <h3>Price</h3>
                    </div>
                    <div class="block-content">
                        <div class="slider-range">
                            <div data-label-reasult="Range:" data-min="0" data-max="500" data-unit="$"
                                class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                data-value-min="50" data-value-max="350">
                                <div class="ui-slider-range ui-widget-header ui-corner-all"
                                    style="left: 10%; width: 60%;"></div>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                    style="left: 10%;"></span><span
                                    class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                    style="left: 70%;"></span>
                            </div>
                            <div class="amount-range-price">Range: $10 - $550</div>
                            <ul class="check-box-list">
                                <li>
                                    <div class="pretty p-icon p-smooth">
                                        <input type="checkbox" name="cc" value="p1" />
                                        <div class="state p-success"> <i class="icon fa fa-check"></i>
                                            <label for="p1"> $20 - $100<span class="count">(5)</span> </label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="pretty p-icon p-smooth">
                                        <input type="checkbox" name="cc" value="p2" />
                                        <div class="state p-success"> <i class="icon fa fa-check"></i>
                                            <label for="p1"> $100 - $300<span class="count">(12)</span> </label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="pretty p-icon p-smooth">
                                        <input type="checkbox" name="cc" value="p3" />
                                        <div class="state p-success"> <i class="icon fa fa-check"></i>
                                            <label for="p1"> $300 - $500<span class="count">(15)</span> </label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="block block-cart">
                    <div class="block-title ">
                        <h3>My Cart</h3>
                    </div>
                    <div class="block-content">
                        <div class="summary">
                            <p class="amount">There are <a href="shopping_cart.html">3 items</a> in your
                                cart.</p>
                            <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span
                                    class="price">$227.99</span> </p>
                        </div>
                        <div class="ajax-checkout">
                            <button class="button button-checkout" title="Submit"
                                type="submit"><span>Checkout</span></button>
                        </div>
                        <p class="block-subtitle">Recently added item(s) </p>
                        <ul>
                            <li class="item"> <a href="shopping_cart.html" title="Product Title Here"
                                    class="product-image"><img src="fabulous/images/products/product-fashion-12.jpg"
                                        alt="Product Title Here"></a>
                                <div class="product-details">
                                    <div class="access"> <a href="shopping_cart.html" title="Remove This Item"
                                            class="jtv-btn-remove"> <span class="icon"></span> Remove </a> </div>
                                    <p class="product-name"> <a href="shopping_cart.html">Product Title
                                            Here</a> </p>
                                    <strong>1</strong> x <span class="price">$99.99</span>
                                </div>
                            </li>
                            <li class="item"> <a href="shopping_cart.html" title="Product Title Here"
                                    class="product-image"><img src="fabulous/images/products/product-fashion-11.jpg"
                                        alt="Product Title Here"></a>
                                <div class="product-details">
                                    <div class="access"> <a href="shopping_cart.html" title="Remove This Item"
                                            class="jtv-btn-remove"> <span class="icon"></span> Remove </a> </div>
                                    <p class="product-name"> <a href="shopping_cart.html">Product Title
                                            Here</a> </p>
                                    <strong>1</strong> x <span class="price">$88.00</span>
                                </div>
                            </li>
                            <li class="item"> <a href="shopping_cart.html" title="Product Title Here"
                                    class="product-image"><img src="fabulous/images/products/product-fashion-10.jpg"
                                        alt="Product Title Here"></a>
                                <div class="product-details">
                                    <div class="access"> <a href="shopping_cart.html" title="Remove This Item"
                                            class="jtv-btn-remove"> <span class="icon"></span> Remove </a> </div>
                                    <p class="product-name"> <a href="shopping_cart.html">Product Title
                                            Here</a> </p>
                                    <strong>1</strong> x <span class="price">$98.00</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="block block-compare">
                    <div class="block-title ">Compare Products (2)</div>
                    <div class="block-content">
                        <ol id="compare-items">
                            <li class="item">
                                <input type="hidden" value="2173" class="compare-item-id">
                                <a class="jtv-btn-remove" title="Remove This Item" href="#"></a>
                                <a href="#" class="product-name"><i class="fa fa-angle-right"></i>Product Title
                                    Here</a>
                            </li>
                            <li class="item">
                                <input type="hidden" value="2174" class="compare-item-id">
                                <a class="jtv-btn-remove" title="Remove This Item" href="#"></a>
                                <a href="#" class="product-name"><i class="fa fa-angle-right"></i>Product Title
                                    Here</a>
                            </li>
                            <li class="item">
                                <input type="hidden" value="2175" class="compare-item-id">
                                <a class="jtv-btn-remove" title="Remove This Item" href="#"></a>
                                <a href="#" class="product-name"><i class="fa fa-angle-right"></i>Product Title
                                    Here</a>
                            </li>
                        </ol>
                        <div class="ajax-checkout">
                            <button type="submit" title="Submit"
                                class="button button-compare"><span>Compare</span></button>
                            <button type="submit" title="Submit" class="button button-clear"><span>Clear</span></button>
                        </div>
                    </div>
                </div>
                <div class="custom-slider">
                    <div>
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active"><img src="fabulous/images/slide3.jpg" alt="New Arrivals">
                                    <div class="carousel-caption">
                                        <h3><a title=" Sample Product" href="#">New Arrivals</a>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="item"><img src="fabulous/images/slide1.jpg" alt="Top Fashion">
                                    <div class="carousel-caption">
                                        <h3><a title=" Sample Product" href="#">Top Fashion</a>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="item"><img src="fabulous/images/slide2.jpg" alt="Mid Season">
                                    <div class="carousel-caption">
                                        <h3><a title=" Sample Product" href="#">Mid Season</a>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#" data-slide="prev"> <span
                                    class="sr-only">Previous</span></a> <a class="right carousel-control" href="#"
                                data-slide="next"> <span class="sr-only">Next</span></a>
                        </div>
                    </div>
                </div>
                <div class="block block-list block-viewed">
                    <div class="block-title">
                        <h3>Recently Viewed</h3>
                    </div>
                    <div class="block-content">
                        <ol id="recently-viewed-items">
                            <li class="item odd">
                                <p class="product-name"><a href="#"><i class="fa fa-angle-right"></i>Product Title
                                        Here</a></p>
                            </li>
                            <li class="item even">
                                <p class="product-name"><a href="#"><i class="fa fa-angle-right"></i>Product Title
                                        Here</a></p>
                            </li>
                            <li class="item last odd">
                                <p class="product-name"><a href="#"><i class="fa fa-angle-right"></i>Product Title
                                        Here</a></p>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="block block-poll">
                    <div class="block-title">
                        <h3>Community Poll</h3>
                    </div>
                    <form id="pollForm" action="#" method="post"
                        onSubmit="return validatePollAnswerIsSelected();">
                        <div class="block-content">
                            <p class="block-subtitle">What is your favorite color</p>
                            <ul id="poll-answers">
                                <li class="odd">
                                    <input type="radio" name="vote" class="radio poll_vote" id="vote_1"
                                        value="1">
                                    <span class="label">
                                        <label for="vote_1">Green</label>
                                    </span>
                                </li>
                                <li class="even">
                                    <input type="radio" name="vote" class="radio poll_vote" id="vote_2"
                                        value="2">
                                    <span class="label">
                                        <label for="vote_2">Red</label>
                                    </span>
                                </li>
                                <li class="odd">
                                    <input type="radio" name="vote" class="radio poll_vote" id="vote_3"
                                        value="3">
                                    <span class="label">
                                        <label for="vote_3">Black</label>
                                    </span>
                                </li>
                                <li class="last even">
                                    <input type="radio" name="vote" class="radio poll_vote" id="vote_4"
                                        value="4">
                                    <span class="label">
                                        <label for="vote_4">Pink</label>
                                    </span>
                                </li>
                            </ul>
                            <div class="actions">
                                <button type="submit" title="Vote"
                                    class="button button-vote"><span>Vote</span></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="block block-tags">
                    <div class="block-title">
                        <h3>Popular Tags</h3>
                    </div>
                    <div class="block-content">
                        <div class="tags-list"> <a href="#">Jwellery</a> <a href="#">Bag</a> <a
                                href="#">Clothing</a> <a href="#">Shoes</a> <a href="#">Watches</a> <a
                                href="#">Beauty</a> <a href="#">Accessories</a> </div>
                        <div class="actions"> <a href="#" class="view-all">View All Tags</a>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('resources/js/customer/home.js') }}"></script>
@endsection
