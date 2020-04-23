<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>
<div class="search-form">
<h4>Search</h4>    
<form action="<?=$arResult["FORM_ACTION"]?>">
    <input type="text" name="q" value="" size="15" maxlength="50" />
    <button name="s" type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>"><i class="fa fa-search"></i></button>
</form>
</div>