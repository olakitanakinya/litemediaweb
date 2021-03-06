<?php
/* Smarty version 3.1.34-dev-7, created on 2021-09-09 16:25:22
  from '/home/litemed1/public_html/booked/tpl/Calendar/calendar-page-base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_613a3572bddc89_70532361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6a7e945f98aaf52d7e0f800263aadd10c76a8bb' => 
    array (
      0 => '/home/litemed1/public_html/booked/tpl/Calendar/calendar-page-base.tpl',
      1 => 1601999696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:globalheader.tpl' => 1,
    'file:Calendar/calendar.filter.tpl' => 1,
    'file:javascript-includes.tpl' => 1,
    'file:globalfooter.tpl' => 1,
  ),
),false)) {
function content_613a3572bddc89_70532361 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Select2'=>true,'Qtip'=>true,'Fullcalendar'=>true,'cssFiles'=>'scripts/css/jqtree.css','printCssFiles'=>'css/calendar.print.css'), 0, false);
?>

<div id="page-<?php echo $_smarty_tpl->tpl_vars['pageIdSuffix']->value;?>
">
    <?php $_smarty_tpl->_subTemplateRender('file:Calendar/calendar.filter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="subscriptionContainer">
        <?php $_smarty_tpl->_subTemplateRender("Calendar/".((string)$_smarty_tpl->tpl_vars['subscriptionTpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('IsSubscriptionAllowed'=>$_smarty_tpl->tpl_vars['IsSubscriptionAllowed']->value,'IsSubscriptionEnabled'=>$_smarty_tpl->tpl_vars['IsSubscriptionEnabled']->value,'SubscriptionUrl'=>$_smarty_tpl->tpl_vars['SubscriptionUrl']->value), 0, true);
?>
    </div>

    <div id="calendar"></div>

    <div id="dayDialog" class="default-box-shadow">
        <?php if (!$_smarty_tpl->tpl_vars['HideCreate']->value) {?><a href="#" id="dayDialogCreate"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"tick.png"),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'CreateReservation'),$_smarty_tpl ) );?>
</a><?php }?>
        <a href="#" id="dayDialogView"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"search.png"),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ViewDay'),$_smarty_tpl ) );?>
</a>
        <a href="#" id="dayDialogCancel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"slash.png"),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Cancel'),$_smarty_tpl ) );?>
</a>
    </div>

    <div class="modal fade" id="moveErrorDialog" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="errorModalLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ErrorMovingReservation'),$_smarty_tpl ) );?>
</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger">
                        <ul id="moveErrorsList"></ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['ok_button'][0], array( array('id'=>"moveErrorOk"),$_smarty_tpl ) );?>

                </div>
            </div>
        </div>
    </div>

    <form id="moveReservationForm">
        <input id="moveReferenceNumber" type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'REFERENCE_NUMBER'),$_smarty_tpl ) );?>
 />
        <input id="moveStartDate" type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'BEGIN_DATE'),$_smarty_tpl ) );?>
 />
        <input id="moveResourceId" type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'RESOURCE_ID'),$_smarty_tpl ) );?>
 value="0" />
        <input id="moveSourceResourceId" type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'ORIGINAL_RESOURCE_ID'),$_smarty_tpl ) );?>
 value="0" />
    </form>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0], array( array(),$_smarty_tpl ) );?>


    <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Select2'=>true,'Qtip'=>true,'Fullcalendar'=>true), 0, false);
?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"reservationPopup.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"calendar.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"ajax-helpers.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"autocomplete.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/tree.jquery.js"),$_smarty_tpl ) );?>


    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {

            var options = {
                view: '<?php echo strtr($_smarty_tpl->tpl_vars['CalendarType']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                defaultDate: moment('<?php echo $_smarty_tpl->tpl_vars['DisplayDate']->value->Format('Y-m-d');?>
', 'YYYY-MM-DD'),
                todayText: '<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Today'),$_smarty_tpl ) );
$_prefixVariable2 = ob_get_clean();
echo strtr($_prefixVariable2, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                dayText: '<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Day'),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
echo strtr($_prefixVariable3, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                monthText: '<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Month'),$_smarty_tpl ) );
$_prefixVariable4 = ob_get_clean();
echo strtr($_prefixVariable4, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                weekText: '<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Week'),$_smarty_tpl ) );
$_prefixVariable5 = ob_get_clean();
echo strtr($_prefixVariable5, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                dayClickUrl: '<?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
?ct=<?php echo CalendarTypes::Day;?>
&sid=<?php echo strtr($_smarty_tpl->tpl_vars['ScheduleId']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
&rid=<?php echo strtr($_smarty_tpl->tpl_vars['ResourceId']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
&gid=<?php echo strtr($_smarty_tpl->tpl_vars['GroupId']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                dayClickUrlTemplate: '<?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
?ct=<?php echo CalendarTypes::Day;?>
&sid=[sid]&rid=[rid]&gid=[gid]',
                dayNames: <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['js_array'][0], array( array('array'=>$_smarty_tpl->tpl_vars['DayNames']->value),$_smarty_tpl ) );?>
,
                dayNamesShort: <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['js_array'][0], array( array('array'=>$_smarty_tpl->tpl_vars['DayNamesShort']->value),$_smarty_tpl ) );?>
,
                monthNames: <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['js_array'][0], array( array('array'=>$_smarty_tpl->tpl_vars['MonthNames']->value),$_smarty_tpl ) );?>
,
                monthNamesShort: <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['js_array'][0], array( array('array'=>$_smarty_tpl->tpl_vars['MonthNamesShort']->value),$_smarty_tpl ) );?>
,
                timeFormat: '<?php echo $_smarty_tpl->tpl_vars['TimeFormat']->value;?>
',
                dayMonth: '<?php echo $_smarty_tpl->tpl_vars['DateFormat']->value;?>
',
                firstDay: <?php echo $_smarty_tpl->tpl_vars['FirstDay']->value;?>
,
                reservationUrl: '<?php echo $_smarty_tpl->tpl_vars['CreateReservationPage']->value;?>
?sid=<?php echo strtr($_smarty_tpl->tpl_vars['ScheduleId']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
&rid=<?php echo strtr($_smarty_tpl->tpl_vars['ResourceId']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                reservationUrlTemplate: '<?php echo $_smarty_tpl->tpl_vars['CreateReservationPage']->value;?>
?sid=[sid]&rid=[rid]',
                reservable: true,
                eventsUrl: '<?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
',
                eventsData: {
                    dr: 'events',
                    sid: '<?php echo strtr($_smarty_tpl->tpl_vars['ScheduleId']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    rid: '<?php echo strtr($_smarty_tpl->tpl_vars['ResourceId']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    gid: '<?php echo strtr($_smarty_tpl->tpl_vars['GroupId']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
                },
                getSubscriptionUrl: '<?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
?dr=subscription',
                subscriptionEnableUrl: '<?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo CalendarActions::ActionEnableSubscription;?>
',
                subscriptionDisableUrl: '<?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo CalendarActions::ActionDisableSubscription;?>
',
                moveReservationUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/reservation_move.php",
                returnTo: '<?php echo $_smarty_tpl->tpl_vars['pageUrl']->value;?>
',
                autocompleteUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/autocomplete.php?type=<?php echo AutoCompleteType::User;?>
",
                showWeekNumbers: <?php if ($_smarty_tpl->tpl_vars['ShowWeekNumbers']->value) {?>true<?php } else { ?>false<?php }?>
            };

            var calendar = new Calendar(options);
            calendar.init();

            calendar.bindResourceGroups(<?php echo $_smarty_tpl->tpl_vars['ResourceGroupsAsJson']->value;?>
, <?php echo (($tmp = @$_smarty_tpl->tpl_vars['SelectedGroupNode']->value)===null||$tmp==='' ? 0 : $tmp);?>
);

        });
    <?php echo '</script'; ?>
>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
