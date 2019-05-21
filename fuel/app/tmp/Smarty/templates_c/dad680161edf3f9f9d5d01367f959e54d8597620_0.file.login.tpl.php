<?php
/* Smarty version 3.1.33, created on 2019-04-19 07:24:09
  from 'C:\Users\copyp\OneDrive\Documents\NetBeansProjects\FuelStore_JRowan\fuel\app\views\authenticate\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb9afd9023e01_28848814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dad680161edf3f9f9d5d01367f959e54d8597620' => 
    array (
      0 => 'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\FuelStore_JRowan\\fuel\\app\\views\\authenticate\\login.tpl',
      1 => 1555631874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb9afd9023e01_28848814 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16952851225cb9afd9017ba6_08793922', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6393931795cb9afd90188e6_88595385', "content");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_16952851225cb9afd9017ba6_08793922 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_16952851225cb9afd9017ba6_08793922',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <style type='text/css'>
    td:first-child, th:first-child {
      white-space: nowrap;
      width: 10px;
    }
  </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_6393931795cb9afd90188e6_88595385 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6393931795cb9afd90188e6_88595385',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h2>Login</h2>

  <p>Please enter access information</p>
  <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('attrs'=>array('action'=>'/authenticate/validate')));
$_block_repeat=true;
echo $_block_plugin1->form(array('attrs'=>array('action'=>'/authenticate/validate')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
  <table class="table table-sm table-borderless">
    <tr>
      <td>user:</td>
      <td><input class="form-control" type="text" name="username" 
                 value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" /></td>
    </tr>
    <tr>
      <td>password:</td>
      <td><input class="form-control" type="password" name="password" /></td>
    </tr>
    <tr>
      <td></td>
      <td>
        <button type="submit" name="access">Access</button>
        <button type="submit" name="cancel">Cancel</button>
      </td>
    </tr>
  </table>  
  <?php $_block_repeat=false;
echo $_block_plugin1->form(array('attrs'=>array('action'=>'/authenticate/validate')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

  <h4 class="message"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['session_get_flash'][0], array( array('var'=>'message'),$_smarty_tpl ) );?>
</h4>
<?php
}
}
/* {/block "content"} */
}
