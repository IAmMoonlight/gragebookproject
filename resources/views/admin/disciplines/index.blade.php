@extends('admin.layout')
@section('title', 'Дисциплины')
@push('head')
    <meta name="image-search" content="{{ asset('img/search.png') }}">
    <meta name="get-disciplines" content="{{ route('account.disciplines.get-list') }}">
    <meta name="search" content="{{ route('account.disciplines.search') }}">
@endpush

@section('content_admin')
    <div class="content_wrapper">
        <div class="content_auth">
            <div class="admin_table_header">
                <div class="content_auth_title admin_title">Дисциплины</div>
                <div class="btn_create_item_wrapper">
                    <a href="{{ route('account.disciplines.create') }}" class="btn_create_item">Создать</a>
                </div>
            </div>
            <div id="show_list_disciplines_admin"></div>
        </div>
    </div>
@endsection

