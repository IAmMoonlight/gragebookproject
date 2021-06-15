<div class="auth_title">Авторизация</div>

<div class="form_wrapper auth_form">
    <form method="POST" class="block_form_for_auth">
        <div class="form_block">
            <input type="email" class="form_block__input" name="email" value="" required autocomplete="email" autofocus>
            <span class="form_block__input--focus" data-placeholder="Почта"></span>
        </div>
        <!-- Вывод ошибки при неправильном заполнении -->
        <div class="form_error_text">Неверно заполнено поле!</div>
        
        <div class="form_block">
            <input type="password" class="form_block__input" name="password" value="" required autocomplete="password">
            <span class="form_block__input--focus" data-placeholder="Пароль"></span>
        </div>
        <div class="forget_pswd_wrapper">
            <a href="#" class="forget_pswd">Забыли пароль?</a>
        </div>
        <div class="btn_submit_wrapper">
            <input type="submit" class="btn_submit" value="Войти" disabled>
        </div>
    </form>
</div>

<script src="assets/js/login.js"></script>