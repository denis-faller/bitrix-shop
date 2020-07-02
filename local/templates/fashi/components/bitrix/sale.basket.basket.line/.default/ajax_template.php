<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$this->IncludeLangFile('template.php');

$cartId = $arParams['cartId'];



?>
<li class="cart-icon">
    <a href="#">
        <i class="icon_bag_alt"></i>
        <span class = "cart-num"><?=$arResult['NUM_PRODUCTS']?></span>
    </a>
    <div class="cart-hover">
        <div class="select-items">
            <table>
                <tbody>
<?
if ($arParams["SHOW_PRODUCTS"] == "Y" && ($arResult['NUM_PRODUCTS'] > 0 || !empty($arResult['CATEGORIES']['DELAY'])))
{ ?>                 
    <?
   foreach ($arResult["CATEGORIES"] as $category => $items):
        foreach ($items as $v):?>
                    <tr class = "cart-item">
                        <td class="si-pic"><img src="<?=$v["PICTURE_SRC"]?>" alt=""></td>
                        <td class="si-text">
                            <div class="product-selected">
                                <p><?=$v["PRICE"]?> x <?=$v["QUANTITY"]?></p>
                                <h6><?=$v["NAME"]?></h6>
                            </div>
                        </td>
                        <td class="si-close">
                            <i id = "cart-item-delete-<?=$v['ID']?>" data-price = "<?=($v["PRICE"]*$v["QUANTITY"])?>" class="ti-close" onclick="<?=$cartId?>.removeItemFromCart(<?=$v['ID']?>);"></i>
                        </td>
                    </tr>
        <?
            endforeach;
        endforeach;
}?> 
    </tbody>
            </table>
        </div>
        <div class="select-total">
            <span>total:</span>
            <h5 class = "cart-price" data-price = "<?=$arResult['TOTAL_PRICE_RAW']?>"><?=$arResult['TOTAL_PRICE']?></h5>
        </div>
        <div class="select-button">
            <a href="/personal/cart/" class="primary-btn view-card">VIEW CARD</a>
            <a href="/personal/order/make/" class="primary-btn checkout-btn">CHECK OUT</a>
        </div>
    </div>
</li>
<li class="cart-price" data-price = "<?=$arResult['TOTAL_PRICE_RAW']?>"><?=$arResult['TOTAL_PRICE']?></li>
                    
	<script>
		BX.ready(function(){
			<?=$cartId?>.fixCart();
		});
	</script>