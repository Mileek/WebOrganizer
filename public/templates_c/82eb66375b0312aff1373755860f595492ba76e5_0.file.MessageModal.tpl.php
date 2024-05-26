<?php
/* Smarty version 4.3.4, created on 2024-05-26 14:38:47
  from 'C:\xampp\htdocs\WebOrganizer\app\views\templates\MessageModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66532d577e0648_99626069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82eb66375b0312aff1373755860f595492ba76e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebOrganizer\\app\\views\\templates\\MessageModal.tpl',
      1 => 1716726922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66532d577e0648_99626069 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="messageModalLabel">Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                        <p><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</p>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                        <p><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</p>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isWarning()) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                        <p><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</p>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="messageModal.hide()">OK</button>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError() || $_smarty_tpl->tpl_vars['msgs']->value->isInfo() || $_smarty_tpl->tpl_vars['msgs']->value->isWarning()) {?>
        var messageModal = new bootstrap.Modal(document.getElementById('messageModal'), {});
        messageModal.show();
    <?php }
echo '</script'; ?>
><?php }
}
