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
    <div class="banner-section spad">
        <div class="container-fluid">
        <?foreach($arResult["ITEMS"] as $arItem):?>
        <?if($index == 0):?>
	<div class="row">
        <?endif;?>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
                        <div class="inner-text">
                        <h4><?=$arItem["NAME"]?></h4>
                        </div>
                    </div>
                </div>
        <?if($index == 2 || $index == count($arResult["ITEMS"])-1):
        $index = 0; 
        ?>    
	</div>
        <?else:
        $index++;    
        ?>
        <?endif;?>
<?endforeach;?>
    </div>
</div>