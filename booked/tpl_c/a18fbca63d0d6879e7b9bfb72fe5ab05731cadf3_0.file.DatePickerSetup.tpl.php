<?php
/* Smarty version 3.1.34-dev-7, created on 2021-09-09 16:13:10
  from '/home/litemed1/public_html/booked/tpl/Controls/DatePickerSetup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_613a32963f0f23_65113991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a18fbca63d0d6879e7b9bfb72fe5ab05731cadf3' => 
    array (
      0 => '/home/litemed1/public_html/booked/tpl/Controls/DatePickerSetup.tpl',
      1 => 1601999696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613a32963f0f23_65113991 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'datePickerDateFormat' => 
  array (
    'compiled_filepath' => '/home/litemed1/public_html/booked/tpl_c/a18fbca63d0d6879e7b9bfb72fe5ab05731cadf3_0.file.DatePickerSetup.tpl.php',
    'uid' => 'a18fbca63d0d6879e7b9bfb72fe5ab05731cadf3',
    'call_name' => 'smarty_template_function_datePickerDateFormat_791051711613a32963d81f4_22112983',
  ),
));
echo '<script'; ?>
 type="text/javascript">
    $(function () {
        $("#<?php echo $_smarty_tpl->tpl_vars['ControlId']->value;?>
").<?php if ($_smarty_tpl->tpl_vars['HasTimepicker']->value) {?>datetimepicker<?php } else { ?>datepicker<?php }?>({
            numberOfMonths: <?php echo $_smarty_tpl->tpl_vars['NumberOfMonths']->value;?>
,
            showButtonPanel: <?php echo $_smarty_tpl->tpl_vars['ShowButtonPanel']->value;?>
,
            onSelect: <?php echo $_smarty_tpl->tpl_vars['OnSelect']->value;?>
,
            dayNames: <?php echo $_smarty_tpl->tpl_vars['DayNames']->value;?>
,
            dayNamesShort: <?php echo $_smarty_tpl->tpl_vars['DayNamesShort']->value;?>
,
            dayNamesMin: <?php echo $_smarty_tpl->tpl_vars['DayNamesMin']->value;?>
,
            dateFormat: '<?php echo $_smarty_tpl->tpl_vars['DateFormat']->value;?>
',
            <?php if ($_smarty_tpl->tpl_vars['FirstDay']->value >= 0 && $_smarty_tpl->tpl_vars['FirstDay']->value <= 6) {?>
            firstDay: <?php echo $_smarty_tpl->tpl_vars['FirstDay']->value;?>
,
            <?php }?>
            monthNames: <?php echo $_smarty_tpl->tpl_vars['MonthNames']->value;?>
,
            monthNamesShort: <?php echo $_smarty_tpl->tpl_vars['MonthNamesShort']->value;?>
,
            currentText: "<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Today'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
echo strtr($_prefixVariable1, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
            timeFormat: "<?php echo $_smarty_tpl->tpl_vars['TimeFormat']->value;?>
",
            altFieldTimeOnly: false,
            showWeek: <?php if ($_smarty_tpl->tpl_vars['ShowWeekNumbers']->value) {?>true<?php } else { ?>false<?php }?>,
            controlType: 'select'
            <?php if ($_smarty_tpl->tpl_vars['AltId']->value != '') {?>
            ,
            altField: "#<?php echo $_smarty_tpl->tpl_vars['AltId']->value;?>
",
            altFormat: '<?php echo $_smarty_tpl->tpl_vars['AltFormat']->value;?>
'
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['DefaultDate']->value) {?>
            ,
            defaultDate: <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'datePickerDateFormat', array('date'=>$_smarty_tpl->tpl_vars['DefaultDate']->value), true);?>

            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['MinDate']->value) {?>
            ,
            minDate: <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'datePickerDateFormat', array('date'=>$_smarty_tpl->tpl_vars['MinDate']->value), true);?>

            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['MaxDate']->value) {?>
            ,
            maxDate: <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'datePickerDateFormat', array('date'=>$_smarty_tpl->tpl_vars['MaxDate']->value->AddDays(1)), true);?>

            <?php }?>
            });

        <?php if ($_smarty_tpl->tpl_vars['AltId']->value != '') {?>
        $("#<?php echo $_smarty_tpl->tpl_vars['ControlId']->value;?>
").change(function () {
            if ($(this).val() == '') {
                $("#<?php echo $_smarty_tpl->tpl_vars['AltId']->value;?>
").val('');
            }
            else {
                var dateVal = $("#<?php echo $_smarty_tpl->tpl_vars['ControlId']->value;?>
").<?php if ($_smarty_tpl->tpl_vars['HasTimepicker']->value) {?>datetimepicker<?php } else { ?>datepicker<?php }?>('getDate');
                var dateString = dateVal.getFullYear() + '-' + ('0' + (dateVal.getMonth() + 1)).slice(-2) + '-' + ('0' + dateVal.getDate()).slice(-2);
                <?php if ($_smarty_tpl->tpl_vars['HasTimepicker']->value) {?>
                dateString = dateString + ' ' + dateVal.getHours() + ':' + dateVal.getMinutes();
                <?php }?>
                $("#<?php echo $_smarty_tpl->tpl_vars['AltId']->value;?>
").val(dateString);
            }
        });
        <?php }?>

    });
<?php echo '</script'; ?>
><?php }
/* smarty_template_function_datePickerDateFormat_791051711613a32963d81f4_22112983 */
if (!function_exists('smarty_template_function_datePickerDateFormat_791051711613a32963d81f4_22112983')) {
function smarty_template_function_datePickerDateFormat_791051711613a32963d81f4_22112983(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

new Date(<?php echo $_smarty_tpl->tpl_vars['date']->value->Year();?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value->Month()-1;?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value->Day();?>
)
<?php
}}
/*/ smarty_template_function_datePickerDateFormat_791051711613a32963d81f4_22112983 */
}
