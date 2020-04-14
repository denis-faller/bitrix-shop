<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!$this->__component->__parent || empty($this->__component->__parent->__name) || $this->__component->__parent->__name != "bitrix:blog"):
	$GLOBALS['APPLICATION']->SetAdditionalCSS('/bitrix/components/bitrix/blog/templates/.default/style.css');
	$GLOBALS['APPLICATION']->SetAdditionalCSS('/bitrix/components/bitrix/blog/templates/.default/themes/blue/style.css');
endif;
?>
<?
if(empty($arResult))
	echo GetMessage("SONET_BLOG_EMPTY");

foreach($arResult as $arPost)
{
	?>

                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <?=str_replace("align=\"left\"", "", $arPost["IMG"])?>
                         <div class="latest-text">
                              <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    <?=date("M d, Y", strtotime($arPost["DATE_PUBLISH_FORMATED"]))?>
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    <?=$arPost["NUM_COMMENTS"]?>
                                </div>
                            </div>
                             <a href="<?=$arPost["urlToPost"]?>">
                                <h4><?echo $arPost["TITLE"]; ?></h4>
                            </a>
                            <p><?=$arPost["TEXT_FORMATED"]?> </p>
                        </div>
                    </div>
                </div>
	<?
}
?>	
