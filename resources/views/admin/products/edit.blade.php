@extends('admin.adminLayout.adminMaster')
@section('content')

<div class="container w-50 mb-2" style="margin-right:350px;">
    <h3 class="my-4"> ویرایش محصول</h3>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @method('PATCH')
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">نام محصول</label><br>
            <input type="text" value="{{$product->name}}" class="form-control"
            maxlength="50" id="name" name="name"/>
            @if ($errors->has('name'))
            <div class="text-danger">
                {{$errors->first('name') }}
            </div>
            @endif
        </div>

        <div class="form-group">
            <label for="description">توضیحات</label><br>
            <input type="text" value="{{$product->description}}" class="form-control"
            maxlength="1000" id="description" name="description"/>
            @if ($errors->has('description'))
            <div class="text-danger">
                {{$errors->first('description') }}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label for="price">قیمت</label><br>
            <input type="text" value="{{$product->price}}" class="form-control"
            id="price" name="price"/>
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
        <input type="submit" value="به روز رسانی" class="btn btn-success">
    </form>
</div>
@endsection


