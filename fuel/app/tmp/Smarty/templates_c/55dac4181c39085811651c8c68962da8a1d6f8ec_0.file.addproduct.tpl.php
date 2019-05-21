<?php
/* Smarty version 3.1.33, created on 2019-04-19 14:10:14
  from 'C:\Users\copyp\OneDrive\Documents\NetBeansProjects\FuelStore_JRowan\fuel\app\views\user\addproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cba0f06878451_91577115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55dac4181c39085811651c8c68962da8a1d6f8ec' => 
    array (
      0 => 'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\FuelStore_JRowan\\fuel\\app\\views\\user\\addproduct.tpl',
      1 => 1555697412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cba0f06878451_91577115 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12422460675cba0f068621e7_70277064', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5897870495cba0f06862fb5_06954394', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_634706335cba0f06877db9_40829324', "localscript");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_12422460675cba0f068621e7_70277064 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_12422460675cba0f068621e7_70277064',
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
class Block_5897870495cba0f06862fb5_06954394 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5897870495cba0f06862fb5_06954394',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\FuelStore_JRowan\\fuel\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

  
  <h2>Add Product</h2>
    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('attrs'=>array('action'=>'/admin/addProductReenterant')));
$_block_repeat=true;
echo $_block_plugin1->form(array('attrs'=>array('action'=>'/admin/addProductReenterant')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <table class="table table-sm table-borderless">
        <tr>
        <th>name:</th>
        <td><input class="form-control" type="text" name="name" value='<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
' required />
        <span class="error"><?php echo $_smarty_tpl->tpl_vars['validator']->value->error_message('name');?>
</span></td>
        </tr>
        <tr>
            <th>category:</th>
            <td>
                <select name="category_id">
      <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categories']->value,'selected'=>$_smarty_tpl->tpl_vars['category_id']->value),$_smarty_tpl);?>

    </select>
            </td>
        </tr>
        <tr>
        <th>price ($):</th>
        <td><input class="form-control" type="number" name="price" min="0.00"  step="0.01" value='<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
' required /></td>
        </tr>
        <tr>
        <th>desctiption:</th>
        <td><textarea class="form-control" name='textarea' rows='10' ><?php echo $_smarty_tpl->tpl_vars['textarea']->value;?>
</textarea>
        <span class="error"><?php echo $_smarty_tpl->tpl_vars['validator']->value->error_message('textarea');?>
</span></td>
        </tr>
        <tr>
            <th>photo:</th>
            <td>
                <select name="photo_id">
      <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['photos']->value,'selected'=>$_smarty_tpl->tpl_vars['photo_id']->value),$_smarty_tpl);?>

    </select>
            </td>
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
echo $_block_plugin1->form(array('attrs'=>array('action'=>'/admin/addProductReenterant')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
  <h4 class="message"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['session_get_flash'][0], array( array('var'=>'message'),$_smarty_tpl ) );?>
</h4>
  

<?php
}
}
/* {/block "content"} */
/* {block "localscript"} */
class Block_634706335cba0f06877db9_40829324 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localscript' => 
  array (
    0 => 'Block_634706335cba0f06877db9_40829324',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
  type="text/javascript">
    $("button[name='cancel']").click(function () {
      $("input[name='name']").prop('disabled', true);
      $("input[name='price']").prop('disabled', true);
      $("input[name='textarea']").prop('disabled', true);
    });
   
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "localscript"} */
}
