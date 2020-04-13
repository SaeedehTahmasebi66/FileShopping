@extends('layouts.mainmaster')
@section('content')
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">حساب کاربری من</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">My Account</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
		<!-- Start My Account Area -->
		<section class="my_account_area pt--80 pb--55 bg--white">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="my__account__wrapper">
							<h3 class="account__title">ورود</h3>
							<form action="#">
								<div class="account__form">
									<div class="input__box">
										<label>آدرس ایمیل <span>*</span></label>
										<input type="text">
									</div>
									<div class="input__box">
										<label>رمز عبور<span>*</span></label>
										<input type="text">
									</div>
									<div class="form__btn">
										<button>ورود</button>
										<label class="label-for-checkbox">
											<input id="rememberme" class="input-checkbox" name="rememberme" value="forever" type="checkbox">
											<span>مرا به خاطر بسپار !</span>
										</label>
									</div>
									<a class="forget_pass" href="#">رمز عبور خود را فراموش کرده اید؟</a>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="my__account__wrapper">
							<h3 class="account__title">عضویت</h3>
							<form action="#">
								<div class="account__form">
									<div class="input__box">
										<label>آدرس ایمیل <span>*</span></label>
										<input type="email">
									</div>
									<div class="input__box">
										<label>رمز عبور<span>*</span></label>
										<input type="password">
									</div>
									<div class="form__btn">
										<button>عضویت</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End My Account Area -->
        @endsection
