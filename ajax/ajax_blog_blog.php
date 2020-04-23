<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");


$APPLICATION->IncludeComponent(
"bitrix:blog.new_posts.list",
    "",
    Array(
        "SEO_USER" => "Y",
        "MESSAGE_PER_PAGE" => "6",
        "DATE_TIME_FORMAT" => "d.m.Y H:i:s",
        "PATH_TO_BLOG" => "/",
        "PATH_TO_POST" => "/blog/#blog#/#post_id#/",
        "PATH_TO_USER" => "",
        "PATH_TO_GROUP_BLOG_POST" => "",
        "PATH_TO_BLOG_CATEGORY" => "",
        "PATH_TO_SMILE" => "",
        "BLOG_VAR" => "",
        "POST_VAR" => "",
        "USER_VAR" => "",
        "PAGE_VAR" => "",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "86400",
        "GROUP_ID" => "",
        "BLOG_URL" => $_GET["BLOG_URL"],
        "NAV_TEMPLATE" => "blog-posts",
        "SET_TITLE" => "Y",
        "POST_PROPERTY_LIST" => array(),
        "NAME_TEMPLATE" => "#NOBR##LAST_NAME# #NAME##/NOBR#",
        "SHOW_LOGIN" => "Y",
        "IMAGE_MAX_WIDTH" => "600",
        "IMAGE_MAX_HEIGHT" => "600"
    )
);?>