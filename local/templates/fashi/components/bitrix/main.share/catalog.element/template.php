<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (strlen($arResult["PAGE_URL"]) > 0)
{
	?>
        <a href="http://www.facebook.com/share.php?u=<?=$arResult["PAGE_URL"]?>"><i class="ti-facebook"></i></a>
        <a href="#"><i class="ti-twitter-alt"></i></a>
        <a href="#"><i class="ti-linkedin"></i></a>
<?}
else
{
	?><?=GetMessage("SHARE_ERROR_EMPTY_SERVER")?><?
}
?>