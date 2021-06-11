@extends('layouts.app')
@section('title', 'Сброс пароля')
@section('content')
    <div class="auth_title">Сброс пароля</div>

    <div class="form_wrapper forgot_form">
        <form method="POST" class="block_form_for_auth" action="{{ route('password.email') }}">
            @csrf

            <div class="form_block">
                <input type="email" class="form_block__input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <span class="form_block__input--focus" data-placeholder="Почта"></span>
            </div>
            @error('email')
                <div class="form_error_text">{{ $message }}</div>
            @enderror
            <div class="btn_submit_wrapper">
                <input type="submit" class="btn_submit" value="Сбросить пароль" disabled>
            </div>
            @if (session('status'))
                <div class="form_email_send_text">
                    {{ session('status') }}
                </div>
            @endif
        </form>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/forgot.js') }}"></script>
@endpush