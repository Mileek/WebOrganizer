<?php
/* Smarty version 4.3.4, created on 2024-05-26 15:55:55
  from 'C:\xampp\htdocs\WebOrganizer\app\views\templates\Main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66533f6b5c9d16_65937258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcceb5ec26956b639bdb984526f9c1cefa2dccd4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebOrganizer\\app\\views\\templates\\Main.tpl',
      1 => 1716731570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66533f6b5c9d16_65937258 (Smarty_Internal_Template $_smarty_tpl) {
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
showImages">
                <button class="navi__button">Images</button>
            </form>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showTasks"></form>
            <button class="navi__button">PlaceHolder</button>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">
                <button class="navi__button">Logout</button>
            </form>
        </nav>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109590014266533f6b5c76c6_90376816', 'contentToDo');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19584651766533f6b5c8c81_88598668', 'contentImageToDo');
?>

    </div>



    <footer class="footer">
        <p class="text-center">© 2024. All rights reserved. Design and Development by <strong>Kamil Patryk
                Kaszuba</strong></p>
    </footer>
</body>

</html><?php }
/* {block 'contentToDo'} */
class Block_109590014266533f6b5c76c6_90376816 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contentToDo' => 
  array (
    0 => 'Block_109590014266533f6b5c76c6_90376816',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'contentToDo'} */
/* {block 'contentImageToDo'} */
class Block_19584651766533f6b5c8c81_88598668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contentImageToDo' => 
  array (
    0 => 'Block_19584651766533f6b5c8c81_88598668',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'contentImageToDo'} */
}
