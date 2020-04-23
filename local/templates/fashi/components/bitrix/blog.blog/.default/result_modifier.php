<?
$arFilter = Array(
    "PUBLISH_STATUS" => BLOG_PUBLISH_STATUS_PUBLISH
    );	

$dbPosts = CBlogPost::GetList(
        array(),
        $arFilter
    );

$numPost = 0;
while($arPosts = $dbPosts->Fetch()){
    $numPost++;
}

$numPage = ceil($numPost/$arParams["MESSAGE_COUNT"]);

$arResult["NUM_PAGE"] = $numPage;

$request = Bitrix\Main\Application::getInstance()->getContext()->getRequest();
$currentPage = $request->getQuery("PAGEN_1");

$arResult["CURRENT_NUM_PAGE"] = $currentPage;

if($arResult["CURRENT_NUM_PAGE"] == NULL){
    $arResult["CURRENT_NUM_PAGE"] = 1;
}

if(count($arResult["POST"])>0)
{
	foreach($arResult["POST"] as $ind => &$CurPost)
	{
                $keysImgPost = array_keys($CurPost["IMAGES"]);
                
                $CurPost["IMG"] = CFile::GetPath($CurPost["IMAGES"][$keysImgPost[0]]);
                
                $CurPost["BLOG"] = CBlog::GetByID($CurPost["BLOG_ID"]);
        }
}

?>