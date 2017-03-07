{{-- Master Layout --}}
@extends('cortex/fort::frontend.common.layout')

{{-- Page Title --}}
@section('title')
    {{ config('app.name') }} » {{ trans('common.verify_phone') }}
@stop

{{-- Main Content --}}
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <section class="panel panel-default">

                    <header class="panel-heading">
                        {{ trans('common.verify_phone') }}
                    </header>

                    <div class="panel-body">
                        {{ Form::open(['route' => 'frontend.verification.phone.process', 'class' => 'form-horizontal']) }}

                            @include('cortex/fort::frontend.alerts.success')
                            @include('cortex/fort::frontend.alerts.warning')
                            @include('cortex/fort::frontend.alerts.error')

                            <div class="form-group{{ $errors->has('token') ? ' has-error' : '' }}">
                                {{ Form::label('token', trans('common.authentication_code'), ['class' => 'col-md-4 control-label']) }}

                                <div class="col-md-6">
                                    {{ Form::text('token', old('token'), ['class' => 'form-control', 'placeholder' => trans('common.authentication_code'), 'required' => 'required', 'autofocus' => 'autofocus']) }}

                                    @if ($errors->has('token'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('token') }}</strong>
                                        </span>
                                    @endif

                                    {{ trans('twofactor.backup_notice') }}<br />

                                    @if ($methods['phone'])
                                        <strong>{!! trans('twofactor.backup_sms', ['href' => route('frontend.verification.phone.request')]) !!}</strong>
                                    @else
                                        <strong>{{ trans('twofactor.backup_code') }}</strong>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    {{ Form::button(trans('common.reset'), ['class' => 'btn btn-default', 'type' => 'reset']) }}
                                    {{ Form::button('<i class="fa fa-check"></i> '.trans('common.verify_phone'), ['class' => 'btn btn-primary', 'type' => 'submit']) }}
                                </div>
                            </div>

                        {{ Form::close() }}
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection
