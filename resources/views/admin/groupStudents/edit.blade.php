@extends('admin.layout')
@section('title', 'Редактирование группы студентов')
@section('content_admin')
    <div class="content_wrapper">
        <div class="content_auth">
            <div class="content_auth_title">Редактировать дисциплину</div>

            <form method="POST" class="form_admin_create_item" action="{{ route('account.group-students.update', $group) }}">
                @csrf
                <div class="form_block form_admin_create_block">
                    <input type="input" class="form_block__input has-val" name="title" value="{{ $group->title }}" required autocomplete="name_disc" autofocus>
                    <span class="form_block__input--focus" data-placeholder="Название"></span>
                </div>
                @error('title')
                    <div class="form_error_text">{{ $message }}</div>
                @enderror
                <div class="btn_submit_wrapper">
                    <input type="submit" class="btn_submit form_admin__submit" value="Сохранить">
                </div>
            </form>
            <form action="{{ route('account.group-students.destroy', $group) }}" method="POST" class="form_admin_delete_item">
                @csrf
                <input type="submit" class="btn_submit form_admin__submit btn_delete_item" value="Удалить">
            </form>

        </div>
    </div>
@endsection