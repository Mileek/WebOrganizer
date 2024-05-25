<?php
/* Smarty version 4.3.4, created on 2024-05-25 22:28:15
  from 'C:\xampp\htdocs\WebOrganizer\app\views\ToDoView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665249dfc8cfe1_19776086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3de89403d11c7afe65af1c92edf74c44491d093' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebOrganizer\\app\\views\\ToDoView.tpl',
      1 => 1716668704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665249dfc8cfe1_19776086 (Smarty_Internal_Template $_smarty_tpl) {
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

        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addTask" method="post">
            <input id="todo-create" class="todo-input" type="text" name="task" placeholder="What needs to be done?"
                autofocus>
        </form>
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
            <li>
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
markCompleted" method="post">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                    <input type="hidden" name="currentComplete" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['IsCompleted'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['IsCompleted']) {?>
                        <button type="submit" class="todo-toggle todo-toggle-complete fas fa-check"></button>
                    <?php } else { ?>
                        <button type="submit" class="todo-toggle fas fa-check"></button>
                    <?php }?>
                </form>

                <span class="todo-desc"><?php echo $_smarty_tpl->tpl_vars['item']->value['Description'];?>
</span>
                <span class="todo-desc-right"><?php echo $_smarty_tpl->tpl_vars['item']->value['Date'];?>
</span>
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
removeTask" method="post">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                    <button class="todo-remove fa-solid fa-xmark"></button>
                </form>
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
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['completed']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['incomplete']->value;?>
</td>
            </tr>
        </table>
    </footer>
</section>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
><?php }
}
