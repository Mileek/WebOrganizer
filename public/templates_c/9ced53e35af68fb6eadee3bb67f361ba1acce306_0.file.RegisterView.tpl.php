<?php
/* Smarty version 4.3.4, created on 2024-05-26 14:46:27
  from 'C:\xampp\htdocs\WebOrganizer\app\views\RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66532f232bb6c0_81743238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ced53e35af68fb6eadee3bb67f361ba1acce306' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebOrganizer\\app\\views\\RegisterView.tpl',
      1 => 1716727135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:MessageModal.tpl' => 1,
  ),
),false)) {
function content_66532f232bb6c0_81743238 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/../assets/LoginStyle.css" />
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/0eabfb7d9f.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/../node_modules/bootstrap/dist/css/bootstrap.min.css" />
</head>

<?php $_smarty_tpl->_subTemplateRender("file:MessageModal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="screen">
        <div class="screen__content">
            <div class="login">
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
createUser">
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
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
generateView">
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
</div><?php }
}
