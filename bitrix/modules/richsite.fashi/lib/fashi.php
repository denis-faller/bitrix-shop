<?
namespace Richsite\Fashi;
\Bitrix\Main\Loader::includeModule("sale");
class Fashi{
    
    function __construct (){
    }

    public function getArDelayItems(){
        $dbDelayItems = \CSaleBasket::GetList(
            array(
                "NAME" => "ASC",
                "ID" => "ASC"
            ),
            array(
                "FUSER_ID" => \CSaleBasket::GetBasketUserID(),
                "LID" => SITE_ID,
                "ORDER_ID" => "NULL",
                "DELAY" => "Y",
            ),
            false,
            false,
            array("PRODUCT_ID")
        );

        $arDelayItems = [];
        while ($delayItem = $dbDelayItems->Fetch()){
           $arDelayItems[] = $delayItem["PRODUCT_ID"];
        }
        
        return $arDelayItems;
    }
}

?>