@extends($activeTemplate.'layouts.master')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card custom--card">
            <div class="card-header">
                <h5 class="card-title text-center">@lang('Profile')</h5>
            </div>
            <div class="card-body">
                <form class="register" action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="form--label">@lang('Họ')</label>
                            <input type="text" class="form--control" name="firstname" value="{{$user->firstname}}" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="form--label">@lang('Tên')</label>
                            <input type="text" class="form--control" name="lastname" value="{{$user->lastname}}" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="form--label">@lang('E-mail')</label>
                            <input class="form--control" value="{{$user->email}}" readonly>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="form--label">@lang('Số Điện thoại')</label>
                            <input class="form--control" value="{{$user->mobile}}" readonly>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="form--label">@lang('Địa chỉ')</label>
                            <input type="text" class="form--control" name="address" value="{{@$user->address->address}}">
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="form--label">@lang('Tỉnh')</label>
                            <input type="text" class="form--control" name="state" value="{{@$user->address->state}}">
                        </div>
                        <div class="form-group col-sm-4">
                            <label class="form--label">@lang('Mã Zip')</label>
                            <input type="text" class="form--control" name="zip" value="{{@$user->address->zip}}">
                        </div>
                        <div class="form-group col-sm-4">
                            <label class="form--label">@lang('Thành Phố')</label>
                            <input type="text" class="form--control" name="city" value="{{@$user->address->city}}">
                        </div>
                        <div class="form-group col-sm-4">
                            <label class="form--label">@lang('Quốc gia')</label>
                            <input class="form--control" value="{{@$user->address->country}}" disabled>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn--base w-100">@lang('Submit')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
