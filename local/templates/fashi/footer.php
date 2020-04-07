 <!-- Partner Logo Section Begin -->
  <?
    $APPLICATION->IncludeComponent("bitrix:news.list","partners-logo",Array(
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "services",
        "IBLOCK_ID" => "5",
        "NEWS_COUNT" => "20",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "ACTIVE_FROM",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => Array("ID"),
        "PROPERTY_CODE" => Array("DESCRIPTION"),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_META_DESCRIPTION" => "Y",
        "SET_LAST_MODIFIED" => "Y",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "Y",
        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "Y",
        "DISPLAY_TOP_PAGER" => "Y",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "PAGER_SHOW_ALWAYS" => "Y",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "Y",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "Y",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "SET_STATUS_404" => "N",
        "SHOW_404" => "N",
        "MESSAGE_404" => "",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "arrPager",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
    )
    );?>
 
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/footer-logo.png" alt=""></a>
                        </div>
                         <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                            "AREA_FILE_SHOW" => "file", 
                            "EDIT_TEMPLATE" => "standard.php",
                            "PATH" => "/include/contact_footer.php"
                            )
                        );?>
                        <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                            "AREA_FILE_SHOW" => "file", 
                            "EDIT_TEMPLATE" => "standard.php",
                            "PATH" => "/include/social_footer.php"
                            )
                        );?>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                            <?$APPLICATION->IncludeComponent("bitrix:menu","bottom-menu",Array(
                                "ROOT_MENU_TYPE" => "bottom", 
                                "MAX_LEVEL" => "2", 
                                "CHILD_MENU_TYPE" => "", 
                                "USE_EXT" => "N",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "Y",
                                "MENU_CACHE_TYPE" => "N", 
                                "MENU_CACHE_TIME" => "3600", 
                                "MENU_CACHE_USE_GROUPS" => "Y", 
                                "MENU_CACHE_GET_VARS" => "" 
                            )
                        );?>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                         <?$APPLICATION->IncludeComponent("bitrix:menu","bottom-menu",Array(
                                "ROOT_MENU_TYPE" => "bottom2", 
                                "MAX_LEVEL" => "2", 
                                "CHILD_MENU_TYPE" => "", 
                                "USE_EXT" => "N",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "Y",
                                "MENU_CACHE_TYPE" => "N", 
                                "MENU_CACHE_TIME" => "3600", 
                                "MENU_CACHE_USE_GROUPS" => "Y", 
                                "MENU_CACHE_GET_VARS" => "" 
                            )
                        );?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <?$APPLICATION->IncludeComponent("bitrix:sender.subscribe","subscribe-bottom",Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "USE_PERSONALIZATION" => "Y",
                        "CONFIRMATION" => "Y",
                        "SHOW_HIDDEN" => "Y",
                        "AJAX_MODE" => "Y",
                        "AJAX_OPTION_JUMP" => "Y",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "Y",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "3600",
                        "SET_TITLE" => "Y"
                    )
                );?>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-ui.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.countdown.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.nice-select.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.zoom.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.dd.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.slicknav.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
</body>

</html>