@extends($activeTemplate.'layouts.master')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card custom--card">
            <div class="card-header card-header-bg">
                <h5 class="card-title text-center">{{__($pageTitle)}}</h5>
            </div>
            <div class="card-body  ">
                <form action="{{ route('user.deposit.manual.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="text-center mt-2">
    @lang('Bạn đã yêu cầu thanh toán') 
    <b class="text-success">{{ number_format(intval($data['amount']), 0, ',', '.') }} {{ __($general->cur_text) }}</b>,
    @lang('Hãy thanh toán')
    <b class="text-success">{{ number_format(intval($data['final_amo']), 0, ',', '.') .' '.$data['method_currency'] }}</b>
    @lang('Để lấy tài khoản')
</p>

                            <h4 class="text-center mb-4">@lang('Vui lòng thanh toán số tài khoản bên dưới')</h4>

                            <p class="my-4 text-center">@php echo  $data->gateway->description @endphp</p>

                        </div>

                        <x-viser-form identifier="id" identifierValue="{{ $gateway->form_id }}" />

                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn--base w-100">@lang('Pay Now')</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
