<?
foreach($arResult as &$arPost)
{
    $arPost["BLOG"] = CBlog::GetByID($arPost["BLOG_ID"]);
}
?>