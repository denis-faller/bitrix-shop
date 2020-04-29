<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if (!$this->__component->__parent || empty($this->__component->__parent->__name) || $this->__component->__parent->__name != "bitrix:blog"):
	$GLOBALS['APPLICATION']->SetAdditionalCSS('/bitrix/components/bitrix/blog/templates/.default/style.css');
	$GLOBALS['APPLICATION']->SetAdditionalCSS('/bitrix/components/bitrix/blog/templates/.default/themes/blue/style.css');
endif;
?>
<?CUtil::InitJSCore(array("image", "ajax"));?>
<script>
BX.viewImageBind(
	'blg-comment-<?=$arParams["ID"]?>',
	false, 
	{tag:'IMG', attr: 'data-bx-image'}
);

BX.message({'BPC_ERROR_NO_TEXT':'<?=GetMessage("BPC_ERROR_NO_TEXT")?>'});
</script>
<div class="blog-comments" id="blg-comment-<?=$arParams["ID"]?>">
<a name="comments"></a>
<?
if($arResult["is_ajax_post"] != "Y")
{
	include($_SERVER["DOCUMENT_ROOT"].$templateFolder."/script.php");
	include($_SERVER["DOCUMENT_ROOT"].$templateFolder."/scripts_for_editor.php");
}
else
{
	$APPLICATION->RestartBuffer();
	?><script>window.BX = top.BX;
	if(!top.arImages)
		top.arImages = [];
	if(!top.arImagesId)
		top.arImagesId = [];
	<?
	if(!empty($arResult["Images"]))
	{
		foreach($arResult["Images"] as $aImg)
		{
			?>
			top.arImages['<?=$aImg["ID"]?>'] = "<?=CUtil::JSEscape($aImg["SRC"])?>";
			top.arImagesId['<?=$aImg["ID"]?>'] = '<?=$aImg["ID"]?>';
			<?
		}
	}
	?>
	</script><?
	if(strlen($arResult["COMMENT_ERROR"])>0)
	{
		?>
		<script>top.commentEr = 'Y';</script>
		<div class="blog-errors blog-note-box blog-note-error">
			<div class="blog-error-text">
				<?=$arResult["COMMENT_ERROR"]?>
			</div>
		</div>
		<?
	}
}

if(strlen($arResult["MESSAGE"])>0)
{
	?>
	<div class="blog-textinfo blog-note-box">
		<div class="blog-textinfo-text">
			<?=$arResult["MESSAGE"]?>
		</div>
	</div>
	<?
}
if(strlen($arResult["ERROR_MESSAGE"])>0)
{
	?>
	<div class="blog-errors blog-note-box blog-note-error">
		<div class="blog-error-text" id="blg-com-err">
			<?=$arResult["ERROR_MESSAGE"]?>
		</div>
	</div>
	<?
}
if(strlen($arResult["FATAL_MESSAGE"])>0)
{
	?>
	<div class="blog-errors blog-note-box blog-note-error">
		<div class="blog-error-text">
			<?=$arResult["FATAL_MESSAGE"]?>
		</div>
	</div>
	<?
}
else
{
	$prevTab = 0;
	function ShowComment($comment, $tabCount=0, $tabSize=2.5, $canModerate=false, $User=Array(), $use_captcha=false, $bCanUserComment=false, $errorComment=false, $arParams = array())
	{
		if($comment["SHOW_AS_HIDDEN"] == "Y" || $comment["PUBLISH_STATUS"] == BLOG_PUBLISH_STATUS_PUBLISH || $comment["SHOW_SCREENNED"] == "Y" || $comment["ID"] == "preview")
		{
			?> 
			 <div class="posted-by">
                            <div class="pb-pic">
                                <img src="<?=$comment["BlogUser"]["Avatar_resized"]["100_100"]["src"]?>" alt="">
                            </div>
                            <div class="pb-text">
                                <a href="<?=$comment["urlToAuthor"]?>">
                                    <h5><?=$comment["AuthorName"]?></h5>
                                </a>
                                <p><?=$comment["POST_TEXT"]?></p>
                            </div>
                        </div>
			<?
		}
	}

	function RecursiveComments($sArray, $key, $level=0, $first=false, $canModerate=false, $User, $use_captcha, $bCanUserComment, $errorComment, $arSumComments, $arParams)
	{
		if(!empty($sArray[$key]))
		{
			foreach($sArray[$key] as $comment)
			{
				if(!empty($arSumComments[$comment["ID"]]))
				{
					$comment["CAN_EDIT"] = $arSumComments[$comment["ID"]]["CAN_EDIT"];
					$comment["SHOW_AS_HIDDEN"] = $arSumComments[$comment["ID"]]["SHOW_AS_HIDDEN"];
					$comment["SHOW_SCREENNED"] = $arSumComments[$comment["ID"]]["SHOW_SCREENNED"];
					$comment["NEW"] = $arSumComments[$comment["ID"]]["NEW"];
				}
				ShowComment($comment, $level, 2.5, $canModerate, $User, $use_captcha, $bCanUserComment, $errorComment, $arParams);
				if(!empty($sArray[$comment["ID"]]))
				{
					foreach($sArray[$comment["ID"]] as $key1)
					{
						if(!empty($arSumComments[$key1["ID"]]))
						{
							$key1["CAN_EDIT"] = $arSumComments[$key1["ID"]]["CAN_EDIT"];
							$key1["SHOW_AS_HIDDEN"] = $arSumComments[$key1["ID"]]["SHOW_AS_HIDDEN"];
							$key1["SHOW_SCREENNED"] = $arSumComments[$key1["ID"]]["SHOW_SCREENNED"];
							$key1["NEW"] = $arSumComments[$key1["ID"]]["NEW"];
						}
						ShowComment($key1, ($level+1), 2.5, $canModerate, $User, $use_captcha, $bCanUserComment, $errorComment, $arParams);

						if(!empty($sArray[$key1["ID"]]))
						{
							RecursiveComments($sArray, $key1["ID"], ($level+2), false, $canModerate, $User, $use_captcha, $bCanUserComment, $errorComment, $arSumComments, $arParams);
						}
					}
				}
				if($first)
					$level=0;
			}
		}
	}
	?>
	<?
	if($arResult["is_ajax_post"] != "Y")
	{
		if($arResult["NEED_NAV"] == "Y")
		{
			$component->printPaging();
		}
		
		if($arResult["CanUserComment"])
		{
			?>
                        <?
		}
	}

	$arParams["RATING"] = $arResult["RATING"];
	$arParams["component"] = $component;
	$arParams["arImages"] = $arResult["arImages"];
	if($arResult["is_ajax_post"] == "Y")
		$arParams["is_ajax_post"] = "Y";

	if($arResult["is_ajax_post"] != "Y" && $arResult["NEED_NAV"] == "Y")
	{
		$component->printCommentPages();
		
	}
	else
		RecursiveComments($arResult["CommentsResult"], $arResult["firstLevel"], 0, true, $arResult["canModerate"], $arResult["User"], $arResult["use_captcha"], $arResult["CanUserComment"], $arResult["COMMENT_ERROR"], $arResult["Comments"], $arParams);

	if($arResult["is_ajax_post"] != "Y")
	{
		if($arResult["CanUserComment"] && count($arResult["Comments"])>2)
		{
			if(strlen($arResult["COMMENT_ERROR"])>0 && $_POST["parentId"] == "00" && strlen($_POST["parentId"]) > 1)
			{
				?>
					<div class="blog-errors blog-note-box blog-note-error">
					<div class="blog-error-text">
						<?=$arResult["COMMENT_ERROR"]?>
					</div>
				</div>
				<?
			}
			?>
			
			<?
			if((strlen($arResult["COMMENT_ERROR"])>0 || strlen($_POST["preview"]) > 0)
				&& $_POST["parentId"] == "00" && strlen($_POST["parentId"]) > 1)
			{
				?>
				<script>
				top.text00 = text00 = '<?=CUtil::JSEscape($_POST["comment"])?>';
				top.title00 = title00 = '<?=CUtil::JSEscape($_POST["subject"])?>';
//					todo: need show comment?
				showComment('00', 'Y', '<?=CUtil::JSEscape($_POST["user_name"])?>', '<?=CUtil::JSEscape($_POST["user_email"])?>', "Y");
				</script>
				<?
			}
		}
		

		if($arResult["NEED_NAV"] == "Y")
		{
			$component->printPaging(false);
		}
	}
}
?>
                        <div class="leave-comment">
                            <h4>Leave A Comment</h4>
                            <form method="POST" name="form_comment" id="<?=$component->createPostFormId()?>" action="<?=POST_FORM_ACTION_URI?>" class="comment-form">
                            <input type="hidden" name="parentId" id="parentId" value="">
                            <input type="hidden" name="edit_id" id="edit_id" value="">
                            <input type="hidden" name="act" id="act" value="add">
                            <input type="hidden" name="post" value="Y">
                            <?=bitrix_sessid_post()?>
                            <input type="hidden" name="blog_upload_cid" id="upload-cid" value="">
                            <input type="hidden" name="backurl" value="<?=POST_FORM_ACTION_URI?>" />
                            <div class="row">
                                <?if(!$USER->IsAuthorized()):?>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name" name = "user_name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email" name = "user_email">
                                </div>
                                <?endif;?>
                                <div class="col-lg-12">
                                    <textarea name = "comment" placeholder="Messages"></textarea>
                                    <button type="submit" class="site-btn">Send message</button>
                                </div>
                           </div>
                            </form>
                        </div>                        
                        
                        
</div>

<?
//bind entity to new editor js object
echo $component->bindPostToEditorForm($arParams["ENTITY_XML_ID"], null, $arParams);

if($arResult["is_ajax_post"] == "Y")
	die();
?>