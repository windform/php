<?php
/* Smarty version 3.1.28, created on 2015-12-21 14:39:25
  from "D:\xampp\htdocs\phpPractice\phpdemo\smarty\test\tpl\content.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5678010d129a94_07433392',
  'file_dependency' => 
  array (
    'acee6acc640795b7981bbc832766ebb785f119d7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\phpPractice\\phpdemo\\smarty\\test\\tpl\\content.tpl',
      1 => 1450705158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5678010d129a94_07433392 ($_smarty_tpl) {
if (!is_callable('smarty_block_test2')) require_once 'D:\\xampp\\htdocs\\phpPractice\\phpdemo\\smarty\\smarty\\plugins\\block.test2.php';
$_smarty_tpl->compiled->nocache_hash = '146915678010d0b13f7_85469903';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('test2', array('replace'=>'true','maxnum'=>30)); $_block_repeat=true; echo smarty_block_test2(array('replace'=>'true','maxnum'=>30), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo $_smarty_tpl->tpl_vars['str']->value;?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_test2(array('replace'=>'true','maxnum'=>30), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }
}
