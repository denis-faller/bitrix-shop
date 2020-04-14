<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Блоги");
\Bitrix\Main\Loader::includeModule('richsite.fashi');
$settings=new Richsite\Fashi\Settings;
?>
       <section class="blog-section spad">
        <div class="container">
            <div class="row"> 
    
    <?
    $APPLICATION->IncludeComponent(
        "bitrix:blog",
        "",
        Array(
            "THEME" => "blue",
            "GROUP_ID" => array("1"),
            "SHOW_NAVIGATION" => "Y",
            "USER_PROPERTY_NAME" => "",
            "PERIOD_NEW_TAGS" => "",
            "PERIOD" => "",
            "COLOR_TYPE" => "Y",
            "WIDTH" => "100%",
            "SEO_USER" => "Y",
            "NAME_TEMPLATE" => "#NOBR##LAST_NAME# #NAME##/NOBR#",
            "SHOW_LOGIN" => "Y",
            "USE_SHARE" => "Y",
            "SHARE_HIDE" => "Y",
            "SHARE_TEMPLATE" => "",
            "SHARE_HANDLERS" => array("delicious", "facebook", "lj", "twitter"),
            "SHARE_SHORTEN_URL_LOGIN" => "",
            "SHARE_SHORTEN_URL_KEY" => "",
            "PATH_TO_SONET_USER_PROFILE" => "/club/user/#user_id#/",
            "PATH_TO_MESSAGES_CHAT" => "/club/messages/chat/#user_id#/",
            "ALLOW_POST_MOVE" => "Y",
            "PATH_TO_USER_POST" => "",
            "PATH_TO_USER_POST_EDIT" => "",
            "PATH_TO_USER_DRAFT" => "",
            "PATH_TO_USER_BLOG" => "",
            "PATH_TO_GROUP_POST" => "",
            "PATH_TO_GROUP_POST_EDIT" => "",
            "PATH_TO_GROUP_DRAFT" => "",
            "PATH_TO_GROUP_BLOG" => "",
            "SEF_MODE" => "Y",
            "PATH_TO_SMILE" => "/bitrix/images/blog/smile/",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600",
            "SET_TITLE" => "Y",
            "CACHE_TIME_LONG" => "604800",
            "SET_NAV_CHAIN" => "Y",
                    "SEO_USE" => "N",
            "MESSAGE_COUNT" => "25",
            "PERIOD_DAYS" => "30",
            "MESSAGE_COUNT_MAIN" => "6",
            "BLOG_COUNT_MAIN" => "6",
            "COMMENTS_COUNT" => "25",
            "MESSAGE_LENGTH" => "100",
            "BLOG_COUNT" => "20",
            "DATE_TIME_FORMAT" => "d.m.Y H:i:s",
            "NAV_TEMPLATE" => "",
            "USER_PROPERTY" => array(),
            "BLOG_PROPERTY" => array(),
            "BLOG_PROPERTY_LIST" => array(),
            "POST_PROPERTY" => array(),
            "POST_PROPERTY_LIST" => array(),
            "COMMENT_PROPERTY" => array(),
            "USE_ASC_PAGING" => "N",
            "NOT_USE_COMMENT_TITLE" => "Y",
            "SMILES_COUNT" => "4",
            "IMAGE_MAX_WIDTH" => "800",
            "IMAGE_MAX_HEIGHT" => "800",
            "EDITOR_RESIZABLE" => "Y",
            "EDITOR_DEFAULT_HEIGHT" => "300",
            "EDITOR_CODE_DEFAULT" => "N",
            "AJAX_POST" => "Y",
            "COMMENT_EDITOR_RESIZABLE" => "Y",
            "COMMENT_EDITOR_DEFAULT_HEIGHT" => "200",
            "COMMENT_EDITOR_CODE_DEFAULT" => "Y",
            "COMMENT_ALLOW_VIDEO" => "Y",
            "COMMENT_ALLOW_IMAGE_UPLOAD" => "A",
            "SHOW_SPAM" => "Y",
            "NO_URL_IN_COMMENTS_AUTHORITY" => "",
            "ALLOW_POST_CODE" => "Y",
            "USE_GOOGLE_CODE" => "Y",
            "SEF_FOLDER" => "/blog/",
            "SEF_URL_TEMPLATES" => Array(
                "index" => "index.php",
                "group" => "group/#group_id#/",
                "blog" => "#blog#/",
                "user" => "user/#user_id#/",
                "user_friends" => "friends/#user_id#/",
                "search" => "search.php",
                "user_settings" => "#blog#/user_settings.php",
                "user_settings_edit" => "#blog#/user_settings_edit.php?id=#user_id#",
                "group_edit" => "#blog#/group_edit.php",
                "blog_edit" => "#blog#/blog_edit.php",
                "category_edit" => "#blog#/category_edit.php",
                "post_edit" => "#blog#/post_edit.php?id=#post_id#",
                "draft" => "#blog#/draft.php",
                "moderation" => "#blog#/moderation.php",
                "trackback" => POST_FORM_ACTION_URI.'&blog=#blog#&id=#post_id#&page=trackback',
                "post" => "#blog#/#post_id#/",
                "post_rss" => "#blog#/rss/#type#/#post_id#",
                "rss" => "#blog#/rss/#type#",
                "rss_all" => "rss/#type#/#group_id#"
            ),
            "VARIABLE_ALIASES" => Array(
                "index" => Array(),
                "group" => Array(),
                "blog" => Array(),
                "user" => Array(),
                "user_friends" => Array(),
                "search" => Array(),
                "user_settings" => Array(),
                "user_settings_edit" => Array(
                    "user_id" => "id"
                ),
                "group_edit" => Array(),
                "blog_edit" => Array(),
                "category_edit" => Array(),
                "post_edit" => Array(
                    "post_id" => "id"
                ),
                "draft" => Array(),
                "moderation" => Array(),
                "trackback" => Array(
                    "blog" => "blog",
                    "post_id" => "id"
                ),
                "post" => Array(),
                "post_rss" => Array(),
                "rss" => Array(),
                "rss_all" => Array(),
            )
        )
    );
?>
    </div>
   </div>
</section>
    <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>