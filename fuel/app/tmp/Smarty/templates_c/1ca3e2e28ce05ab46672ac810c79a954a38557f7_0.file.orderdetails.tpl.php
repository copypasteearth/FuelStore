<?php
/* Smarty version 3.1.33, created on 2019-04-19 11:06:09
  from 'C:\Users\copyp\OneDrive\Documents\NetBeansProjects\FuelStore_JRowan\fuel\app\views\user\orderdetails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb9e3e1047e08_84907753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ca3e2e28ce05ab46672ac810c79a954a38557f7' => 
    array (
      0 => 'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\FuelStore_JRowan\\fuel\\app\\views\\user\\orderdetails.tpl',
      1 => 1555686365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb9e3e1047e08_84907753 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7745073265cb9e3e10163a2_11535335', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1338259795cb9e3e1017a75_76370105', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_7745073265cb9e3e10163a2_11535335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_7745073265cb9e3e10163a2_11535335',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <style>
  </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_1338259795cb9e3e1017a75_76370105 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1338259795cb9e3e1017a75_76370105',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2>Order #<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</h2>
<?php if ($_smarty_tpl->tpl_vars['session']->value->get('login') && $_smarty_tpl->tpl_vars['session']->value->get('login')->is_admin) {?>
<pre>
User: <?php echo $_smarty_tpl->tpl_vars['order']->value->user->name;?>

Email: <?php echo $_smarty_tpl->tpl_vars['order']->value->user->email;?>

</pre>
    
    <?php }?>
<table class="table table-hover table-sm">
    <tr>
    <th>product name</th>
    <th>id</th>
    <th>category</th>
      <th>purchase price</th>
      <th>quantity</th>
      <th>subtotal</th>
      </tr>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value->selections, 'info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
?>
          
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['info']->value->product->name;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['info']->value->product->id;?>
</td>
        
        <td><?php echo $_smarty_tpl->tpl_vars['info']->value->product->category->name;?>
</td>
        <td class="price">$<?php echo number_format($_smarty_tpl->tpl_vars['info']->value->purchase_price,2);?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['info']->value->quantity;?>
</td>
        <td>$<?php echo number_format($_smarty_tpl->tpl_vars['info']->value->purchase_price*$_smarty_tpl->tpl_vars['info']->value->quantity,2);?>
</td>
      </tr>
     
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
</table>
<pre>
<b>Total = $<?php echo number_format($_smarty_tpl->tpl_vars['total_price']->value,2);?>
</b>
</pre>
<?php if ($_smarty_tpl->tpl_vars['session']->value->get('login') && $_smarty_tpl->tpl_vars['session']->value->get('login')->is_admin) {?>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['session_get_flash'][0], array( array('var'=>'confirm'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
        <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('attrs'=>array('action'=>'user/deleteOrder')));
$_block_repeat=true;
echo $_block_plugin1->form(array('attrs'=>array('action'=>'user/deleteOrder')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <input type="hidden" name="idhid" value=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
  />
            <input type='hidden' name='confirm' value='confirm' />
            <button type="submit" >Process</button>
            <button type="submit" name="cancel">Cancel</button>
            <h4 class="message"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['session_get_flash'][0], array( array('var'=>'message'),$_smarty_tpl ) );?>
</h4>
        <?php $_block_repeat=false;
echo $_block_plugin1->form(array('attrs'=>array('action'=>'user/deleteOrder')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php } else { ?>
            <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('attrs'=>array('action'=>'user/deleteOrder')));
$_block_repeat=true;
echo $_block_plugin2->form(array('attrs'=>array('action'=>'user/deleteOrder')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <input type="hidden" name="idhid" value=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
  />
            <button type="submit" >Process</button>
            <h4 class="message"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['session_get_flash'][0], array( array('var'=>'message'),$_smarty_tpl ) );?>
</h4>
        <?php $_block_repeat=false;
echo $_block_plugin2->form(array('attrs'=>array('action'=>'user/deleteOrder')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    <?php }?>

<?php
}
}
/* {/block "content"} */
}
