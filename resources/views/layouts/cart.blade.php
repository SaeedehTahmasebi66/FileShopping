
    <?php use App\Models\Product; ?>
    <a class="cartbox_active" href="{{'/cart'}}">
        @if ( !empty(session()->get('cart')))
        <?php $price=0; ?>
        <span class="product_qun count">{{sizeof(session()->get('cart'))}}</span>
    </a>
    <!-- Start Shopping Cart -->
    <div class="block-minicart minicart__active" >
        <div class="minicart-content-wrapper">
            <div class="micart__close">
                {{-- <span>بستن</span> --}}
            </div>
            <div class="single__items">
                <div class="miniproduct">
                    @foreach (session()->get('cart') as $k=>$v)
                    <?php $product = Product::find($k); ?>
                    <div class="item01 d-flex mt--20">
                        <div class="thumb">
                            @foreach($product->Image()->get() as $Img)
                            <a href="product-details.html"><img src="{{asset('/') . $Img->path}}" alt="product images"></a>
                            @endforeach
                        </div>
                        <div class="content">
                            <h6><a href="product-details.html">{{$product->name}}</a></h6>
                            <div class="product_prize d-flex justify-content-between">
                                <ul class="d-flex justify-content-end">
                                    <li><span class="prize">{{number_format($product->price)}} تومان</span></li>
                                    <li><a data="{{$product->id}}" class="remove-from-cart"><i class="zmdi zmdi-delete"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php $price+= ($product->price) ?>
                    @endforeach
                </div>
            </div>
            <div class="items-total d-flex justify-content-between">
                <span>جمع مبلغ کل:</span>
                <span>تعداد: {{sizeof(session()->get('cart'))}}</span>
            </div>
            <div class="total_amount text-right">
                <span>{{number_format($price)}} تومان</span>
            </div>
            <div class="mini_action checkout">
                <a class="checkout__btn" href="{{route('cart')}}">ثبت سفارش</a>
            </div>
            <div class="mini_action cart">
                <a class="cart__btn" href="{{route('cart')}}">مشاهده سبد خرید</a>
            </div>
        </div>
    </div>
    <!-- End Shopping Cart -->
</li>
@endif

