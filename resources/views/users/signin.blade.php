<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Форма входа</title>


    <link href="{{asset('vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <link href="{{asset('mycss/signin.css')}}" rel="stylesheet">
</head>
<body class="text-center">

<main class="form-signin">
    <form method="post" action="/users/signincheck">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Пожалуйста войдите</h1>

        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name="login">
            <label for="floatingInput">Логин</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="password">
            <label for="floatingPassword">Пароль</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Запомнить меня
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>

    </form>
</main>



</body>
</html>
