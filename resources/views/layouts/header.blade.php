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
                                            <li ><a href="{{'/category/1'}}">برنامه نویسی</a>
                                            {{-- <li class="label2"><a href="{{'/category/1'}}">برنامه نویسی</a>
												<ul>
													<li><a href="{{route('shop-grid')}}">برنامه نویسی وب</a></li>
													<li><a href="{{route('shop-grid')}}">برنامه نویسی اندروید</a></li>
												</ul>
											</li> --}}
											<li><a href="{{'/category/2'}}">علوم و مهندسی کامپوتر</a></li>
                                            <li><a href="{{'/category/3'}}">هوش مصنوعی</a></li>
                                            <li><a href="{{'/shop-grid'}}">همه محصولات</a></li>
										</ul>
									</div>
                                </li>
                                <li class="drop with--one--item"><a href="{{'/blog'}}">وبلاگ</a></li>
                                {{-- <li class="drop with--one--item"><a href="{{'/about'}}">درباره ما</a></li> --}}
                                <li class="drop with--one--item"><a href="{{'/contact'}}">تماس با ما</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="shop_search"><a class="search__active" href="#"></a></li>
                            <li class="wishlist"><a href="{{route('wishlist')}}"></a></li>
							<li class="shopcart" id="myCart">
                                @include('layouts.cart')
                            @guest
                            <li class="setting__bar__icon"><a href="{{route('login')}}"></a>
                            @else
                            <li class="setting__bar__icon"><a class="setting__active" href="#"></a>
								<div class="searchbar__content setting__block">
									<div class="content-inner">
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>نام کاربری: {{ Auth::user()->name }}</span>
											</strong>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>
                                                    <a href="{{ route('profile') }}"> مشاهده حساب کاربری </a>
                                                </span>
											</strong>
										</div>
										{{-- <div class="switcher-currency">
											<strong class="label switcher-label">
												<span>
                                                    <a href="{{ route('profile') }}"> سفارش های من </a>
                                                </span>
											</strong>
										</div> --}}
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>
                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                        {{ __('خروج از حساب کاربری') }}
                                                    </a>
                                                </span>
                                            </strong>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
										</div>
									</div>
								</div>
							</li>
                            @endguest
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
			<form id="search_mini_form" class="minisearch" action="/search" method="GET">
				<div class="field__search">
					<input name="search" type="text" placeholder="عنوان درس مورد نظر خود را وارد کرده و همین امروز شروع به آموختن کنید...">
					<div class="action">
						<a><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>بستن</span>
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
