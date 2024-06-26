<?php
/* Smarty version 4.3.4, created on 2024-05-26 17:43:01
  from 'C:\xampp\htdocs\WebOrganizer\app\views\ToDoView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66535885372d94_22321781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3de89403d11c7afe65af1c92edf74c44491d093' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebOrganizer\\app\\views\\ToDoView.tpl',
      1 => 1716737226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66535885372d94_22321781 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149600645066535885362454_43225947', 'contentToDo');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'contentToDo'} */
class Block_149600645066535885362454_43225947 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contentToDo' => 
  array (
    0 => 'Block_149600645066535885362454_43225947',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="app" class="todo-container">
        <h2 class="todo-headline">Tasks To Do</h2>
        <div class="todo-init">
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addTask" method="post">
                <input id="todo-create" class="todo-input" type="text" name="task" placeholder="What needs to be done?"
                    autofocus>
            </form>
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
>
<?php
}
}
/* {/block 'contentToDo'} */
}
