<?php
/* Smarty version 3.1.34-dev-7, created on 2021-09-09 16:15:00
  from '/home/litemed1/public_html/booked/tpl/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_613a3304013d10_41586582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a389e4af45f6a0d73edfeac1a5408075a078c6c2' => 
    array (
      0 => '/home/litemed1/public_html/booked/tpl/register.tpl',
      1 => 1601999696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:globalheader.tpl' => 1,
    'file:javascript-includes.tpl' => 1,
    'file:globalfooter.tpl' => 1,
  ),
),false)) {
function content_613a3304013d10_41586582 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/litemed1/public_html/booked/lib/external/Smarty/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
$_smarty_tpl->_subTemplateRender('file:globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Validator'=>true), 0, false);
?>

<div id="page-register">

    <div class="error hidden" id="registrationError">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'UnknownError'),$_smarty_tpl ) );?>

    </div>

    <div id="registration-box" class="default-box col-xs-12 col-sm-8 col-sm-offset-2">

        <form method="post" ajaxAction="<?php echo RegisterActions::Register;?>
" id="form-register"
              action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" role="form"
              data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
              data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
              data-bv-feedbackicons-validating="glyphicon glyphicon-refresh"
              data-bv-feedbackicons-required="glyphicon glyphicon-asterisk"
              data-bv-submitbuttons='button[type="submit"]'
              data-bv-onerror="enableButton"
              data-bv-onsuccess="enableButton"
              data-bv-live="enabled">

            <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'RegisterANewAccount'),$_smarty_tpl ) );?>
</h1>

            <div class="validationSummary alert alert-danger no-show" id="validationErrors">
                <ul>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"uniqueemail",'key'=>"UniqueEmailRequired"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"uniqueusername",'key'=>"UniqueUsernameRequired"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"username",'key'=>"UserNameRequired"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"emailformat",'key'=>"ValidEmailRequired"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"fname",'key'=>"FirstNameRequired"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"lname",'key'=>"LastNameRequired"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"passwordmatch",'key'=>"PwMustMatch"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"passwordcomplexity",'key'=>''),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"captcha",'key'=>"CaptchaMustMatch"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"additionalattributes",'key'=>''),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"requiredEmailDomain",'key'=>"InvalidEmailDomain"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"termsOfService",'key'=>"TermsOfServiceError"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"phoneRequired",'key'=>"PhoneRequired"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"positionRequired",'key'=>"PositionRequired"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0], array( array('id'=>"organizationRequired",'key'=>"OrganizationRequired"),$_smarty_tpl ) );?>

                </ul>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6" id="username">
                    <div class="form-group">
                        <label class="reg" for="login"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"Username"),$_smarty_tpl ) );?>
</label>
                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'UserNameRequired'),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0], array( array('name'=>"LOGIN",'value'=>"Login",'required'=>"required",'data-bv-notempty'=>"true",'data-bv-notempty-message'=>$_prefixVariable1),$_smarty_tpl ) );?>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-6" id="email">
                    <div class="form-group">
                        <label class="reg" for="email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"Email"),$_smarty_tpl ) );?>
</label>
                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ValidEmailRequired'),$_smarty_tpl ) );
$_prefixVariable2=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'ValidEmailRequired'),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0], array( array('type'=>"email",'name'=>"EMAIL",'class'=>"input",'value'=>"Email",'required'=>"required",'data-bv-notempty'=>"true",'data-bv-notempty-message'=>$_prefixVariable2,'data-bv-emailaddress'=>"true",'data-bv-emailaddress-message'=>$_prefixVariable3),$_smarty_tpl ) );?>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6" id="password">
                    <div class="form-group">
                        <label class="reg" for="password"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"Password"),$_smarty_tpl ) );?>
</label>
                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PwMustMatch'),$_smarty_tpl ) );
$_prefixVariable4=ob_get_clean();
ob_start();
echo FormKeys::PASSWORD_CONFIRM;
$_prefixVariable5=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PwMustMatch'),$_smarty_tpl ) );
$_prefixVariable6=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0], array( array('type'=>"password",'name'=>"PASSWORD",'value'=>'','required'=>"required",'data-bv-notempty'=>"true",'data-bv-notempty-message'=>$_prefixVariable4,'data-bv-identical'=>"true",'data-bv-identical-field'=>$_prefixVariable5,'data-bv-identical-message'=>$_prefixVariable6),$_smarty_tpl ) );?>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-6" id="password-confirm">
                    <div class="form-group">
                        <label class="reg" for="passwordConfirm"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"PasswordConfirmation"),$_smarty_tpl ) );?>
</label>
                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PwMustMatch'),$_smarty_tpl ) );
$_prefixVariable7=ob_get_clean();
ob_start();
echo FormKeys::PASSWORD;
$_prefixVariable8=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PwMustMatch'),$_smarty_tpl ) );
$_prefixVariable9=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0], array( array('type'=>"password",'name'=>"PASSWORD_CONFIRM",'value'=>'','required'=>"required",'data-bv-notempty'=>"true",'data-bv-notempty-message'=>$_prefixVariable7,'data-bv-identical'=>"true",'data-bv-identical-field'=>$_prefixVariable8,'data-bv-identical-message'=>$_prefixVariable9),$_smarty_tpl ) );?>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6" id="first-name">
                    <div class="form-group">
                        <label class="reg" for="fname"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"FirstName"),$_smarty_tpl ) );?>
</label>
                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'FirstNameRequired'),$_smarty_tpl ) );
$_prefixVariable10=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0], array( array('name'=>"FIRST_NAME",'class'=>"input",'value'=>"FirstName",'required'=>"required",'data-bv-notempty'=>"true",'data-bv-notempty-message'=>$_prefixVariable10),$_smarty_tpl ) );?>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-6" id="last-name">
                    <div class="form-group">
                        <label class="reg" for="lname"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"LastName"),$_smarty_tpl ) );?>
</label>
                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'LastNameRequired'),$_smarty_tpl ) );
$_prefixVariable11=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0], array( array('name'=>"LAST_NAME",'class'=>"input",'value'=>"LastName",'required'=>"required",'data-bv-notempty'=>"true",'data-bv-notempty-message'=>$_prefixVariable11),$_smarty_tpl ) );?>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6" id="default-page">
                    <div class="form-group">
                        <label class="reg" for="homepage"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"DefaultPage"),$_smarty_tpl ) );?>
</label>
                        <select <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'DEFAULT_HOMEPAGE'),$_smarty_tpl ) );?>
 id="homepage" class="form-control">
                            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['HomepageValues']->value,'output'=>$_smarty_tpl->tpl_vars['HomepageOutput']->value,'selected'=>$_smarty_tpl->tpl_vars['Homepage']->value),$_smarty_tpl);?>

                        </select>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6" id="timezone">
                    <label class="reg" for="timezoneDropDown"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"Timezone"),$_smarty_tpl ) );?>
</label>

                    <div class="input-group">
                        <span class="input-group-addon"><a href="#" id="detectTimezone"
                                                           title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Detect'),$_smarty_tpl ) );?>
"><i class="fa fa-clock-o"></i></a></span>
                        <select <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'TIMEZONE'),$_smarty_tpl ) );?>
 class="form-control" id="timezoneDropDown">
                            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['TimezoneValues']->value,'output'=>$_smarty_tpl->tpl_vars['TimezoneOutput']->value,'selected'=>$_smarty_tpl->tpl_vars['Timezone']->value),$_smarty_tpl);?>

                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6" id="phone">
                    <div class="form-group">
                        <label class="reg" for="phone"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"Phone"),$_smarty_tpl ) );?>
</label>
                        <input type="text" id="phone" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>"PHONE"),$_smarty_tpl ) );?>
 class="form-control" size="20"
                                <?php if ($_smarty_tpl->tpl_vars['RequirePhone']->value) {?>required="required"
                                    data-bv-notempty="true"
                                    data-bv-notempty-message="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PhoneRequired'),$_smarty_tpl ) );?>
"<?php }?>
                        />
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6" id="organization">
                    <div class="form-group">
                        <label class="reg" for="txtOrganization"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"Organization"),$_smarty_tpl ) );?>
</label>
                        <input type="text" id="txtOrganization" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>"ORGANIZATION"),$_smarty_tpl ) );?>
 class="form-control"
                               size="20"
                                <?php if ($_smarty_tpl->tpl_vars['RequireOrganization']->value) {?>required="required"
                                    data-bv-notempty="true"
                                    data-bv-notempty-message="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'OrganizationRequired'),$_smarty_tpl ) );?>
"<?php }?>/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6" id="position">
                    <div class="form-group">
                        <label class="reg" for="txtPosition"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"Position"),$_smarty_tpl ) );?>
</label>
                        <input type="text" id="txtPosition" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>"POSITION"),$_smarty_tpl ) );?>
 class="form-control"
                               size="20" <?php if ($_smarty_tpl->tpl_vars['RequirePosition']->value) {?>required="required"
                            data-bv-notempty="true"
                            data-bv-notempty-message="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'PositionRequired'),$_smarty_tpl ) );?>
"<?php }?>/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <?php if (count($_smarty_tpl->tpl_vars['Attributes']->value) > 0) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['Attributes']->value[0]),$_smarty_tpl ) );?>

                    <?php }?>
                </div>

            </div>

            <?php if (count($_smarty_tpl->tpl_vars['Attributes']->value) > 1) {?>
                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['Attributes']->value)-1+1 - (1) : 1-(count($_smarty_tpl->tpl_vars['Attributes']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                    <?php if ($_smarty_tpl->tpl_vars['i']->value%2 == 1) {?>
                        <div class="row">
                    <?php }?>
                    <div class="col-xs-12 col-sm-6">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['Attributes']->value[$_smarty_tpl->tpl_vars['i']->value]),$_smarty_tpl ) );?>

                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['i']->value%2 == 0 || $_smarty_tpl->tpl_vars['i']->value == count($_smarty_tpl->tpl_vars['Attributes']->value)-1) {?>
                        </div>
                    <?php }?>
                <?php }
}
?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['EnableCaptcha']->value) {?>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0], array( array('type'=>"CaptchaControl"),$_smarty_tpl ) );?>

                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <input type="hidden" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'CAPTCHA'),$_smarty_tpl ) );?>
 value=""/>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['Terms']->value != null) {?>
                <div class="row" id="termsAndConditions">
                    <div class="col-xs-12">
                        <div class="checkbox">
                            <input type="checkbox"
                                   id="termsAndConditionsAcknowledgement" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'TOS_ACKNOWLEDGEMENT'),$_smarty_tpl ) );?>
/>
                            <label for="termsAndConditionsAcknowledgement"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'IAccept'),$_smarty_tpl ) );?>
</label>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['Terms']->value->DisplayUrl();?>
" style="vertical-align: middle"
                               target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'TheTermsOfService'),$_smarty_tpl ) );?>
</a>
                        </div>
                    </div>
                </div>
            <?php }?>

            <div>
                <button type="submit" name="<?php echo Actions::REGISTER;?>
" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Register'),$_smarty_tpl ) );?>
"
                        class="btn btn-primary col-xs-12" id="btnUpdate"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Register'),$_smarty_tpl ) );?>
</button>
            </div>
        </form>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Validator'=>true), 0, false);
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"js/jstz.min.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"ajax-helpers.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"autocomplete.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"registration.js"),$_smarty_tpl ) );?>


    <?php echo '<script'; ?>
 type="text/javascript">

        function enableButton() {
            $('#form-register').find('button').removeAttr('disabled');
        }

        $(document).ready(function () {
            $('#detectTimezone').click(function (e) {
                e.preventDefault();

                if (Intl.DateTimeFormat) {
                    var timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
                } else {
                    var timezone = jstz.determine_timezone().name();
                }

                $('#timezoneDropDown').val(timezone);
            });

            var registrationPage = new Registration();
            registrationPage.init();

            var $frmRegister = $('#form-register');

            $frmRegister.on('init.field.bv', function (e, data) {
                var $parent = data.element.parents('.form-group');
                var $icon = $parent.find('.form-control-feedback[data-bv-icon-for="' + data.field + '"]');
                var validators = data.bv.getOptions(data.field).validators;

                if (validators.notEmpty) {
                    $icon.addClass('glyphicon glyphicon-asterisk').show();
                }
            })
                .off('success.form.bv')
                .on('success.form.bv', function (e) {
                    e.preventDefault();
                });

            $frmRegister.bootstrapValidator();

            $('#txtOrganization').orgAutoComplete("ajax/autocomplete.php?type=<?php echo AutoCompleteType::Organization;?>
");

        });
    <?php echo '</script'; ?>
>

    <div id="colorbox">
        <div id="modalDiv" class="wait-box">
            <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Working'),$_smarty_tpl ) );?>
</h3>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0], array( array('src'=>"reservation_submitting.gif"),$_smarty_tpl ) );?>

        </div>
    </div>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
