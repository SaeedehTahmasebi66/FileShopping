        <!-- Header -->
		<header id="wn__header" class="header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
							<a href="{{'/index'}}">
								<img src="{{asset('assets/images/logo/logo.png')}}" alt="logo images">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
                                <li class="drop with--one--item"><a href="{{'/index'}}">خانه</a></li>
                                <li class="drop"><a href="#">دسته بندی محصولات</a>
									<div class="megamenu dropdown">
										<ul class="item item01">
											<li class="label2"><a href="{{'/category/1'}}">برنامه نویسی</a>
												<ul>
													{{-- <li><a href="{{route('shop-grid')}}">برنامه نویسی وب</a></li>
													<li><a href="{{route('shop-grid')}}">برنامه نویسی اندروید</a></li> --}}
												</ul>
											</li>
											<li><a href="{{'/category/2'}}">علوم و مهندسی کامپوتر</a></li>
                                            <li><a href="{{'/category/3'}}">هوش مصنوعی</a></li>
                                            <li><a href="{{'/shop-grid'}}">همه محصولات</a></li>
										</ul>
									</div>
                                </li>
                                <li class="drop with--one--item"><a href="{{'/about'}}">درباره ما</a></li>
                                <li class="drop with--one--item"><a href="{{'/contact'}}">تماس با ما</a></li>
								{{-- <li class="drop"><a href="{{route('shop-grid')}}">نرم افزار</a>
									<div class="megamenu mega03">
										<ul class="item item03">
											<li class="title">نرم افراز</li>
											<li><a href="{{route('shop-grid')}}">آفیس</a></li>
                                            <li><a href="{{route('shop-grid')}}">ابزار پی دی اف</a></li>
                                            <li><a href="{{route('shop-grid')}}">ابزار دسکتاپ</a></li>
											<li><a href="{{route('shop-grid')}}">ابزار رایت</a></li>
											<li><a href="{{route('shop-grid')}}">ابزار ریستریج</a></li>
                                            <li><a href="{{route('shop-grid')}}">ابزار سه بعدی سازی</a></li>
                                            <li><a href="{{route('shop-grid')}}">ابزار فلش</a></li>
											<li><a href="{{route('shop-grid')}}">بازیابی اطلاعات</a></li>
											<li><a href="{{route('shop-grid')}}">برنامه نویسی</a></li>
											<li><a href="{{route('shop-grid')}}">بهینه ساز ویندوز</li>
										</ul>
										<ul class="item item03">
											<li class="title">اینترنت</li>
											<li><a href="{{route('shop-grid')}}">مدیریت دانلود</a></li>
											<li><a href="{{route('shop-grid')}}">ابزار اینترنت</a></li>
											<li><a href="{{route('shop-grid')}}">مرورگر وب</a></li>
											<li><a href="{{route('shop-grid')}}">کنترل از راه دور</a></li>
											<li><a href="{{route('shop-grid')}}">مدیریت اف تی پی</a></li>
                                            <li><a href="{{route('shop-grid')}}">ابزار شبکه</a></li>
                                            <li><a href="{{route('shop-grid')}}">سرور</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">مالتی مدیا</li>
											<li><a href="{{route('shop-grid')}}">پلیر موزیک و فیلم</a></li>
											<li><a href="{{route('shop-grid')}}">نمایش فیلم</a></li>
											<li><a href="{{route('shop-grid')}}">پخش صوت</a></li>
											<li><a href="{{route('shop-grid')}}">ویرایشگر فیلم</a></li>
                                            <li><a href="{{route('shop-grid')}}">ویرایشگر صوت</a></li>
                                            <li><a href="{{route('shop-grid')}}">مبدل صوتی و تصویری</a></li>
                                            <li><a href="{{route('shop-grid')}}">کدکهای صوتیو تصویری</a></li>
                                            <li><a href="{{route('shop-grid')}}">تصویربرداری از دسکتاپ</a></li>
                                        </ul>
                                        <ul class="item item03">
											<li class="title">امنیتی</li>
											<li><a href="{{route('shop-grid')}}">ابزار امنیتی</a></li>
                                            <li><a href="{{route('shop-grid')}}">آنتی ویروس</a></li>
                                            <li><a href="{{route('shop-grid')}}">فایروال</a></li>
                                            <li><a href="{{route('shop-grid')}}">ضدهک و جاسوسی</a></li>
                                            <li><a href="{{route('shop-grid')}}">حذف و پاکسازی اطلاعات</a></li>

										</ul>
									</div>
								</li>
								<li class="drop"><a href="shop-grid.html">سیستم عامل</a>
									<div class="megamenu mega03">
										<ul class="item item03">
											<li class="title">ویندوز</li>
											<li><a href="{{route('shop-grid')}}">ویندوز 10</a></li>
											<li><a href="{{route('shop-grid')}}">ویندوز 8.1</a></li>
											<li><a href="{{route('shop-grid')}}">ویندوز 7</a></li>
											<li><a href="{{route('shop-grid')}}">ویندوز xp</a></li>
											<li><a href="{{route('shop-grid')}}">ویندوز Server</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">سایر سیستم عامل ها</li>
											<li><a href="{{route('shop-grid')}}">لینوکس</a></li>
											<li><a href="{{route('shop-grid')}}">مکینتاش</a></li>
                                            <li><a href="{{route('shop-grid')}}">اندروید</a></li>
                                        </ul>
										<ul class="item item03">
											<li class="title">سایر بخش ها</li>
											<li><a href="{{route('shop-grid')}}"></a></li>
											<li><a href="{{route('shop-grid')}}">مجازی سازی</a></li>
											<li><a href="{{route('shop-grid')}}">آپدیت ویندوز</a></li>
											<li><a href="{{route('shop-grid')}}">فعال سازی ویندوز و آفیس</a></li>
										</ul>
									</div>
								</li>
								<li class="drop"><a href="{{route('shop-grid')}}">موبایل</a>
									<div class="megamenu mega02">
										<ul class="item item02">
											<li class="title">نرم افزار</li>
											<li><a href="{{route('shop-grid')}}">برنامه های کاربردی</a></li>
											<li><a href="{{route('shop-grid')}}">مدیریت اپلیکیشن ها</a></li>
											<li><a href="{{route('shop-grid')}}"></a></li>
											<li><a href="{{route('shop-grid')}}">مدیریت ایمیل</a></li>
                                            <li><a href="{{route('shop-grid')}}">مدیریت فایل</a></li>
                                            <li><a href="{{route('shop-grid')}}">پلیر موزیک و فیلم</a></li>

										</ul>
										<ul class="item item02">
											<li class="title">بازی</li>
											<li><a href="{{route('shop-grid')}}">اکشن</a></li>
											<li><a href="{{route('shop-grid')}}">ماجراجویی</a></li>
											<li><a href="{{route('shop-grid')}}">سرگرمی</a></li>
											<li><a href="{{route('shop-grid')}}">ورزشی</a></li>
											<li><a href="{{route('shop-grid')}}">موزیکال</a></li>
										</ul>
									</div>
								</li> --}}

								{{-- <li class="drop"><a href="blog.html">Blog</a>
									<div class="megamenu dropdown">
										<ul class="item item01">
											<li><a href="blog.html">Blog Page</a></li>
											<li><a href="blog-details.html">Blog Details</a></li>
										</ul>
									</div>
								</li> --}}
								{{-- <li><a href="contact.html">Contact</a></li> --}}
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="shop_search"><a class="search__active" href="#"></a></li>
							<li class="wishlist"><a href="{{route('wishlist')}}"></a></li>
							<li class="shopcart">
                                <a href="{{route('cart')}}">
                                {{-- <span class="product_qun">3</span> --}}
                            </a>
								<!-- Start Shopping Cart -->
								{{-- <div class="block-minicart minicart__active">
									<div class="minicart-content-wrapper">
										<div class="micart__close">
											<span>close</span>
										</div>
										<div class="items-total d-flex justify-content-between">
											<span>3 items</span>
											<span>Cart Subtotal</span>
										</div>
										<div class="total_amount text-right">
											<span>$66.00</span>
										</div>
										<div class="mini_action checkout">
											<a class="checkout__btn" href="{{route('cart')}}">Go to Checkout</a>
										</div>
										<div class="single__items">
											<div class="miniproduct">
												<div class="item01 d-flex">
													<div class="thumb">
														<a href="product-details.html"><img src="{{asset('assets/eimages/product/sm-img/1.jpg')}}" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html">Voyage Yoga Bag</a></h6>
														<span class="prize">$30.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 01</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="item01 d-flex mt--20">
													<div class="thumb">
														<a href="product-details.html"><img src="{{asset('assets/images/product/sm-img/3.jpg')}}" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html">Impulse Duffle</a></h6>
														<span class="prize">$40.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 03</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="item01 d-flex mt--20">
													<div class="thumb">
														<a href="product-details.html"><img src="{{asset('assets/images/product/sm-img/2.jpg')}}" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html">Compete Track Tote</a></h6>
														<span class="prize">$40.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 03</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="mini_action cart">
											<a class="cart__btn" href="{{route('cart')}}">View and edit cart</a>
										</div>
									</div>
								</div> --}}
								<!-- End Shopping Cart -->
							</li>
							<li class="setting__bar__icon"><a href="{{route('login')}}"></a>
								{{-- <div class="searchbar__content setting__block">
									<div class="content-inner">
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Currency</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">USD - US Dollar</span>
													<ul class="switcher-dropdown">
														<li>GBP - British Pound Sterling</li>
														<li>EUR - Euro</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Language</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">English01</span>
													<ul class="switcher-dropdown">
														<li>English02</li>
														<li>English03</li>
														<li>English04</li>
														<li>English05</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Select Store</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">Fashion Store</span>
													<ul class="switcher-dropdown">
														<li>Furniture</li>
														<li>Shoes</li>
														<li>Speaker Store</li>
														<li>Furniture</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>My Account</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<span><a href="#">Compare Product</a></span>
														<span><a href="#">My Account</a></span>
														<span><a href="#">My Wishlist</a></span>
														<span><a href="#">Sign In</a></span>
														<span><a href="#">Create An Account</a></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								<div class="searchbar__content setting__block">
									<div class="content-inner">
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Currency</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">USD - US Dollar</span>
													<ul class="switcher-dropdown">
														<li>GBP - British Pound Sterling</li>
														<li>EUR - Euro</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Language</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">English01</span>
													<ul class="switcher-dropdown">
														<li>English02</li>
														<li>English03</li>
														<li>English04</li>
														<li>English05</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Select Store</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">Fashion Store</span>
													<ul class="switcher-dropdown">
														<li>Furniture</li>
														<li>Shoes</li>
														<li>Speaker Store</li>
														<li>Furniture</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>My Account</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<span><a href="#">Compare Product</a></span>
														<span><a href="#">My Account</a></span>
														<span><a href="#">My Wishlist</a></span>
														<span><a href="#">Sign In</a></span>
														<span><a href="#">Create An Account</a></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> --}}
							</li>
						</ul>
					</div>
				</div>
				<!-- Start Mobile Menu -->
				<div class="row d-none">
					<div class="col-lg-12 d-none">
						<nav class="mobilemenu__nav">
							<ul class="meninmenu">
                            <li><a href="{{'/index'}}">Home</a></li>
								<li><a href="#">Pages</a>
									<ul>
										<li><a href="about.html">About Page</a></li>
										<li><a href="portfolio.html">Portfolio</a>
											<ul>
												<li><a href="portfolio.html">Portfolio</a></li>
												<li><a href="portfolio-details.html">Portfolio Details</a></li>
											</ul>
										</li>
										<li><a href="my-account.html">My Account</a></li>
										<li><a href="{{route('cart')}}">Cart Page</a></li>
										<li><a href="checkout.html">Checkout Page</a></li>
										<li><a href="wishlist.html">Wishlist Page</a></li>
										<li><a href="error404.html">404 Page</a></li>
										<li><a href="faq.html">Faq Page</a></li>
										<li><a href="team.html">Team Page</a></li>
									</ul>
								</li>
								<li><a href="shop-grid.html">Shop</a>
									<ul>
										<li><a href="shop-grid.html">Shop Grid</a></li>
										<li><a href="{{'/single-product'}}">Single Product</a></li>
									</ul>
								</li>
								<li><a href="blog.html">Blog</a>
									<ul>
										<li><a href="blog.html">Blog Page</a></li>
										<li><a href="blog-details.html">Blog Details</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- End Mobile Menu -->
	            <div class="mobile-menu d-block d-lg-none">
	            </div>
	            <!-- Mobile Menu -->
			</div>
		</header>
		<!-- //Header -->
		<!-- Start Search Popup -->
		<div class="brown--color box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="عنوان درس مورد نظر خود را وارد کرده و همین امروز شروع به آموختن کنید.">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
        <!-- End Search Popup -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner">
                            <h3 class="bradcaump-title">به آسانی یاد بگیرید</h3>
                            <nav class="bradcaump-content">
                                {{-- <a class="breadcrumb_item" href="/index">Home</a> --}}
                                {{-- <span class="brd-separetor">/</span> --}}
                                <span class="breadcrumb_item">بیش از هزاران کتاب و ویدئوی آموزشی </span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
