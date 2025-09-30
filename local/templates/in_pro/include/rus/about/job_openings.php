<h2 class="about__header">ВАКАНСИИ</h2>
<p class="about__vacancies__text">Если вы позитивно воспринимаете окружающий мир, ориентированы на развитие и самореализацию, настроены на долгосрочное сотрудничество, то нам по пути!</p>
<div class="about__vacancies__content">
    <div class="container">
        <div class="offer">
            <h2 class="vac__header">Мы предлагаем нашим сотрудникам:</h2>
            <ul>
                <li>Работу в стабильной, динамично развивающейся компании</li>
                <li>Конкурентоспособную, полностью официальную заработную плату, компенсационные выплаты</li>
                <li>Социальную защищенность</li>
                <li>Интересные проекты и задачи для опытных профессионалов, а также возможность постоянно повышать свой профессиональный уровень для начинающих специалистов</li>
                <li>Сплоченный коллектив и развитую корпоративную культуру</li>
            </ul>
        </div>
        <div class="open">
            <h2 class="vac__header">Открытые вакансии:</h2>
            
			<? $APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"vacancies_onmain",
				Array(
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
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"DISPLAY_TOP_PAGER" => "N",
					"FIELD_CODE" => array(0 => "NAME", 1 => "",),
					"FILTER_NAME" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => 24,
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"INCLUDE_SUBSECTIONS" => "Y",
					"MESSAGE_404" => "",
					"NEWS_COUNT" => "20",
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
					"PROPERTY_CODE" => array(0 => "COMPETENCES", 1 => "",),
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
					"STRICT_SECTION_CHECK" => "N"
				)
			); ?>

			<a style="display: block; width: 230px; line-height: 40px; text-align: center; margin: 30px auto;" target="_blank" alt="" href="https://spb.hh.ru/employer/edit/simple?hhtmFrom=main&hhtmFromLabel=header">Больше вакансий на <img style="float: right;" src="https://i.hh.ru/logos/svg/hh.ru__min_.svg?v=11032019" alt="" /></a>

        </div>
    </div>
</div>