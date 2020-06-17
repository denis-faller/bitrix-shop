<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

$propertyNameCntComments = "PROPERTY_".\CIBlockPropertyTools::CODE_BLOG_COMMENTS_COUNT;
$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM", $propertyNameCntComments);
$arFilter = Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"], "ID" => $arResult['ID'], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();
    $arResult["COUNT_COMMENTS"] = $arFields[$propertyNameCntComments."_VALUE"];
}