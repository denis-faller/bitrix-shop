<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Loader;
use Bitrix\Sale\DiscountCouponsManager;

Loader::includeModule("sale");

$arCoupon = DiscountCouponsManager::isExist($_POST["code"]);
if(isset($arCoupon["ID"])){
    $codeCoupon = $_POST["code"];
    DiscountCouponsManager::add($codeCoupon);
    $oBasket = \Bitrix\Sale\Basket::loadItemsForFUser(
        \Bitrix\Sale\Fuser::getId(),
        \Bitrix\Main\Context::getCurrent()->getSite()
    );
    $oDiscounts = \Bitrix\Sale\Discount::loadByBasket($oBasket);
    $oBasket->refreshData([ 'PRICE' ,  'COUPONS']);
    $oDiscounts->calculate();
    $result = $oDiscounts->getApplyResult();
    echo json_encode($result["PRICES"]["BASKET"]);
}
else{
    echo -1;
}
?>