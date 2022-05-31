<? $arSubItems = [];

if(!empty($arResult)) {
	foreach ($arResult as $arItem) {
		if ($arItem["DEPTH_LEVEL"] === 1) {
			$arSubItems[] = $arItem;
		} else {
			$arSubItems[end(array_keys($arSubItems))]['subitems'][] = $arItem;
		}
	}
}
$arResult = $arSubItems;
?>