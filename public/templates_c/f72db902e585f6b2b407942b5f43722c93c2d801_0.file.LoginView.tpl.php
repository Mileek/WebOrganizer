<?php
/* Smarty version 4.3.4, created on 2024-05-26 12:28:38
  from 'C:\xampp\htdocs\WebOrganizer\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66530ed6955b21_97063112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f72db902e585f6b2b407942b5f43722c93c2d801' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebOrganizer\\app\\views\\LoginView.tpl',
      1 => 1716719316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66530ed6955b21_97063112 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/../assets/LoginStyle.css" />
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/0eabfb7d9f.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>

<div class="container">
    <div class="screen">
        <div class="screen__content">
            <div class="login">
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login">
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" class="login__input" name="login" placeholder="User name / Email">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" class="login__input" name="password" placeholder="Password">
                    </div>
                    <button class="button login__submit">
                        <span class="button__text">Log In Now</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                </form>
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
register">
                    <button class="button login__submit">
                        <span class="button__text">Register</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                </form>
            </div>
            <div class="social-login">
                <h3>log in via</h3>
                <div class="social-icons">
                    <a href="#" class="social-login__icon fab fa-instagram"></a>
                    <a href="#" class="social-login__icon fab fa-facebook"></a>
                    <a href="#" class="social-login__icon fab fa-twitter"></a>
                </div>
            </div>
        </div>
        <div class="screen__background">
            <span class="screen__background__shape screen__background__shape4"></span>
            <span class="screen__background__shape screen__background__shape3"></span>
            <span class="screen__background__shape screen__background__shape2"></span>
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>
    </div>
</div><?php }
}
