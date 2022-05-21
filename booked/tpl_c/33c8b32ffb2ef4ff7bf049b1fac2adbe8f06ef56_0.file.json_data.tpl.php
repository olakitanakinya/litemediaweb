<?php
/* Smarty version 3.1.34-dev-7, created on 2021-09-09 16:16:27
  from '/home/litemed1/public_html/booked/tpl/json_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_613a335be24d15_40573325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33c8b32ffb2ef4ff7bf049b1fac2adbe8f06ef56' => 
    array (
      0 => '/home/litemed1/public_html/booked/tpl/json_data.tpl',
      1 => 1601999696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613a335be24d15_40573325 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
