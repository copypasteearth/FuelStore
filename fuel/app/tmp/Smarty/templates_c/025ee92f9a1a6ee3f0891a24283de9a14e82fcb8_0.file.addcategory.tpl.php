<?php
/* Smarty version 3.1.33, created on 2019-04-19 16:01:07
  from 'C:\Users\copyp\OneDrive\Documents\NetBeansProjects\FuelStore_JRowan\fuel\app\views\user\addcategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cba2903625328_69912368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '025ee92f9a1a6ee3f0891a24283de9a14e82fcb8' => 
    array (
      0 => 'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\FuelStore_JRowan\\fuel\\app\\views\\user\\addcategory.tpl',
      1 => 1555704061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cba2903625328_69912368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9352245005cba29035fc886_42171776', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4947180985cba29035fd7c4_57316976', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5876284485cba2903624ba9_45013733', "localscript");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_9352245005cba29035fc886_42171776 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_9352245005cba29035fc886_42171776',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <style type="text/css">
    td:first-child, th:first-child {
      width: 10px;
      white-space: nowrap;
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
class Block_4947180985cba29035fd7c4_57316976 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4947180985cba29035fd7c4_57316976',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h2>Add Category</h2>
  <h5><b>Current Categories:</b></h5>
  
    <ul>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
          
       <li><?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
</li>
     
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  
    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('attrs'=>array('action'=>'/admin/addCategoryReenterant')));
$_block_repeat=true;
echo $_block_plugin1->form(array('attrs'=>array('action'=>'/admin/addCategoryReenterant')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <table class="table table-sm table-borderless">
            <tr>
        <th>category name:</th>
        <td><input class="form-control" type="text" name="cat" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
" required />
        <span class="error"><?php echo $_smarty_tpl->tpl_vars['validator']->value->error_message('cat');?>
</span></td>
        </tr>
        <tr>
      <td></td>
      <td>
        <button type="submit" name="add">Add</button>
        <button type="submit" name="cancel">Cancel</button>
      </td>
    </tr>
        </table>
    <?php $_block_repeat=false;
echo $_block_plugin1->form(array('attrs'=>array('action'=>'/admin/addCategoryReenterant')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
  <h4 class="message"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['session_get_flash'][0], array( array('var'=>'message'),$_smarty_tpl ) );?>
</h4>
  

<?php
}
}
/* {/block "content"} */
/* {block "localscript"} */
class Block_5876284485cba2903624ba9_45013733 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localscript' => 
  array (
    0 => 'Block_5876284485cba2903624ba9_45013733',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
  type="text/javascript">
    $("button[name='cancel']").click(function () {
      $("input[name='cat']").prop('disabled', true);
    });
   
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "localscript"} */
}
