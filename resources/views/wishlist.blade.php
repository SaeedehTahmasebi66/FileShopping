@extends('layouts.mainmaster')
@section('content')

        <!-- cart-main-area start -->
        <div class="wishlist-area section-padding--lg bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="wishlist-content">
                            <form action="#">
                                <div class="wishlist-table wnro__table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-remove"></th>
                                                <th class="product-thumbnail"></th>
                                                <th class="product-name"><span class="nobr">نام محصول</span></th>
                                                <th class="product-price"><span class="nobr"> قیمت واحد </span></th>
                                                {{-- <th class="product-stock-stauts"><span class="nobr"> موجودی انبار </span></th> --}}
                                                <th class="product-add-to-cart"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product-remove"><a href="#">×</a></td>
                                                <td class="product-thumbnail"><a href="#"><img src="{{asset('assets/images/product/sm-3/1.jpg')}}" alt=""></a></td>
                                                <td class="product-name"><a href="#">آموزش HTML</a></td>
                                                <td class="product-price"><span class="amount">30000 تومان</span></td>
                                                {{-- <td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td> --}}
                                                <td class="product-add-to-cart"><a href="#"> افزودن به سبد خرید</a></td>
                                            </tr>
                                            <tr>
                                                <td class="product-remove"><a href="#">×</a></td>
                                                <td class="product-thumbnail"><a href="#"><img src="{{asset('assets/images/product/sm-3/2.jpg')}}" alt=""></a></td>
                                                <td class="product-name"><a href="#">آموزش CSS3</a></td>
                                                <td class="product-price"><span class="amount">45000 تومان</span></td>
                                                {{-- <td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td> --}}
                                                <td class="product-add-to-cart"><a href="#"> افزودن به سبد خرید</a></td>
                                            </tr>
                                            <tr>
                                                <td class="product-remove"><a href="#">×</a></td>
                                                <td class="product-thumbnail"><a href="#"><img src="{{asset('assets/images/product/sm-3/3.jpg')}}" alt=""></a></td>
                                                <td class="product-name"><a href="#">آموزش پروزه محور jQuery</a></td>
                                                <td class="product-price"><span class="amount">45000 تومان</span></td>
                                                {{-- <td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td> --}}
                                                <td class="product-add-to-cart"><a href="#"> افزودن به سبد خرید</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-main-area end -->
		@endsection
