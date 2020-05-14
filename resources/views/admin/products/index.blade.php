@extends('admin.adminLayout.adminMaster')
@section('content')

<div class="row my-4" style="margin-right:250px;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <h3>محصولات</h3>
        </div>
        <div class="pull-left pl-5" style="text-align: left;">
            <a class="btn btn-success px-4" href="{{ route('products.create') }}"> افزودن محصول جدید</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert text-success" style="margin-right:250px;">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="table-responsive">
    <table class="table table-bordered table-hover text-center table-responsive small" style="margin-right:230px;">
        <thead>
            <tr>
                <th class="px-0">شناسه آموزش</th>
                <th class="px-1">نام آموزش</th>
                <th class="px-1">تصویر آموزش</th>
                <th class="px-1">توضیحات آموزش</th>
                <th class="px-1">قیمت (تومان)</th>
                <th class="px-1">دسته آموزش</th>
                {{-- <th class="px-1">دیدگاه ها</th> --}}
                {{-- <th class="px-1">تاریخ ثبت</th>
                <th class="px-1">تاریخ به روزرسانی</th> --}}
                <th class="px-1">ویرایش</th>
                <th class="px-1">حذف</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                @foreach($product->Image()->get() as $Img)
                <td><img src="{{asset('/') . $Img->path }}" style="width:100px"/></td>
                @endforeach
                <td>{{$product->product_excerpt}}</td>
                <td>{{number_format($product->price)}}</td>
                <td>{{$product->category->name}}</td>
                {{-- <td>
                    @foreach($product->Comment()->get() as $C)
                    {{$C->body}}
                    @endforeach
                </td> --}}
                {{-- <td>{{$product->created_at}}</td>
                <td>{{$product->updated_at}}</td> --}}
                <td>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">ویرایش</a>
                </td>
                <td>
                    <form action="{{ route('products.destroy', $product->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">حذف</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection


