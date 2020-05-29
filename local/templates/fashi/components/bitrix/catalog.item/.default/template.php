<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogProductsViewedComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);

if (isset($arResult['ITEM'])):
	$item = $arResult['ITEM'];

?>       
    <div class="product-item">
        <div class="pi-pic">
            <img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" alt="">
            <?if($item["OFFERS"][0]["PRICES"]["BASE"]["DISCOUNT_DIFF"] != 0):?>
            <div class="sale">Sale</div>
            <?endif;?>
            <div class="icon">
                <i class="icon_heart_alt <? if (in_array($item["ID"], $arResult["DELAY_ITEMS"])) echo 'in_wishlist ';?>"
                onclick="add2wish(
                    '<?=$item["ID"]?>',
                     '<?=$item["OFFERS"][0]["CATALOG_PRICE_ID_1"]?>',
                     '<?=$item["OFFERS"][0]["CATALOG_PRICE_1"]?>',
                     '<?=$item["NAME"]?>',
                     '<?=$item["DETAIL_PAGE_URL"]?>',
                     this)"></i>
            </div>
        </div>
        <div class="pi-text">
            <a href="<?=$item["DETAIL_PAGE_URL"]?>">
                <h5><?=$item["NAME"]?></h5>
            </a>
            <div class="product-price">
                <?if($item["OFFERS"][0]["PRICES"]["BASE"]["DISCOUNT_DIFF"] == 0):?>
                <?=$item["OFFERS"][0]["PRICES"]["BASE"]["PRINT_VALUE_NOVAT"]?>
                <?else:?>
                <?=$item["OFFERS"][0]["PRICES"]["BASE"]["PRINT_DISCOUNT_VALUE_NOVAT"]?>
                <span><?=$item["OFFERS"][0]["PRICES"]["BASE"]["PRINT_VALUE_NOVAT"]?></span>
                <?endif;?>
            </div>
        </div>
    </div>
<?
endif;
?>