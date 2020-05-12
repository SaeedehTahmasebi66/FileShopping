@extends('layouts.mainmaster')
@section('content')

<!-- Start Shop Page -->
<div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
                <div class="shop__sidebar">
                    <aside class="wedget__categories poroduct--cat">
                        <h3 class="wedget__title">حساب کاربری شما</h3>
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#nav-profile" role="tab">اطلاعات شخصی <span id="profile"> </span> </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#nav-order" role="tab">همه سفارش ها <span id="order"></a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#nav-wish" role="tab"> لیست علاقه مندی ها <span id="wish"></a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#nav-comment" role="tab"> نقد و نظرات<span id="comment"></a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#nav-message" role="tab"> پیغام های من <span id="message"></a>
                            </li>
                        </ul>
                    </aside>
                    <aside class="wedget__categories pro--range">
                        {{-- <h3 class="wedget__title">فیلتر بر اساس قیمت</h3>
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
                        </div> --}}
                    </aside>
                </div>
            </div>
            <div class="col-lg-9 col-12 order-1 order-lg-2">
                {{-- <div class="row">
                    <div class="col-lg-12">
                        <div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
                            <div class="shop__list nav justify-content-center" role="tablist">
                                <a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i class="fa fa-th"></i></a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i class="fa fa-list"></i></a>
                            </div>
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
                </div> --}}
                <div class="tab__container">
                    <div class="pro__tab_label tab-pane fade show active" id="nav-profile" role="tabpanel">
                        <h4 class="pb--10">اطلاعات شخصی</h4>
                        <div>
                            <table>
                                <tr><td>نام کاربری: {{$user->name}}</td></tr>
                                <tr><td>پست الکترونیکی: {{$user->email}}</td></tr>
                                <tr><td>شماره تلفن: 09123333434</td></tr>
                                <tr><td> دریافت خبرنامه: خیر  </td></tr>
                                <tr>
                                    <td>
                                        <strong><a href="/profile/additional-info/{{$user->id}}">ویرایش اطلاعات</a></strong>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="pro__tab_label tab-pane fade" id="nav-order" role="tabpanel">
                        <h4 class="pb--10"> همه سفارش ها</h4>
                        <p>هیچ سفارشی وجود ندارد!</p>
                    </div>
                    <div class="pro__tab_label tab-pane fade" id="nav-wish" role="tabpanel">
                        <h4 class="pb--10"> لیست علاقه مندی ها </h4>
                        <div>
                            <table>
                                <tr><td>آموش اصول و مبانی برنامه نویسی</td></tr>
                                <tr><td>آموزش برنامه نویسی جاوا</td></tr>
                                <tr><td>آموزش برنامه نویسی PHP</td></tr>
                                <tr><td> آموزش طراحی الگوریتم </td></tr>
                            </table>
                        </div>
                    </div>
                    <div class="pro__tab_label tab-pane fade" id="nav-comment" role="tabpanel">
                        <h4 class="pb--10"> نقد و نظرات</h4>
                        <p> هیچ دیدگاهی ثبت نشده است. </p>
                    </div>
                    <div class="pro__tab_label tab-pane fade" id="nav-message" role="tabpanel">
                        <h4 class="pb--10">  پیغام های من </h4>
                        <p>   پیغامی وجود ندارد.   </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
