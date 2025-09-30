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

<div class="clients__slider">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <div class="clients__slide"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>"></div>
    <?endforeach;?>
</div>
<div class="controls">
    <div class="captions">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <div class="caption">
                <h2 class="client__name">
                <?if(empty($arItem['PROPERTIES']['LINK']['VALUE'])):?>
                    <?=$arItem['NAME']?>
                <?else:?>
                    <a href="<?=$arItem['PROPERTIES']['LINK']['VALUE']?>" target="_blank" alt="<?=$arItem['NAME']?>"><?=$arItem['NAME']?></a>
                <?endif;?>
                </h2>
                <?if(!empty($arItem['PROPERTIES']['REVIEWS']['VALUE'])):?>
                    <?foreach ($arItem['PROPERTIES']['REVIEWS']['VALUE'] as $id):?>
                        <a href="<?=\CFile::GetPath($id)?>" alt="<?=$arItem['NAME']?>" data-fancybox="gallery<?=$arItem['ID']?>" class="client__review">
                            <?if(LANG_ID == 'en' || isset($LANG) && $LANG == 'en'):?>
                            Customer feedback
                            <?else:?>
                            Отзывы заказчика
                            <?endif;?>
                        </a>
                    <?endforeach;?>
                <?endif;?>
            </div>
        <?endforeach;?>
    </div>
    <div class="pagination">

    </div>
</div>