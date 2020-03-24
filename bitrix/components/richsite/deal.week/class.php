<?
use Bitrix\Main,
    Bitrix\Main\Loader,
    Bitrix\Main\Localization\Loc;
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
Loc::loadMessages(__FILE__);

class DealWeek extends \CBitrixComponent{
    
    private function getElementInfo($elementID){
        $res = \CIBlockElement::GetList([], ['ID'=>$elementID], false, [], ['ID', 'IBLOCK_ID', 'NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE', 'PROPERTY_PRODUCT.ID', 'PROPERTY_PRODUCT.NAME', 'PROPERTY_PRODUCT.DETAIL_PAGE_URL', 'PROPERTY_DATE_END_SALE']);
        $arrElement = array();
        
        while($ob = $res->GetNextElement()){
            $arrElement = $ob->GetFields();
        }
        
        return $arrElement;
    }
    
    public function executeComponent(){
        if($this->arParams["ELEMENT_ID"] == NULL){
            ShowError(GetMessage("RICHSITE_PARAMS_ELEMENT_ID_NOT_EXIST"));
            return;
        }
        
        $this->arResult['DEAL_WEEK'] = $this->getElementInfo($this->arParams["ELEMENT_ID"]);
        
        if($this->arResult['DEAL_WEEK']["PROPERTY_PRODUCT_DETAIL_PAGE_URL"][0] == "/"
                && $this->arResult['DEAL_WEEK']["PROPERTY_PRODUCT_DETAIL_PAGE_URL"][1] == "/"){
            $arrStr = str_split($this->arResult['DEAL_WEEK']["PROPERTY_PRODUCT_DETAIL_PAGE_URL"]);
            $arrStr[0] = "";
            $this->arResult['DEAL_WEEK']["PROPERTY_PRODUCT_DETAIL_PAGE_URL"] = implode($arrStr);
        }
        
        $arPrice = CPrice::GetBasePrice($this->arResult["DEAL_WEEK"]["PROPERTY_PRODUCT_ID"]);
        $this->arResult["DEAL_WEEK"]["PRICE"] = CurrencyFormat($arPrice["PRICE"], $arPrice["CURRENCY"]);
        
        $this->arResult["DEAL_WEEK"]["TIME_LEFT"] = strtotime($this->arResult["DEAL_WEEK"]["PROPERTY_DATE_END_SALE_VALUE"])-strtotime(date("d-m-Y H:i:s"));
        
        if ($this->StartResultCache()){
            $this->IncludeComponentTemplate();
        }
    }
}

?>