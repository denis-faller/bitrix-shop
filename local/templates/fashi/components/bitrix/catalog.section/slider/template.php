<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 *
 *  _________________________________________________________________________
 * |	Attention!
 * |	The following comments are for system use
 * |	and are required for the component to work correctly in ajax mode:
 * |	<!-- items-container -->
 * |	<!-- pagination-container -->
 * |	<!-- component-end -->
 */

$this->setFrameMode(true);
$this->addExternalCss('/bitrix/css/main/bootstrap.css');
?>

<div class="product-slider owl-carousel">
	<?
	if (!empty($arResult['ITEMS']) && !empty($arResult['ITEM_ROWS']))
	{
		?>
		<!-- items-container -->
		<?
		foreach ($arResult['ITEM_ROWS'] as $rowData)
		{
			$rowItems = array_splice($arResult['ITEMS'], 0, $rowData['COUNT']);
			?>
                        <?
                        foreach ($rowItems as $item)
                        {
                                ?>
                                <?
                                $APPLICATION->IncludeComponent(
                                        'bitrix:catalog.item',
                                        '',
                                        array(
                                                'RESULT' => array(
                                                        'ITEM' => $item,
                                                        'TYPE' => $rowData['TYPE'],
                                                        'BIG_LABEL' => 'N',
                                                        'BIG_DISCOUNT_PERCENT' => 'N',
                                                        'BIG_BUTTONS' => 'Y',
                                                        'SCALABLE' => 'N'
                                                )
                                        ),
                                        $component,
                                        array('HIDE_ICONS' => 'Y')
                                );
                                ?>
                                <?
                        }
                        ?>
					
			<?
		}
		?>
		<!-- items-container -->
		<?
	}
	?>
</div>
