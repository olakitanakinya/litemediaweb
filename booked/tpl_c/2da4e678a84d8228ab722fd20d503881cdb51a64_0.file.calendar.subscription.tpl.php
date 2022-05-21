<?php
/* Smarty version 3.1.34-dev-7, created on 2021-09-09 16:25:34
  from '/home/litemed1/public_html/booked/tpl/Calendar/calendar.subscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_613a357ed8c326_88796410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2da4e678a84d8228ab722fd20d503881cdb51a64' => 
    array (
      0 => '/home/litemed1/public_html/booked/tpl/Calendar/calendar.subscription.tpl',
      1 => 1601999696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613a357ed8c326_88796410 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="calendarSubscription" class="calendar-subscription">
    <?php if ($_smarty_tpl->tpl_vars['IsSubscriptionAllowed']->value && $_smarty_tpl->tpl_vars['IsSubscriptionEnabled']->value) {?>
        <a id="subscribeToCalendar"
           href="<?php echo $_smarty_tpl->tpl_vars['SubscriptionUrl']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"calendar-share.png"),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'SubscribeToCalendar'),$_smarty_tpl ) );?>
</a>
        <br/>
        URL:
        <span class="note"><?php echo $_smarty_tpl->tpl_vars['SubscriptionUrl']->value;?>
</span>
    <?php }?>
</div>

<?php }
}
