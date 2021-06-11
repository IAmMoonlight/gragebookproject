@extends('admin.layout')
@section('title', 'Создание студента')
@push('head')
    <meta name="get-list-groups" content="{{ route('account.group-students.get-list-all') }}">
    <meta name="route-store" content="{{ route('account.students.store') }}">
    <meta name="route-index" content="{{ route('account.students.index') }}">
@endpush
@section('content_admin')
    <div class="content_wrapper">
        <div class="content_auth">
            <div class="content_auth_title">Добавить студента</div>

            <div id="create_student_page"></div>

        </div>
    </div>
@endsection