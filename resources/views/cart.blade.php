@extends('layouts.mainmaster')
@section('content')

        <!-- cart-main-area start -->
        <div class="cart-main-area section-padding--lg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">
                        <form action="#">
                            <div class="table-content wnro__table table-responsive">
                                <table>
                                    <thead>
                                        <tr class="title-top">
                                            <th class="product-thumbnail">تصویر</th>
                                            <th class="product-name">محصول</th>
                                            <th class="product-price">قیمت</th>
                                            <th class="product-quantity">تخفیف</th>
                                            <th class="product-subtotal">مجموع</th>
                                            <th class="product-remove">حذف</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="{{asset('assets/images/product/sm-3/1.jpg')}}" alt="product img"></a></td>
                                            <td class="product-name"><a href="#"> آموزش برنامه نویس جاوااسکریپت </a></td>
                                            <td class="product-price"><span class="amount">55000 تومان</span></td>
                                            <td class="product-quantity">20000 تومان</td>
                                            <td class="product-subtotal">35000 تومان</td>
                                            <td class="product-remove"><a href="#">X</a></td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="{{asset('assets/images/product/sm-3/2.jpg')}}" alt="product img"></a></td>
                                            <td class="product-name"><a href="#">آموزش برنامه نویسی PHP</a></td>
                                            <td class="product-price"><span class="amount">45000 تومان</span></td>
                                            <td class="product-quantity">15000 تومان</td>
                                            <td class="product-subtotal">30000 تومان</td>
                                            <td class="product-remove"><a href="#">X</a></td>
                                        </tr>
                                        {{-- <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="{{asset('assets/images/product/sm-3/3.jpg')}}" alt="product img"></a></td>
                                            <td class="product-name"><a href="#">آموزش فریم وورک لاراول</a></td>
                                            <td class="product-price"><span class="amount">$50.00</span></td>
                                            <td class="product-quantity"><input type="number" value="1"></td>
                                            <td class="product-subtotal">$50.00</td>
                                            <td class="product-remove"><a href="#">X</a></td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        {{-- <div class="cartbox__btn">
                            <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                                <li><a href="#">Coupon Code</a></li>
                                <li><a href="#">Apply Code</a></li>
                                <li><a href="#">Update Cart</a></li>
                                <li><a href="#">Check Out</a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="cartbox__total__area">
                            <div class="cartbox-total d-flex justify-content-between">
                                <ul class="cart__total__list">
                                    <li>قیمت کل</li>
                                    <li>تخفیف کل</li>
                                </ul>
                                <ul class="cart__total__tk">
                                    <li>100000 تومان</li>
                                    <li>35000 تومان</li>
                                </ul>
                            </div>
                            <div class="cart__total__amount">
                                <span>مبلغ قابل پرداخت</span>
                                <span>65000 تومان</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-main-area end -->

@endsection
