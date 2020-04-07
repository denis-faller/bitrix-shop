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

<div class="partner-logo">
    <div class="container">
            <div class="logo-carousel owl-carousel">
                <?foreach($arResult["ITEMS"] as $arItem):?>
                    <div class="logo-item">
                        <div class="tablecell-inner">
                            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
                        </div>
                    </div>
                <?endforeach;?>
            </div>
    </div>
</div>