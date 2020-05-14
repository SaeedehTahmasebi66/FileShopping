@extends('admin.adminLayout.adminMaster')
@section('content')

<div class="container w-50 mb-2" style="margin-right:350px;">
    <h3 class="my-4">ثبت عضو جدید</h3>
    <form action="{{route('users.store')}}" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="username">نام کاربری</label>
            <input type="text" id="username" name="username" class="form-control" maxlength="50" />
              @if ($errors->has('username'))
              <div class="text-danger">
                  {{$errors->first('username') }}
              </div>
              @endif
        </div>

        <div class="form-group">
            <label for="email">ایمیل</label>
            <input type="email" id="email" name="email" class="form-control" maxlength="50" />
              @if ($errors->has('email'))
              <div class="text-danger">
                  {{$errors->first('email') }}
              </div>
              @endif
        </div>
        <div class="form-group">
            <label for="password">پسورد</label>
            <input type="password" id="password" name="password" class="form-control" maxlength="50" />
              @if ($errors->has('password'))
              <div class="text-danger">
                  {{$errors->first('password') }}
              </div>
              @endif
        </div>
        <input type="submit" value="ثبت شود" class="btn btn-success">
    </form>
</div>
@endsection
