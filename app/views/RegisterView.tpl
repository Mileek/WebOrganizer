<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{$conf->app_url}/../assets/LoginStyle.css" />
    <script src="https://kit.fontawesome.com/0eabfb7d9f.js" crossorigin="anonymous"></script>
</head>

<div class="container">
    <div class="screen">
        <div class="screen__content">
            <div class="login">
                <form action="{$conf->action_url}createUser">
                    <div class="login__field">
                        <i class="login__icon fas fa-envelope"></i>
                        <input type="email" class="login__input" name="email" placeholder="Email">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" class="login__input" name="login" placeholder="User name">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" class="login__input" name="password" placeholder="Password">
                    </div>
                    <button class="button login__submit">
                        <span class="button__text">Register Now</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                </form>
                <form action="{$conf->action_url}generateView">
                    <button class="button login__submit">
                        <span class="button__text">Return to login</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="screen__background">
            <span class="screen__background__shape screen__background__shape4"></span>
            <span class="screen__background__shape screen__background__shape3"></span>
            <span class="screen__background__shape screen__background__shape2"></span>
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>
    </div>
</div>