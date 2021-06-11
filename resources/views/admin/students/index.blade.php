@extends('admin.layout')
@section('title', 'Студенты')
@push('head')
    <meta name="image-search" content="{{ asset('img/search.png') }}">
    <meta name="get-students" content="{{ route('account.students.get-list') }}">
    <meta name="search" content="{{ route('account.students.search') }}">
    <meta name="get-list-groups" content="{{ route('account.group-students.get-list-all') }}">
@endpush

@section('content_admin')
    <div class="content_wrapper">
        <div class="content_auth">
            <div class="admin_table_header">
                <div class="content_auth_title admin_title">Студенты</div>
                <div class="btn_create_item_wrapper">
                    <a href="{{ route('account.students.create') }}" class="btn_create_item">Создать</a>
                </div>
            </div>
            <div id="show_list_students_admin"></div>
        </div>
    </div>
@endsection

