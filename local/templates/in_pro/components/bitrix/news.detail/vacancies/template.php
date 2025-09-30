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

<section class="statistics">
	<div class="container">
		<div class="statistics__hints">
			<div class="hint1">
				<?=$arResult["NAME"]?>
			</div>
		</div>
		<!--<div class="statistics__tobottom">
			<a href="#telecommunication" class="scrollTop"></a>
		</div>-->
	</div>
</section>

<section class="competence" style="background: url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>) no-repeat center; background-size: cover;">
    <div class="container block-header" style="display: block;">

		<?if($arResult["DETAIL_TEXT"]):?>
			<p><?=$arResult["DETAIL_TEXT"];?></p>
		<?endif;?>

		<div style="margin-top: 40px;">
			<a target="_blank" alt="" href="<?=$arResult["DISPLAY_PROPERTIES"]["LINK_HH"]["VALUE"];?>" style="display: block; font-size: 20px; margin-bottom: 40px;">Посмотреть вакансию на HeadHunter</a>
		</div>

		<div class="competence__list">
			Контактный номер отдела по работе с персоналом: 8921-186-52-33<br />
			Адрес эл.почты: <a href="mailto:kadry@inn-pro.ru">kadry@inn-pro.ru</a>
		</div>
    </div>
</section>