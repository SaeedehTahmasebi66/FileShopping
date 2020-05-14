@extends('admin.adminLayout.adminMaster')
@section('content')

<div class="container w-50 mb-2" style="margin-right:350px;">
    <h3 class="my-5">ایجاد پیام</h3>
    @if ($errors->any())
      <div class="alert text-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form action="{{route('comment.store')}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="commentable_id"> نام محصول </label>
            <select id="commentable_id" name="commentable_id" class="form-control" maxlength="200">
                <option value="1">آموزش ساختمان داده ها</option>
                <option value="2">آموزش سیستم های عامل</option>
                <option value="3">آموزش طراحی الگوریتم</option>
                <option value="4">آموزش اصول و مبانی برنامه نویسی</option>
                <option value="5">آموزش برنامه نویسی جاوا</option>
                <option value="6">آموزش برنامه نویسی PHP</option>
            </select>
        </div>
        <div class="form-group">
            <label for="comment_body">متن پیام</label>
            <input type="text" id="comment_body" name="comment_body" class="form-control" maxlength="150">
        </div>
        <input type="submit" value="ایجاد شود" class="btn btn-success">
    </form>
</div>
@endsection
