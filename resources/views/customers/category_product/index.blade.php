@extends('customers.layout.master')
@section('title')
    <title>Home</title>
@endsection
@push('nav')
    @include('customers.layout.sections.navcate')
@endpush
@push('scripts')
{!! Html::script('assets/plugins/sweetalert/sweetalert.min.js') !!}
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
                <section class="col-main col-sm-9 col-sm-push-3 wow">
                    <div class="category-title">
                        <h1>{{ \App\Models\Category::find($id)->name }}</h1>
                    </div>
                    <!-- category banner -->
                    <div class="category-description std">
                        <div class="slider-items-products">
                            <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col1">

                                    <!-- Item -->
                                    <div class="item"> <a href="#"><img alt="category-banner" src="{{ url('assets/images/category-banner-img.jpg') }}"></a>
                                        <div class="cat-img-title cat-bg cat-box">
                                            <h2 class="cat-heading">Choose your wines</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus diam arcu.</p>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- category banner -->
                    <div class="category-products">
                        <div class="toolbar">
                            <div class="col-md-3 col-md-offset-5">
                                {{--{{ $products->links() }}--}}
                            </div>
                        </div>
                        {{--@include('user.layouts.section.app_blockCategoryProduct')--}}
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
