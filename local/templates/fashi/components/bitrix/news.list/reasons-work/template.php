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

<div class="benefit-items">
    <div class="row">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <div class="col-lg-4">
            <div class="single-benefit">
                  <div class="sb-icon">
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
                    </div>
                    <div class="sb-text">
                        <h6><?=$arItem["NAME"]?></h6>
                        <p><?=$arItem["PREVIEW_TEXT"]?></p>
                    </div>
            </div>
        </div>
    <?endforeach;?>
    </div>
</div>