<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!$this->__component->__parent || empty($this->__component->__parent->__name) || $this->__component->__parent->__name != "bitrix:blog"):
	$GLOBALS['APPLICATION']->SetAdditionalCSS('/bitrix/components/bitrix/blog/templates/.default/style.css');
	$GLOBALS['APPLICATION']->SetAdditionalCSS('/bitrix/components/bitrix/blog/templates/.default/themes/blue/style.css');
endif;
?>
               <div class="blog-tags">
                            <h4>Product Tags</h4>
<?
if(!empty($arResult))
{
	if(!empty($arResult["CATEGORY"]))
	{
		?>
                    <div class="tag-item">        
			<?
			foreach($arResult["CATEGORY"] as $arCategory)
			{
				if($arCategory["SELECTED"]=="Y")
					echo "<b>";
				?><a href="<?=$arCategory["urlToCategory"]?>" title="<?GetMessage("BLOG_BLOG_BLOGINFO_CAT_VIEW")?>" rel="nofollow"><?=$arCategory["NAME"]?></a> <?
				if($arCategory["SELECTED"]=="Y")
						echo "</b>";
			}
		?>
                    </div>
		<?
	}
}
?>

    </div>