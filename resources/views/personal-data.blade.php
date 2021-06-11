@extends('admin.layout')
@section('title', 'Личный кабинет')
@push('head')
    <meta name="route-change-name" content="{{ route('account.personal.change-name') }}">
    <meta name="route-change-email" content="{{ route('account.personal.change-email') }}">
    <meta name="route-change-password" content="{{ route('account.personal.change-password') }}">
@endpush
@section('content_admin')
    <div class="content_wrapper">
        <div id="user_personal_data"></div>
    </div>

    <div class="upload_file_wrapper hide" id="changeName">
        <div class="btn_close_upload modal__close">
            <img src="{{ asset('img/close.png') }}" alt="btn_close_upload">
        </div>
        <div id="modal_change_name"></div>
    </div>
    <div class="upload_file_wrapper hide" id="changeEmail">
        <div class="btn_close_upload modal__close">
            <img src="{{ asset('img/close.png') }}" alt="btn_close_upload">
        </div>
        <div id="modal_change_email"></div>
    </div>
    <div class="upload_file_wrapper hide" id="changePassword">
        <div class="btn_close_upload modal__close">
            <img src="{{ asset('img/close.png') }}" alt="btn_close_upload">
        </div>
        <div id="modal_change_password"></div>
    </div>
@endsection
@push('beforeScripts')
    <script>
        window.userData = {!! $user !!};
    </script>
@endpush