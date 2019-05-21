<?php
/* Smarty version 3.1.33, created on 2019-04-19 09:31:10
  from 'C:\Users\copyp\OneDrive\Documents\NetBeansProjects\FuelStore_JRowan\fuel\app\views\user\myorders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb9cd9e7760d8_47249980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddcf686b84285bc1259fb5ef0dd46876c857a338' => 
    array (
      0 => 'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\FuelStore_JRowan\\fuel\\app\\views\\user\\myorders.tpl',
      1 => 1555680667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb9cd9e7760d8_47249980 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20893272015cb9cd9e765ac6_89628463', "localstyle");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4755350315cb9cd9e766789_76408806', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_20893272015cb9cd9e765ac6_89628463 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_20893272015cb9cd9e765ac6_89628463',
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
class Block_4755350315cb9cd9e766789_76408806 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4755350315cb9cd9e766789_76408806',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>My Orders</h2>

  <table class="table table-sm table-borderless">
    <tr>
    <th>Order Id</th>
    <th>Date/Time</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
          
      <tr>
        <td>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>"/user/orderDetails/".((string)$_smarty_tpl->tpl_vars['order']->value->id),'text'=>"(details)"),$_smarty_tpl ) );?>

          </a>
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['order']->value->created_at;?>
</td>
      </tr>
     
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </table>
  
 

<?php
}
}
/* {/block "content"} */
}
