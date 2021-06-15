<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Главная</title>
	<link rel="stylesheet" href="assets/css/app.css">
</head>
<body>
	
    <header>
        <div class="wrapper">
            <div class="header">
                <a href="#">
                    <div class="logo_name_wrapper">
                        <div class="header_logo">
                            <img src="assets/img/logo.png" alt="logo">
                        </div>
                        <div class="header_name">Журнал успеваемости</div>
                    </div>
                </a>
                <menu>
                    <li class="active"><a href="#">Главная</a></li>
                    <li><a href="#">Преподаватели</a></li>
                </menu>


                <!-- Имя авторизованного пользователя с инициалами -->
                <div class="login_wrapper">
                    <div class="login">
                        <div class="login_fullname">Иванов Иван</div>
                    </div>
                    <div class="login_circle">
                        <img src="assets/img/user.png" alt="user">
                    </div>
                    <ul class="login_submenu hide">
                        <li><a href="#">Личный кабинет</a></li>
                        <li><a href="#">Выйти</a></li>
                    </ul>
                </div>

                <!-- Кнопка Войти - для неавторизованных (class hide - display: none) -->
<!--                <div class="btn_auth_wrapper hide">-->
<!--                <div class="btn_auth_wrapper">-->
<!--                    <a href="#" class="btn_auth">Войти</a>-->
<!--                </div>-->

            </div>
        </div>
    </header>

</body>
</html>