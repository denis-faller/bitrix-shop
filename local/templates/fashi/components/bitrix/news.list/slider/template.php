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
    <section class="hero-section">
        <div class="hero-items owl-carousel">
<?foreach($arResult["ITEMS"] as $arItem):?>
	 <div class="single-hero-items set-bg" data-setbg="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span><?=$arItem["PREVIEW_TEXT"]?></span>
                            <h1><?=$arItem["NAME"]?></h1>
                            <p><?=$arItem["DETAIL_TEXT"]?></p>
                            <a href="<?=$arItem["PROPERTIES"]["REFERENCE"]["VALUE"]?>" class="primary-btn">Подробнее</a>
                        </div>
                    </div>
                    <?if(isset($arItem["PROPERTIES"]["DISCOUNT"]["VALUE"])):?>
                    <div class="off-card">
                        <h2>Скидка <span><?=$arItem["PROPERTIES"]["DISCOUNT"]["VALUE"]?>%</span></h2>
                    </div>
                    <?endif;?>
                </div>
	</div>
<?endforeach;?>
    </div>
</section>