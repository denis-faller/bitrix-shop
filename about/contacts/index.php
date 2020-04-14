<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
    <div class="map spad">
        <div class="container">
            <div class="map-inner">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48158.305462977965!2d-74.13283844036356!3d41.02757295168286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2e440473470d7%3A0xcaf503ca2ee57958!2sSaddle%20River%2C%20NJ%2007458%2C%20USA!5e0!3m2!1sen!2sbd!4v1575917275626!5m2!1sen!2sbd"
                    height="610" style="border:0" allowfullscreen="">
                </iframe>
                <div class="icon">
                    <i class="fa fa-map-marker"></i>
                </div>
            </div>
        </div>
    </div>
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                        "AREA_FILE_SHOW" => "file", 
                        "EDIT_TEMPLATE" => "standard.php",
                        "PATH" => "/include/contact.php"
                    )
                    );?>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <?$APPLICATION->IncludeComponent("bitrix:form","",Array(
                        "AJAX_MODE" => "N", 
                        "SEF_MODE" => "Y", 
                        "WEB_FORM_ID" => 1, 
                        "RESULT_ID" => $_REQUEST["RESULT_ID"], 
                        "START_PAGE" => "new", 
                        "SHOW_LIST_PAGE" => "Y", 
                        "SHOW_EDIT_PAGE" => "Y", 
                        "SHOW_VIEW_PAGE" => "Y", 
                        "SUCCESS_URL" => "", 
                        "SHOW_ANSWER_VALUE" => "Y", 
                        "SHOW_ADDITIONAL" => "Y", 
                        "SHOW_STATUS" => "Y", 
                        "EDIT_ADDITIONAL" => "Y", 
                        "EDIT_STATUS" => "Y", 
                        "NOT_SHOW_FILTER" => Array(), 
                        "NOT_SHOW_TABLE" => Array(), 
                        "CHAIN_ITEM_TEXT" => "", 
                        "CHAIN_ITEM_LINK" => "", 
                        "IGNORE_CUSTOM_TEMPLATE" => "Y", 
                        "USE_EXTENDED_ERRORS" => "Y", 
                        "CACHE_TYPE" => "A", 
                        "CACHE_TIME" => "3600", 
                        "AJAX_OPTION_JUMP" => "N", 
                        "AJAX_OPTION_STYLE" => "Y", 
                        "AJAX_OPTION_HISTORY" => "N", 
                        "SEF_FOLDER" => "/about/contacts/", 
                        "SEF_URL_TEMPLATES" => Array(
                            "new" => "",
                            "list" => "",
                            "edit" => "",
                            "view" => ""
                        ),
                        "VARIABLE_ALIASES" => Array(
                            "new" => Array(),
                            "list" => Array(),
                            "edit" => Array(),
                            "view" => Array(),
                        )
                    )
                );?>
                </div>
            </div>
        </div>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>