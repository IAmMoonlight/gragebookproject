@extends('admin.layout')
@section('title', 'Создание преподавателя')
@push('head')
    <meta name="image-close" content="{{ asset('img/close.png') }}">
    <meta name="get-list-disciplines" content="{{ route('account.disciplines.get-list-all') }}">
    <meta name="get-list-groups" content="{{ route('account.group-students.get-list-all') }}">
    <meta name="route-store" content="{{ route('account.teachers.store') }}">
    <meta name="route-index" content="{{ route('account.teachers.index') }}">
@endpush
@section('content_admin')
    <div class="content_wrapper">
        <div class="content_auth">
            <div class="content_auth_title">Добавить преподавателя</div>
            <div id="create_teachers_page"></div>
        </div>
    </div>
@endsection