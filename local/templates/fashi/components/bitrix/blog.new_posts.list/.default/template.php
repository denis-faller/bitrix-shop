<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!$this->__component->__parent || empty($this->__component->__parent->__name) || $this->__component->__parent->__name != "bitrix:blog"):
	$GLOBALS['APPLICATION']->SetAdditionalCSS('/bitrix/components/bitrix/blog/templates/.default/style.css');
	$GLOBALS['APPLICATION']->SetAdditionalCSS('/bitrix/components/bitrix/blog/templates/.default/themes/blue/style.css');
endif;
?>
<?CUtil::InitJSCore(array("image"));?>
<?
if(count($arResult["POSTS"])>0)
{
	foreach($arResult["POSTS"] as $ind => $CurPost)
	{
		?>
                    <div class="col-lg-6 col-sm-6">
                        <div class="blog-item">
                                <?if(isset($CurPost["IMG"])):?>
                                <div class="bi-pic">
                                    <img src="<?=$CurPost["IMG"]?>" alt="">
                                </div>
                                <?endif;?>
                                <div class="bi-text">
                                    <a href="<?=$CurPost["urlToPost"]?>">
                                        <h4><?=$CurPost["TITLE"]?></h4>
                                    </a>
                                    <p><?=$CurPost["BLOG"]["NAME"]?> <span>- <?=date("M d, Y", strtotime($CurPost["DATE_PUBLISH_FORMATED"]))?></span></p>
                                </div>
			</div>
                    </div>    
		<?
	}?>
        <?
	if(strlen($arResult["NAV_STRING"])>0)
		echo $arResult["NAV_STRING"];
        ?>
        <?
        if($arResult["CURRENT_NUM_PAGE"] < $arResult["NUM_PAGE"]):
        ?>
            <div class="col-lg-12">
                <div class="loading-more">
                    <i class="icon_loading"></i>
                    <a href="javascipt:void(0);">
                        Loading More
                    </a>
                </div>
            </div>
            <?
        endif;
}
?>	
