@extends('admin.layout')
@section('title', 'Редактирование преподавателя')
@push('head')
    <meta name="image-close" content="{{ asset('img/close.png') }}">
    <meta name="get-list-disciplines" content="{{ route('account.disciplines.get-list-all') }}">
    <meta name="get-list-groups" content="{{ route('account.group-students.get-list-all') }}">
    <meta name="route-update" content="{{ route('account.teachers.update', $teacherData['id']) }}">
    <meta name="route-index" content="{{ route('account.teachers.index') }}">
    <meta name="route-remove" content="{{ route('account.teachers.destroy', $teacherData['id']) }}">
@endpush
@section('content_admin')
    <div class="content_wrapper">
        <div class="content_auth">
            <div class="content_auth_title">Редактировать информацию о преподавателе</div>
            <div id="edit_teachers_page"></div>
        </div>
    </div>
@endsection
@push('beforeScripts')
    <script>
        window.teacherData = {!! json_encode($teacherData) !!};
    </script>
@endpush