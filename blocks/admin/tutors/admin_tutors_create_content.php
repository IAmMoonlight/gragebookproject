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
                    <a href="#" class="menu_auth_link_active menu_auth_link">Преподаватели</a>
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
            <div class="content_auth_title">Добавить преподавателя</div>
            
            <form method="POST" class="form_admin_create_item">
                <div class="form_block form_admin_create_block">
                    <input type="input" class="form_block__input" name="fullname" value="" required autocomplete="fullname" autofocus>
                    <span class="form_block__input--focus" data-placeholder="ФИО"></span>
                </div>
                <!-- Вывод ошибки при неправильном заполнении -->
                <div class="form_error_text">Неверно заполнено поле!</div>
                
                <div class="form_block form_admin_create_block">
                    <input type="email" class="form_block__input" name="email" value="" required autocomplete="email">
                    <span class="form_block__input--focus" data-placeholder="Почта"></span>
                </div>
                <div class="form_block form_admin_create_block">
                    <input type="password" class="form_block__input" name="password" value="" required autocomplete="password">
                    <span class="form_block__input--focus" data-placeholder="Пароль"></span>
                </div>
                <div class="form_block form_admin_create_block">
                    <input type="file" class="form_block__input has-val" name="file" value="" required autocomplete="file" autofocus>
                    <span class="form_block__input--focus" data-placeholder="Фото"></span>
                </div>

                <div class="table_item_wrapper admin_table_wrapper">
                    <div class="table_item_header">
                        <div class="table_item_header__title">Группы и дисциплины</div>
                        <div class="btn_create_item">Добавить</div>
                    </div>
                    <div class="table_item_row">
                        <div class="table_item_title admin_table_2col__name">Дисциплина и группа</div>
                        <div class="table_item_title admin_table_2col__delete">Действие</div>
                    </div>
                    <div class="table_item_row">
                        <div class="admin_table_2col__name table_item_file">Защита информации (БПИ 19-01)</div>
                        <div class="admin_table_2col__delete table_item_del">Удалить</div>
                    </div>
                    <div class="table_item_row">
                        <div class="admin_table_2col__name table_item_file">Автоматизированные системы обработки информации и управление (БИС 19-02)</div>
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


<div class="upload_file_wrapper hide">
    <div class="btn_close_upload">
        <img src="assets/img/close.png" alt="btn_close_upload">
    </div>
    <div class="upload_file_title">Прикрепление данных</div>
    <form method="POST" class="upload_file_form">

        <div class="form_block">
            <select class="form_block__select" name="group" id="group" required>
                <option value="1">МПИ 16-02</option>
                <option value="2">МИА 16-01</option>
            </select>
            <span class="form_block__select--focus">Группа</span>
        </div>
        <div class="form_block">
            <select class="form_block__select" name="discipline" id="discipline" required>
                <option value="1">Защита информации</option>
                <option value="2">Физическая культура</option>
            </select>
            <span class="form_block__select--focus">Дисциплина</span>
        </div>
        <div class="form_block">
            <select class="form_block__select" name="form_control" id="form_control" required>
                <option value="1">Экзамен</option>
                <option value="2">Диф. зачет</option>
                <option value="2">Зачет</option>
            </select>
            <span class="form_block__select--focus">Форма контроля</span>
        </div>
        <div class="checkbox_wrapper">
            <input type="checkbox" class="checkbox_input" id="coursework">
            <label for="coursework" class="checkbox_label">
                Курсовая работа
            </label>
        </div>
        
        <div class="admin_attestation">
            <div class="admin_attestation__text">
                Аттестация
            </div>
            <div class="admin_attestation__delete">
                Удалить
            </div>
        </div>
        <div class="admin_attestation_dates">
            <div class="form_block admin_attestation_date">
                <input type="date" class="form_block__input" name="date" value="" required autocomplete="date">
                <span class="form_block__select--focus">Начало аттестации</span>
            </div>
            <div class="form_block admin_attestation_date">
                <input type="date" class="form_block__input" name="date" value="" required autocomplete="date">
                <span class="form_block__select--focus">Конец аттестации</span>
            </div>
        </div>
        <div class="admin_attestation_add_btn">Добавить аттестацию</div>
        
        <div class="btn_submit_wrapper">
            <input type="submit" class="btn_submit" value="Сохранить" disabled>
        </div>
    </form>
</div>