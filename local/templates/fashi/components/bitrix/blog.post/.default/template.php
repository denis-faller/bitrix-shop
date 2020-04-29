<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!$this->__component->__parent || empty($this->__component->__parent->__name) || $this->__component->__parent->__name != "bitrix:blog"):
	$GLOBALS['APPLICATION']->SetAdditionalCSS('/bitrix/components/bitrix/blog/templates/.default/style.css');
	$GLOBALS['APPLICATION']->SetAdditionalCSS('/bitrix/components/bitrix/blog/templates/.default/themes/blue/style.css');
endif;
?>
<?CUtil::InitJSCore(array("image"));?>
<?
if(!empty($arResult["Post"])>0):
?>
<div class="blog-detail-title">
    <h2><?=$arResult["Post"]["TITLE"]?></h2>
    <p><?=$arResult["Blog"]["NAME"]?> <span>- <?=date("M d, Y", strtotime($arResult["Post"]["DATE_PUBLISH_FORMATED"]))?></span></p>
</div>
<div class="blog-large-pic">
    <?
    $imageKeys = array_keys($arResult["images"]);
    ?>
    <img src="<?=$arResult["images"][$imageKeys[0]]["full"]?>" alt="">
</div>
<?
$detailText = explode("[spoiler]", $arResult["Post"]["textFormated"]);
$previewText = $detailText[0];
$mainText = $detailText[1];
?>
<div class="blog-detail-desc">
    <p>
        <?=$previewText?>
    </p>
</div>
<?=$mainText;?>
<div class="tag-share">
    <div class="details-tag">
        <ul>
            <li><i class="fa fa-tags"></i></li>
            <?
            foreach($arResult["Category"] as $v)
            {?> 
            <li><?=$v["NAME"]?></li><?
            }
            ?>
        </ul>
    </div>
    <div class="blog-share">
        <?
        $APPLICATION->IncludeComponent("bitrix:main.share", "blog", array(
                        "HANDLERS" => $arParams["SHARE_HANDLERS"],
                        "PAGE_URL" => htmlspecialcharsback($arResult["urlToPost"]),
                        "PAGE_TITLE" => $arResult["Post"]["~TITLE"],
                        "SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
                        "SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
                        "ALIGN" => "right",
                        "HIDE" => $arParams["SHARE_HIDE"],
                ),
                $component,
                array("HIDE_ICONS" => "Y")
        );
        ?>
    </div>
</div>

<div class="blog-post">
    <div class="row">
        <?if(isset($arResult["PREV"]["TITLE"])):?>
        <div class="col-lg-5 col-md-6">
            <a href="<?=$arResult["PREV"]["urlToPost"]?>" class="prev-blog">
                <div class="pb-pic">
                    <i class="ti-arrow-left"></i>
                    <img src="<?=$arResult["PREV"]["IMG"]?>" alt="">
                </div>
                <div class="pb-text">
                    <span>Previous Post:</span>
                    <h5><?=$arResult["PREV"]["TITLE"]?></h5>
                </div>
            </a>
        </div>
        <?endif;?>
        <?if(isset($arResult["NEXT"]["TITLE"])):?>
        <div class="col-lg-5 offset-lg-2 col-md-6">
            <a href="<?=$arResult["NEXT"]["urlToPost"]?>" class="next-blog">
                <div class="nb-pic">
                    <img src="<?=$arResult["NEXT"]["IMG"]?>" alt="">
                    <i class="ti-arrow-right"></i>
                </div>
                <div class="nb-text">
                    <span>Next Post:</span>
                    <h5><?=$arResult["NEXT"]["TITLE"]?></h5>
                </div>
            </a>
        </div>
        <?endif;?>
    </div>
</div>
<?
endif;
?>