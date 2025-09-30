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
?><?foreach($arResult["ITEMS"] as $k => $arItem):?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<section class="block-header <?if(($k % 2) != 0):?>rt<?else:?>lt<?endif;?>" id="<?=$arItem['CODE']?>">
    <div class="container">
        <h2><?=$arItem['NAME']?></h2>
        <p><?=$arItem['PREVIEW_TEXT']?></p>
    </div>
</section>
<section class="competence" style="background: url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>) no-repeat center; background-size: cover;">
    <div class="container <?if(($k % 2) != 0):?>rev<?endif;?>">
        <div class="competence__list">
            <?if(!empty($arItem['PROPERTIES']['new3']['VALUE'])):?>
                <?if($arItem['CODE'] == 'water-service'):?>
                    <h3 class="competence__list__title">
                        <?=current($arItem['PROPERTIES']['new3']['VALUE'])?>

                    </h3>
                <?else:?>
                <?if(!empty($arItem['DETAIL_TEXT'])):?>
                    <p><?=$arItem['DETAIL_TEXT']?></p>
                <?else:?>
                    <h3 class="competence__list__header">
                        <?=$arItem['PROPERTIES']['new3']['NAME']?>
                    </h3>
                <?endif;?>
                <ul>
                    <?foreach ($arItem['PROPERTIES']['new3']['VALUE'] as $val):?>
                        <li><?=$val?></li>
                    <?endforeach;?>
                </ul>
                <?endif;?>
            <?endif;?>
        </div>
    </div>
</section>
<?endforeach;?>