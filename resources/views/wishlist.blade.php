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
                                                <th class="product-name"><span class="nobr">نام آموزش</span></th>
                                                <th class="product-price"><span class="nobr"> مبلغ  </span></th>
                                                <th class="product-add-to-cart"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($user->product as $p)
                                            <tr>
                                                {{-- <form action="/removeFromWihlist/{{$p->id}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href=""><button class="btn btn-danger btn-sm" type="submit">×</button></a>
                                                </form> --}}
                                                <td class="product-remove"><a href="/removeFromWihlist/{{$p->id}}">×</a></td>
                                                @foreach($p->Image()->get() as $Img)
                                                <td class="product-thumbnail">
                                                    <a href="/single-product/{{$p->id}}">
                                                        <img src="{{asset('/') . $Img->path}}" alt="" style="width:100px;height:80px">
                                                    </a>
                                                </td>
                                                @endforeach
                                                <td class="product-name">
                                                    <a href="/single-product/{{$p->id}}">{{$p->name}}</a>
                                                </td>
                                                <td class="product-price">
                                                    <span class="amount">{{number_format($p->price)}} تومان</span>
                                                </td>
                                                <td class="product-add-to-cart">
                                                    <a class="cart addTCart" data="{{$p->id}}"> افزودن به سبد خرید</a>
                                                </td>
                                            </tr>
                                            @endforeach
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
