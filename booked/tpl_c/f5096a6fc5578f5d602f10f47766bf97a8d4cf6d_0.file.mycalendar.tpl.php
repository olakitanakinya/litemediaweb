<?php
/* Smarty version 3.1.34-dev-7, created on 2021-09-09 16:25:22
  from '/home/litemed1/public_html/booked/tpl/Calendar/mycalendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_613a3572b8aeb8_10190791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5096a6fc5578f5d602f10f47766bf97a8d4cf6d' => 
    array (
      0 => '/home/litemed1/public_html/booked/tpl/Calendar/mycalendar.tpl',
      1 => 1601999696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Calendar/calendar-page-base.tpl' => 1,
  ),
),false)) {
function content_613a3572b8aeb8_10190791 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo Pages::MY_CALENDAR;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('pageUrl', $_prefixVariable1);
$_smarty_tpl->_assignInScope('pageIdSuffix', "my-calendar");
$_smarty_tpl->_assignInScope('subscriptionTpl', "mycalendar.subscription.tpl");
$_smarty_tpl->_subTemplateRender("file:Calendar/calendar-page-base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
