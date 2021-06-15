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
                    <a href="#" class="menu_auth_link">Баннеры</a>
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
                    <a href="#" class="menu_auth_link_active menu_auth_link">Студенты</a>
                </li>
            </ul>
        </aside>
    </div>
    
    <div class="content_wrapper">
        <div class="content_auth">
            <div class="content_auth_title">Добавить студента</div>

            <form method="POST" class="form_admin_create_item">
                <div class="form_block form_admin_create_block">
                    <input type="input" class="form_block__input" name="fullname" value="" required autocomplete="fullname" autofocus>
                    <span class="form_block__input--focus" data-placeholder="ФИО"></span>
                </div>
                <div class="form_block form_admin_create_block">
                    <input type="email" class="form_block__input" name="email" value="" required autocomplete="email">
                    <span class="form_block__input--focus" data-placeholder="Почта"></span>
                </div>
                <div class="form_block form_admin_create_block">
                    <input type="password" class="form_block__input" name="password" value="" required autocomplete="password">
                    <span class="form_block__input--focus" data-placeholder="Пароль"></span>
                </div>

                <div class="table_item_wrapper admin_table_wrapper">
                    <div class="table_item_header">
                        <div class="table_item_header__title">Группа</div>
                        <div class="btn_create_item">Добавить</div>
                    </div>
                    <div class="table_item_row">
                        <div class="table_item_title admin_table_2col__name">Группа</div>
                        <div class="table_item_title admin_table_2col__delete">Действие</div>
                    </div>
                    <div class="table_item_row">
                        <div class="admin_table_2col__name table_item_cell_select">БПИ 19-01</div>
                        <div class="admin_table_2col__delete table_item_del">Удалить</div>
                    </div>
                    <div class="table_item_row">
                        <div class="admin_table_2col__name">
                            <div class="form_block select_block_group">
                                <select class="form_block__select" name="groups" id="groups" required>
                                    <option value="1">БИА19-01</option>
                                    <option value="2">БИА19-02</option>
                                    <option value="3">БИА19-03</option>
                                </select>
                                <span class="form_block__select--focus"></span>
                            </div>
                        </div>
                        <div class="admin_table_2col__delete table_item_del">Удалить</div>
                    </div>
                </div>

                <div class="btn_submit_wrapper">
                    <input type="submit" class="btn_submit form_admin__submit" value="Сохранить" disabled>
                </div>
            </form>
        </div>
    </div>
</div>