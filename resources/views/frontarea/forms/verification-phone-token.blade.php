{{-- Master Layout --}}
@extends('cortex/foundation::frontarea.layouts.default')

{{-- Page Title --}}
@section('title')
    {{ config('app.name') }} » {{ trans('cortex/fort::common.verify_phone') }}
@stop

{{-- Scripts --}}
@push('scripts')
    {!! JsValidator::formRequest(Cortex\Fort\Http\Requests\Frontarea\PhoneVerificationProcessRequest::class)->selector('#frontarea-verification-phone-process') !!}
@endpush

@section('body-attributes')class="auth-page"@endsection

{{-- Main Content --}}
@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-4 col-md-offset-4">

                <section class="auth-form">

                    {{ Form::open(['url' => route('frontarea.verification.phone.process'), 'id' => 'frontarea-verification-phone-process', 'role' => 'auth']) }}

                        <div class="centered"><strong>{{ trans('cortex/fort::common.account_verification_phone') }}</strong></div>

                        <div class="form-group has-feedback{{ $errors->has('token') ? ' has-error' : '' }}">
                            {{ Form::text('token', null, ['class' => 'form-control input-lg', 'placeholder' => trans('cortex/fort::common.authentication_code'), 'required' => 'required', 'autofocus' => 'autofocus']) }}

                            @if ($errors->has('token'))
                                <span class="help-block">{{ $errors->first('token') }}</span>
                            @endif

                            {{ trans('cortex/fort::twofactor.backup_notice') }}<br />

                            @if ($phoneEnabled)
                                <strong>{!! trans('cortex/fort::twofactor.backup_sms', ['href' => route('frontarea.verification.phone.request')]) !!}</strong>
                            @else
                                <strong>{{ trans('cortex/fort::twofactor.backup_code') }}</strong>
                            @endif
                        </div>

                        {{ Form::button('<i class="fa fa-check"></i> '.trans('cortex/fort::common.verify_phone'), ['class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit']) }}

                        <div>
                            {{ Html::link(route('frontarea.auth.login'), trans('cortex/fort::common.account_login')) }}
                            {{ trans('cortex/foundation::common.or') }}
                            {{ Html::link(route('frontarea.auth.register'), trans('cortex/fort::common.account_register')) }}
                        </div>

                    {{ Form::close() }}

                </section>

            </div>

        </div>

    </div>

@endsection