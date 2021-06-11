@extends('admin.layout')
@section('title', 'Группы студентов')
@push('head')
    <meta name="image-search" content="{{ asset('img/search.png') }}">
    <meta name="get-groups" content="{{ route('account.group-students.get-list') }}">
    <meta name="search" content="{{ route('account.group-students.search') }}">
@endpush

@section('content_admin')
    <div class="content_wrapper">
        <div class="content_auth">
            <div class="admin_table_header">
                <div class="content_auth_title admin_title">Группы студентов</div>
                <div class="btn_create_item_wrapper">
                    <a href="{{ route('account.group-students.create') }}" class="btn_create_item">Создать</a>
                </div>
            </div>
            <div id="show_list_group_students_admin"></div>
        </div>
    </div>
@endsection

