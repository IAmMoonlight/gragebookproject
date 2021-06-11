@extends('admin.layout')
@section('title', 'Создание группы студентов')
@section('content_admin')
    <div class="content_wrapper">
        <div class="content_auth">
            <div class="content_auth_title">Добавить группу студентов</div>

            <form method="POST" class="form_admin_create_item" action="{{ route('account.group-students.store') }}">
                @csrf
                <div class="form_block form_admin_create_block">
                    <input type="input" class="form_block__input" name="title" value="" required autocomplete="name_disc" autofocus>
                    <span class="form_block__input--focus" data-placeholder="Название"></span>
                </div>
                @error('title')
                    <div class="form_error_text">{{ $message }}</div>
                @enderror
                <div class="btn_submit_wrapper">
                    <input type="submit" class="btn_submit form_admin__submit" value="Сохранить" disabled>
                </div>
            </form>

        </div>
    </div>
@endsection