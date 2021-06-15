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
            <div class="admin_table_header">
                <div class="content_auth_title admin_title">Преподаватели</div>
                <div class="btn_create_item_wrapper">
                    <a href="#" class="btn_create_item">Создать</a>
                </div>
            </div>

            <form method="POST" class="form_search_select_item">
                <div class="form_block search_form_block">
                    <input type="input" class="form_block__input" name="search_item" value="" required autocomplete="search_item">
                    <span class="form_block__input--focus" data-placeholder="Поиск"></span>
                </div>
                <div class="form_block search_select">
                    <select class="form_block__select" name="type_search" id="type_search" required>
                        <option value="0">Категория</option>
                        <option value="1">ФИО</option>
                        <option value="2">Группа</option>
                    </select>
                    <span class="form_block__select--focus"></span>
                </div>
                <div class="btn_search">
                    <img src="assets/img/search.png" alt="search">
                </div>
            </form>

            <!-- если данных нет, то вывод текста -->
            <div class="noData_text hide">Данные отсутствуют!</div>

            <!-- если данные есть, то их вывод -->
            <div class="table_items_wrapper">
                <div class="table_items_row">
                    <a href="#" class="table_item_link">Базаров Тимофей Антонович</a>
                </div>
                <div class="table_items_row">
                    <a href="#" class="table_item_link">Иванов Иван Ивановна</a>
                </div>
                <div class="table_items_row">
                    <a href="#" class="table_item_link">Кожаный Виктор Степанович</a>
                </div>
            </div>
        </div>
    </div>
</div>