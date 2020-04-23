<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!$this->__component->__parent || empty($this->__component->__parent->__name) || $this->__component->__parent->__name != "bitrix:blog"):
	$GLOBALS['APPLICATION']->SetAdditionalCSS('/bitrix/components/bitrix/blog/templates/.default/style.css');
	$GLOBALS['APPLICATION']->SetAdditionalCSS('/bitrix/components/bitrix/blog/templates/.default/themes/blue/style.css');
endif;
?>
<div class="recent-post">
    <h4>Recent Post</h4>
    <div class="recent-blog">
<?
if(empty($arResult))
	echo GetMessage("SONET_BLOG_EMPTY");

foreach($arResult as $arPost)
{
	?>
                <a href="<?=$arPost["urlToPost"]?>" class="rb-item">
                    <div class="rb-pic">
                       <?=str_replace("align=\"left\"", "", $arPost["IMG"])?>
                    </div>
                    <div class="rb-text">
                        <h6><?echo $arPost["TITLE"]; ?></h6>
                        <p><?=$arPost["BLOG"]["NAME"]?> <span>- <?=date("M d, Y", strtotime($arPost["DATE_PUBLISH_FORMATED"]))?></span></p>
                    </div>
                </a>
	<?
}
?>	

    </div>
</div>