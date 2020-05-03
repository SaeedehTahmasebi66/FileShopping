@extends('layouts.mainmaster')
@section('content')
<?php use App\Models\Product; ?>
@if ( !empty(session()->get('cart')))
        <?php $price=0; ?>
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
                                            {{-- <th class="product-quantity">تخفیف</th>
                                            <th class="product-subtotal">مجموع</th> --}}
                                            <th class="product-remove">حذف</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (session()->get('cart') as $k=>$v)
                                        <?php $product = Product::find($k); ?>
                                        <tr>
                                            @foreach($product->Image()->get() as $Img)
                                            <td class="product-thumbnail"><a href="#"><img src="{{asset('/') . $Img->path}}" alt="product img"></a></td>
                                            @endforeach
                                            <td class="product-name"><a href="#">{{$product->name}}</a></td>
                                            <td class="product-price"><span class="amount">{{number_format($product->price)}} تومان</span></td>
                                            {{-- <td class="product-quantity">20000 تومان</td>
                                            <td class="product-subtotal">35000 تومان</td> --}}
                                            <td class="product-remove"><a data="{{$product->id}}" class="remove-from-cart">X</a></td>
                                        </tr>
                                        <?php $price+= ($product->price) ?>
                                        @endforeach
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
                                    {{-- <li>تخفیف کل</li> --}}
                                </ul>
                                <ul class="cart__total__tk">
                                    <li>{{number_format($price)}} تومان</li>
                                    {{-- <li>35000 تومان</li> --}}
                                </ul>
                            </div>
                            <div class="cart__total__amount">
                                <span>مبلغ قابل پرداخت</span>
                                <span>{{number_format($price)}} تومان</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-main-area end -->
        @endif
@endsection
