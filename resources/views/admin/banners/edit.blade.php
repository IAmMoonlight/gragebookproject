@extends('admin.layout')
@section('title', 'Редактирование баннера')
@section('content_admin')
    <div class="content_wrapper">
        <div class="content_auth">
            <div class="content_auth_title">Редактирование баннера</div>

            <form method="POST" class="form_admin_create_item" action="{{ route('account.banners.update', $banner) }}" enctype="multipart/form-data">
                @csrf
                <div class="form_block form_admin_create_block">
                    <input type="input" class="form_block__input has-val" name="title" value="{{ old('title') ?? $banner->title }}" required autocomplete="title" autofocus>
                    <span class="form_block__input--focus" data-placeholder="Заголовок"></span>
                </div>
                @error('title')
                    <div class="form_error_text">{{ $message }}</div>
                @enderror

                <div class="form_block form_admin_create_block">
                    <textarea class="form_block__textarea has-val" name="description" required autocomplete="description">{{ old('description') ?? $banner->description }}</textarea>
                    <span class="form_block__textarea--focus" data-placeholder="Описание"></span>
                </div>
                @error('description')
                    <div class="form_error_text">{{ $message }}</div>
                @enderror

                <div class="form_block form_admin_create_block">
                    <input type="input" class="form_block__input @if(old('link')) has-val @endif" name="link" value="{{ old('link') ?? $banner->link }}" autocomplete="link">
                    <span class="form_block__input--focus" data-placeholder="Ссылка"></span>
                </div>
                @error('link')
                    <div class="form_error_text">{{ $message }}</div>
                @enderror

                <div class="form_block form_admin_create_block">
                    <input type="input" class="form_block__input @if(old('link_title')) has-val @endif" name="link_title" value="{{ old('link_title') }}" autocomplete="link">
                    <span class="form_block__input--focus" data-placeholder="Подпись для ссылки"></span>
                </div>
                @error('link_title')
                <div class="form_error_text">{{ $message }}</div>
                @enderror


                @if(!is_null($banner->attachment))
                    <div class="admin_image_banner">
                        <img src="{{ $banner->attachment->url }}" alt="" style="width: 300px">
                    </div>
                @endif
                <div class="form_block form_admin_create_block">
                    <input type="file" class="form_block__input has-val" name="file" value="" autocomplete="file" autofocus>
                    <span class="form_block__input--focus" data-placeholder="Изображение"></span>
                </div>
                @error('file')
                   <div class="form_error_text">{{ $message }}</div>
                @enderror

                <div class="btn_submit_wrapper">
                    <input type="submit" class="btn_submit form_admin__submit" value="Сохранить">
                </div>
            </form>
            <form method="POST" class="form_admin_delete_item" action="{{ route('account.banners.destroy', $banner) }}">
                @csrf
                <input type="submit" class="btn_submit form_admin__submit btn_delete_item" value="Удалить">
            </form>
        </div>
    </div>
@endsection