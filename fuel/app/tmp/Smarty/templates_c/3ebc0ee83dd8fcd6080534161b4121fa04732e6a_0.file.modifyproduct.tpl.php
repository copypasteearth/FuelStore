<?php
/* Smarty version 3.1.33, created on 2019-04-19 13:01:43
  from 'C:\Users\copyp\OneDrive\Documents\NetBeansProjects\FuelStore_JRowan\fuel\app\views\user\modifyproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb9fef79c7056_44789123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ebc0ee83dd8fcd6080534161b4121fa04732e6a' => 
    array (
      0 => 'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\FuelStore_JRowan\\fuel\\app\\views\\user\\modifyproduct.tpl',
      1 => 1555693296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb9fef79c7056_44789123 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17344595885cb9fef79afb24_59304766', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4658201115cb9fef79b09a0_77199348', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9467898775cb9fef79c68f5_40438455', "localscript");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_17344595885cb9fef79afb24_59304766 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_17344595885cb9fef79afb24_59304766',
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
class Block_4658201115cb9fef79b09a0_77199348 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4658201115cb9fef79b09a0_77199348',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\FuelStore_JRowan\\fuel\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

   
  <h2>Modify Product</h2>
    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('attrs'=>array('action'=>'adminOrder/modify')));
$_block_repeat=true;
echo $_block_plugin1->form(array('attrs'=>array('action'=>'adminOrder/modify')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <input type="hidden" name='id' value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'  />
        <table class="table table-sm table-borderless">
        <tr>
        <th>name:</th>
        <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
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
          <button type="submit" name="add">Modify</button>
        <button type="submit" name="cancel">Cancel</button>
      </td>
    </tr>
        </table>
    <?php $_block_repeat=false;
echo $_block_plugin1->form(array('attrs'=>array('action'=>'adminOrder/modify')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
  <h4 class="message"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['session_get_flash'][0], array( array('var'=>'message'),$_smarty_tpl ) );?>
</h4>
  

<?php
}
}
/* {/block "content"} */
/* {block "localscript"} */
class Block_9467898775cb9fef79c68f5_40438455 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localscript' => 
  array (
    0 => 'Block_9467898775cb9fef79c68f5_40438455',
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
