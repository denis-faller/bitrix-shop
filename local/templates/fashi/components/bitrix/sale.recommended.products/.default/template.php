<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */
/** @global CDatabase $DB */

$this->setFrameMode(true);

$templateData = array(
	'TEMPLATE_THEME' => $this->GetFolder() . '/themes/' . $arParams['TEMPLATE_THEME'] . '/style.css',
	'TEMPLATE_CLASS' => 'bx_' . $arParams['TEMPLATE_THEME']
);

$arSkuTemplate = array();

 if (isset($arResult['ITEMS']) && !empty($arResult['ITEMS'])): ?>
    <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
	<?
	foreach ($arResult['ITEMS'] as $key => $arItem):?>
            <div class="col-lg-3 col-sm-6">
                <?
                $APPLICATION->IncludeComponent(
                'bitrix:catalog.item',
                '',
                array(
                        'RESULT' => array(
                                'ITEM' => $arItem,
                                'DELAY_ITEMS' => $arParams["DELAY_ITEMS"],
                                'TYPE' => $rowData['TYPE'],
                                'BIG_LABEL' => 'N',
                                'BIG_DISCOUNT_PERCENT' => 'N',
                                'BIG_BUTTONS' => 'Y',
                                'SCALABLE' => 'N'
                        )
                ),
                $component,
                array('HIDE_ICONS' => 'Y'));
                ?>
                </div>
        <?
        endforeach;
        ?>
 </div>
        </div>
    </div>
<? endif ?>
