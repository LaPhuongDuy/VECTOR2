@extends('customers.layout.master')
@section('title')
    <title>Home</title>
@endsection
@push('nav')
    @include('customers.layout.sections.navcate')
@endpush
@push('scripts')
{!! Html::script('assets/plugins/sweetalert/sweetalert.min.js') !!}

{!! Html::script('assets/js/jquery.pjax.js') !!}
<script type="text/javascript">
    $(function(){
        // pjax
        $(document).pjax('.pages ul li a', '#productGrid')
    })
    $(document).ready(function(){

        // does current browser support PJAX
        if ($.support.pjax) {
            $.pjax.defaults.timeout = 2000; // time in milliseconds
        }

    });
</script>
@endpush
@push('styles')
{!! Html::style('assets/plugins/toastr/toastr.min.css') !!}
@endpush
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <ul>
                    <li class="home"> <a href="index.html" title="Go to Home Page">Home</a><span>—›</span></li>
                    <li class=""> <a href="grid.html" title="Go to Home Page">Women</a><span>—›</span></li>
                    <li class="category13"><strong>Tops &amp; Tees</strong></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="main-container col2-left-layout">
        <div class="main container">
            <div class="row">
                <section class="col-main col-sm-9 col-sm-push-3 wow" id="categoryPage">
                    <div class="category-title">
                        <h1>Tops &amp; Tees</h1>
                    </div>
                    <!-- category banner -->
                    <div class="category-description std">
                        <div class="slider-items-products">
                            <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col1">

                                    <!-- Item -->
                                    <div class="item"> <a href="#"><img alt="category-banner" src="{{ url('assets/images/category-banner-img.jpg') }}"></a>
                                        <div class="cat-img-title cat-bg cat-box">
                                            <h2 class="cat-heading">New Fashion 2015</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus diam arcu.</p>
                                        </div>
                                    </div>
                                    <!-- End Item -->

                                    <!-- Item -->
                                    <div class="item"> <a href="#x"><img alt="category-banner" src="{{ url('assets/images/category-banner-img1.jpg') }}"></a> </div>
                                    <!-- End Item -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- category banner -->
                    <div class="category-products"  id="productGrid">
                        <div class="toolbar">
                            <div class="sorter">
                                <div class="view-mode"> <span title="Grid" class="button button-active button-grid">Grid</span><a href="list.html" title="List" class="button button-list">List</a> </div>
                            </div>
                            <div id="sort-by">
                                <label class="left">Sort By: </label>
                                <ul>
                                    <li><a href="#">Position<span class="right-arrow"></span></a>
                                        <ul>
                                            <li><a href="#">Name</a></li>
                                            <li><a href="#">Price</a></li>
                                            <li><a href="#">Position</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <a class="button-asc left" href="#" title="Set Descending Direction"><span style="color:#999;font-size:11px;" class="glyphicon glyphicon-arrow-up"></span></a> </div>
                            <div class="pager" style="width: 60%">
                                <div id="limiter">
                                    <label>View: </label>
                                    <ul>
                                        <li><a href="#">15<span class="right-arrow"></span></a>
                                            <ul>
                                                <li><a href="#">20</a></li>
                                                <li><a href="#">30</a></li>
                                                <li><a href="#">35</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pages" style="text-align: center">
                                    <label>Page:</label>
                                    {{ $products->links() }}
                                </div>
                            </div>
                        </div>
                        <ul class="products-grid">
                            @each('customers.category_product.item.product', $products, 'product')
                        </ul>
                    </div>
                </section>
                <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow">
                    <div class="side-nav-categories">
                        <div class="block-title"> Categories </div>
                        <div class="box-content box-category">
                            <ul>
                                @include('customers.category_product.component.aside_category',['categories' => $categoriesMenu])
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
