@extends('layouts.mainmaster')
@section('content')

        <!-- Start Shop Page -->
        <div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
        				<div class="shop__sidebar">
        					<aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title">دسته بندی محصولات</h3>
        						<ul>
                                    {{-- <li><a href="{{'/category/1'}}">برنامه نویسی <span>(3)</span></a></li> --}}
        							<li><a href="{{'/category/1'}}"> برنامه نویسی </a></li>
        							<li><a href="{{'/category/2'}}"> علوم و مهندسی کامپیوتر </a></li>
        							<li><a href="{{'/category/3'}}"> هوش مصنوعی </a></li>
        						</ul>
        					</aside>
        					<aside class="wedget__categories pro--range">
        						<h3 class="wedget__title">فیلتر بر اساس قیمت</h3>
        						<div class="content-shopby">
        						    <div class="price_filter s-filter clear">
        						        <form action="#" method="GET">
        						            <div id="slider-range"></div>
        						            <div class="slider__range--output">
        						                <div class="price__output--wrap">
        						                    <div class="price--output">
        						                        <span>قیمت :</span><input type="text" id="amount" readonly="">
        						                    </div>
        						                    <div class="price--filter">
        						                        <a href="#">فیلتر</a>
        						                    </div>
        						                </div>
        						            </div>
        						        </form>
        						    </div>
        						</div>
        					</aside>
        					<aside class="wedget__categories poroduct--tag">
        						<h3 class="wedget__title">برچسب محصولات</h3>
        						<ul>
        							<li><a href="{{'/tag/1'}}">مبانی برنامه نویسی</a></li>
                                    <li><a href="{{'/tag/2'}}">برنامه نویسی وب</a></li>
                                    <li><a href="{{'/tag/3'}}">برنامه نویسی موبایل</a></li>
        							<li><a href="{{'/tag/4'}}">هوش مصنوعی</a></li>
        						</ul>
        					</aside>
        					{{-- <aside class="wedget__categories sidebar--banner">
								<img src="{{asset('assets/images/others/banner_left.jpg')}}" alt="banner images">
								<div class="text">
									<h2>new products</h2>
									<h6>save up to <br> <strong>40%</strong>off</h6>
								</div>
        					</aside> --}}
        				</div>
        			</div>
        			<div class="col-lg-9 col-12 order-1 order-lg-2">
        				<div class="row">
        					<div class="col-lg-12">
								<div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
									<div class="shop__list nav justify-content-center" role="tablist">
			                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i class="fa fa-th"></i></a>
			                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i class="fa fa-list"></i></a>
			                        </div>
			                        <p>نمایش {{$resultNumber}} نتیجه</p>
			                        <div class="orderby__wrapper">
			                        	<span>مرتب شده بر اساس</span>
			                        	<select class="shot__byselect">
			                        		<option>مرتب سازی پیش فرض</option>
			                        		<option>جدیدترین ها</option>
			                        		<option>محبوب ترین ها</option>
			                        		<option>پرفروش ترین ها</option>
			                        	</select>
			                        </div>
		                        </div>
        					</div>
        				</div>
        				<div class="tab__container">
	        				<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
	        					<div class="row">
                                    <!-- Start Single Product -->
                                    @if ($resultNumber==0)
                                    <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
                                       <h6 class="ptb--30 text-danger"> هیچ نتیجه ای یافت نشد. </h6>
                                    </div>
                                    @endif
                                    @foreach ($products as $product)
		        					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12" data-product-id="{{$product->id}}">
			        					<div class="product__thumb">
                                            @foreach($product->Image()->get() as $Img)
											<a class="first__img js-click-product" href="/single-product/{{$product->id}}"><img src="{{asset('/') . $Img->path}}" alt="product image"></a>
                                            {{-- <a class="second__img animation1 js-click-product" href="/single-product/{{$product->id}}"><img src="{{asset('/') . $Img->path}}" alt="product image"></a> --}}
                                            @endforeach
											{{-- <div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div> --}}
										</div>
										<div class="product__content content--center">
											<h4><a class="js-click-product" href="/single-product/{{$product->id}}">{{$product->name}}</a></h4>
											<ul class="prize d-flex">
												<li>{{number_format($product->price)}} تومان</li>
												{{-- <li class="old_prize">$35.00</li> --}}
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart addTCart" data="{{$product->id}}"><i>افزودن به سبد خرید</i></a></li>
														<li><a class="wishlist" href="/add-to-wishlist/{{$product->id}}"><i>افزودن به علاقه مندی ها</i></a></li>
														{{-- <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li> --}}
														{{-- <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li> --}}
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
                                    </div>
                                    @endforeach
		        					<!-- End Single Product -->
                                </div>
                                {{-- pagination --}}
                                <div style="margin:65px 200px 10px;">{{ $products->links() }}</div>
	        				</div>
	        				<div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
	        					<div class="list__view__wrapper">
                                    <!-- Start Single Product -->
                                    @foreach ($products as $product)
	        						<div class="list__view mt--40">
	        							<div class="thumb">
                                            @foreach($product->Image()->get() as $Img)
	        								<a class="first__img" href="/single-product/{{$product->id}}"><img src="{{asset('/') . $Img->path}}" alt="product images"></a>
                                            @endforeach
                                        </div>
	        							<div class="content">
	        								<h2><a href="/single-product/{{$product->id}}">{{$product->name}}</a></h2>
	        								<ul class="rating d-flex">
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        								</ul>
	        								<ul class="prize__box">
	        									<li>{{number_format($product->price)}} تومان</li>
	        									{{-- <li class="old__prize">$220.00</li> --}}
	        								</ul>
	        								<p>{{$product->description}}</p>
	        								<ul class="cart__action d-flex">
                                                <li class="cart"><a class="addTCart" data="{{$product->id}}">افزودن به سبد خرید</a></li>
                                                <li class="wishlist"><a href="/add-to-wishlist/{{$product->id}}"></a></li>
	        									{{-- <li class="wishlist"><a href="cart.html"></a></li>
	        									<li class="compare"><a href="cart.html"></a></li> --}}
	        								</ul>

	        							</div>
                                    </div>
                                    @endforeach
	        						<!-- End Single Product -->
	        						<!-- End Single Product -->
                                </div>
                                {{-- pagination --}}
                                <div style="margin:65px 200px 10px;">{{ $products->links() }}</div>
                            </div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End Shop Page -->
@stop
@section('quickview-product')
		<!-- QUICKVIEW PRODUCT -->
		<div id="quickview-wrapper">
		    <!-- Modal -->
		    <div class="modal fade" id="productmodal" tabindex="-1" role="dialog">
		        <div class="modal-dialog modal__container" role="document">
		            <div class="modal-content">
		                <div class="modal-header modal__header">
		                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                </div>
		                <div class="modal-body">
		                    <div class="modal-product">
		                        <!-- Start product images -->
		                        <div class="product-images">
		                            <div class="main-image images">
		                                <img alt="big images" src="{{asset('assets/images/product/big-img/1.jpg')}}">
		                            </div>
		                        </div>
		                        <!-- end product images -->
		                        <div class="product-info">
		                            <h1>Simple Fabric Bags</h1>
		                            <div class="rating__and__review">
		                                <ul class="rating">
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                </ul>
		                                <div class="review">
		                                    <a href="#">4 customer reviews</a>
		                                </div>
		                            </div>
		                            <div class="price-box-3">
		                                <div class="s-price-box">
		                                    <span class="new-price">$17.20</span>
		                                    <span class="old-price">$45.00</span>
		                                </div>
		                            </div>
		                            <div class="quick-desc">
		                                Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern look.
		                            </div>
		                            <div class="select__color">
		                                <h2>Select color</h2>
		                                <ul class="color__list">
		                                    <li class="red"><a title="Red" href="#">Red</a></li>
		                                    <li class="gold"><a title="Gold" href="#">Gold</a></li>
		                                    <li class="orange"><a title="Orange" href="#">Orange</a></li>
		                                    <li class="orange"><a title="Orange" href="#">Orange</a></li>
		                                </ul>
		                            </div>
		                            <div class="select__size">
		                                <h2>Select size</h2>
		                                <ul class="color__list">
		                                    <li class="l__size"><a title="L" href="#">L</a></li>
		                                    <li class="m__size"><a title="M" href="#">M</a></li>
		                                    <li class="s__size"><a title="S" href="#">S</a></li>
		                                    <li class="xl__size"><a title="XL" href="#">XL</a></li>
		                                    <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
		                                </ul>
		                            </div>
		                            <div class="social-sharing">
		                                <div class="widget widget_socialsharing_widget">
		                                    <h3 class="widget-title-modal">Share this product</h3>
		                                    <ul class="social__net social__net--2 d-flex justify-content-start">
		                                        <li class="facebook"><a href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
		                                        <li class="linkedin"><a href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
		                                        <li class="pinterest"><a href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
		                                        <li class="tumblr"><a href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
		                                    </ul>
		                                </div>
		                            </div>
		                            <div class="addtocart-btn">
		                                <a href="#">Add to cart</a>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- END QUICKVIEW PRODUCT -->
@endsection
