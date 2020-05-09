@extends('layouts.mainmaster')
@section('content')

        <!-- Start main Content -->
        <div class="maincontent bg--white pt--80 pb--55">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-9 col-12">
        				<div class="wn__single__product">
        					<div class="row">
        						<div class="col-lg-6 col-12" id="single-pic">
        							<div class="wn__fotorama__wrapper">
	        							<div class="fotorama wn__fotorama__action" data-nav="thumbs">
                                            @foreach($product->Image()->get() as $Img)
                                            <a href="1.jpg"><img src="{{asset('/') . $Img->path}}" alt=""></a>
                                            @endforeach
	        							</div>
        							</div>
        						</div>
        						<div class="col-lg-6 col-12">
        							<div class="product__info__main">
        								<h1>{{$product['name']}}</h1>
        								<div class="product-reviews-summary d-flex">
        									<ul class="rating-summary d-flex">
    											<li><i class="zmdi zmdi-star-outline"></i></li>
    											<li><i class="zmdi zmdi-star-outline"></i></li>
    											<li><i class="zmdi zmdi-star-outline"></i></li>
    											<li class="off"><i class="zmdi zmdi-star-outline"></i></li>
    											<li class="off"><i class="zmdi zmdi-star-outline"></i></li>
        									</ul>
        								</div>
        								<div class="price-box">
        									<span>{{number_format($product['price'])}} تومان</span>
        								</div>
										<div class="product__overview">
        									<p>{{$product['description']}}</p>
        									<p> </p>
        								</div>
        								<div class="box-tocart d-flex">
        									{{-- <span>Qty</span> --}}
        									{{-- <input id="qty" class="input-text qty" name="qty" min="1" value="1" title="Qty" type="number"> --}}
        									<div class="addtocart__actions">
        										<button data="{{$product['id']}}" class="tocart addTCart" type="submit" title="Add to Cart">افزودن به سبد خرید</button>
        									</div>
											{{-- <div class="product-addto-links clearfix">
												<a class="wishlist" href="#"></a>
												<a class="compare" href="#"></a>
											</div> --}}
        								</div>
										{{-- <div class="product_meta">
											<span class="posted_in">Categories:
												<a href="#">Adventure</a>,
												<a href="#">Kids' Music </a>
											</span>
										</div>
										<div class="product-share">
											<ul>
												<li class="categories-title">Share :</li>
												<li>
													<a href="#">
														<i class="icon-social-twitter icons"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="icon-social-tumblr icons"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="icon-social-facebook icons"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="icon-social-linkedin icons"></i>
													</a>
												</li>
											</ul>
										</div> --}}
                                    </div>
        						</div>
        					</div>
                        </div>
        				<div class="product__info__detailed">
							<div class="pro_details_nav nav justify-content-start" role="tablist">
	                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-details" role="tab">اطلاعات تکمیلی</a>
	                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-review" role="tab">دیدگاه ها</a>
	                        </div>
	                        <div class="tab__container">
	                        	<!-- Start Single Tab Content -->
	                        	<div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
									<div class="description__attribute">
										{{-- <p>Ideal for cold-weather training or work outdoors, the Chaz Hoodie promises superior warmth with every wear. Thick material blocks out the wind as ribbed cuffs and bottom band seal in body heat.Ideal for cold-weather training or work outdoors, the Chaz Hoodie promises superior warmth with every wear. Thick material blocks out the wind as ribbed cuffs and bottom band seal in body heat.Ideal for cold-weather training or work outdoors, the Chaz Hoodie promises superior warmth with every wear. Thick material blocks out the wind as ribbed cuffs and bottom band seal in body heat.Ideal for cold-weather training or work outdoors, the Chaz Hoodie promises superior warmth with every wear. Thick material blocks out the wind as ribbed cuffs and bottom band seal in body heat.</p>
										<ul>
											<li>• Two-tone gray heather hoodie.</li>
											<li>• Drawstring-adjustable hood. </li>
											<li>• Machine wash/dry.</li>
                                        </ul> --}}
                                        <p>{{$product['description']}}</p>
									</div>
	                        	</div>
	                        	<!-- End Single Tab Content -->
	                        	<!-- Start Single Tab Content -->
	                        	<div class="pro__tab_label tab-pane fade" id="nav-review" role="tabpanel">
									{{-- <div class="review__attribute">
										<h1>Customer Reviews</h1>
										<h2>Hastech</h2>
										<div class="review__ratings__type d-flex">
											<div class="review-ratings">
												<div class="rating-summary d-flex">
													<span>Quality</span>
			    									<ul class="rating d-flex">
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
			    									</ul>
												</div>

												<div class="rating-summary d-flex">
													<span>Price</span>
			    									<ul class="rating d-flex">
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
			    									</ul>
												</div>
												<div class="rating-summary d-flex">
													<span>value</span>
			    									<ul class="rating d-flex">
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
			    									</ul>
												</div>
											</div>
											<div class="review-content">
												<p>Hastech</p>
												<p>Review by Hastech</p>
												<p>Posted on 11/6/2018</p>
											</div>
										</div>
									</div> --}}
									<div class="review-fieldset">
										{{-- <h2>You're reviewing:</h2>
										<h3>{{$product['name']}}</h3> --}}
										{{-- <div class="review-field-ratings">
											<div class="product-review-table">
												<div class="review-field-rating d-flex">
													<span>Quality</span>
													<ul class="rating d-flex">
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
			    									</ul>
												</div>
												<div class="review-field-rating d-flex">
													<span>Price</span>
													<ul class="rating d-flex">
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
			    									</ul>
												</div>
												<div class="review-field-rating d-flex">
													<span>Value</span>
													<ul class="rating d-flex">
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
			    									</ul>
												</div>
											</div>
                                        </div> --}}

                                        <h5 class="pb--30">نظر شما در مورد این آموزش ({{$product['name']}}) چیست؟</h5>
										<div class="review_form_field">
                                            <form  action="{{'/insertComment'}}" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" class="form-control " name="id" value="{{$product['id']}}" >
											{{-- <div class="input__box">
												<span>نام شما</span>
												<input id="nickname_field" type="text" name="nickname">
											</div> --}}
											{{-- <div class="input__box">
												<span>Summary</span>
												<input id="summery_field" type="text" name="summery">
											</div> --}}
											<div class="input__box">
												<span>متن نظر</span>
												<textarea name="review"></textarea>
											</div>
											<div class="review-form-actions">
                                                <button type="submit">ثبت نظر</button>
                                                {{-- <input type="submit" value="ثبت نظر"> --}}
                                            </div>
                                            </form>
                                        </div>
                                        {{-- <div class="form-output pt--30 text-success">
                                            <p class="form-messege">
                                        </div> --}}
									</div>
	                        	</div>
	                        	<!-- End Single Tab Content -->
	                        </div>
                        </div>
                        @if (\Session::has('success'))
                        <div class="pt--30 text-success">
                            <p>{{ \Session::get('success')}}</p>
                        </div>
                        @endif
						<div class="wn__related__product pt--100 pb--50">
							<div class="section__title text-center">
								<h2 class="title__be--2">آموزش های مرتبط</h2>
							</div>
							<div class="row mt--60">
								<div class="productcategory__slide--2 arrows_style owl-carousel owl-theme">
                                    <!-- Start Single Product -->
                                    @foreach ($relatedProducts as $rProducts )
									<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
                                            @foreach($rProducts->Image()->get() as $Img)
                                            <a class="first__img" href="/single-product/{{$rProducts->id}}"><img src="{{asset('/') . $Img->path}}" alt="product image"></a>
                                            @endforeach
                                            {{-- <div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div> --}}
										</div>
										<div class="product__content content--center">
											<h4><a href="{{'/single-product'}}">{{$rProducts->name}}</a></h4>
											<ul class="prize d-flex">
												<li>{{$rProducts->price}}</li>
												{{-- <li class="old_prize">$35.00</li> --}}
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
                                                        <li><a class="cart addTCart" data="{{$rProducts->id}}"><i>افزودن به سبد خرید</i></a></li>
														<li><a class="wishlist" href="{{'/wishlist'}}"><i>افزودن به علاقه مندی ها</i></a></li>
														{{-- <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li> --}}
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
							</div>
						</div>
						<div class="wn__related__product">
							<div class="section__title text-center">
								<h2 class="title__be--2">آموزش های پرفروش</h2>
							</div>
							<div class="row mt--60">
								<div class="productcategory__slide--2 arrows_style owl-carousel owl-theme">
									<!-- Start Single Product -->
									<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="{{'/single-product'}}"><img src="{{asset('assets/images/books/1.jpg')}}" alt="product image"></a>
											<a class="second__img animation1" href="{{'/single-product'}}"><img src="{{asset('assets/images/books/2.jpg')}}" alt="product image"></a>
											{{-- <div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div> --}}
										</div>
										<div class="product__content content--center">
											<h4><a href="{{'/single-product'}}">robin parrish</a></h4>
											<ul class="prize d-flex">
												<li>$35.00</li>
												{{-- <li class="old_prize">$35.00</li> --}}
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
                                                        <li><a class="cart addTCart" data="{{$product->id}}"><i>افزودن به سبد خرید</i></a></li>
														<li><a class="wishlist" href="{{'/wishlist'}}"><i>افزودن به علاقه مندی ها</i></a></li>
														{{-- <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li> --}}
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
									<!-- End Single Product -->
								</div>
							</div>
						</div>
        			</div>
        			<div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
        				<div class="shop__sidebar">
        					<aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title">دسته بندی محصولات</h3>
        						<ul>
                                    {{-- <li><a href="{{'/category/1'}}">برنامه نویسی <span>(3)</span></a></li> --}}
        							<li><a href="{{'/category/1'}}">برنامه نویسی </a></li>
        							<li><a href="{{'/category/2'}}">علوم و مهندسی کامپیوتر </a></li>
        							<li><a href="{{'/category/3'}}">هوش مصنوعی </a></li>
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
        						                        <span>قیمت:</span><input type="text" id="amount" readonly="">
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
        					{{-- <aside class="wedget__categories poroduct--compare">
        						<h3 class="wedget__title">Compare</h3>
        						<ul>
        							<li><a href="#">x</a><a href="#">Condimentum posuere</a></li>
        							<li><a href="#">x</a><a href="#">Condimentum posuere</a></li>
        							<li><a href="#">x</a><a href="#">Dignissim venenatis</a></li>
        						</ul>
        					</aside> --}}
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
        		</div>
        	</div>
        </div>
        <!-- End main Content -->
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
		                        </div><!-- .product-info -->
		                    </div><!-- .modal-product -->
		                </div><!-- .modal-body -->
		            </div><!-- .modal-content -->
		        </div><!-- .modal-dialog -->
		    </div>
		    <!-- END Modal -->
		</div>
        <!-- END QUICKVIEW PRODUCT -->
        @endsection
