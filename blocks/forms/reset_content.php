<div class="auth_title">Восстановление пароля</div>

<div class="form_wrapper reset_form">
    <form method="POST" class="block_form_for_auth">
        <div class="form_block">
            <input type="email" class="form_block__input" name="email" value="" required autocomplete="email" autofocus>
            <span class="form_block__input--focus" data-placeholder="Почта"></span>
        </div>
        <div class="form_block">
            <input type="password" class="form_block__input" name="password" value="" required autocomplete="password">
            <span class="form_block__input--focus" data-placeholder="Новый пароль"></span>
        </div>
        <div class="form_block">
            <input type="password" class="form_block__input repeat_pswd" name="repeat_pswd" value="" required autocomplete="repeat_pswd">
            <span class="form_block__input--focus" data-placeholder="Подтверждение пароля"></span>
        </div>
        <div class="btn_submit_wrapper">
            <input type="submit" class="btn_submit" value="Восстановить пароль" disabled>
        </div>
    </form>
</div>

<script src="assets/js/reset.js"></script>