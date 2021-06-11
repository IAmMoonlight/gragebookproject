@extends('layouts.app')
@section('title', 'Авторизация')
@section('content')
    <div class="auth_title">Авторизация</div>
    <div class="form_wrapper auth_form">
        <form method="POST" class="block_form_for_auth" action="{{ route('login') }}">
            @csrf
            <div class="form_block">
                <input type="email" class="form_block__input {{ old('email') ? 'has-val' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <span class="form_block__input--focus" data-placeholder="Почта"></span>
            </div>
            @error('email')
                <div class="form_error_text">{{ $message }}</div>
            @enderror

            <div class="form_block">
                <input type="password" class="form_block__input" name="password" value="" required autocomplete="password">
                <span class="form_block__input--focus" data-placeholder="Пароль"></span>
            </div>
            @error('password')
                <div class="form_error_text">{{ $message }}</div>
            @enderror

            @if (Route::has('password.request'))
                <div class="forget_pswd_wrapper">
                    <a href="{{ route('password.request') }}" class="forget_pswd">Забыли пароль?</a>
                </div>
            @endif

            <div class="btn_submit_wrapper">
                <input type="submit" class="btn_submit" value="Войти" disabled>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/login.js') }}"></script>
@endpush