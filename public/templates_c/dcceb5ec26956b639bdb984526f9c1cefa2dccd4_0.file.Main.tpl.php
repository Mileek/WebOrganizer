<?php
/* Smarty version 4.3.4, created on 2024-05-26 11:41:45
  from 'C:\xampp\htdocs\WebOrganizer\app\views\templates\Main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665303d9801371_40047496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcceb5ec26956b639bdb984526f9c1cefa2dccd4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebOrganizer\\app\\views\\templates\\Main.tpl',
      1 => 1716716503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665303d9801371_40047496 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/../assets/LoginStyle.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/../assets/ToDoStyle.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/../assets/MainStyle.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/../node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/0eabfb7d9f.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>

<body>
    <div>
        <nav class="navi">
            <!-- Tutaj umieść swoją nawigację -->
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showTasks">
                <button class="navi__button">ToDo</button>
            </form>

            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showTasks"></form>
            <button class="navi__button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/login">Login</button>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showTasks"></form>
            <button class="navi__button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/login">Login</button>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">
                <button class="navi__button">Logout</button>
            </form>
        </nav>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1786514959665303d97ffb37_16183236', 'contentToDo');
?>

    </div>



    <footer class="footer">
        <p class="text-center">© 2024. All rights reserved. Design and Development by <strong>Kamil Patryk
                Kaszuba</strong></p>
    </footer>
</body>

</html><?php }
/* {block 'contentToDo'} */
class Block_1786514959665303d97ffb37_16183236 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contentToDo' => 
  array (
    0 => 'Block_1786514959665303d97ffb37_16183236',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'contentToDo'} */
}
