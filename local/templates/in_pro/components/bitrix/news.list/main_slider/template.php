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

<? $counter = 1; ?>

<?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
<div class="home__slide" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
    <div style="display: none; text-align: center;" id="modal<?=$arItem['ID']?>" class="modal__window">
        <?=$arItem['PROPERTIES']['MODAL_TEXT']['~VALUE']['TEXT']?>
    </div>
    <div class="home__slide__news">
        <div class="news__date">
            <?=$arItem["DISPLAY_ACTIVE_FROM"]?>
        </div>
        <div class="news__text">
            <?=$arItem['DETAIL_TEXT']?>
        </div>

		<? if($counter == 1) {
			//$counter++;
			?>
			<a data-fancybox data-src="#modal<?=$arItem['ID']?>" href="javascript:;" class="news__more">
				<?if(LANG_ID == 'en' || isset($LANG) && $LANG == 'en'):?>
					More
				<?else:?>
					Подробнее
				<?endif;?>
        	</a>
		<? } ?>
    </div>
    <div class="home__slide__title" data-animation="fadeIn" data-delay="0s">
        <h2 class="title__header"><?=$arItem['NAME']?></h2>
        <p class="title__text"><?=$arItem['PREVIEW_TEXT']?></p>
    </div>
</div>

<?endforeach;?>