<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$APPLICATION->IncludeComponent(
	"bitrix:blog.menu",
	"",
	Array(
			"BLOG_VAR"				=> $arResult["ALIASES"]["blog"],
			"POST_VAR"				=> $arResult["ALIASES"]["post_id"],
			"USER_VAR"				=> $arResult["ALIASES"]["user_id"],
			"PAGE_VAR"				=> $arResult["ALIASES"]["page"],
			"PATH_TO_BLOG"			=> $arResult["PATH_TO_BLOG"],
			"PATH_TO_USER"			=> $arResult["PATH_TO_USER"],
			"PATH_TO_BLOG_EDIT"		=> $arResult["PATH_TO_BLOG_EDIT"],
			"PATH_TO_BLOG_INDEX"	=> $arResult["PATH_TO_BLOG_INDEX"],
			"PATH_TO_DRAFT"			=> $arResult["PATH_TO_DRAFT"],
			"PATH_TO_POST_EDIT"		=> $arResult["PATH_TO_POST_EDIT"],
			"PATH_TO_USER_FRIENDS"	=> $arResult["PATH_TO_USER_FRIENDS"],
			"PATH_TO_USER_SETTINGS"	=> $arResult["PATH_TO_USER_SETTINGS"],
			"PATH_TO_GROUP_EDIT"	=> $arResult["PATH_TO_GROUP_EDIT"],
			"PATH_TO_CATEGORY_EDIT"	=> $arResult["PATH_TO_CATEGORY_EDIT"],
			"BLOG_URL"				=> $arResult["VARIABLES"]["blog"],
			"SET_NAV_CHAIN"			=> $arResult["SET_NAV_CHAIN"],
			"GROUP_ID" 				=> $arParams["GROUP_ID"],
		),
	$component
);?>
	<?if($USER->IsAuthorized() && CBlog::CanUserCreateBlog($USER->GetID()))
	{
		if(!CBlog::GetByOwnerID($USER->GetID(), $arParams["GROUP_ID"]))
		{
			?>
		<div class="blog-mainpage-create-blog">
		<a href="<?=$arResult["PATH_TO_NEW_BLOG"]?>" class="blog-author-icon"></a>&nbsp;<a href="<?=$arResult["PATH_TO_NEW_BLOG"]?>"><?=GetMessage("BLOG_CREATE_BLOG")?></a>
		</div>
			<?
		}
	}

?>
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                    <div class="blog-sidebar blog-sidebar-2">
                        <?$APPLICATION->IncludeComponent("bitrix:search.form","blog",Array(
                                "USE_SUGGEST" => "N",
                                "PAGE" => "/blog/search.php"
                            )
                        );?> 
                        
                        <?
                        $APPLICATION->IncludeComponent(
                            "richsite:blog.list",
                            "",
                            Array(
                            )
                        );
                        ?>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row blog-posts">
<?
$APPLICATION->IncludeComponent(
"bitrix:blog.new_posts.list",
    "",
    Array(
        "SEO_USER" => "Y",
        "MESSAGE_PER_PAGE" => "6",
        "DATE_TIME_FORMAT" => "d.m.Y H:i:s",
        "PATH_TO_BLOG" => "",
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
        "BLOG_URL" => "",
        "NAV_TEMPLATE" => "blog-posts",
        "SET_TITLE" => "N",
        "POST_PROPERTY_LIST" => array(),
        "NAME_TEMPLATE" => "#NOBR##LAST_NAME# #NAME##/NOBR#",
        "SHOW_LOGIN" => "Y",
        "IMAGE_MAX_WIDTH" => "600",
        "IMAGE_MAX_HEIGHT" => "600"
    )
);?>

                </div>
            </div>