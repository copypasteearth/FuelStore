<?php
/* Smarty version 3.1.33, created on 2019-04-19 16:15:18
  from 'C:\Users\copyp\OneDrive\Documents\NetBeansProjects\FuelStore_JRowan\fuel\app\views\links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cba2c564f2190_62129380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7219061e02d16985e3d58f748d732c89461b81b5' => 
    array (
      0 => 'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\FuelStore_JRowan\\fuel\\app\\views\\links.tpl',
      1 => 1555704854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cba2c564f2190_62129380 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['session']->value->get('login') || !$_smarty_tpl->tpl_vars['session']->value->get('login')->is_admin) {?>
  <li class="nav-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>"/cart",'text'=>"Cart"),$_smarty_tpl ) );?>
</li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['session']->value->get('login') && !$_smarty_tpl->tpl_vars['session']->value->get('login')->is_admin) {?>
  <li class="nav-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>'/user/myOrders','text'=>'My Orders'),$_smarty_tpl ) );?>
</li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['session']->value->get('login') && $_smarty_tpl->tpl_vars['session']->value->get('login')->is_admin) {?>
  <li class="nav-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>'/adminOrder/allOrders','text'=>'All Orders'),$_smarty_tpl ) );?>
</li>
  <li class="nav-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>'/admin/addProduct','text'=>'Add Product'),$_smarty_tpl ) );?>
</li>
  <li class="nav-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>'/admin/addCategory','text'=>'Add Category'),$_smarty_tpl ) );?>
</li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['session']->value->get('login')) {?>
  <li class="nav-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>'/authenticate/logout','text'=>'Logout'),$_smarty_tpl ) );?>
</li>
<?php } else { ?>
  <li class="nav-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>'/authenticate/login','text'=>'Login'),$_smarty_tpl ) );?>
</li>
  <li class="nav-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>'/newuser/createUser','text'=>'Create Account'),$_smarty_tpl ) );?>
</li>
<?php }?>

<?php }
}
