<div class="content_auth_wrapper">
    <div class="menu_auth_btn">
        <img src="assets/img/menu2.png" class="menu_auth_btn__open" alt="menu_auth_btn_menu">
        <img src="assets/img/close2.png" class="menu_auth_btn__close hide_btn_auth" alt="menu_auth_btn_close">
    </div>
    <div class="aside_wrapper">
        <aside>
            <ul class="menu_auth">
                <li class="menu_auth_li">
                    <a href="#" class="menu_auth_link">Личный кабинет</a>
                </li>
                <li class="menu_auth_li">
                    <a href="#" class="menu_auth_link_active menu_auth_link">Баннеры</a>
                </li>
                <li class="menu_auth_li">
                    <a href="#" class="menu_auth_link">Дисциплины</a>
                </li>
                <li class="menu_auth_li">
                    <a href="#" class="menu_auth_link">Преподаватели</a>
                </li>
                <li class="menu_auth_li">
                    <a href="#" class="menu_auth_link">Группы студентов</a>
                </li>
                <li class="menu_auth_li">
                    <a href="#" class="menu_auth_link">Студенты</a>
                </li>
            </ul>
        </aside>
    </div>
    
    <div class="content_wrapper">
        <div class="content_auth">
            <div class="content_auth_title">Добавить баннер</div>

            <form method="POST" class="form_admin_create_item">
            <div class="form_block form_admin_create_block">
                    <input type="input" class="form_block__input" name="title" value="" required autocomplete="title" autofocus>
                    <span class="form_block__input--focus" data-placeholder="Заголовок"></span>
                </div>
                <div class="form_block form_admin_create_block">
                    <textarea class="form_block__textarea" name="desc" value="" required autocomplete="desc"></textarea>
                    <span class="form_block__textarea--focus" data-placeholder="Описание"></span>
                </div>
                <div class="form_block form_admin_create_block">
                    <input type="input" class="form_block__input" name="link" value="" required autocomplete="link">
                    <span class="form_block__input--focus" data-placeholder="Ссылка"></span>
                </div>
                <div class="form_block form_admin_create_block">
                    <input type="file" class="form_block__input has-val" name="file" value="" required autocomplete="file" autofocus>
                    <span class="form_block__input--focus" data-placeholder="Изображение"></span>
                </div>

                <div class="btn_submit_wrapper">
                    <input type="submit" class="btn_submit form_admin__submit" value="Сохранить" disabled>
                </div>
            </form>
        </div>
    </div>
</div>