<?php
/* Smarty version 4.3.4, created on 2024-05-26 14:04:27
  from 'C:\xampp\htdocs\WebOrganizer\app\views\ImageToDoView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6653254b76ceb1_95245715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72d2d2b602adceb547ffdbf04b9135730ee4c04f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebOrganizer\\app\\views\\ImageToDoView.tpl',
      1 => 1716725066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6653254b76ceb1_95245715 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4762894726653254b75e571_43893369', 'contentImageToDo');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'contentImageToDo'} */
class Block_4762894726653254b75e571_43893369 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contentImageToDo' => 
  array (
    0 => 'Block_4762894726653254b75e571_43893369',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="app" class="todo-container">
        <h2 class="todo-headline">Images To Do</h2>
        <div class="todo-init">

            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addImage" method="post">
                <input id="todo-create" class="todo-input" type="text" name="url"
                    placeholder="What beautiful image do you want to add?" autofocus>
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
                    <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['Url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['Url'];?>
" class="todo-image todo-desc">
                    <span class="todo-desc-right"><?php echo $_smarty_tpl->tpl_vars['item']->value['Date'];?>
</span>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
removeImage" method="post">
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
                </tr>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
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
/* {/block 'contentImageToDo'} */
}
