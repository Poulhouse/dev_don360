<?php ?>
<header class="templateux-navbar dark" role="banner">
		<div class="container"  data-aos="fade-down">
			<div class="row">
				<div class="col-3 templateux-logo">
					<a href="index.html" class="animsition-link">Atomic</a>
				</div>
				<nav class="col-9 site-nav">

				<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
					array(
						"COMPONENT_TEMPLATE" => ".default",
						"PATH" => SITE_TEMPLATE_PATH."/menu_top.php",
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "",
						"AREA_FILE_RECURSIVE" => "Y",
						"EDIT_TEMPLATE" => "include_area.php"
					),
					false, array("HIDE_ICONS" => "Y")
				);?>

				</nav> <!-- .site-nav -->

			</div> <!-- .row -->
		</div> <!-- .container -->
	</header> <!-- .templateux-navbar -->