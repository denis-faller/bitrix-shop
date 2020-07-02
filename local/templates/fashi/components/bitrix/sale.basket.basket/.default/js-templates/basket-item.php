<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $mobileColumns
 * @var array $arParams
 * @var string $templateFolder
 */

$usePriceInAdditionalColumn = in_array('PRICE', $arParams['COLUMNS_LIST']) && $arParams['PRICE_DISPLAY_MODE'] === 'Y';
$useSumColumn = in_array('SUM', $arParams['COLUMNS_LIST']);
$useActionColumn = in_array('DELETE', $arParams['COLUMNS_LIST']);

$restoreColSpan = 2 + $usePriceInAdditionalColumn + $useSumColumn + $useActionColumn;

$positionClassMap = array(
	'left' => 'basket-item-label-left',
	'center' => 'basket-item-label-center',
	'right' => 'basket-item-label-right',
	'bottom' => 'basket-item-label-bottom',
	'middle' => 'basket-item-label-middle',
	'top' => 'basket-item-label-top'
);

$discountPositionClass = '';
if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION']))
{
	foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos)
	{
		$discountPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}

$labelPositionClass = '';
if (!empty($arParams['LABEL_PROP_POSITION']))
{
	foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos)
	{
		$labelPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}
?>
<script id="basket-item-template" type="text/html">
	<tr class="basket-items-list-item-container{{#SHOW_RESTORE}} basket-items-list-item-container-expend{{/SHOW_RESTORE}}"
		id="basket-item-{{ID}}" data-entity="basket-item" data-id="{{ID}}">
		{{#SHOW_RESTORE}}
			<td class="basket-items-list-item-notification" colspan="<?=$restoreColSpan?>">
				<div class="basket-items-list-item-notification-inner basket-items-list-item-notification-removed" id="basket-item-height-aligner-{{ID}}">
					{{#SHOW_LOADING}}
						<div class="basket-items-list-item-overlay"></div>
					{{/SHOW_LOADING}}
					<div class="basket-items-list-item-removed-container">
						<div>
							<?=Loc::getMessage('SBB_GOOD_CAP')?> <strong>{{NAME}}</strong> <?=Loc::getMessage('SBB_BASKET_ITEM_DELETED')?>.
						</div>
						<div class="basket-items-list-item-removed-block">
							<a href="javascript:void(0)" data-entity="basket-item-restore-button">
								<?=Loc::getMessage('SBB_BASKET_ITEM_RESTORE')?>
							</a>
							<span class="basket-items-list-item-clear-btn" data-entity="basket-item-close-restore-button"></span>
						</div>
					</div>
				</div>
			</td>
		{{/SHOW_RESTORE}}
		{{^SHOW_RESTORE}}
                <td class="cart-pic first-row"><img src="{{{IMAGE_URL}}}{{^IMAGE_URL}}<?=$templateFolder?>/images/no_photo.png{{/IMAGE_URL}}" alt=""></td>
                <td class="cart-title first-row">
                    <h5>{{NAME}}</h5>
                </td>
                <td class="p-price first-row">{{{PRICE_FORMATED}}}</td>
                <td class="qua-col first-row basket-items-list-item-amount">
				<div class="alignment-basket-item quantity basket-item-block-amount{{#NOT_AVAILABLE}} disabled{{/NOT_AVAILABLE}}"
					data-entity="basket-item-quantity-block">
					<div class="qty-cancel pro-qty basket-item-amount-filed-block">
					<span class="qty-cancel dec qtybtn basket-item-amount-btn-minus" data-entity="basket-item-quantity-minus">-</span>
						<input type="text" class="basket-item-amount-filed" value="{{QUANTITY}}"
							{{#NOT_AVAILABLE}} disabled="disabled"{{/NOT_AVAILABLE}}
							data-value="{{QUANTITY}}" data-entity="basket-item-quantity-field"
							id="basket-item-quantity-{{ID}}">
                                        <span class="qty-cancel inc qtybtn basket-item-amount-btn-plus" data-entity="basket-item-quantity-plus">+</span>        
					</div>
				</div>
		</td>
                <td class="total-price first-row basket-items-list-item-price<?=(!isset($mobileColumns['SUM']) ? ' hidden-xs' : '')?>">
                    <div class="alignment-basket-item basket-item-price-current">
                        <span class="basket-item-price-current-text" id="basket-item-sum-price-{{ID}}">
                                {{{SUM_PRICE_FORMATED}}}
                        </span>
                    </div>
                </td>
                <td class="close-td first-row basket-items-list-item-remove hidden-xs">
                    <div class = "alignment-basket-item">
                        <i class="ti-close basket-item-close"  data-entity="basket-item-delete"></i>
                    </div>
                </td>
		{{/SHOW_RESTORE}}
	</tr>
</script>