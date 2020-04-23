<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div class="blog-catagory">
    <h4>Categories</h4>
    <ul>
        <?foreach($arResult["BLOG"] as $key=>$value):?>
        <li><a href="/blog/<?=$value["URL"]?>/"><?=$value["NAME"]?></a></li>
        <?endforeach;?>
    </ul>
</div>