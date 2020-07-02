<?
use Bitrix\Main\Page\Asset;
use Bitrix\Main\Loader;
Loader::includeModule("sale");
Loader::includeModule('richsite.fashi');
$fashi = new Richsite\Fashi\Fashi();
?><!DOCTYPE html>
<html lang="zxx">

<head>
    <?
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-3.3.1.min.js");
    ?>
    <?$APPLICATION->ShowHead();?>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?$APPLICATION->ShowTitle()?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css" type="text/css">
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-3.3.1.min.js"></script>
</head>
<?$APPLICATION->ShowPanel()?>
<body>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                        "AREA_FILE_SHOW" => "file", 
                        "EDIT_TEMPLATE" => "standard.php",
                        "PATH" => "/include/contact_header.php"
                    )
                );?>
                </div>
                <div class="ht-right">
                    <?if($USER->IsAuthorized()):?>
                     <a href="/login/?logout=yes" class="login-panel"><i class="fa fa-user"></i>Выйти</a>
                    <?else:?>
                    <a href="/login" class="login-panel"><i class="fa fa-user"></i>Авторизация</a>
                    <?endif;?>
                    <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                        "AREA_FILE_SHOW" => "file", 
                        "EDIT_TEMPLATE" => "standard.php",
                        "PATH" => "/include/social_header.php"
                    )
                    );?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="/">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                    <?$APPLICATION->IncludeComponent("bitrix:search.title","",Array(
                            "SHOW_INPUT" => "Y",
                            "INPUT_ID" => "title-search-input",
                            "CONTAINER_ID" => "title-search",
                            "PRICE_CODE" => array("BASE","RETAIL"),
                            "PRICE_VAT_INCLUDE" => "Y",
                            "PREVIEW_TRUNCATE_LEN" => "150",
                            "SHOW_PREVIEW" => "Y",
                            "PREVIEW_WIDTH" => "75",
                            "PREVIEW_HEIGHT" => "75",
                            "CONVERT_CURRENCY" => "Y",
                            "CURRENCY_ID" => "RUB",
                            "PAGE" => "#SITE_DIR#search/index.php",
                            "NUM_CATEGORIES" => "3",
                            "TOP_COUNT" => "10",
                            "ORDER" => "date",
                            "USE_LANGUAGE_GUESS" => "Y",
                            "CHECK_DATES" => "Y",
                            "SHOW_OTHERS" => "N",
                            "CATEGORY_0_TITLE" => "Товары",
                            "CATEGORY_0" => array("iblock_catalog"),
                        )
                    );?>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span><?=count($fashi->getArDelayItems())?></span>
                                </a>
                            </li>
                            <?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line","",Array(
                                "HIDE_ON_BASKET_PAGES" => "N",
                                "PATH_TO_BASKET" => SITE_DIR."personal/cart/",
                                "PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
                                "PATH_TO_PERSONAL" => SITE_DIR."personal/",
                                "PATH_TO_PROFILE" => SITE_DIR."personal/",
                                "PATH_TO_REGISTER" => SITE_DIR."login/",
                                "POSITION_FIXED" => "Y",
                                "POSITION_HORIZONTAL" => "right",
                                "POSITION_VERTICAL" => "top",
                                "SHOW_AUTHOR" => "Y",
                                "SHOW_DELAY" => "N",
                                "SHOW_EMPTY_VALUES" => "Y",
                                "SHOW_IMAGE" => "Y",
                                "SHOW_NOTAVAIL" => "N",
                                "SHOW_NUM_PRODUCTS" => "Y",
                                "SHOW_PERSONAL_LINK" => "N",
                                "SHOW_PRICE" => "Y",
                                "SHOW_PRODUCTS" => "Y",
                                "SHOW_SUMMARY" => "Y",
                                "SHOW_TOTAL_PRICE" => "Y"
                            )
                        );?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container container-menu">
                <?$APPLICATION->IncludeComponent("bitrix:menu",".default",Array(
                        "ROOT_MENU_TYPE" => "subsection", 
                        "MAX_LEVEL" => "1", 
                        "USE_EXT" => "Y",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "Y",
                        "MENU_CACHE_TYPE" => "N", 
                        "MENU_CACHE_TIME" => "3600", 
                        "MENU_CACHE_USE_GROUPS" => "Y", 
                        "MENU_CACHE_GET_VARS" => "" 
                    )
                );?>
                <?$APPLICATION->IncludeComponent("bitrix:menu","horizontal_multilevel",Array(
                    "ROOT_MENU_TYPE" => "top", 
                    "MAX_LEVEL" => "2", 
                    "CHILD_MENU_TYPE" => "left", 
                    "USE_EXT" => "Y",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "Y",
                    "MENU_CACHE_TYPE" => "N", 
                    "MENU_CACHE_TIME" => "3600", 
                    "MENU_CACHE_USE_GROUPS" => "Y", 
                    "MENU_CACHE_GET_VARS" => "" 
                )
            );?>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
   <? 
   if($APPLICATION->GetCurPage(false) !== '/'): ?>
        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array(
            "START_FROM" => "0", 
            "PATH" => "", 
            "SITE_ID" => "s1" 
            )
        );?>
    <?endif;?>
    <!-- Header End -->