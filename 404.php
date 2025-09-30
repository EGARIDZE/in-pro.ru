<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("404 Not Found");
?>

<div class="container">
	<div class="row">
		<div class="page-404">
			<h1>404</h1>
			<? if (LANG_ID == 'rus') : ?>
				<p>Неправильно набран адрес, <br>или такой страницы на сайте больше не существует.</p>
			<? else : ?>
				<p>The address was typed incorrectly,<br> or the page no longer exists on the site.</p>
			<? endif; ?>
			<?php
				$APPLICATION->IncludeComponent("bitrix:main.map", "", Array(
					"LEVEL"	=>	"3",
					"COL_NUM"	=>	"2",
					"SHOW_DESCRIPTION"	=>	"Y",
					"SET_TITLE"	=>	"Y",
					"CACHE_TIME"	=>	"36000000"
					)
				);
			?>
		</div>
	</div>
</div>
<script>
	document.querySelector(".footer").style.cssText = 'position: absolute; width: 100%; bottom: 0';
</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>