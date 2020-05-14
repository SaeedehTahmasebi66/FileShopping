@extends('admin.adminLayout.adminMaster')
@section('content')

<div class="container w-50 mb-2" style="margin-right:350px;">
    <h3 class="my-5">افزودن محصول جدید</h3>

    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="product_name">نام محصول</label>
            <input type="text" id="product_name" name="name" class="form-control" maxlength="20">
            @if ($errors->has('name'))
              <div class="text-danger">
                  {{$errors->first('name') }}
              </div>
            @endif
        </div>
        <div class="form-group">
            <label for="img">تصویر محصول</label>
            <input type="file" id="file" name="file" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">توضیحات</label>
            <input type="text" id="description" name="description" class="form-control">
            @if ($errors->has('description'))
              <div class="text-danger">
                  {{$errors->first('description') }}
              </div>
            @endif
        </div>
        <div class="form-group">
            <label for="price">قیمت</label>
            <input type="number" id="price" name="price" class="form-control">
            @if ($errors->has('price'))
              <div class="text-danger">
                  {{$errors->first('price') }}
              </div>
            @endif
        </div>
        <div class="form-group">
            <label for="category_id">نام گروه محصول</label>
            <select id="category_id" name="category_id" class="form-control">
                <option value="1">برنامه نویسی</option>
                <option value="2">علوم و مهندسی کامپیوتر</option>
                <option value="3">هوش مصنوعی</option>
            </select>
        </div>

        <input type="submit" value="اضافه شود" class="btn btn-success">
    </form>
</div>
@endsection
