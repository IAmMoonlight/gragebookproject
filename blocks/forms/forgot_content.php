<div class="auth_title">Сброс пароля</div>

<div class="form_wrapper forgot_form">
    <form method="POST" class="block_form_for_auth">
        <div class="form_block">
            <input type="email" class="form_block__input" name="email" value="" required autocomplete="email" autofocus>
            <span class="form_block__input--focus" data-placeholder="Почта"></span>
        </div>
        <div class="btn_submit_wrapper">
            <input type="submit" class="btn_submit" value="Сбросить пароль" disabled>
        </div>
        <div class="form_email_send_text">
            Ссылка для восстановления пароля отправлена на почту!
        </div>
    </form>
</div>

<script src="assets/js/forgot.js"></script>