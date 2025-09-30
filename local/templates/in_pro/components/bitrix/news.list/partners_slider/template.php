<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
		<?
			$file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>200, 'height'=>100), BX_RESIZE_IMAGE_PROPORTIONAL, true);     
			$arItem["PREVIEW_PICTURE"]["SMALL_SRC"] = $file['src'];
			//echo $file['src'];
		?>

		<div style="min-height: 100px; margin: 0px 50px;" class="abpa__slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div style="height: min-content; margin: auto;">
				<?/*<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">*/?>
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SMALL_SRC"];?>" alt="">
			</div>
			<p style="position: absolute; bottom: -30px; z-index: 1000;"><?=$arItem['NAME']?></p>
		</div>
<?endforeach;?>