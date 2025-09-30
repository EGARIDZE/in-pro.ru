<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?if (!empty($arResult)):?>

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
            <li class="menu-item dropdown" itemscope="" itemtype="http://schema.org/ItemList">
                <a href="<?=$arItem["LINK"]?>" class="parent <?if ($arItem["SELECTED"]):?>current-page<?endif;?>"><?=$arItem["TEXT"]?></a>
                <meta property="name" content="<?=$arItem["TEXT"]?>" />
                    <ul itemscope="" itemtype="http://schema.org/ItemList" class="dropdown-menu">
                        <li itemscope="" itemtype="http://schema.org/ItemList"><div class="dropdown-menu-bg"></div></li>
		<?else:?>
            <li class=" " itemscope="" itemtype="http://schema.org/ItemList">
                <a href="<?=$arItem["LINK"]?>" class="dropdown-item" title="<?=$arItem["TEXT"]?>">
                    <meta property="name" content="<?=$arItem["TEXT"]?>" />
                    <span class="name"><?=$arItem["TEXT"]?></span>
                </a>
            </li>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <li class="menu-item solo" itemscope="" itemtype="http://schema.org/ItemList">
                    <a href="<?=$arItem["LINK"]?>" <?if ($arItem["SELECTED"]):?>class="current-page"<?endif;?>><?=$arItem["TEXT"]?></a>
                    <meta property="name" content="<?=$arItem["TEXT"]?>" />
                </li>
            <?else:?>
                <li class=" " itemscope="" itemtype="http://schema.org/ItemList">
					<?
						if (!empty($arItem["PARAMS"]["data-filter"]) && $APPLICATION->GetCurDir() == "/projects/") {
							$atr = 'data-filter="'.$arItem["PARAMS"]["data-filter"].'"';
							$addtional_class = "drop-filter";
						}
					?>
                    <a href="<?=$arItem["LINK"]?>" class="dropdown-item drop-filter" title="<?=$arItem["TEXT"]?>" <?=$atr?>>
                        <meta property="name" content="<?=$arItem["TEXT"]?>" />
                        <span class="name"><?=$arItem["TEXT"]?></span>
                    </a>
                </li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <li class="menu-item solo"  itemscope="" itemtype="http://schema.org/ItemList">
                    <a href="<?=$arItem["LINK"]?>" <?if ($arItem["SELECTED"]):?>class="current-page"<?endif;?>><?=$arItem["TEXT"]?></a>
                    <meta property="name" content="<?=$arItem["TEXT"]?>" />
                </li>
			<?else:?>
                <li class="menu-item solo"  itemscope="" itemtype="http://schema.org/ItemList">
                    <a  href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                    <meta property="name" content="<?=$arItem["TEXT"]?>" />
                </li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

<?endif?>
<? 
if ($USER->GetID() == 1) {
	//echo '<pre>'; print_r($arResult); echo '</pre>';
}
?>
