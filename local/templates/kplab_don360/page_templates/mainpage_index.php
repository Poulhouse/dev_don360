<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION -> SetTitle("Главная"); ?>

<?/* $APPLICATION -> IncludeComponent(
	"kplab:portfolio",
	"main",
	array(
		"COMPONENT_TEMPLATE" => "main",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "0",
		"SET_TITLE" => "Y",
		"TITLE_PORTFOLIO" => "Мы делаем профессиональный\n3D-тур под ключ",
		"IBLOCK_TYPE" => "iblock_content",
		"IBLOCK_ID" => "1",
		"SHOW_ELEMENT_ON_FRONTPAGE" => "Y",
		"TOP_COUNT" => "5",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "NAME",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_PICTURE",
			4 => "IBLOCK_ID",
			5 => "",
		),
		"GET_EXTERNAL_ID" => "N",
		"GET_IBLOCK_SECTION_ID" => "Y",
		"PROPERTY_CODE" => array(
			0 => "GOOGLE_FRAME",
			1 => "CLASSIC_FRAME",
			2 => "YANDEX_FRAME",
			3 => "",
		),
		"SORT_BY1" => "ID",
		"SORT_ORDER1" => "ASC",
		"DETAIL_URL" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LOOP_SLIDER" => "Y"
	),
	false
);*/ ?>

        <!-- СЛАЙДЕР -->
        <?
        $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => SITE_TEMPLATE_PATH."/page_blocks/mainpage/slider.php",
                "EDIT_TEMPLATE" => ""
            )
        );
        ?>
        <!-- КОНЕЦ СЛАЙДЕР -->

        <!-- НАШИ_ПРЕИМУЩЕСТВА -->
        <?
        $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => SITE_TEMPLATE_PATH."/page_blocks/mainpage/offers.php",
                "EDIT_TEMPLATE" => ""
            )
        );
        ?>
        <!-- КОНЕЦ НАШИ_ПРЕИМУЩЕСТВА -->

        <!-- УСЛУГИ -->
        <?
        $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => SITE_TEMPLATE_PATH."/page_blocks/mainpage/services.php",
                "EDIT_TEMPLATE" => ""
            )
        );
        ?>
        <!-- КОНЕЦ УСЛУГИ -->

        <!-- КАЛЬКУЛЯТОР -->
        <?/*
        $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => SITE_TEMPLATE_PATH."/page_blocks/mainpage/calculator-tariffs.php",
                "EDIT_TEMPLATE" => ""
            )
        );*/
        ?>
        <!-- КОНЕЦ КАЛЬКУЛЯТОР -->

        <!-- ЭТАПЫ_СОТРУДНИЧЕСТВА -->
        <?
        $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => SITE_TEMPLATE_PATH."/page_blocks/mainpage/steps.php",
                "EDIT_TEMPLATE" => ""
            )
        );
        ?>
        <!-- КОНЕЦ ЭТАПЫ_СОТРУДНИЧЕСТВА -->

        <!-- ПРЕИМУЩЕСТВА_И_ОТЗЫВЫ -->
        <?
        $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => SITE_TEMPLATE_PATH."/page_blocks/mainpage/tizers.php",
                "EDIT_TEMPLATE" => ""
            )
        );
        ?>
        <!-- КОНЕЦ ПРЕИМУЩЕСТВА_И_ОТЗЫВЫ -->

        <!-- ВОПРОС_ОТВЕТ -->
        <?
        $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => SITE_TEMPLATE_PATH."/page_blocks/mainpage/faq.php",
                "EDIT_TEMPLATE" => ""
            )
        );
        ?>
        <!-- КОНЕЦ ВОПРОС_ОТВЕТ -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>