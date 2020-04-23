<?
$arSort = Array("ID" => "DESC");
$arFilter = Array(
    "<ID" => $arResult["Post"]["ID"],
    "BLOG_ID" => $arResult["Post"]["BLOG_ID"]
);	

$dbPosts = CBlogPost::GetList(
        $arSort,
        $arFilter,
        false,
        array("nTopCount" => 1)
    );
while ($arPost = $dbPosts->Fetch())
{
    $arResult["PREV"] = $arPost;
}

$dbImage = CBlogImage::GetList(Array("ID" => "ASC"), Array("BLOG_ID" => $arResult["PREV"]["BLOG_ID"], "POST_ID" => $arResult["PREV"]["ID"]));
if($arImage = $dbImage->Fetch())
{
    $arResult["PREV"]["IMG"] = CFile::GetPath($arImage["FILE_ID"]);
}

$arResult["PREV"]["urlToPost"] = CComponentEngine::MakePathFromTemplate($arParams["PATH_TO_POST"], array("blog" => $arParams["BLOG_URL"], "post_id"=>$arResult["PREV"]["CODE"]));

$arSort = Array("ID" => "ASC");
$arFilter = Array(
    ">ID" => $arResult["Post"]["ID"],
    "BLOG_ID" => $arResult["Post"]["BLOG_ID"]
);	

$dbPosts = CBlogPost::GetList(
        $arSort,
        $arFilter,
        false,
        array("nTopCount" => 1)
    );
while ($arPost = $dbPosts->Fetch())
{
    $arResult["NEXT"] = $arPost;
}

$dbImage = CBlogImage::GetList(Array("ID" => "ASC"), Array("BLOG_ID" => $arResult["NEXT"]["BLOG_ID"], "POST_ID" => $arResult["NEXT"]["ID"]));
if($arImage = $dbImage->Fetch())
{
    $arResult["NEXT"]["IMG"] = CFile::GetPath($arImage["FILE_ID"]);
}

$arResult["NEXT"]["urlToPost"] = CComponentEngine::MakePathFromTemplate($arParams["PATH_TO_POST"], array("blog" => $arParams["BLOG_URL"], "post_id"=>$arResult["NEXT"]["CODE"]));

?>