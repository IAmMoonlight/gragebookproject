@extends('layouts.app')
@section('content')

    <div class="content_auth_wrapper">
        <div class="menu_auth_btn">
            <img src="{{ asset('img/menu2.png') }}" class="menu_auth_btn__open" alt="menu_auth_btn_menu">
            <img src="{{ asset('img/close2.png') }}" class="menu_auth_btn__close hide_btn_auth" alt="menu_auth_btn_close">
        </div>
        <div class="aside_wrapper">
            <aside>
                <ul class="menu_auth">
                    <li class="menu_auth_li">
                        <a href="{{ route('account.index') }}"
                           class="{{ (request()->is('account')) ? 'menu_auth_link_active' : '' }}
                                   menu_auth_link">Личный кабинет</a>
                    </li>
                    @if(\Illuminate\Support\Facades\Auth::user()->role == 'admin')
                        <li class="menu_auth_li">
                            <a href="{{ route('account.banners.index') }}"
                               class="{{ (request()->is('account/banners*')) ? 'menu_auth_link_active' : '' }}
                                       menu_auth_link">Баннеры</a>
                        </li>
                        <li class="menu_auth_li">
                            <a href="{{ route('account.disciplines.index') }}"
                               class="{{ (request()->is('account/disciplines*')) ? 'menu_auth_link_active' : '' }}
                                       menu_auth_link">Дисциплины</a>
                        </li>
                        <li class="menu_auth_li">
                            <a href="{{ route('account.teachers.index') }}"
                               class="{{ (request()->is('account/teachers*')) ? 'menu_auth_link_active' : '' }}
                                     menu_auth_link">Преподаватели</a>
                        </li>
                        <li class="menu_auth_li">
                            <a href="{{ route('account.group-students.index') }}"
                               class="{{ (request()->is('account/group-students*')) ? 'menu_auth_link_active' : '' }}
                                       menu_auth_link">Группы студентов</a>
                        </li>
                        <li class="menu_auth_li">
                            <a href="{{ route('account.students.index') }}"
                               class="{{ (request()->is('account/students*')) ? 'menu_auth_link_active' : '' }}
                                       menu_auth_link">Студенты</a>
                        </li>
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::user()->role == 'teacher' )

                    @endif
                    @if(\Illuminate\Support\Facades\Auth::user()->role == 'student' )

                    @endif
                </ul>
            </aside>
        </div>

        @yield('content_admin')

    </div>
@endsection