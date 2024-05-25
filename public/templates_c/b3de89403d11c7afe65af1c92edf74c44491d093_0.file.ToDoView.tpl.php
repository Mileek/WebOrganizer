<?php
/* Smarty version 4.3.4, created on 2024-05-25 12:26:22
  from 'C:\xampp\htdocs\WebOrganizer\app\views\ToDoView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6651bcce4ec734_32560856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3de89403d11c7afe65af1c92edf74c44491d093' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebOrganizer\\app\\views\\ToDoView.tpl',
      1 => 1716632776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6651bcce4ec734_32560856 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/../assets/ToDoStyle.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/../node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/0eabfb7d9f.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>

<section id="app" class="todo-container">
    <h2 class="todo-headline">Todos</h2>
    <div class="todo-init">

        <input id="todo-create" class="todo-input" type="text" placeholder="What needs to be done?" autofocus>

        <span id="todo-toggle-all" class="todo-toggle todo-toggle-all glyphicon glyphicon-ok-sign"
            title="Toggle all todos"></span>

        <span id="todo-remove-all" class="todo-remove todo-remove-all glyphicon glyphicon-remove-circle"
            title="Remove all completed todos"></span>
    </div>

    <ul id="todo-list" class="todo-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <li style="margin-bottom: 20px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                <strong>Id:</strong> <?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
<br />
                <strong>Kwota:</strong> <?php echo $_smarty_tpl->tpl_vars['item']->value['IsCompleted'];?>
<br />
                <strong>Rata:</strong> <?php echo $_smarty_tpl->tpl_vars['item']->value['Description'];?>
<br />
                <strong>Data:</strong> <?php echo $_smarty_tpl->tpl_vars['item']->value['Date'];?>
<br />
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

    <footer class="todo-footer">
        <table id="todo-stats" class="todo-stats">
            <tr>
                <th>Total</th>
                <th>Completed</th>
                <th>Incomplete</th>
            </tr>
            <tr></tr>
        </table>
    </footer>
</section>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
><?php }
}
