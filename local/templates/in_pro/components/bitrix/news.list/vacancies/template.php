<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

<section class="statistics">
	<div class="container">
		<div class="statistics__hints">
			<div class="hint1">
				Вакансии
			</div>
		</div>
		<!--<div class="statistics__tobottom">
			<a href="#telecommunication" class="scrollTop"></a>
		</div>-->
	</div>
</section>

<section class="projects">
	<div class="projects__items">
		<?foreach ($arResult['ITEMS'] as $arItem):?>
			<div class="projects__item" data-cat="<?=((count($arItem['TEG_CODES']) > 1))? implode(', ', $arItem['TEG_CODES']) : current($arItem['TEG_CODES'])?>">
			<div class="container">
				<div class="projects__item__text">
					<h3 class="item__header"><?=$arItem['NAME']?></h3>
					<?=$arItem['PREVIEW_TEXT']?>
					<a href="<?=$arItem['DETAIL_PAGE_URL'];?>" class="pr-more">
						<?if(LANG_ID == 'en' || isset($LANG) && $LANG == 'en'):?>
						More
						<?else:?>
						Подробнее
						<?endif;?>
					</a>
					<div style="display: none;" class="more__text" id="item<?=$arItem['ID']?>">
						<?=$arItem['DETAIL_TEXT']?>
						<div class="more__text__end"></div>
					</div>
				</div>
			</div>
		</div>
		<?endforeach;?>
	</div>
</section>