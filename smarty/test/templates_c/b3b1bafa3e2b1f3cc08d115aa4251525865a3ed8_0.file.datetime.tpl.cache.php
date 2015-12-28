<?php
/* Smarty version 3.1.28, created on 2015-12-21 14:20:16
  from "D:\xampp\htdocs\phpPractice\phpdemo\smarty\test\tpl\datetime.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5677fc9100cb12_41285046',
  'file_dependency' => 
  array (
    'b3b1bafa3e2b1f3cc08d115aa4251525865a3ed8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\phpPractice\\phpdemo\\smarty\\test\\tpl\\datetime.tpl',
      1 => 1450704011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5677fc9100cb12_41285046 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_test')) require_once 'D:\\xampp\\htdocs\\phpPractice\\phpdemo\\smarty\\smarty\\plugins\\modifier.test.php';
$_smarty_tpl->compiled->nocache_hash = '90525677fc90ebc486_19752692';
echo smarty_modifier_test($_smarty_tpl->tpl_vars['time']->value,'Y-m-d H:i:s');
}
}
