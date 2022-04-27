<?
CModule::IncludeModule("iblock");


$arIBlockType = CIBlockParameters::GetIBlockTypes();

$arIBlock=array();
$rsIBlock = CIBlock::GetList(Array("SORT" => "ASC"), Array("TYPE" => $arCurrentValues["IBLOCK_TYPE"], "ACTIVE"=>"Y"));

while($arr=$rsIBlock->Fetch())
{
	$arIBlock[$arr["ID"]] = "[".$arr["ID"]."] ".$arr["NAME"];
}

$arFieldsCode = CIBlockParameters::GetFieldCode("Поля", "DATA_SOURCE");

$arSorts = Array("ASC"=>"По возрастанию", "DESC"=>"По убыванию");
$arSortFields = Array(
	"ID"=>"ID",
	"NAME"=>"Название",
	"ACTIVE_FROM"=>"Дата начала активности",
	"SORT"=>"Сортировка",
	"TIMESTAMP_X"=>"Дата последнего изменения"
);

$arProperty_LNS = array();
$rsProp = CIBlockProperty::GetList(array("sort"=>"asc", "name"=>"asc"), array("ACTIVE"=>"Y", "IBLOCK_ID"=>(isset($arCurrentValues["IBLOCK_ID"])?$arCurrentValues["IBLOCK_ID"]:$arCurrentValues["ID"])));
while ($arr=$rsProp->Fetch())
{
	$arProperty[$arr["CODE"]] = "[".$arr["CODE"]."] ".$arr["NAME"];
	if (in_array($arr["PROPERTY_TYPE"], array("L", "N", "S")))
	{
		$arProperty_LNS[$arr["CODE"]] = "[".$arr["CODE"]."] ".$arr["NAME"];
	}
}


$arComponentParameters = array(
	"GROUPS" => array(
		"SETTINGS" => array(
			"NAME" => GetMessage("SETTINGS_PHR")
		),
		"PARAMS" => array(
			"NAME" => GetMessage("PARAMS_PHR")
		),
	),
	"PARAMETERS" => array(
		"TITLE_PORTFOLIO" => array(
			"PARENT" => "BASE",  // если нет - ставится ADDITIONAL_SETTINGS
			"NAME" => "Название заголовка",
			"TYPE" => "STRING",
			/*
			 * LIST - выбор из списка значений.
			 * STRING - текстовое поле ввода.
			 * CHECKBOX - да/нет.
			 * CUSTOM - позволяет создавать кастомные элементы управления.
			 * FILE - выбор файла.
			 * COLORPICKER - указание цвета
			 */
			"REFRESH" => "N",//"перегружать настройки или нет после выбора (N/Y)",
			"MULTIPLE" => "N",//"одиночное/множественное значение (N/Y)",
			//"VALUES" => array("ID или код, сохраняемый в настройках компонента" => "языкозависимое описание",),
//"массив значений для списка (TYPE = LIST)",
			//"ADDITIONAL_VALUES" => "показывать поле для значений, вводимых вручную (Y/N)",
			//"SIZE" => "число строк для списка (если нужен не выпадающий список)",
			//"DEFAULT" => "значение по умолчанию",
			"COLS" => 25,//"ширина поля в символах",
		),

		"IBLOCK_TYPE" => array(
			"PARENT" => "BASE",
			"NAME" => "Выбор типа инфоблока",
			"TYPE" => "LIST",
			"VALUES" => $arIBlockType,
			"REFRESH" => "Y",
		),
		"IBLOCK_ID" => array(
			"PARENT" => "BASE",
			"NAME" => "Выбор ID инфоблока",
			"TYPE" => "LIST",
			"VALUES" => $arIBlock,
			"REFRESH" => "Y",
			"ADDITIONAL_VALUES" => "Y",
		),

		"SHOW_ELEMENT_ON_FRONTPAGE" => array(
			"PARENT" => "BASE",
			"NAME" => "Выводить только с меткой `на главную`",
			"TYPE" => "CHECKBOX",
			"DEFAULT" => 'Y',
		),
		"TOP_COUNT" => array(
			"PARENT" => "BASE",
			"NAME" => "Количество проектов в слайдере",
			"TYPE" => "STRING",
			"DEFAULT" => "5",
		),
		"LOOP_SLIDER" => array(
			"PARENT" => "BASE",
			"NAME" => "Зациклить слайдер проектов",
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y",
		),
		"FIELD_CODE" => $arFieldsCode,
		"GET_EXTERNAL_ID" => array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => 'Выводить внешний код (EXTERNAL_ID)',
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "",
		),
		"GET_IBLOCK_SECTION_ID" => array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => 'Выводить ID секции (IBLOCK_SECTION_ID)',
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "",
		),
		"PROPERTY_CODE" => array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => "Свойства",
			"TYPE" => "LIST",
			"MULTIPLE" => "Y",
			"VALUES" => $arProperty_LNS,
			"ADDITIONAL_VALUES" => "Y",
		),

		"CACHE_TIME"  =>  array("DEFAULT"=>36000000),

		"ACTIVE_DATE_FORMAT" => CIBlockParameters::GetDateFormat("Формат показа даты", "ADDITIONAL_SETTINGS"),
		/*"DETAIL_URL" => CIBlockParameters::GetPathTemplateParam(
			"DETAIL",
			"DETAIL_URL",
			GetMessage("T_IBLOCK_DESC_DETAIL_PAGE_URL"),
			"",
			"URL_TEMPLATES"
		),*/

		"SORT_BY1" => Array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => "Поле для первой сортировки новостей",
			"TYPE" => "LIST",
			"DEFAULT" => "ACTIVE_FROM",
			"VALUES" => $arSortFields,
			"ADDITIONAL_VALUES" => "Y",
		),
		"SORT_ORDER1" => Array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => "Направление для первой сортировки новостей",
			"TYPE" => "LIST",
			"DEFAULT" => "DESC",
			"VALUES" => $arSorts,
			"ADDITIONAL_VALUES" => "Y",
		),

		"SET_TITLE" => array(),
	)
);
?>