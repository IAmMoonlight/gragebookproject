@extends('admin.layout')
@section('title', 'Редактирование студента')
@push('head')
    <meta name="get-list-groups" content="{{ route('account.group-students.get-list-all') }}">
    <meta name="route-update" content="{{ route('account.students.update', $student) }}">
    <meta name="route-index" content="{{ route('account.students.index') }}">
    <meta name="route-remove" content="{{ route('account.students.destroy', $student) }}">
@endpush
@section('content_admin')
    <div class="content_wrapper">
        <div class="content_auth">
            <div class="content_auth_title">Редактировать информацию о студенте</div>
            <div id="edit_student_page"></div>
        </div>
    </div>
@endsection
@push('beforeScripts')
    <script>
        window.studentData = {!! $student !!};
    </script>
@endpush