<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

   <section class="deal-of-week set-bg spad" data-setbg="<?=SITE_TEMPLATE_PATH?>/img/time-bg.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2><?=$arResult["DEAL_WEEK"]["NAME"]?></h2>
                    <p><?=$arResult["DEAL_WEEK"]["PREVIEW_TEXT"]?></p>
                    <div class="product-price">
                        <?=$arResult["DEAL_WEEK"]["PRICE"]?>
                        <span>/ <?=$arResult["DEAL_WEEK"]["PROPERTY_PRODUCT_NAME"]?></span>
                    </div>
                </div>
                <div class = "countdown-date" data-value = "<?=date("m/d/Y", strtotime($arResult["DEAL_WEEK"]["PROPERTY_DATE_END_SALE_VALUE"]))?>"></div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span><?=date("d", $arResult["DEAL_WEEK"]["TIME_LEFT"])?></span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span><?=date("H", $arResult["DEAL_WEEK"]["TIME_LEFT"])?></span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span><?=date("i", $arResult["DEAL_WEEK"]["TIME_LEFT"])?></span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span><?=date("s", $arResult["DEAL_WEEK"]["TIME_LEFT"])?></span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="<?=$arResult["DEAL_WEEK"]["PROPERTY_PRODUCT_DETAIL_PAGE_URL"]?>" class="primary-btn">Купить сейчас</a>
            </div>
        </div>
    </section>