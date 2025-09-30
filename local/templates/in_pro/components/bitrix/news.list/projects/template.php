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
//echo '<pre>';print_r($arResult);die;
?>


<div class="projects__items">
    <?foreach ($arResult['ITEMS'] as $arItem):?>
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Service",
        "serviceType": <?=htmlspecialchars($arItem['NAME'], ENT_QUOTES, 'UTF-8');?>,
        "provider": {
            "@type": "Organization",
            "name": <?=htmlspecialchars($arItem['NAME'], ENT_QUOTES, 'UTF-8');?>,
            "url": "https://in-pro.ru/",
        },
    }
    </script>
        <div class="projects__item" data-cat="<?=((count($arItem['TEG_CODES']) > 1))? implode(', ', $arItem['TEG_CODES']) : current($arItem['TEG_CODES'])?>">
        <div class="container">
            <div class="projects__item__img">
                <div class="img-container">
                    <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>">
                </div>
            </div>
            <div class="projects__item__text">
                <h3 class="item__header"><?=$arItem['NAME']?></h3>
				<? if(stristr($arItem['PREVIEW_TEXT'], 'ООО «ОлимпСитиСтрой»') == TRUE) { ?>
					<? echo str_replace('<p>', "<p class='spetsclass'>",$arItem['PREVIEW_TEXT']); ?>
				<? } else {
					echo $arItem['PREVIEW_TEXT'];
				} ?>
				<? 
					//$a = "ООО «ОлимпСитиСтрой»";
					//$arItem['PREVIEW_TEXT'] = str_replace($a, "<sub class='spetsclass'>*</sub>",$arItem['PREVIEW_TEXT']);
					//echo $arItem['PREVIEW_TEXT'];
				?>
				<style>
					.projects__item__text .spetsclass:nth-child(2) {
						display: none;
					}
				</style>
                <a data-fancybox data-src="#item<?=$arItem['ID']?>" href="javascript:void();" class="pr-more">
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
                <div class="pr-info">
                    <?if(!empty($arItem['PROPERTIES']['PHOTOS']['VALUE'])):?>
                        <?foreach ($arItem['PROPERTIES']['PHOTOS']['VALUE'] as $k => $v):?>
                            <a href="<?=\CFile::GetPath($v)?>" data-fancybox="gallery<?=$arItem['ID']?>" class="pr-info-photo <?if($k>0):?>hidden-image<?endif;?>">
                                <?if(LANG_ID == 'en' || isset($LANG) && $LANG == 'en'):?>
                                View photos
                                <?else:?>
                                Посмотреть фото
                                <?endif;?>
                            </a>
                        <?endforeach;?>
                    <?endif;?>
                    <?if(!empty($arItem['PROPERTIES']['REVIEWS']['VALUE'])):?>
                        <?foreach ($arItem['PROPERTIES']['REVIEWS']['VALUE'] as $k => $v):?>
                            <a href="<?=\CFile::GetPath($v)?>" data-fancybox="review<?=$arItem['ID']?>" class="pr-info-review<?if($k>0):?>hidden-image<?endif;?>">
                                <?if(LANG_ID == 'en' || isset($LANG) && $LANG == 'en'):?>
                                View a review
                                <?else:?>
                                Посмотреть отзыв
                                <?endif;?>
                            </a>
                        <?endforeach;?>
                    <?endif;?>
                    <?if(!empty($arItem['PROPERTIES']['BLAGODARS']['VALUE'])):?>
                        <?foreach ($arItem['PROPERTIES']['BLAGODARS']['VALUE'] as $k => $v):?>
                            <a href="<?=\CFile::GetPath($v)?>" data-fancybox="blago<?=$arItem['ID']?>" class="pr-info-blago<?if($k>0):?>hidden-image<?endif;?>">
                                <?if(LANG_ID == 'en' || isset($LANG) && $LANG == 'en'):?>
                                View a blagodarnost
                                <?else:?>
                                Посмотреть благодарность
                                <?endif;?>
                            </a>
                        <?endforeach;?>
                    <?endif;?>
                </div>
            </div>
        </div>
    </div>
    <?endforeach;?>
</div>