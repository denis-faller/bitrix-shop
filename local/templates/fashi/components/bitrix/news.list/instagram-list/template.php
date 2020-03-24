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
$this->setFrameMode(true);
?>

<div class="instagram-photo">
<?foreach($arResult["ITEMS"] as $arItem):?>
    <div class="insta-item set-bg" data-setbg="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="<?=$arItem["PROPERTIES"]["REFERENCE"]["VALUE"]?>"><?=$arItem["NAME"]?></a></h5>
        </div>
    </div>
<?endforeach;?>
</div>