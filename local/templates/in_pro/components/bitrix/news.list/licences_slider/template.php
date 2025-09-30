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
<?//echo'<pre>';print_r($arResult["ITEMS"]);die;?>
<ul class="about__licenses__menu">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?if(!empty($arItem['PROPERTIES']['FILTER_ENABLE']['VALUE']) && $arItem['PROPERTIES']['FILTER_ENABLE']['VALUE'] == 'YES'):?>
            <li><a data-category="s<?=$arItem['ID']?>" href="#"><?=$arItem['PROPERTIES']['FILTER_NAME']['VALUE']?></a></li>
        <?endif;?>
    <?endforeach;?>
</ul>
<div class="about__licenses__slider">
    <?foreach($arResult["ITEMS"] as $arItem):?>
	<?
		$file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>300, 'height'=>250), BX_RESIZE_IMAGE_PROPORTIONAL, true);     
		$arItem["PREVIEW_PICTURE"]["SMALL_SRC"] = $file['src'];
	?>
    <div class="licenses__slide" data-slide="s<?=$arItem['ID']?>">
		<?/*<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>">*/?>
		<img src="<?=$arItem['PREVIEW_PICTURE']['SMALL_SRC']?>" alt="<?=$arItem['NAME']?>">
    </div>
    <?endforeach;?>
</div>
<div class="about__text__slider">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <div class="text__slide"><p class="about__licenses__text"><?=$arItem['PREVIEW_TEXT']?></p></div>
    <?endforeach;?>
</div>