<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="base-url" content="{{ url('/') }}">
        @yield('title')
        <!-- Favicons Icon -->
        {!! Html::favicon('http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico') !!}
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        {!! Html::style('assets/css/customer.min.css') !!}
        {{-- {!! Html::style('css/font-awesome.css') !!} --}}
        <!-- Google Fonts -->
        {!! Html::style('https://fonts.googleapis.com/css?family=Roboto:400,500,700') !!}
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
        {!! Html::script('assets/plugins/sweetalert/sweetalert.min.js') !!}
        {!! Html::style('assets/plugins/sweetalert/sweetalert.css') !!}



    {!! Html::script('assets/js/jquery.min.js') !!}
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.js') !!}
        @yield('css')
        @stack('styles')
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>
            window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            ]); ?>
        </script>

</head>
<body id="body">
<div style="background-color: rgb(119, 119, 119); opacity: 0.7; cursor: pointer; height: 100%; display: block; padding: 0; position: fixed;" id="fancybox-overlay"></div>
<div style="width: 1190px; height: auto; top: 20%; left: 25%; display: block; position: fixed;" id="fancybox-wrap">
    <div id="fancybox-outer">
        <div style="border-width: 10px; width: 1170px; height: auto;" id="fancybox-content">
            <div style="width:auto;height:auto;overflow: auto;position:relative;">
                <div class="product-view">
                    <div class="product-essential">
                        <form action="#" method="post" id="product_addtocart_form">
                            <div class="product-img-box col-lg-6 col-sm-6 col-xs-12">
                                <ul class="moreview" id="moreview">
                                    <li class="moreview_thumb thumb_1"> <img class="moreview_thumb_image" src="products-images/product1.jpg"> <img class="moreview_source_image" src="products-images/product2.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img style="position: absolute;" class="zoomImg" src="products-images/product3.jpg"></li>
                                    <li class="moreview_thumb thumb_2 moreview_thumb_active"> <img class="moreview_thumb_image" src="products-images/product4.jpg"> <img class="moreview_source_image" src="products-images/product4.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img style="position: absolute;" class="zoomImg" src="images/product4.html"></li>
                                    <li class="moreview_thumb thumb_3"> <img class="moreview_thumb_image" src="products-images/product5.jpg"> <img class="moreview_source_image" src="products-images/product5.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img style="position: absolute;" class="zoomImg" src="products-images/product5.jpg"></li>
                                    <li class="moreview_thumb thumb_4"> <img class="moreview_thumb_image" src="products-images/product6.jpg"> <img class="moreview_source_image" src="products-images/product6.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img style="position: absolute;" class="zoomImg" src="products-images/product6.jpg"></li>
                                    <li class="moreview_thumb thumb_5"> <img class="moreview_thumb_image" src="products-images/product7.jpg"> <img class="moreview_source_image" src="products-images/product7.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img style="position: absolute;" class="zoomImg" src="products-images/product7.jpg"></li>
                                    <li class="moreview_thumb thumb_6"> <img class="moreview_thumb_image" src="products-images/product8.jpg"> <img class="moreview_source_image" src="products-images/product8.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img style="position: absolute;" class="zoomImg" src="products-images/product8.jpg"></li>
                                </ul>
                                <div class="moreview-control"> <a style="right: 42px;" href="javascript:void(0)" class="moreview-prev"></a> <a style="right: 42px;" href="javascript:void(0)" class="moreview-next"></a> </div>
                            </div>

                            <!-- end: more-images -->

                            <div class="product-shop col-lg-6 col-sm-6 col-xs-12">
                                <div class="product-name">
                                    <h1>Waistcoat with Horizontal Stripes</h1>
                                </div>
                                <div class="ratings">
                                    <div class="rating-box">
                                        <div style="width:60%" class="rating"></div>
                                    </div>
                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
                                </div>
                                <p class="availability in-stock"><span>In Stock</span></p>
                                <div class="price-block">
                                    <div class="price-box">
                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $315.99 </span> </p>
                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $309.99 </span> </p>
                                    </div>
                                </div>
                                <div class="short-description">
                                    <h2>Quick Overview</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum... </p>
                                </div>
                                <div class="add-to-box">
                                    <div class="add-to-cart">
                                        <label for="qty">Quantity:</label>
                                        <div class="pull-left">
                                            <div class="custom pull-left">
                                                <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i></button>
                                                <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
                                            </div>
                                        </div>
                                        <button onClick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart" type="button"><span><i class="icon-basket"></i> Add to Cart</span></button>
                                    </div>
                                    <div class="email-addto-box">
                                        <ul class="add-to-links">
                                            <li> <a class="link-wishlist" href="#"><span>Add to Wishlist</span></a></li>
                                            <li><span class="separator">|</span> <a class="link-compare" href="#"><span>Add to Compare</span></a></li>
                                        </ul>
                                        <p class="email-friend"><a href="#" class=""><span>Email to Friend</span></a></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--product-view-->

            </div>
        </div>
        <a style="display: inline;" id="fancybox-close" href="index.html"></a> </div>
</div>
    @include('customers.layout.sections.header')
    {{--@include('customers.layout.sections.navbar')--}}
    @stack('nav')
    @yield('content')
    @yield('related')
    @include('customers.layout.sections.footer')
    @include('customers.layout.sections.social')
    {!! Html::script('assets/js/customer.min.js') !!}
    <script type='text/javascript'>
        jQuery(document).ready(function(){
        jQuery('#rev_slider_4').show().revolution({
        dottedOverlay: 'none',
        delay: 5000,
        startwidth: 1170,
        startheight: 580,

        hideThumbs: 200,
        thumbWidth: 200,
        thumbHeight: 50,
        thumbAmount: 2,

        navigationType: 'thumb',
        navigationArrows: 'solo',
        navigationStyle: 'round',

        touchenabled: 'on',
        onHoverStop: 'on',

        swipe_velocity: 0.7,
        swipe_min_touches: 1,
        swipe_max_touches: 1,
        drag_block_vertical: false,

        spinner: 'spinner0',
        keyboardNavigation: 'off',

        navigationHAlign: 'center',
        navigationVAlign: 'bottom',
        navigationHOffset: 0,
        navigationVOffset: 20,

        soloArrowLeftHalign: 'left',
        soloArrowLeftValign: 'center',
        soloArrowLeftHOffset: 20,
        soloArrowLeftVOffset: 0,

        soloArrowRightHalign: 'right',
        soloArrowRightValign: 'center',
        soloArrowRightHOffset: 20,
        soloArrowRightVOffset: 0,

        shadow: 0,
        fullWidth: 'on',
        fullScreen: 'off',

        stopLoop: 'off',
        stopAfterLoops: -1,
        stopAtSlide: -1,

        shuffle: 'off',

        autoHeight: 'off',
        forceFullWidth: 'on',
        fullScreenAlignForce: 'off',
        minFullScreenHeight: 0,
        hideNavDelayOnMobile: 1500,

        hideThumbsOnMobile: 'off',
        hideBulletsOnMobile: 'off',
        hideArrowsOnMobile: 'off',
        hideThumbsUnderResolution: 0,

        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        startWithSlide: 0,
        fullScreenOffsetContainer: ''
        });
        });
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    {!! Html::script('assets/js/app.js') !!}
    @stack('scripts')
</body>
</html>
