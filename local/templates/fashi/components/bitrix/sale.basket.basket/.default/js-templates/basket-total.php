<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $arParams
 */
?>
<script id="basket-total-template" type="text/html">
            <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a class="primary-btn continue-shop" href = "/">Continue shopping</a>
                                <a class="primary-btn up-cart" href = "/personal/cart/">Update cart</a>
                            </div>
                            <div class="discount-coupon">
                                <h6>Discount Codes</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text" class="form-control" id="" placeholder="Enter your codes" data-entity="basket-coupon-input">
                                    <button type="button" class="site-btn coupon-btn">Apply</button>
                                </form>
                            </div>
            </div>
            <div class="col-lg-4 offset-lg-4">
                <div class="proceed-checkout">
                    <ul>
                        <li class="cart-total">Total <span  data-entity="basket-total-price">{{{PRICE_FORMATED}}}</span></li>
                    </ul>
                    <a href="javascript:void(0);" class="proceed-btn{{#DISABLE_CHECKOUT}} disabled{{/DISABLE_CHECKOUT}}" data-entity="basket-checkout-button" >PROCEED TO CHECK OUT</a>
                </div>
            </div>

		<?
		if ($arParams['HIDE_COUPON'] !== 'Y')
		{
		?>
			<div class="basket-coupon-alert-section">
				<div class="basket-coupon-alert-inner">
					{{#COUPON_LIST}}
					<div class="basket-coupon-alert text-{{CLASS}}">
						<span class="basket-coupon-text">
							<strong>{{COUPON}}</strong> - <?=Loc::getMessage('SBB_COUPON')?> {{JS_CHECK_CODE}}
							{{#DISCOUNT_NAME}}({{DISCOUNT_NAME}}){{/DISCOUNT_NAME}}
						</span>
						<span class="close-link" data-entity="basket-coupon-delete" data-coupon="{{COUPON}}">
							<?=Loc::getMessage('SBB_DELETE')?>
						</span>
					</div>
					{{/COUPON_LIST}}
				</div>
			</div>
			<?
		}
		?>
</script>