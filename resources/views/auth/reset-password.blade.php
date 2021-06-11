@extends('layouts.app')
@section('title', 'Восстановление пароля')
@section('content')
    <div class="auth_title">Восстановление пароля</div>

    <div class="form_wrapper reset_form">
        <form method="POST" class="block_form_for_auth" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ request()->route('token') }}">
            <div class="form_block">
                <input type="email" class="form_block__input {{ request()->get('email') || old('email') ? 'has-val' : '' }}" name="email" value="{{ request()->get('email') ?? old('email') }}" required autocomplete="email" autofocus>
                <span class="form_block__input--focus" data-placeholder="Почта"></span>
            </div>
            @error('email')
                <div class="form_error_text">{{ $message }}</div>
            @enderror
            <div class="form_block">
                <input type="password" class="form_block__input" name="password" value="" required autocomplete="password">
                <span class="form_block__input--focus" data-placeholder="Новый пароль"></span>
            </div>
            @error('password')
                <div class="form_error_text">{{ $message }}</div>
            @enderror
            <div class="form_block">
                <input type="password" class="form_block__input repeat_pswd" name="password_confirmation" value="" required autocomplete="repeat_pswd">
                <span class="form_block__input--focus" data-placeholder="Подтверждение пароля"></span>
            </div>
            <div class="btn_submit_wrapper">
                <input type="submit" class="btn_submit" value="Восстановить пароль" disabled>
            </div>
        </form>
    </div>




{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">{{ __('Reset Password') }}</div>--}}

{{--                    <div class="card-body">--}}
{{--                        <form method="POST" action="{{ route('password.update') }}">--}}
{{--                            @csrf--}}

{{--                            <input type="hidden" name="token" value="{{ request()->route('token') }}">--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ request()->get('email') ?? old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                    @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                    @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row mb-0">--}}
{{--                                <div class="col-md-6 offset-md-4">--}}
{{--                                    <button type="submit" class="btn btn-primary">--}}
{{--                                        {{ __('Reset Password') }}--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

@push('scripts')
    <script src="{{ asset('js/reset.js') }}"></script>
@endpush