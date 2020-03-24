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

<div class="col-lg-3 offset-lg-1">
<?foreach($arResult["ITEMS"] as $arItem):?>
    <div class="product-large set-bg" data-setbg="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
        <h2><?=$arItem["NAME"]?></h2>
        <a href="<?=$arItem["PROPERTIES"]["REFERENCE"]["VALUE"]?>">Подробнее</a>
    </div>
<?endforeach;?>
</div>