<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>

<?=$arResult["FORM_NOTE"]?>

<?if ($arResult["isFormNote"] != "Y")
{
?>
<?
/***********************************************************************************
						form questions
***********************************************************************************/
?>
    <div class="contact-form">
        <div class="leave-comment">
           <h4><?=$arResult["FORM_TITLE"]?></h4>
           <div class="comment-form">
           <?=$arResult["FORM_HEADER"]?>
               <div class="row">
                   	<?
                        foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
                        {
                        ?>
                            <div class="<?if($arQuestion["STRUCTURE"][0]["FIELD_TYPE"] == "textarea"):?>col-lg-12<?else:?>col-lg-6<?endif;?>">

                                                <?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
                                                <span class="error-fld" title="<?=htmlspecialcharsbx($arResult["FORM_ERRORS"][$FIELD_SID])?>"></span>
                                                <?endif;?>
                                                <?=$arQuestion["IS_INPUT_CAPTION_IMAGE"] == "Y" ? "<br />".$arQuestion["IMAGE"]["HTML_CODE"] : ""?>
                                                <?=$arQuestion["HTML_CODE"]?>
                                                <?if($arQuestion["STRUCTURE"][0]["FIELD_TYPE"] == "textarea"):?>
                                                <button type="submit" class="site-btn"><?=htmlspecialcharsbx(strlen(trim($arResult["arForm"]["BUTTON"])) <= 0 ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?></button>
                                                <?endif;?>
                            </div>
                        <?
                        } //endwhile
                        ?>
               </div>
            </div>
           </div>
        </div>
<?
if($arResult["isUseCaptcha"] == "Y")
{
?>
		<tr>
			<th colspan="2"><b><?=GetMessage("FORM_CAPTCHA_TABLE_TITLE")?></b></th>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="hidden" name="captcha_sid" value="<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" /><img src="/bitrix/tools/captcha.php?captcha_sid=<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" width="180" height="40" /></td>
		</tr>
		<tr>
			<td><?=GetMessage("FORM_CAPTCHA_FIELD_TITLE")?><?=$arResult["REQUIRED_SIGN"];?></td>
			<td><input type="text" name="captcha_word" size="30" maxlength="50" value="" class="inputtext" /></td>
		</tr>
<?
} // isUseCaptcha
?>
    <input <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> type="hidden" name="web_form_submit" value="<?=htmlspecialcharsbx(strlen(trim($arResult["arForm"]["BUTTON"])) <= 0 ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>" />
    <?if ($arResult["F_RIGHT"] >= 15):?>
    &nbsp;<input type="hidden" name="web_form_apply" value="Y" /><input type="hidden" name="web_form_apply" value="<?=GetMessage("FORM_APPLY")?>" />
    <?endif;?>
    &nbsp;<input type="hidden" value="<?=GetMessage("FORM_RESET");?>" />
			
<?=$arResult["FORM_FOOTER"]?>
<?
} //endif (isFormNote)
?>