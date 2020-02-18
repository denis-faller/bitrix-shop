<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponent $component
 */

//one css for all system.auth.* forms
$APPLICATION->SetAdditionalCSS("/bitrix/css/main/system.auth/flat/style.css");
?>

<?
if(!empty($arParams["~AUTH_RESULT"])):
	$text = str_replace(array("<br>", "<br />"), "\n", $arParams["~AUTH_RESULT"]["MESSAGE"]);
?>
	<div class="alert alert-danger"><?=nl2br(htmlspecialcharsbx($text))?></div>
<?endif?>

<?
if($arResult['ERROR_MESSAGE'] <> ''):
	$text = str_replace(array("<br>", "<br />"), "\n", $arResult['ERROR_MESSAGE']);
?>
	<div class="alert alert-danger"><?=nl2br(htmlspecialcharsbx($text))?></div>
<?endif?>

<?if($arResult["AUTH_SERVICES"]):?>

	<hr class="bxe-light">
<?endif?>
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2><?=GetMessage("AUTH_PLEASE_AUTH")?></h2>
	<form name="form_auth" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">

		<input type="hidden" name="AUTH_FORM" value="Y" />
		<input type="hidden" name="TYPE" value="AUTH" />
<?if (strlen($arResult["BACKURL"]) > 0):?>
		<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?endif?>
<?foreach ($arResult["POST"] as $key => $value):?>
		<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
<?endforeach?>
                            <div class="group-input">
                                <label for="username"><?=GetMessage("AUTH_LOGIN")?></label>
                                <input id="username"  type="text" name="USER_LOGIN" maxlength="255" value="<?=$arResult["LAST_LOGIN"]?>" />
                            </div>
                            <div class="group-input">
                                <label for="pass"><?=GetMessage("AUTH_PASSWORD")?></label>
                                <input id="pass" type="password" name="USER_PASSWORD" maxlength="255" autocomplete="off" />
                            </div>

<?if($arResult["CAPTCHA_CODE"]):?>
		<input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />

		<div class="bx-authform-formgroup-container dbg_captha">
			<div class="bx-authform-label-container">
				<?echo GetMessage("AUTH_CAPTCHA_PROMT")?>
			</div>
			<div class="bx-captcha"><img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /></div>
			<div class="bx-authform-input-container">
				<input type="text" name="captcha_word" maxlength="50" value="" autocomplete="off" />
			</div>
		</div>
<?endif;?>

<?if ($arResult["STORE_PASSWORD"] == "Y"):?>
                
                <div class="group-input gi-check">
                    <div class="gi-more">
                        <label for="save-pass">
                           <?=GetMessage("AUTH_REMEMBER_ME")?>
                            <input id="save-pass" type="checkbox" id="USER_REMEMBER" name="USER_REMEMBER" value="Y" />
                            <span class="checkmark"></span>
                        </label>
                        <?if ($arParams["NOT_SHOW_LINKS"] != "Y"):?>
                        <a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" rel="nofollow" class="forget-pass"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a>
                        <?endif?>
                    </div>
                </div>
<?endif?>
                <input type="submit" class="site-btn login-btn" name="Login" value="<?=GetMessage("AUTH_AUTHORIZE")?>"/>
	</form>

                        <?if($arParams["NOT_SHOW_LINKS"] != "Y" && $arResult["NEW_USER_REGISTRATION"] == "Y" && $arParams["AUTHORIZE_REGISTRATION"] != "Y"):?>
                        <div class="switch-login">
                            <a href="<?=$arResult["AUTH_REGISTER_URL"]?>" rel="nofollow" class="or-login"><?=GetMessage("AUTH_REGISTER")?></a>
                        </div>
                        <?endif?>
                    </div>
                </div>
            </div>
        </div>
    </div>     

<script type="text/javascript">
<?if (strlen($arResult["LAST_LOGIN"])>0):?>
try{document.form_auth.USER_PASSWORD.focus();}catch(e){}
<?else:?>
try{document.form_auth.USER_LOGIN.focus();}catch(e){}
<?endif?>
</script>

