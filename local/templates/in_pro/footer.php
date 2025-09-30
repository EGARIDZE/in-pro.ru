<?if($APPLICATION->GetCurDir() !== '/' || ERROR_404 == 'Y'):?>
<footer class="footer">
    <div class="container">
        <div class="footer__address">
            <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => SITE_TEMPLATE_PATH."/include/".$lang."/footer_address.php",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
        </div>
        <?if(!CSite::InDir('/clients/')):?>
			<? if (ERROR_404 != 'Y') : ?>
       			<div class="footer__toTop" onclick="$('html,body').animate({'scrollTop' : 0}, 1000);"></div>
			<?endif;?>
        <?endif;?>
        <div class="footer__contact">
            <a href="tel:+78123131767" class="footer__contact__tel">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include/phone.php"
                    )
                );?>
            </a><br>
            <a href="mailto:info@inn-pro.ru" class="footer__contact__mail">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include/email.php"
                    )
                );?>
            </a>
        </div>
    </div>
</footer>
<?endif;?>

	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/slick.min.js"></script>

	<!--<script src="https://api-maps.yandex.ru/2.1/?apikey=38082ca3-fe36-4ef2-9963-d4c9d2d9ed83&lang=ru_RU">
	</script>-->

	<? /* if(CSite::InDir('/about/')):?>
				<script src="<?=SITE_TEMPLATE_PATH?>/js/map_api.js"></script>
				<script src="<?=SITE_TEMPLATE_PATH?>/js/map.js"></script>
	<?endif; */ ?>

	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>

	<!-- Yandex.Metrika counter -->
	<script>
		(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
		m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		ym(65954143, "init", {
		clickmap:true,
		trackLinks:true,
		accurateTrackBounce:true,
		webvisor:true
		});
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/65954143" style="position:absolute; left:-9999px;" alt=""></div></noscript>
	<!-- /Yandex.Metrika counter -->

</body>
</html>

<? if(CSite::InDir('/about/')){ ?>
	<script>
		$(document).ready(function(){

			if($(".mp1").hasClass("active")) {
				$(".spb").css({"display": "none"});
				$(".moskov").css({"display": "block"});
			} else {
				$(".moskov").css({"display": "none"});
				$(".spb").css({"display": "block"});
			}

			//alert("!!!");
			$(".mp2").click(function(){
				//alert("mp2");
				$(".moskov").css({"display": "none"});
				$(".spb").css({"display": "block"});
			});
			$(".mp1").click(function(){
				//alert("mp1");
				$(".spb").css({"display": "none"});
				$(".moskov").css({"display": "block"});
			});
		});

		setTimeout(function() {
			//document.body.classList.add('loaded_hiding');
			//document.body.classList.add('loaded');
			$("body").addClass('loaded_hiding');
			$("body").addClass('loaded');
		}, 6000);

		/*window.onload = function () {
			$("body").addClass('loaded_hiding');
			$("body").addClass('loaded');
		}*/

		/*window.onload = function () {
		  document.body.classList.add('loaded_hiding');
			document.body.classList.add('loaded');
			window.setTimeout(function () {
						document.body.classList.add('loaded');
						document.body.classList.remove('loaded_hiding');
			}, 500);
		}*/
	</script>
<? } ?>