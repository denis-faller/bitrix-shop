<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (strlen($arResult["PAGE_URL"]) > 0)
{
	?>
        <span>Share:</span>
        <div class="social-links">
            <a href="http://www.facebook.com/share.php?u=<?=$arResult["PAGE_URL"]?>"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
        </div>
<?}
else
{
	?><?=GetMessage("SHARE_ERROR_EMPTY_SERVER")?><?
}
?>