<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$APPLICATION->IncludeComponent(
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
			"PATH_TO_RSS_ALL"		=> $arResult["PATH_TO_RSS_ALL"],
			"BLOG_URL"				=> $arResult["VARIABLES"]["blog"],
			"SET_NAV_CHAIN"			=> $arResult["SET_NAV_CHAIN"],
			"GROUP_ID" 			=> $arParams["GROUP_ID"],
		),
	$component
);
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
                         <?
                            $APPLICATION->IncludeComponent("bitrix:blog.new_posts", "blog", Array(
                                        "SEO_USER" => "Y",
                                        "MESSAGE_COUNT" => "4",
                                        "MESSAGE_LENGTH" => "100",
                                        "PREVIEW_WIDTH" => "371",
                                        "PREVIEW_HEIGHT" => "260",
                                        "DATE_TIME_FORMAT" => "d.m.Y H:i:s",
                                        "PATH_TO_BLOG" => "/blog/#blog#/",
                                        "PATH_TO_POST" => "/blog/#blog#/#post_id#/",
                                        "PATH_TO_USER" => "blog_user.php?page=user&user_id=#user_id#",
                                        "PATH_TO_GROUP_BLOG_POST" => "",
                                        "PATH_TO_SMILE" => "/bitrix/images/blog/smile/",
                                        "BLOG_VAR" => "blog",
                                        "POST_VAR" => "post_id",
                                        "USER_VAR" => "user_id",
                                        "PAGE_VAR" => "page",
                                        "CACHE_TYPE" => "A",
                                        "CACHE_TIME" => "86400",
                                        "GROUP_ID" => "",
                                        "BLOG_URL" => ""
                                    )
                                );
                            ?>
                        <?
                        $APPLICATION->IncludeComponent(
                                        "bitrix:blog.info",
                                        "",
                                        Array(
                                                        "BLOG_VAR"		=> $arResult["ALIASES"]["blog"],
                                                        "USER_VAR"		=> $arResult["ALIASES"]["user_id"],
                                                        "PAGE_VAR"		=> $arResult["ALIASES"]["page"],
                                                        "PATH_TO_BLOG"	=> $arResult["PATH_TO_BLOG"],
                                                        "PATH_TO_POST"	=> $arResult["PATH_TO_POST"],
                                                        "PATH_TO_USER"	=> $arResult["PATH_TO_USER"],
                                                        "PATH_TO_BLOG_CATEGORY"	=> $arResult["PATH_TO_BLOG_CATEGORY"],
                                                        "BLOG_URL"		=> $arResult["VARIABLES"]["blog"],
                                                        "CATEGORY_ID"	=> $arResult["VARIABLES"]["category"],
                                                        "CACHE_TYPE"	=> $arResult["CACHE_TYPE"],
                                                        "CACHE_TIME"	=> $arResult["CACHE_TIME"],
                                                        "BLOG_PROPERTY_LIST" =>  $arParams["BLOG_PROPERTY_LIST"],
                                                        "GROUP_ID" 			=> $arParams["GROUP_ID"],
                                                        "NAME_TEMPLATE" => $arParams["NAME_TEMPLATE"],
                                                        "SHOW_LOGIN" => $arParams["SHOW_LOGIN"],
                                                        "PATH_TO_CONPANY_DEPARTMENT" => $arParams["PATH_TO_CONPANY_DEPARTMENT"],
                                                        "PATH_TO_SONET_USER_PROFILE" => $arParams["PATH_TO_SONET_USER_PROFILE"],
                                                        "PATH_TO_MESSAGES_CHAT" => $arParams["PATH_TO_MESSAGES_CHAT"],
                                                        "PATH_TO_VIDEO_CALL" => $arParams["PATH_TO_VIDEO_CALL"],
                                                        "FONT_MAX" => 18, 
                                                        "FONT_MIN" => 10,
                                                        "WIDTH" => $arParams["WIDTH"], 
                                                ),
                                        $component 
                                );
                        ?>
                    </div>
                </div>	
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row blog-posts">
		<?
		$APPLICATION->IncludeComponent(
			"bitrix:blog.blog", 
			"", 
			Array(
					"MESSAGE_COUNT"			=> $arResult["MESSAGE_COUNT"],
					"BLOG_VAR"				=> $arResult["ALIASES"]["blog"],
					"POST_VAR"				=> $arResult["ALIASES"]["post_id"],
					"USER_VAR"				=> $arResult["ALIASES"]["user_id"],
					"PAGE_VAR"				=> $arResult["ALIASES"]["page"],
					"PATH_TO_BLOG"			=> $arResult["PATH_TO_BLOG"],
					"PATH_TO_BLOG_CATEGORY"	=> $arResult["PATH_TO_BLOG_CATEGORY"],
					"PATH_TO_POST"			=> $arResult["PATH_TO_POST"],
					"PATH_TO_POST_EDIT"		=> $arResult["PATH_TO_POST_EDIT"],
					"PATH_TO_USER"			=> $arResult["PATH_TO_USER"],
					"PATH_TO_SMILE"			=> $arResult["PATH_TO_SMILE"],
					"BLOG_URL"				=> $arResult["VARIABLES"]["blog"],
					"YEAR"					=> $arResult["VARIABLES"]["year"],
					"MONTH"					=> $arResult["VARIABLES"]["month"],
					"DAY"					=> $arResult["VARIABLES"]["day"],
					"CATEGORY_ID"			=> $arResult["VARIABLES"]["category"],
					"CACHE_TYPE"			=> $arResult["CACHE_TYPE"],
					"CACHE_TIME"			=> $arResult["CACHE_TIME"],
					"CACHE_TIME_LONG"		=> $arResult["CACHE_TIME_LONG"],
					"SET_NAV_CHAIN"			=> $arResult["SET_NAV_CHAIN"],
					"SET_TITLE"				=> $arResult["SET_TITLE"],
					"POST_PROPERTY_LIST"	=> $arParams["POST_PROPERTY_LIST"],
					"DATE_TIME_FORMAT"		=> $arResult["DATE_TIME_FORMAT"],
					"NAV_TEMPLATE"			=> $arParams["NAV_TEMPLATE"],
					"GROUP_ID" 				=> $arParams["GROUP_ID"],
					"SEO_USER"				=> $arParams["SEO_USER"],
					"NAME_TEMPLATE" 		=> $arParams["NAME_TEMPLATE"],
					"SHOW_LOGIN" 			=> $arParams["SHOW_LOGIN"],
					"PATH_TO_CONPANY_DEPARTMENT"	=> $arParams["PATH_TO_CONPANY_DEPARTMENT"],
					"PATH_TO_SONET_USER_PROFILE"	=> $arParams["PATH_TO_SONET_USER_PROFILE"],
					"PATH_TO_MESSAGES_CHAT"	=> $arParams["PATH_TO_MESSAGES_CHAT"],
					"PATH_TO_VIDEO_CALL"	=> $arParams["PATH_TO_VIDEO_CALL"],
					"USE_SHARE" 			=> $arParams["USE_SHARE"],
					"SHARE_HIDE" 			=> $arParams["SHARE_HIDE"],
					"SHARE_TEMPLATE" 		=> $arParams["SHARE_TEMPLATE"],
					"SHARE_HANDLERS" 		=> $arParams["SHARE_HANDLERS"],
					"SHARE_SHORTEN_URL_LOGIN"	=> $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],		
					"SHOW_RATING" => $arParams["SHOW_RATING"],
					"IMAGE_MAX_WIDTH" => $arParams["IMAGE_MAX_WIDTH"],
					"IMAGE_MAX_HEIGHT" => $arParams["IMAGE_MAX_HEIGHT"],
					"ALLOW_POST_CODE" => $arParams["ALLOW_POST_CODE"],
					"RATING_TYPE" => $arParams["RATING_TYPE"],
				),
			$component 
		);
		?>
                </div>
            </div>