<?php
/* Smarty version 3.1.33, created on 2019-04-19 17:26:29
  from 'C:\Users\copyp\OneDrive\Documents\NetBeansProjects\FuelStore_JRowan\fuel\app\views\authenticate\newuser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cba3d050d2ad9_51481216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4703f7a40193fb4d384260ed0340ab83a713d3b7' => 
    array (
      0 => 'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\FuelStore_JRowan\\fuel\\app\\views\\authenticate\\newuser.tpl',
      1 => 1555709184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cba3d050d2ad9_51481216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_938022315cba3d050c3dd6_58166456', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9562471635cba3d050c4c37_03811414', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_938022315cba3d050c3dd6_58166456 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_938022315cba3d050c3dd6_58166456',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <style type='text/css'>
    td:first-child, th:first-child {
      white-space: nowrap;
      width: 10px;
    }
    .error { 
      color: red; font-size: 80%; font-weight:bold; 
    }
  </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_9562471635cba3d050c4c37_03811414 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9562471635cba3d050c4c37_03811414',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h2>Create an Account</h2>

 
  <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('attrs'=>array('action'=>'/newuser/userValidate')));
$_block_repeat=true;
echo $_block_plugin1->form(array('attrs'=>array('action'=>'/newuser/userValidate')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
  <table class="table table-sm table-borderless">
    <tr>
      <td>name:</td>
      <td><input class="form-control" type="text" name="username" 
                 value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" /><span class="error"><?php echo $_smarty_tpl->tpl_vars['validator']->value->error_message('username');?>
</span></td>
    </tr>
    <tr>
      <td>email:</td>
      <td><input class="form-control" type="email" name="email" 
                 value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" required /></td>
    </tr>
    <tr>
      <td>password:</td>
      <td><input class="form-control" type="password" name="password" /><span class="error"><?php echo $_smarty_tpl->tpl_vars['validator']->value->error_message('password');?>
</span></td>
    </tr>
    <tr>
      <td>confirm:</td>
      <td><input class="form-control" type="password" name="confirmpassword" /><span class="error"><?php echo $_smarty_tpl->tpl_vars['validator']->value->error_message('confirmpassword');?>
</span></td>
    </tr>
    <tr>
      <td></td>
      <td>
        <button type="submit" name="create">Create</button>
        <button type="submit" name="cancel">Cancel</button>
      </td>
    </tr>
  </table>  
  <?php $_block_repeat=false;
echo $_block_plugin1->form(array('attrs'=>array('action'=>'/newuser/userValidate')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

  <h4 class="message"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['session_get_flash'][0], array( array('var'=>'message'),$_smarty_tpl ) );?>
</h4>
<?php
}
}
/* {/block "content"} */
}
