<?php
/* Smarty version 3.1.33, created on 2019-04-19 11:36:40
  from 'C:\Users\copyp\OneDrive\Documents\NetBeansProjects\FuelStore_JRowan\fuel\app\views\user\allorders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb9eb087905a2_98634120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12b1140c91aafe1aa5d26800cc13eeb93888c679' => 
    array (
      0 => 'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\FuelStore_JRowan\\fuel\\app\\views\\user\\allorders.tpl',
      1 => 1555688196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb9eb087905a2_98634120 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_710331915cb9eb0877e354_68743481', "localstyle");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7183619435cb9eb0877f035_95210076', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_710331915cb9eb0877e354_68743481 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_710331915cb9eb0877e354_68743481',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <style type="text/css">
    td:first-child, th:first-child {
      width: 10px;
      white-space: nowrap;
    }
  </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_7183619435cb9eb0877f035_95210076 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7183619435cb9eb0877f035_95210076',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>All Orders</h2>

  <table class="table table-sm table-borderless">
    <tr>
    <th>Order Id</th>
    <th>User</th>
    <th>Date/Time</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
          
      <tr>
        <td>
         <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>"/user/orderDetails/".((string)$_smarty_tpl->tpl_vars['order']->value->id),'text'=>"(details)"),$_smarty_tpl ) );?>

          </a>
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['order']->value->user->name;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['order']->value->created_at;?>
</td>
      </tr>
     
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </table>
  
 
<h4 class="message"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['session_get_flash'][0], array( array('var'=>'message'),$_smarty_tpl ) );?>
</h4>
<?php
}
}
/* {/block "content"} */
}
