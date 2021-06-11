@extends('admin.layout')
@section('title', 'Преподаватели')
@push('head')
    <meta name="image-search" content="{{ asset('img/search.png') }}">
    <meta name="get-teachers" content="{{ route('account.teachers.get-list') }}">
    <meta name="search" content="{{ route('account.teachers.search') }}">
    <meta name="get-list-groups" content="{{ route('account.group-students.get-list-all') }}">
@endpush

@section('content_admin')
    <div class="content_wrapper">
        <div class="content_auth">
            <div class="admin_table_header">
                <div class="content_auth_title admin_title">Преподаватели</div>
                <div class="btn_create_item_wrapper">
                    <a href="{{ route('account.teachers.create') }}" class="btn_create_item">Создать</a>
                </div>
            </div>
            <div id="show_list_teachers_admin"></div>
        </div>
    </div>
@endsection

