@extends('admin.adminLayout.adminMaster')
@section('content')

<div class="container w-50 mb-2" style="margin-right:350px;">
    <h3 class="my-5"> ویرایش پیام</h3>
    @if ($errors->any())
      <div class="alert text-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form action="{{ route('comment.update', $comment->id) }}" method="POST">
        @method('PATCH')
        {{ csrf_field() }}
        <div class="form-group">
            <label for="comment_body">متن پیام</label>
            <input type="text" id="comment_body" name="comment_body" class="form-control"
              maxlength="260" value="{{$comment->body}}">
        </div>
        <input type="submit" value="به روز رسانی" class="btn btn-success">
    </form>
</div>
@endsection




