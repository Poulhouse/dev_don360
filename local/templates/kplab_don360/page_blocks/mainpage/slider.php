<div class="container index-block">
	<div class="row slider-block index-block__SLIDER py-80 align-items-center">
	    <div class="slider-block__inner col-md-6 themed-grid-col left-column">
	        <div class="pl-5">
		        <h1 class="slider-block__title">Мы делаем профессиональный 3D-тур под ключ</h1>
	            <p class="slider-block__description">Высококачественная съёмка круговых панорам с расширенным диапазоном яркостей и высокой детализацией, собранных без ошибок склейки в один 3D-тур с возможностью размещения его на любых Интернет-площадках.</p>
	            <a href="#" class="btn bg-gradient text-white">
	                Рассчитать стоимость
	                <i class="svg stroke inline">
	                    <svg width="25" height="25" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
	                        <path d="M2.33325 6.99967C2.33325 5.762 2.82492 4.57501 3.70009 3.69984C4.57526 2.82467 5.76224 2.33301 6.99992 2.33301H20.9999C22.2376 2.33301 23.4246 2.82467 24.2997 3.69984C25.1749 4.57501 25.6666 5.762 25.6666 6.99967V12.833H2.33325V6.99967Z"  stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
	                        <path d="M21.5833 19.25H18.0833" stroke-width="1.66667" stroke-linecap="round"/>
	                        <path d="M13.9999 12.833H25.6666V20.9997C25.6666 22.2374 25.1749 23.4243 24.2997 24.2995C23.4246 25.1747 22.2376 25.6663 20.9999 25.6663H13.9999V12.833ZM13.9999 12.833H2.33325V20.9997C2.33325 22.2374 2.82492 23.4243 3.70009 24.2995C4.57526 25.1747 5.76224 25.6663 6.99992 25.6663H13.9999V12.833Z"  stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
	                        <path d="M6.4165 21L8.1665 19.25M8.1665 19.25L9.9165 17.5M8.1665 19.25L9.9165 21M8.1665 19.25L6.4165 17.5" stroke-width="1.66667" stroke-linecap="round"/>
	                    </svg>
	                </i>
	            </a>
	            <a href="#"  class="btn bg-transparent btn-lg margin-left-20 d-block d-sm-none">
	                Примеры реализации
	                <i class="svg fill inline">
	                    <svg width="41" height="23" viewBox="0 0 41 16" fill="none" xmlns="http://www.w3.org/2000/svg">
	                        <path d="M40.7071 8.70711C41.0976 8.31658 41.0976 7.68342 40.7071 7.29289L34.3432 0.928932C33.9526 0.538408 33.3195 0.538408 32.9289 0.928932C32.5384 1.31946 32.5384 1.95262 32.9289 2.34315L38.5858 8L32.9289 13.6569C32.5384 14.0474 32.5384 14.6805 32.9289 15.0711C33.3195 15.4616 33.9526 15.4616 34.3432 15.0711L40.7071 8.70711ZM0 9H40V7H0V9Z"/>
	                    </svg>
	                </i>
	            </a>
	        </div>
	    </div>
	    <div class="slider-block--inner col-md-6 themed-grid-col right-column">

		    <?php
            $APPLICATION -> IncludeComponent(
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
            );
		    ?>

	    </div>

	</div>
</div>
