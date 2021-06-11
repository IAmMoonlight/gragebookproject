@extends('admin.layout')
@section('title', 'Баннеры')
@section('content_admin')
    <div class="content_wrapper">
        <div class="content_auth">
            <div class="admin_table_header">
                <div class="content_auth_title admin_title">Баннеры</div>
                <div class="btn_create_item_wrapper">
                    <a href="{{ route('account.banners.create') }}" class="btn_create_item">Создать</a>
                </div>
            </div>
            <div class="table_items_wrapper">
                @if(count($banners) > 0)
                    @foreach($banners as $banner)
                        <div class="table_items_row">
                            <a href="{{ route('account.banners.edit', $banner) }}" class="table_item_link">{{ $banner->title }}</a>
                        </div>
                    @endforeach
                @else
                    <div class="noData_text">Нет данных</div>
                @endif
            </div>
        </div>
    </div>
@endsection