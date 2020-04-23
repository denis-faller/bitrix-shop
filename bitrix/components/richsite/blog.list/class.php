<?
use Bitrix\Main,
    Bitrix\Main\Loader,
    Bitrix\Main\Localization\Loc;
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
Loc::loadMessages(__FILE__);

class BlogList extends \CBitrixComponent{
    public function executeComponent(){
        $arSort = Array("NAME" => "DESC");
        $arFilter = Array(
                "ACTIVE" => "Y",
                "GROUP_SITE_ID" => SITE_ID
            );	
        $arSelectedFields = array("ID", "NAME", "URL");

        $dbBlogs = CBlog::GetList(
                $arSort,
                $arFilter,
                false,
                false,
                $arSelectedFields
            );

        while ($arBlog = $dbBlogs->Fetch())
        {
            $this->arResult["BLOG"][$arBlog["ID"]] = $arBlog;
        }
        
        if ($this->StartResultCache()){
            $this->IncludeComponentTemplate();
        }
    }
}

?>