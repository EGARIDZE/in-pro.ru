<?php
/** @global $APPLICATION */
/** @global $USER */
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;

Loc::loadLanguageFile(__FILE__);


$asset = Asset::getInstance();

// для css-файлов
//$asset->addString('<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />');
$asset->addCss(SITE_TEMPLATE_PATH . "/css/normalize.css");
$asset->addString('<link href="https://fonts.googleapis.com/css2?family=Cuprum:wght@400;700&display=swap" rel="stylesheet">');
$asset->addCss(SITE_TEMPLATE_PATH . "/css/animate.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/css/slick-theme.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/css/slick.css");
$asset->addCss(SITE_TEMPLATE_PATH . "/css/main.css");

// для js-файлов
/*$asset->addJs(SITE_TEMPLATE_PATH.'/js/jquery.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/slick.min.js');
$asset->addString('<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>');
$asset->addString('<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/map_api.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/map.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/main.js');*/

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="cmsmagazine" content="a33de3e7559358185abd5d281820cd0b">
    <meta name="yandex-verification" content="23ca43b944669fa3">
    <meta name="google-site-verification" content="vYwgeFsFcJhQQwziyv3e-wHUsIjset2CvZmkQ-aWKlM">

    <!--<meta charset="UTF-8">-->
    <meta name="viewport" content="width=device-width">

    <title>InPro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">

	<meta property="og:title" content="<?= $APPLICATION->ShowProperty("title") ?>"/>
    <meta property="og:description" content="<?= $APPLICATION->ShowProperty("description") ?>"/>
    <meta property="og:url" content="https://in-pro.ru/"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="ИН-ПРО"/>
    <meta property="og:image" content="https://in-pro.ru/local/templates/in_pro/img/logo@2x.png"/>
    <meta property="og:image:type" content="image/webp"/>
    <meta property="og:image:width" content="166"/>
    <meta property="og:image:height" content="68"/>


    <?/*$APPLICATION->ShowHead();*/?>

    <!--<meta http-equiv="Content-Type" content="text/html; charset=<?=LANG_CHARSET;?>">--> <!-- Установка кодировки сайта -->
    <meta http-equiv="content-type" content="text/html; charset=<?=LANG_CHARSET;?>">

    <? /* $APPLICATION->ShowMeta("keywords") */ ?> <!-- Вывод мета тега keywords -->

    <? /* $APPLICATION->ShowMeta("description") */ ?> <!-- Вывод мета тега description -->
    <? $description = $APPLICATION->GetProperty("description"); ?>
    <meta name="description" content="<?=$description;?>">

    <!-- ShowCSS() -->

        <? $APPLICATION->ShowCSS(); ?> <!-- Подключение основных файлов стилей template_styles.css и styles.css -->

        <!--<link href="/bitrix/js/main/core/css/core.min.css?15948146282854" type="text/css" rel="stylesheet">
        <script data-skip-moving="true">(function(w, d, n) {var cl = "bx-core";var ht = d.documentElement;var htc = ht ? ht.className : undefined;if (htc === undefined || htc.indexOf(cl) !== -1){return;}var ua = n.userAgent;if (/(iPad;)|(iPhone;)/i.test(ua)){cl += " bx-ios";}else if (/Android/i.test(ua)){cl += " bx-android";}cl += (/(ipad|iphone|android|mobile|touch)/i.test(ua) ? " bx-touch" : " bx-no-touch");cl += w.devicePixelRatio && w.devicePixelRatio >= 2? " bx-retina": " bx-no-retina";var ieVersion = -1;if (/AppleWebKit/.test(ua)){cl += " bx-chrome";}else if ((ieVersion = getIeVersion()) > 0){cl += " bx-ie bx-ie" + ieVersion;if (ieVersion > 7 && ieVersion < 10 && !isDoctype()){cl += " bx-quirks";}}else if (/Opera/.test(ua)){cl += " bx-opera";}else if (/Gecko/.test(ua)){cl += " bx-firefox";}if (/Macintosh/i.test(ua)){cl += " bx-mac";}ht.className = htc ? htc + " " + cl : cl;function isDoctype(){if (d.compatMode){return d.compatMode == "CSS1Compat";}return d.documentElement && d.documentElement.clientHeight;}function getIeVersion(){if (/Opera/i.test(ua) || /Webkit/i.test(ua) || /Firefox/i.test(ua) || /Chrome/i.test(ua)){return -1;}var rv = -1;if (!!(w.MSStream) && !(w.ActiveXObject) && ("ActiveXObject" in w)){rv = 11;}else if (!!d.documentMode && d.documentMode >= 10){rv = 10;}else if (!!d.documentMode && d.documentMode >= 9){rv = 9;}else if (d.attachEvent && !/Opera/.test(ua)){rv = 8;}if (rv == -1 || rv == 8){var re;if (n.appName == "Microsoft Internet Explorer"){re = new RegExp("MSIE ([0-9]+[\.0-9]*)");if (re.exec(ua) != null){rv = parseFloat(RegExp.$1);}}else if (n.appName == "Netscape"){rv = 11;re = new RegExp("Trident/.*rv:([0-9]+[\.0-9]*)");if (re.exec(ua) != null){rv = parseFloat(RegExp.$1);}}}return rv;}})(window, document, navigator);</script>
        <link href="/bitrix/js/ui/fonts/opensans/ui.font.opensans.min.css?15948146411861" type="text/css" rel="stylesheet">
        <link href="/bitrix/js/main/popup/dist/main.popup.bundle.min.css?159481530823459" type="text/css" rel="stylesheet">
        <link href="/bitrix/js/main/core/css/core_date.min.css?15948146289658" type="text/css" rel="stylesheet">
        <link href="/bitrix/js/fileman/sticker.min.css?159481463124594" type="text/css" rel="stylesheet">
        <link href="/bitrix/js/main/core/css/core_panel.min.css?159481462863259" type="text/css" rel="stylesheet">
        <link href="/bitrix/js/main/sidepanel/css/sidepanel.min.css?15948153086244" type="text/css" rel="stylesheet">
        <link href="/local/templates/in_pro/components/bitrix/news.list/main_slider/style.css?1594989006150" type="text/css" rel="stylesheet">
        <link href="/local/templates/in_pro/css/normalize.css?15948019661542" type="text/css" data-template-style="true" rel="stylesheet">
        <link href="/local/templates/in_pro/css/animate.css?159480196581530" type="text/css" data-template-style="true" rel="stylesheet">
        <link href="/local/templates/in_pro/css/slick-theme.css?15948019673145" type="text/css" data-template-style="true" rel="stylesheet">
        <link href="/local/templates/in_pro/css/slick.css?15948019671776" type="text/css" data-template-style="true" rel="stylesheet">
        <link href="/local/templates/in_pro/css/main.css?159539834135358" type="text/css" data-template-style="true" rel="stylesheet">
        <link href="/bitrix/panel/main/popup.min.css?159481462820704" type="text/css" data-template-style="true" rel="stylesheet">
        <link href="/local/templates/in_pro/components/bitrix/menu/main/style.min.css?15949654023715" type="text/css" data-template-style="true"  rel="stylesheet">
        <link href="/bitrix/panel/main/admin-public.min.css?159481462873486" type="text/css" data-template-style="true" rel="stylesheet">
        <link href="/bitrix/panel/main/hot_keys.min.css?15948146283150" type="text/css" data-template-style="true" rel="stylesheet">
        <link href="/bitrix/themes/.default/pubstyles.min.css?159481462847787" type="text/css" data-template-style="true" rel="stylesheet">-->

    <!-- ShowCSS() -->

	<? $APPLICATION->ShowHeadStrings() ?> <!-- Отображает специальные стили, JavaScript -->
	<? $APPLICATION->ShowHeadScripts() ?> <!-- Вывода служебных скриптов -->
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" data-skip-moving="true">
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();
	   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
	   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(92882058, "init", {
	        clickmap:true,
	        trackLinks:true,
	        accurateTrackBounce:true,
	        webvisor:true
	   });
	</script>
	<!-- /Yandex.Metrika counter -->
</head>
<body>

<? if(CSite::InDir('/about/')){ ?>
	<!-- Прелоадер -->
	<div class="preloader">
	  <div class="preloader__row">
		<div class="preloader__item"></div>
		<div class="preloader__item"></div>
	  </div>
	</div>
	
	<style>
		.preloader {
		  /*фиксированное позиционирование*/
		  position: fixed;
		  /* координаты положения */
		  left: 0;
		  top: 0;
		  right: 0;
		  bottom: 0;
		  /* фоновый цвет элемента */
		  background: #e0e0e0;
		  /* размещаем блок над всеми элементами на странице (это значение должно быть больше, чем у любого другого позиционированного элемента на странице) */
		  z-index: 1001;
		}
		
		.preloader__row {
		  position: relative;
		  top: 50%;
		  left: 50%;
		  width: 70px;
		  height: 70px;
		  margin-top: -35px;
		  margin-left: -35px;
		  text-align: center;
		  animation: preloader-rotate 2s infinite linear;
		}
		
		.preloader__item {
		  position: absolute;
		  display: inline-block;
		  top: 0;
		  background-color: #337ab7;
		  border-radius: 100%;
		  width: 35px;
		  height: 35px;
		  animation: preloader-bounce 2s infinite ease-in-out;
		}
		
		.preloader__item:last-child {
		  top: auto;
		  bottom: 0;
		  animation-delay: -1s;
		}
		
		@keyframes preloader-rotate {
		  100% {
			transform: rotate(360deg);
		  }
		}
		
		@keyframes preloader-bounce {
		
		  0%,
		  100% {
			transform: scale(0);
		  }
		
		  50% {
			transform: scale(1);
		  }
		}
		
		.loaded_hiding .preloader {
		  transition: 0.3s opacity;
		  opacity: 0;
		}
		
		.loaded .preloader {
		  display: none;
		}
	</style>
<? } ?>

<div id="panel">
    <?$APPLICATION->ShowPanel();?>
</div>

<!--<div id="preloader-wrapper"> <div id="preloader-logo"></div> </div>-->
<?php
if (ERROR_404 == 'Y') {
	$class_error_page = 'status-404';
}
?>
<header class="header <?=$class_error_page?>">
    <div class="container">
        <?if($APPLICATION->GetCurDir() !== '/'):?>
        <a href="/" class="header__logo">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/logo@2x.png" alt="">
        </a>
        <?else:?>
            <img src="<?=SITE_TEMPLATE_PATH?>/img/logo@2x.png" alt="" class="logo-img">
        <?endif;?>

        <ul itemscope="" itemtype="http://schema.org/ItemList" class="header__menu">
            <?$APPLICATION->IncludeComponent("bitrix:menu", "main", Array(
                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                    "CHILD_MENU_TYPE" => "left_".$lang,	// Тип меню для остальных уровней
                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                    "MAX_LEVEL" => "2",	// Уровень вложенности меню
                    "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                    "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                    "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                    "ROOT_MENU_TYPE" => "top_".$lang,	// Тип меню для первого уровня
                    "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                    "COMPONENT_TEMPLATE" => "horizontal_multilevel"
                ),
                false
            );?>
        </ul>

        <ul class="lang-menu">
            <li class="lang">
                <label class="language-switcher">
                    <input type="checkbox">
                    <span class="slider round"></span>
                    <span class="select-ru"><a href="./?LANG=rus" class="<?if(LANG_ID == 'rus' || isset($LANG) && $LANG == 'rus'):?>selected<?endif;?>">RU</a></span>
                    <span class="select-en"><a href="./?LANG=en" class="<?if(LANG_ID == 'en' || isset($LANG) && $LANG == 'en'):?>selected<?endif;?>">EN</a></span>
                </label>
            </li>
        </ul>

        <div class="burger">
            <span></span>
        </div>
    </div>
    <?if(CSite::InDir('/clients/') || CSite::InDir('/projects/')):?>
        <div class="header-bg"></div>
    <?endif;?>
	<?php
		if ($APPLICATION->GetCurDir() !== '/') {
			?><div class="container"><?
			$APPLICATION->IncludeComponent("bitrix:breadcrumb","bread",Array(
					"START_FROM" => "0", 
					"PATH" => "", 
					"SITE_ID" => "s1",
					"CLASS" => $class_inverse
				)
			);
			?></div><?
		}
	?>
</header>
