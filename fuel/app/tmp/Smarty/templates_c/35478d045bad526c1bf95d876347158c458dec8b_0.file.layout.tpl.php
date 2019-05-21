<?php
/* Smarty version 3.1.33, created on 2019-04-18 20:19:30
  from 'C:\Users\copyp\OneDrive\Documents\NetBeansProjects\FuelStore_JRowan\fuel\app\views\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb9141246bc36_44246589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35478d045bad526c1bf95d876347158c458dec8b' => 
    array (
      0 => 'C:\\Users\\copyp\\OneDrive\\Documents\\NetBeansProjects\\FuelStore_JRowan\\fuel\\app\\views\\layout.tpl',
      1 => 1555631874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:links.tpl' => 1,
  ),
),false)) {
function content_5cb9141246bc36_44246589 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>  
      <?php ob_start();
echo basename(dirname(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['base_url'][0], array( array(),$_smarty_tpl ) )));
$_prefixVariable1 = ob_get_clean();
echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? $_prefixVariable1 : $tmp);?>

    </title>

    <link rel="stylesheet" 
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"  
          crossorigin="anonymous" />
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['asset_css'][0], array( array('refs'=>array("layout.css")),$_smarty_tpl ) );?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1490871475cb9141245c462_47882121', "localstyle");
?>

  
  <?php echo '<script'; ?>
 type="text/javascript">
     // for Safari browser, deal with back button
     window.onpageshow = function (event) {
       if (event.persisted) {
         window.location.reload();
       }
     };
  <?php echo '</script'; ?>
>
</head>
<body>     
  <header>
    <div>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['asset_img'][0], array( array('refs'=>"header.png",'attrs'=>array('class'=>'img-responsive')),$_smarty_tpl ) );?>

      <span class='login'><?php echo (($tmp = @$_smarty_tpl->tpl_vars['session']->value->get('login')->name)===null||$tmp==='' ? '' : $tmp);?>
</span>
    </div>

    <nav class="navbar navbar-dark bg-info navbar-expand-sm">

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>'/','text'=>'Home','attrs'=>array('class'=>"navbar-brand")),$_smarty_tpl ) );?>


      <button class="navbar-toggler navbar-toggler-icon" type="button" 
              data-toggle="collapse" data-target="#navbar1">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav mr-auto">
          <?php $_smarty_tpl->_subTemplateRender('file:links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </ul>
      </div>
    </nav>    

  </header>

  <section class="container-fluid"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10638581055cb91412469111_26716596', "content");
?>
</section>

  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.12.4.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>  

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15993665705cb9141246ad43_22062317', "localscript");
?>

</body>
</html>
<?php }
/* {block "localstyle"} */
class Block_1490871475cb9141245c462_47882121 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_1490871475cb9141245c462_47882121',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_10638581055cb91412469111_26716596 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10638581055cb91412469111_26716596',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "localscript"} */
class Block_15993665705cb9141246ad43_22062317 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localscript' => 
  array (
    0 => 'Block_15993665705cb9141246ad43_22062317',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "localscript"} */
}
