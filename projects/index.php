<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$chain_item = "Реализованные проекты";
if (LANG_ID == 'en') {
	$chain_item = "Projects";
}
$APPLICATION->AddChainItem($chain_item, "/projects/");
?>
<main>
    <section class="projects">
        <div class="container">
            <div class="projects__nav" itemscope itemtype="http://schema.org/BreadcrumbList">
                <a itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" href="#" class="pr__filter" data-filter="all"><?if(LANG_ID == 'en' || isset($LANG) && $LANG == 'en'):?>All projects<?else:?>Все проекты<?endif;?></a>
                <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "projects", Array(
                        "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                        "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                        "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                        "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                        "CACHE_TYPE" => "A",	// Тип кеширования
                        "COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
                        "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	// Показывать количество
                        "FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
                        "IBLOCK_ID" => IBLOCK_PROJECTS_TAGS,	// Инфоблок
                        "IBLOCK_TYPE" => $lang,	// Тип инфоблока
                        "SECTION_CODE" => "",	// Код раздела
                        "SECTION_FIELDS" => array(	// Поля разделов
                            0 => "NAME",
                            1 => "",
                        ),
                        "SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
                        "SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
                        "SECTION_USER_FIELDS" => array(	// Свойства разделов
                            0 => "",
                            1 => "",
                        ),
                        "SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
                        "TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
                        "VIEW_MODE" => "TEXT",	// Вид списка подразделов
                        "COMPONENT_TEMPLATE" => ".default"
                    ),
                    false
                );?>
            </div>
        </div>
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "projects",
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "N",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(
                    0 => "NAME",
                    1 => "",
                ),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => IBLOCK_PROJECTS,
                "IBLOCK_TYPE" => $lang,
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "999",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(
                    0 => "",
                    1 => "PHOTOS",
                    2 => "REVIEWS",
                ),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "SORT",
                "SORT_BY2" => "ID",
                "SORT_ORDER1" => "ASC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N",
                "COMPONENT_TEMPLATE" => "projects"
            ),
            false
        );?>
    </section>
</main>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
