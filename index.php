<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION -> SetTitle("Главная"); ?>

<? $APPLICATION -> IncludeComponent(
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
); ?>
<div class="container">
	<!-- НАШИ_ПРЕИМУЩЕСТВА -->
	<div class="container index-block--delimiter">
		<div class="index-block index-block--padding-top-80 index-block--padding-bottom-80 ">
			<div class="offers-block front">
				<div class="maxwidth-theme">
					<div class="offers-block__wrapper grid-list--no-grid">
						<div class="offers-block__inner grid-list__item item-w50">
							<h2 class="switcher-title line font_64">Наши <span
										class="color-green-element">преимущества</span></h2>
							<div class="index-block__preview">
<!--								<p>Наш фотограф и основатель компании – Сергей Карпенко. Первый в России получил эксклюзивное право, как независимый фотограф размещать свои панорамные 3D туры на Google картах. В 2013 году он стал первым Сертифицированным Google фотографом в России, что являться знаком качества наших услуг.</p>-->

							</div>
						</div>
						<div class="offers-block__inner grid-list__item item-w50">
							<div class="offers-block__item index-block__item--big-padding bordered rounded-4 shadow-hovered shadow-no-border-hovered">
								<div class="item-inner">
									<span>Высокое качество</span>
									<p>Высокое качество панорам, около 87Мп, благодаря HDR методу съемки, качественному оборудованию и опыту фотографа</p>
								</div>
	                            <i class="svg inline" aria-hidden="true">
	                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="120" height="120" x="0" y="0" viewBox="0 0 512 512">
		                                <path d="m374.568 188.577 30.178-59.553c3.185-6.284 1.972-13.845-3.018-18.814-4.971-4.948-12.499-6.123-18.736-2.929l-59.14 30.301-46.944-47.202c-4.951-4.978-12.48-6.19-18.735-3.015-6.276 3.185-9.757 10.002-8.659 16.964l10.397 66.01-59.196 30.328c-6.247 3.201-9.701 10.017-8.597 16.961 1.103 6.935 6.495 12.334 13.416 13.437l28.565 4.549-225.306 225.189c-5.67 5.667-8.793 13.2-8.793 21.214s3.123 15.547 8.793 21.214c5.85 5.847 13.532 8.769 21.217 8.769 7.683 0 15.368-2.923 21.217-8.769l118.802-118.73c3.907-3.904 3.909-10.236.005-14.142-3.904-3.908-10.235-3.91-14.142-.005l-118.802 118.73c-3.903 3.902-10.256 3.901-14.159 0-1.89-1.889-2.931-4.399-2.931-7.068s1.041-5.179 2.931-7.067l235.573-235.449 12.617 2.009 1.863 11.824-60.505 60.468c-3.907 3.904-3.909 10.236-.005 14.142 1.953 1.955 4.513 2.932 7.073 2.932 2.558 0 5.116-.976 7.068-2.927l50.217-50.186 4.684 29.733c1.095 6.96 6.497 12.371 13.443 13.467.85.134 1.697.199 2.536.199 6.011 0 11.587-3.355 14.376-8.86l30.151-59.502 65.564 10.443c6.916 1.095 13.712-2.355 16.908-8.599 3.206-6.266 2.027-13.827-2.932-18.813zm-32.184 44.03c-6.943-1.104-13.75 2.372-16.936 8.658l-26.027 51.364-8.975-56.966c-1.094-6.947-6.485-12.357-13.419-13.463l-56.814-9.047 51.28-26.271c6.237-3.196 9.694-10.002 8.602-16.936l-8.982-57.03 40.547 40.771c4.971 4.999 12.522 6.198 18.794 2.987l51.137-26.2-26.1 51.507c-3.168 6.251-1.978 13.787 2.961 18.755l40.686 40.91z" data-original="#000000" class=""></path>
		                                <path d="m471.351 40.242c-3.915-3.894-10.246-3.879-14.142.038l-34.804 34.993c-3.895 3.916-3.877 10.247.039 14.143 1.951 1.939 4.501 2.909 7.052 2.909 2.568 0 5.136-.983 7.091-2.948l34.802-34.993c3.894-3.915 3.878-10.247-.038-14.142z"  data-original="#000000" class=""></path>
		                                <path d="m343.873 49.133c.526.083 1.051.123 1.568.123 4.836 0 9.089-3.517 9.865-8.445l3.85-24.439c.859-5.455-2.866-10.574-8.322-11.434-5.446-.86-10.574 2.866-11.434 8.323l-3.85 24.439c-.859 5.455 2.867 10.574 8.323 11.433z"  data-original="#000000" class=""></path>
		                                <path d="m231.354 58.618c1.762 3.478 5.278 5.482 8.928 5.482 1.521 0 3.063-.348 4.513-1.082 4.926-2.496 6.896-8.514 4.399-13.441l-22.345-44.095c-2.497-4.927-8.512-6.896-13.44-4.4-4.927 2.496-6.896 8.514-4.399 13.441z"  data-original="#000000" class=""></path>
		                                <path d="m159.037 118.848 21.927 11.234c1.46.747 3.017 1.102 4.552 1.102 3.633 0 7.138-1.986 8.908-5.442 2.518-4.915.574-10.942-4.341-13.46l-21.927-11.234c-4.915-2.515-10.941-.576-13.46 4.341-2.518 4.914-.575 10.94 4.341 13.459z"  data-original="#000000" class=""></path>
		                                <path d="m399.775 323.124c-2.497-4.927-8.512-6.897-13.44-4.4-4.927 2.496-6.896 8.514-4.399 13.441l11.173 22.048c1.763 3.478 5.278 5.482 8.928 5.482 1.521 0 3.063-.348 4.513-1.082 4.927-2.496 6.896-8.514 4.399-13.441z"  data-original="#000000" class=""></path>
		                                <path d="m506.558 287.082-43.853-22.467c-4.914-2.516-10.941-.576-13.46 4.341-2.518 4.915-.574 10.942 4.341 13.46l43.853 22.467c1.46.747 3.017 1.102 4.552 1.102 3.633 0 7.138-1.986 8.908-5.443 2.517-4.915.574-10.941-4.341-13.46z"  data-original="#000000" class=""></path>
		                                <path d="m462.455 168.43c.784 4.921 5.034 8.429 9.863 8.429.523 0 1.053-.042 1.586-.126l24.306-3.871c5.454-.869 9.171-5.995 8.303-11.45-.869-5.454-6-9.159-11.449-8.303l-24.306 3.871c-5.454.87-9.171 5.996-8.303 11.45z"  data-original="#000000" class=""></path>
		                                <ellipse cx="191.253" cy="349.152" rx="10" ry="10" transform="matrix(.038 -.999 .999 .038 -164.982 526.866)" data-original="#000000" class=""></ellipse>
	                                </svg>
	                            </i>
							</div>
						</div>
						<div class="offers-block__inner grid-list__item item-w50">
							<div class="offers-block__item index-block__item--big-padding bordered rounded-4 shadow-hovered shadow-no-border-hovered">
								<div class="item-inner">
									<span>Индивидуальный подход</span>
									<p>Мы входим в положение каждого, составляем специальное предложение в результате встречи на месте будущей съемки</p>
								</div>
								<i class="svg inline" aria-hidden="true">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" width="120" height="120" x="0" y="0" viewBox="0 0 512 512">
										<path xmlns="http://www.w3.org/2000/svg" d="m166 196c0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90-90 40.374-90 90zm160 0c0 38.598-31.402 70-70 70s-70-31.402-70-70 31.402-70 70-70 70 31.402 70 70z"></path>
										<circle xmlns="http://www.w3.org/2000/svg" cx="440" cy="92" r="10"></circle>
										<path xmlns="http://www.w3.org/2000/svg" d="m256 512c141.904 0 256-114.927 256-256 0-46.969-12.806-92.884-37.031-132.782-2.866-4.72-9.015-6.223-13.738-3.358-4.721 2.867-6.224 9.017-3.357 13.738 22.325 36.769 34.126 79.095 34.126 122.402 0 68.428-28.771 131.896-79.476 176.683-15.436-72.809-79.996-126.683-156.524-126.683s-141.095 53.88-156.515 126.692c-50.711-44.792-79.485-108.263-79.485-176.692 0-130.131 105.869-236 236-236 52.989 0 103.031 17.115 144.716 49.496 4.361 3.388 10.644 2.598 14.032-1.763s2.599-10.644-1.763-14.032c-45.226-35.132-99.511-53.701-156.985-53.701-68.436 0-132.738 26.616-181.063 74.944-48.324 48.326-74.937 112.626-74.937 181.056 0 141.429 114.459 256 256 256zm0-186c70.697 0 129.381 51.64 138.722 121.007-40.455 29.453-88.293 44.993-138.722 44.993-50.424 0-98.256-15.542-138.711-44.996 9.328-69.366 68.006-121.004 138.711-121.004z"></path>
									</svg>
								</i>
							</div>
						</div>
						<div class="offers-block__inner grid-list__item item-w50">
							<div class="offers-block__item index-block__item--big-padding bordered rounded-4 shadow-hovered shadow-no-border-hovered">
								<div class="item-inner">
									<span>Техническая поддержка</span>
									<p>Сопровождение и обслуживание Вашего 3D-тура. Помощь встраивания на различные ресурсы, сайты. Решение вопроса за 24 часа</p>
								</div>
								<i class="svg inline" aria-hidden="true">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" width="120" height="120" x="0" y="0" viewBox="0 0 512 512">
										<path d="m512 304.097c0-36.963-28.145-67.473-64.129-71.235v-24.959c0-35.833-9.872-70.552-28.594-100.809 6.104-8.347 6.168-20.078-.574-28.554-39.734-49.914-99.037-78.54-162.703-78.54s-122.969 28.626-162.705 78.542c-6.74 8.474-6.676 20.204-.571 28.552-18.72 30.256-28.595 64.988-28.595 100.809v24.959c-35.984 3.762-64.129 34.272-64.129 71.235 0 37.247 28.582 67.933 64.963 71.308 3.259 13.948 15.788 24.37 30.715 24.37 17.396 0 31.548-14.152 31.548-31.548v-128.259c0-17.396-14.152-31.548-31.548-31.548-6.065 0-11.734 1.725-16.548 4.703v-5.22c0-32.722 8.932-64.454 25.88-92.157 8.922 2.635 18.967-.182 25.114-7.894 4.15-5.213 8.646-10.207 13.365-14.844 2.955-2.903 2.997-7.651.093-10.606-2.902-2.954-7.651-2.996-10.606-.093-5.152 5.062-10.06 10.513-14.585 16.197-2.934 3.681-8.316 4.292-11.994 1.367-3.681-2.93-4.292-8.31-1.363-11.991 36.871-46.318 91.896-72.882 150.966-72.882s114.095 26.564 150.965 72.88c2.93 3.683 2.319 9.063-1.36 11.992-1.526 1.214-3.36 1.856-5.303 1.856-2.623 0-5.061-1.173-6.689-3.218-33.613-42.227-83.771-66.446-137.613-66.446-33.667 0-66.338 9.507-94.479 27.493-3.49 2.23-4.511 6.868-2.28 10.358 2.23 3.49 6.867 4.512 10.358 2.28 25.724-16.44 55.601-25.131 86.401-25.131 49.246 0 95.126 22.156 125.878 60.788 4.491 5.641 11.206 8.876 18.424 8.876 2.268 0 4.514-.353 6.673-.994 16.956 27.708 25.896 59.43 25.896 92.169v5.22c-4.814-2.979-10.483-4.703-16.548-4.703-17.396 0-31.548 14.152-31.548 31.548v128.258c0 17.396 14.152 31.548 31.548 31.548 5.771 0 11.181-1.565 15.84-4.282-5.538 43.621-42.884 77.459-87.985 77.459h-49.521c-3.375-13.786-15.829-24.048-30.64-24.048h-16.032c-17.396 0-31.548 14.152-31.548 31.548s14.151 31.549 31.547 31.549h16.032c14.812 0 27.265-10.262 30.64-24.048h49.521c57.177 0 103.694-46.517 103.694-103.693v-8.927c35.984-3.762 64.129-34.272 64.129-71.235zm-497 0c0-28.681 21.438-52.434 49.129-56.117v112.234c-27.691-3.683-49.129-27.436-49.129-56.117zm80.677-80.678c9.125 0 16.548 7.423 16.548 16.548v128.258c0 9.125-7.423 16.548-16.548 16.548s-16.548-7.423-16.548-16.548v-128.257c0-9.125 7.423-16.549 16.548-16.549zm168.339 273.581h-16.032c-9.125 0-16.548-7.423-16.548-16.548s7.423-16.548 16.548-16.548h16.032c9.125 0 16.548 7.423 16.548 16.548s-7.423 16.548-16.548 16.548zm183.855-136.786v-72.149c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v80.162c0 9.125-7.423 16.548-16.548 16.548s-16.548-7.423-16.548-16.548v-128.259c0-9.125 7.423-16.548 16.548-16.548s16.548 7.423 16.548 16.548v16.032c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-8.02c27.691 3.682 49.129 27.436 49.129 56.117s-21.438 52.434-49.129 56.117z" class=""></path>
									</svg>
								</i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- КОНЕЦ НАШИ_ПРЕИМУЩЕСТВА -->

	<!-- УСЛУГИ -->
	<div class="container index-block--delimiter">
		<div class="index-block index-block--fon index-block--padding-top-80 index-block--padding-bottom-80">

			<div class="service-block front">
				<div class="maxwidth-theme">
					<div class="index-block__subtitle"></div>
					<div class="index-block__title-wrapper   ">
						<div class="index-block__part--left">
							<h3 class="switcher-title line font_64">Услуги</h3>
						</div>


						<div class="index-block__part--right">
							<a class="index-block__link dark_link stroke-theme-hover right_link_block" href="/services/" title="Перейти в раздел">
								Все услуги
								<span class="index-block__arrow">
									<i class="svg inline  svg-inline- stroke_999" aria-hidden="true">
										<svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M1 1L4 4L1 7" stroke="#CACACA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</i>
								</span>
							</a>
						</div>
					</div>
					<div class="index-block__preview   index-block__preview--mb-66">
						<p>Мы используем две основные составляющие ценообразования</p>
					</div>
				</div>
				<div class="maxwidth-theme">
					<div class=" service-types-block tabs-block">
						<div class="tabs tabs-history arrow_scroll arrow_scroll_init swipeignore">
							<ul class="nav nav-tabs font_14 font_weight--600" style="white-space: nowrap; min-width: auto; overflow: visible; z-index: 1; transform: translateX(0px);">
								<li class="bordered rounded-4 active"><a href="#photo" data-toggle="tab">Фотосъемка</a></li>
								<li class="bordered rounded-4"><a href="#public" data-toggle="tab">Размещение</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane active" id="photo">
								<div class="service-block__wrapper grid-list--no-grid">
									<div class="service-block__inner grid-list__item item-w33 ">
										<div class="service-block__item index-block__item--big-padding bordered rounded-4 shadow-hovered shadow-no-border-hovered bg-white">
											<div class="service-block__item-title switcher-title font_22">
												<a class="dark_link color-theme-target" href="#">Стандарт</a>
											</div>
											<div class="tariffs-list__item-price">
												<div class="price color_333">
													<div class="price__new">
														<div class="price__new-val font_26">900 <span class="font_17">₽/панорама</span></div>
													</div>
												</div>
											</div>
											<div class="service-block__item_buttons">
												<div class="line-block__item">
													<div class="select_block btn-actions__inner">
														<div class="buttons">
															<span class="btn btn-default mb-10 mr-10 bg-theme-target animate-load has-ripple" data-quantity="1">
																<span>Выбрать</span>
															</span>
															<span class="btn btn-default mb-10 mr-10 bg-theme-target border-theme-target btn-transparent-border animate-load has-ripple"><span>Подробнее</span></span>
														</div>
													</div>
												</div>
											</div>
											<div class="service-block__item_content">
												<span>Стандартная обработка фотографий без удаления посторонних предметов</span>
											</div>
										</div>
									</div>
									<div class="service-block__inner grid-list__item item-w33">
										<div class="service-block__item index-block__item--big-padding bordered rounded-4 shadow-hovered shadow-no-border-hovered bg-white">
											<div class="service-block__item-title switcher-title font_22">
												<a class="dark_link color-theme-target" href="#">Премиум</a>
											</div>
											<div class="tariffs-list__item-price">
												<div class="price color_333">
													<div class="price__new">
														<div class="price__new-val font_26">1 600 <span class="font_17">₽/панорама</span></div>
													</div>
												</div>
											</div>
											<div class="service-block__item_buttons">
												<div class="line-block__item">
													<div class="select_block btn-actions__inner">
														<div class="buttons">
															<span class="btn btn-default mb-10 mr-10 bg-theme-target animate-load has-ripple" data-quantity="1">
																<span>Выбрать</span>
															</span>
															<span class="btn btn-default mb-10 mr-10 bg-theme-target border-theme-target btn-transparent-border animate-load has-ripple"><span>Подробнее</span></span>
														</div>
													</div>
												</div>
											</div>
											<div class="service-block__item_content">
												<span>HDR, легкая цветокоррекция, ретушь, удаление посторонних предметов</span>
											</div>
										</div>
									</div>
									<div class="service-block__inner grid-list__item item-w33">
										<div class="service-block__item index-block__item--big-padding bordered rounded-4 shadow-hovered shadow-no-border-hovered bg-white">
											<div class="service-block__item-title switcher-title font_22">
												<a class="dark_link color-theme-target" href="#">VIP</a>
											</div>
											<div class="tariffs-list__item-price">
												<div class="price color_333">
													<div class="price__new">
														<div class="price__new-val font_26">2 300 <span class="font_17">₽/панорама</span></div>
													</div>
												</div>
											</div>
											<div class="service-block__item_buttons">
												<div class="line-block__item">
													<div class="select_block btn-actions__inner">
														<div class="buttons">
															<span class="btn btn-default mb-10 mr-10 bg-theme-target animate-load has-ripple" data-quantity="1">
																<span>Выбрать</span>
															</span>
															<span class="btn btn-default mb-10 mr-10 bg-theme-target border-theme-target btn-transparent-border animate-load has-ripple"><span>Подробнее</span></span>
														</div>
													</div>
												</div>
											</div>
											<div class="service-block__item_content">
												<span>HDR, цветокоррекция, ретушь, удаление посторонних предметов и отражений</span>
											</div>
										</div>
									</div>
								</div>
								<div class="alert alert-info mt-25">
									Виртуальный 3D тур - это несколько 3D панорам, собранных в единый проект. <br>Соответственно, основная часть стоимости виртуального тура складывается из количества 3D панорам.
								</div>
<!--								<blockquote class="danger">Виртуальный 3D тур - это несколько 3D панорам, собранных в единый проект. <br>Соответственно, основная часть стоимости виртуального тура складывается из количества 3D панорам.</blockquote>-->
							</div>
							<div class="tab-pane" id="public">
								<div class="service-block__wrapper grid-list--no-grid">
									<div class="service-block__inner grid-list__item item-w33 ">
										<div class="service-block__item index-block__item--big-padding bordered rounded-4 shadow-hovered shadow-no-border-hovered bg-white">
											<div class="service-block__item-title switcher-title font_22">
												<a class="dark_link color-theme-target" href="#">Google Карты</a>
											</div>
											<div class="tariffs-list__item-price">
												<div class="price color_333">
													<div class="price__new">
														<div class="price__new-val font_26">2 000 <span class="font_17">₽</span></div>
													</div>
												</div>
											</div>
											<div class="service-block__item_buttons">
												<div class="line-block__item">
													<div class="select_block btn-actions__inner">
														<div class="buttons">
															<span class="btn btn-default mb-10 mr-10 bg-theme-target animate-load has-ripple" data-quantity="1">
																<span>Выбрать</span>
															</span>
															<span class="btn btn-default mb-10 mr-10 bg-theme-target border-theme-target btn-transparent-border animate-load has-ripple"><span>Подробнее</span></span>
														</div>
													</div>
												</div>
											</div>
											<div class="service-block__item_content">
												<span>Размещение панорам на сервисах Google Карты/Мой бизнес.</span>
											</div>
										</div>
									</div>
									<div class="service-block__inner grid-list__item item-w33 ">
										<div class="service-block__item index-block__item--big-padding bordered rounded-4 shadow-hovered shadow-no-border-hovered bg-white">
											<div class="service-block__item-title switcher-title font_22">
												<a class="dark_link color-theme-target" href="#">Яндекс Карты</a>
											</div>
											<div class="tariffs-list__item-price">
												<div class="price color_333">
													<div class="price__new">
														<div class="price__new-val font_26">2 000 <span class="font_17">₽</span></div>
													</div>
												</div>
											</div>
											<div class="service-block__item_buttons">
												<div class="line-block__item">
													<div class="select_block btn-actions__inner">
														<div class="buttons">
															<span class="btn btn-default mb-10 mr-10 bg-theme-target animate-load has-ripple" data-quantity="1">
																<span>Выбрать</span>
															</span>
															<span class="btn btn-default mb-10 mr-10 bg-theme-target border-theme-target btn-transparent-border animate-load has-ripple"><span>Подробнее</span></span>
														</div>
													</div>
												</div>
											</div>
											<div class="service-block__item_content">
												<span>Размещение панорам на сервисах Яндекс Карты/Яндекс Справочник.</span>
											</div>
										</div>
									</div>
									<div class="service-block__inner grid-list__item item-w33 ">
										<div class="service-block__item index-block__item--big-padding bordered rounded-4 shadow-hovered shadow-no-border-hovered bg-white">
											<div class="service-block__item-title switcher-title font_22">
												<a class="dark_link color-theme-target" href="#">Google + Яндекс Карты</a>
											</div>
											<div class="tariffs-list__item-price">
												<div class="price color_333">
													<div class="price__new">
														<div class="price__new-val font_26">3 000 <span class="font_17">₽</span></div>
													</div>
												</div>
											</div>
											<div class="service-block__item_buttons">
												<div class="line-block__item">
													<div class="select_block btn-actions__inner">
														<div class="buttons">
															<span class="btn btn-default mb-10 mr-10 bg-theme-target animate-load has-ripple" data-quantity="1">
																<span>Выбрать</span>
															</span>
															<span class="btn btn-default mb-10 mr-10 bg-theme-target border-theme-target btn-transparent-border animate-load has-ripple"><span>Подробнее</span></span>
														</div>
													</div>
												</div>
											</div>
											<div class="service-block__item_content">
												<span>Комплексное размещение панорам со скидкой 25% в поисковых
													службах</span>
											</div>
										</div>
									</div>
									<div class="service-block__inner grid-list__item item-w33 ">
										<div class="service-block__item index-block__item--big-padding bordered rounded-4 shadow-hovered shadow-no-border-hovered bg-white">
											<div class="service-block__item-title switcher-title font_22">
												<a class="dark_link color-theme-target" href="#">Классический</a>
											</div>
											<div class="tariffs-list__item-price">
												<div class="price color_333">
													<div class="price__new">
														<div class="price__new-val font_26"><span
																	class="font_17">от</span> 5 000 <span
																	class="font_17">₽</span></div>
													</div>
												</div>
											</div>
											<div class="service-block__item_buttons">
												<div class="line-block__item">
													<div class="select_block btn-actions__inner">
														<div class="buttons">
															<span class="btn btn-default mb-10 mr-10 bg-theme-target animate-load has-ripple" data-quantity="1">
																<span>Выбрать</span>
															</span>
															<span class="btn btn-default mb-10 mr-10 bg-theme-target border-theme-target btn-transparent-border animate-load has-ripple"><span>Подробнее</span></span>
														</div>
													</div>
												</div>
											</div>
											<div class="service-block__item_content">
												<span>3D-тур с расширенным интерактивным
													функционалом.</span>
											</div>
										</div>
									</div>
									<div class="service-block__inner grid-list__item item-w33 ">
										<div class="service-block__item index-block__item--big-padding bordered rounded-4 shadow-hovered shadow-no-border-hovered bg-white">
											<div class="service-block__item-title switcher-title font_22">
												<a class="dark_link color-theme-target" href="#">Авито</a>
											</div>
											<div class="tariffs-list__item-price">
												<div class="price color_333">
													<div class="price__new">
														<div class="price__new-val font_26"><span class="font_17">от</span> 900 <span class="font_17">₽</span></div>
													</div>
												</div>
											</div>
											<div class="service-block__item_buttons">
												<div class="line-block__item">
													<div class="select_block btn-actions__inner">
														<div class="buttons">
															<span class="btn btn-default mb-10 mr-10 bg-theme-target animate-load has-ripple" data-quantity="1">
																<span>Выбрать</span>
															</span>
															<span class="btn btn-default mb-10 mr-10 bg-theme-target border-theme-target btn-transparent-border animate-load has-ripple"><span>Подробнее</span></span>
														</div>
													</div>
												</div>
											</div>
											<div class="service-block__item_content">
												<span>YouTube-видео на 360 градусов для презентации объекта
													недвижимости.</span>
											</div>
										</div>
									</div>
								</div>
								<div class="alert alert-warning mt-25">
									Для размещения 3D-тура на Google или Яндекс Картах, необходимо иметь подтвержденную карточку с информацией о Вашей компании в этих поисковых системах
								</div>
<!--								<blockquote class="danger">Для размещения 3D-тура на Google или Яндекс Картах, необходимо иметь подтвержденную карточку с информацией о Вашей компании в этих поисковых системах</blockquote>-->
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- КОНЕЦ УСЛУГИ -->

	<!-- КАЛЬКУЛЯТОР -->
	<div class="container CALCULATOR-TARIFFS index-block--delimiter">
		<div class="index-block index-block--padding-top-80 index-block--padding-bottom-80 ">

			<div class="calc-block front">
				<div class="maxwidth-theme">

					<div class="index-block__subtitle"></div>
					<div class="index-block__title-wrapper   ">
						<div class="index-block__part--left">
							<h3 class="switcher-title line font_64">Калькулятор <span class="color-green-element">стоимости</span></h3>
						</div>


						<div class="index-block__part--right">
							<a class="index-block__link dark_link stroke-theme-hover right_link_block" href="/services/" title="Перейти в раздел">
								Заказать просчёт специалистом
								<span class="index-block__arrow">
									<i class="svg inline  svg-inline- stroke_999" aria-hidden="true">
										<svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M1 1L4 4L1 7" stroke="#CACACA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</i>
								</span>
							</a>
						</div>
					</div>
					<div class="index-block__preview   index-block__preview--mb-66">
						<p>Выберите тариф, колличество и способ размещения панорам, стоимость тура рассчитается автоматически </p>
					</div>

				</div>
				<div class="maxwidth-theme ">

					<div class="calc-block__wrapper grid-list--no-grid">
						<div class="calc-block__inner grid-list__item item-w66">
							<div class="calc-block__item index-block__item--big-padding bordered rounded-4 bg-white">

								<div class="tabs tabs-history arrow_scroll arrow_scroll_init swipeignore">
									<ul class="nav nav-tabs font_14 font_weight--600" style="white-space: nowrap; min-width: auto; overflow: visible; z-index: 1; transform: translateX(0px);">
										<li class="bordered rounded-4 active"><a href="#quantity" data-toggle="tab">по количеству панорам</a></li>
<!--										<li class="bordered rounded-4"><a href="#square" data-toggle="tab">по площади</a></li>-->
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane active grid-list--no-grid" id="quantity">
										<div class="calc-quantity__inner grid-list__item item-w25">
											<div class="calc-quantity__item active">
												<span class="calc-quantity__item-price switcher-title line font_32"><span id="sumValue_1">900</span><span class="font_17">₽</span></span>
												<span class="calc-quantity__item-title line font_17">Тариф «Стандарт»</span>
											</div>
										</div>
										<div class="calc-quantity__inner grid-list__item item-w12-5"><span class="font_b color-green-element">или</span></div>
										<div class="calc-quantity__inner grid-list__item item-w25">
											<div class="calc-quantity__item">
												<span class="calc-quantity__item-price switcher-title line font_32"><span id="sumValue_2">1600</span><span class="font_17">₽</span></span>
												<span class="calc-quantity__item-title line font_17">Тариф «Премиум»</span>
											</div>
										</div>
										<div class="calc-quantity__inner grid-list__item item-w12-5"><span class="font_b color-green-element">или</span></div>
										<div class="calc-quantity__inner grid-list__item item-w25">
											<div class="calc-quantity__item">
												<span class="calc-quantity__item-price switcher-title line font_32"><span id="sumValue_3">2300</span><span class="font_17">₽</span></span>
												<span class="calc-quantity__item-title line font_17">Тариф «VIP»</span>
											</div>
										</div>
										<div class="calc-quantity__inner grid-list__item item-w100">
											<span class="label bg-theme font_17"><span id="rangeValue">3</span> = <span id="rangeSumValue">2700</span><span class="font_17">₽</span></span>
										</div>
										<div class="calc-quantity__inner grid-list__item item-w100">
											<div class="calc-quantity__slider mt-10">
												<input type="range" min="3" max="100" value="3" class="rounded-4" oninput="rangeValue.innerText = this.value; rangeSumValue.innerText = this.value*900">
											</div>
										</div>
										<div class="calc-quantity__inner grid-list__item item-w100">
											<div class="calc-quantity__slider-pin">
												<span id="rangeMin" class="font_17 font_b">3</span><span class="font_14" style="opacity:0.5">Колличество панорам</span><span id="rangeMax" class="font_17 font_b">100</span>
											</div>
										</div>
									</div>
									<!--
									<div class="tab-pane grid-list--no-grid" id="square">
										<div class="calc-quantity__inner grid-list__item item-w25">
											<div class="calc-quantity__item active">
												<span class="calc-quantity__item-price switcher-title line font_32"><span id="sumValue_1">900</span><span class="font_17">₽</span></span>
												<span class="calc-quantity__item-title line font_17">Тариф «Стандарт»</span>
											</div>
										</div>
										<div class="calc-quantity__inner grid-list__item item-w12-5"><span class="font_b color-green-element">или</span></div>
										<div class="calc-quantity__inner grid-list__item item-w25">
											<div class="calc-quantity__item">
												<span class="calc-quantity__item-price switcher-title line font_32"><span id="sumValue_2">1600</span><span class="font_17">₽</span></span>
												<span class="calc-quantity__item-title line font_17">Тариф «Премиум»</span>
											</div>
										</div>
										<div class="calc-quantity__inner grid-list__item item-w12-5"><span class="font_b color-green-element">или</span></div>
										<div class="calc-quantity__inner grid-list__item item-w25">
											<div class="calc-quantity__item">
												<span class="calc-quantity__item-price switcher-title line font_32"><span id="sumValue_3">2300</span><span class="font_17">₽</span></span>
												<span class="calc-quantity__item-title line font_17">Тариф «VIP»</span>
											</div>
										</div>
										<div class="calc-quantity__inner grid-list__item item-w100">
											<span class="label bg-theme font_17"><span id="rangeValue2">10</span> = <span id="rangeSumValue2">2700</span><span class="font_17">₽</span></span>
										</div>
										<div class="calc-quantity__inner grid-list__item item-w100">
											<div class="calc-quantity__slider mt-10">
												<input type="range" min="10" max="200" value="3" class="rounded-4" oninput="rangeValue2.innerText = this.value; rangeSumValue2.innerText = this.value*900">
											</div>
										</div>
										<div class="calc-quantity__inner grid-list__item item-w100">
											<div class="calc-quantity__slider-pin">
												<span id="rangeMin" class="font_17 font_b">10</span><span class="font_14" style="opacity:0.5">Колличество, м<sup>2</sup></span><span id="rangeMax" class="font_17 font_b">200</span>
											</div>
										</div>
									</div>
									-->
								</div>

							</div>
							<div class="calc-block__item index-block__item--big-padding bordered rounded-4 bg-white">

								<div class="tabs tabs-history arrow_scroll arrow_scroll_init swipeignore">
									<ul class="nav nav-tabs font_14 font_weight--600" style="white-space: nowrap; min-width: auto; overflow: visible; z-index: 1; transform: translateX(0px);">
										<li class="bordered rounded-4 active"><a href="#variant_public" data-toggle="tab">Способы размещения</a></li>
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane active" id="variant_public"></div>
								</div>

							</div>
						</div>
						<div class="calc-block__inner grid-list__item item-w33">
							<div class="calc-block__item index-block__item--big-padding bordered rounded-4  bg-theme"></div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
	<!-- КОНЕЦ КАЛЬКУЛЯТОР -->

	<!-- ЭТАПЫ_СОТРУДНИЧЕСТВА -->
	<div class="container STEPS index-block--delimiter">
		<div class="index-block index-block--fon index-block--padding-top-80 index-block--padding-bottom-80 ">

			<div class="steps-block front">
				<div class="maxwidth-theme">
					<div class="steps-block__wrapper grid-list--no-grid">
						<div class="steps-block__inner grid-list__item item-w50">
							<h2 class="switcher-title line font_64">Как мы работаем<br/><span class="color-green-element">и почему мы</span></h2>
							<div class="index-block__preview"><p>Наш фотограф и основатель компании – Сергей Карпенко. Первый в России получил эксклюзивное право, как независимый фотограф размещать свои панорамные 3D туры на Google картах. В 2013 году он стал первым Сертифицированным Google фотографом в России, что являться знаком качества наших услуг.</p></div>
						</div>
						<div class="steps-block__inner grid-list__item item-w25">
							<div class="steps-block__item index-block__item--big-padding bordered rounded-4 shadow-hovered shadow-no-border-hovered bg-white">
								<i class="svg inline" aria-hidden="true">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" width="60" height="100" x="0"
									     y="0" viewBox="0 0 512 512">
										<path d="m374.568 188.577 30.178-59.553c3.185-6.284 1.972-13.845-3.018-18.814-4.971-4.948-12.499-6.123-18.736-2.929l-59.14 30.301-46.944-47.202c-4.951-4.978-12.48-6.19-18.735-3.015-6.276 3.185-9.757 10.002-8.659 16.964l10.397 66.01-59.196 30.328c-6.247 3.201-9.701 10.017-8.597 16.961 1.103 6.935 6.495 12.334 13.416 13.437l28.565 4.549-225.306 225.189c-5.67 5.667-8.793 13.2-8.793 21.214s3.123 15.547 8.793 21.214c5.85 5.847 13.532 8.769 21.217 8.769 7.683 0 15.368-2.923 21.217-8.769l118.802-118.73c3.907-3.904 3.909-10.236.005-14.142-3.904-3.908-10.235-3.91-14.142-.005l-118.802 118.73c-3.903 3.902-10.256 3.901-14.159 0-1.89-1.889-2.931-4.399-2.931-7.068s1.041-5.179 2.931-7.067l235.573-235.449 12.617 2.009 1.863 11.824-60.505 60.468c-3.907 3.904-3.909 10.236-.005 14.142 1.953 1.955 4.513 2.932 7.073 2.932 2.558 0 5.116-.976 7.068-2.927l50.217-50.186 4.684 29.733c1.095 6.96 6.497 12.371 13.443 13.467.85.134 1.697.199 2.536.199 6.011 0 11.587-3.355 14.376-8.86l30.151-59.502 65.564 10.443c6.916 1.095 13.712-2.355 16.908-8.599 3.206-6.266 2.027-13.827-2.932-18.813zm-32.184 44.03c-6.943-1.104-13.75 2.372-16.936 8.658l-26.027 51.364-8.975-56.966c-1.094-6.947-6.485-12.357-13.419-13.463l-56.814-9.047 51.28-26.271c6.237-3.196 9.694-10.002 8.602-16.936l-8.982-57.03 40.547 40.771c4.971 4.999 12.522 6.198 18.794 2.987l51.137-26.2-26.1 51.507c-3.168 6.251-1.978 13.787 2.961 18.755l40.686 40.91z" data-original="#000000" class=""></path>
										<path d="m471.351 40.242c-3.915-3.894-10.246-3.879-14.142.038l-34.804 34.993c-3.895 3.916-3.877 10.247.039 14.143 1.951 1.939 4.501 2.909 7.052 2.909 2.568 0 5.136-.983 7.091-2.948l34.802-34.993c3.894-3.915 3.878-10.247-.038-14.142z"  data-original="#000000" class=""></path>
										<path d="m343.873 49.133c.526.083 1.051.123 1.568.123 4.836 0 9.089-3.517 9.865-8.445l3.85-24.439c.859-5.455-2.866-10.574-8.322-11.434-5.446-.86-10.574 2.866-11.434 8.323l-3.85 24.439c-.859 5.455 2.867 10.574 8.323 11.433z"  data-original="#000000" class=""></path>
										<path d="m231.354 58.618c1.762 3.478 5.278 5.482 8.928 5.482 1.521 0 3.063-.348 4.513-1.082 4.926-2.496 6.896-8.514 4.399-13.441l-22.345-44.095c-2.497-4.927-8.512-6.896-13.44-4.4-4.927 2.496-6.896 8.514-4.399 13.441z"  data-original="#000000" class=""></path>
										<path d="m159.037 118.848 21.927 11.234c1.46.747 3.017 1.102 4.552 1.102 3.633 0 7.138-1.986 8.908-5.442 2.518-4.915.574-10.942-4.341-13.46l-21.927-11.234c-4.915-2.515-10.941-.576-13.46 4.341-2.518 4.914-.575 10.94 4.341 13.459z"  data-original="#000000" class=""></path>
										<path d="m399.775 323.124c-2.497-4.927-8.512-6.897-13.44-4.4-4.927 2.496-6.896 8.514-4.399 13.441l11.173 22.048c1.763 3.478 5.278 5.482 8.928 5.482 1.521 0 3.063-.348 4.513-1.082 4.927-2.496 6.896-8.514 4.399-13.441z"  data-original="#000000" class=""></path>
										<path d="m506.558 287.082-43.853-22.467c-4.914-2.516-10.941-.576-13.46 4.341-2.518 4.915-.574 10.942 4.341 13.46l43.853 22.467c1.46.747 3.017 1.102 4.552 1.102 3.633 0 7.138-1.986 8.908-5.443 2.517-4.915.574-10.941-4.341-13.46z"  data-original="#000000" class=""></path>
										<path d="m462.455 168.43c.784 4.921 5.034 8.429 9.863 8.429.523 0 1.053-.042 1.586-.126l24.306-3.871c5.454-.869 9.171-5.995 8.303-11.45-.869-5.454-6-9.159-11.449-8.303l-24.306 3.871c-5.454.87-9.171 5.996-8.303 11.45z"  data-original="#000000" class=""></path>
										<ellipse cx="191.253" cy="349.152" rx="10" ry="10" transform="matrix(.038 -.999 .999 .038 -164.982 526.866)" data-original="#000000" class=""></ellipse>
									</svg>
								</i>
								<div class="item-inner">
									<span>1. Оставьте заявку</span>
									<p>на сайте или свяжитесь с нами любым удобным способом</p>
								</div>
							</div>
						</div>
						<div class="steps-block__inner grid-list__item item-w25">
							<div class="steps-block__item index-block__item--big-padding bordered rounded-4 shadow-hovered shadow-no-border-hovered bg-white">
								<i class="svg inline" aria-hidden="true">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" width="60" height="100" x="0"
									     y="0" viewBox="0 0 512 512">
										<path xmlns="http://www.w3.org/2000/svg" d="m166 196c0 49.626 40.374 90 90 90s90-40.374 90-90-40.374-90-90-90-90 40.374-90 90zm160 0c0 38.598-31.402 70-70 70s-70-31.402-70-70 31.402-70 70-70 70 31.402 70 70z"></path>
										<circle xmlns="http://www.w3.org/2000/svg" cx="440" cy="92" r="10"></circle>
										<path xmlns="http://www.w3.org/2000/svg" d="m256 512c141.904 0 256-114.927 256-256 0-46.969-12.806-92.884-37.031-132.782-2.866-4.72-9.015-6.223-13.738-3.358-4.721 2.867-6.224 9.017-3.357 13.738 22.325 36.769 34.126 79.095 34.126 122.402 0 68.428-28.771 131.896-79.476 176.683-15.436-72.809-79.996-126.683-156.524-126.683s-141.095 53.88-156.515 126.692c-50.711-44.792-79.485-108.263-79.485-176.692 0-130.131 105.869-236 236-236 52.989 0 103.031 17.115 144.716 49.496 4.361 3.388 10.644 2.598 14.032-1.763s2.599-10.644-1.763-14.032c-45.226-35.132-99.511-53.701-156.985-53.701-68.436 0-132.738 26.616-181.063 74.944-48.324 48.326-74.937 112.626-74.937 181.056 0 141.429 114.459 256 256 256zm0-186c70.697 0 129.381 51.64 138.722 121.007-40.455 29.453-88.293 44.993-138.722 44.993-50.424 0-98.256-15.542-138.711-44.996 9.328-69.366 68.006-121.004 138.711-121.004z"></path>
									</svg>
								</i>
								<div class="item-inner">
									<span>2. Выезд фотографа</span>
									<p>На место будущей съёмки
										и согласовывает
										технические и финансовые
										вопросы</p>
								</div>
							</div>
						</div>
						<div class="steps-block__inner grid-list__item item-w25">
							<div class="steps-block__item index-block__item--big-padding bordered rounded-4 shadow-hovered shadow-no-border-hovered bg-white">
								<i class="svg inline" aria-hidden="true">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" width="60" height="100" x="0"
									     y="0" viewBox="0 0 512 512">
										<path d="m512 304.097c0-36.963-28.145-67.473-64.129-71.235v-24.959c0-35.833-9.872-70.552-28.594-100.809 6.104-8.347 6.168-20.078-.574-28.554-39.734-49.914-99.037-78.54-162.703-78.54s-122.969 28.626-162.705 78.542c-6.74 8.474-6.676 20.204-.571 28.552-18.72 30.256-28.595 64.988-28.595 100.809v24.959c-35.984 3.762-64.129 34.272-64.129 71.235 0 37.247 28.582 67.933 64.963 71.308 3.259 13.948 15.788 24.37 30.715 24.37 17.396 0 31.548-14.152 31.548-31.548v-128.259c0-17.396-14.152-31.548-31.548-31.548-6.065 0-11.734 1.725-16.548 4.703v-5.22c0-32.722 8.932-64.454 25.88-92.157 8.922 2.635 18.967-.182 25.114-7.894 4.15-5.213 8.646-10.207 13.365-14.844 2.955-2.903 2.997-7.651.093-10.606-2.902-2.954-7.651-2.996-10.606-.093-5.152 5.062-10.06 10.513-14.585 16.197-2.934 3.681-8.316 4.292-11.994 1.367-3.681-2.93-4.292-8.31-1.363-11.991 36.871-46.318 91.896-72.882 150.966-72.882s114.095 26.564 150.965 72.88c2.93 3.683 2.319 9.063-1.36 11.992-1.526 1.214-3.36 1.856-5.303 1.856-2.623 0-5.061-1.173-6.689-3.218-33.613-42.227-83.771-66.446-137.613-66.446-33.667 0-66.338 9.507-94.479 27.493-3.49 2.23-4.511 6.868-2.28 10.358 2.23 3.49 6.867 4.512 10.358 2.28 25.724-16.44 55.601-25.131 86.401-25.131 49.246 0 95.126 22.156 125.878 60.788 4.491 5.641 11.206 8.876 18.424 8.876 2.268 0 4.514-.353 6.673-.994 16.956 27.708 25.896 59.43 25.896 92.169v5.22c-4.814-2.979-10.483-4.703-16.548-4.703-17.396 0-31.548 14.152-31.548 31.548v128.258c0 17.396 14.152 31.548 31.548 31.548 5.771 0 11.181-1.565 15.84-4.282-5.538 43.621-42.884 77.459-87.985 77.459h-49.521c-3.375-13.786-15.829-24.048-30.64-24.048h-16.032c-17.396 0-31.548 14.152-31.548 31.548s14.151 31.549 31.547 31.549h16.032c14.812 0 27.265-10.262 30.64-24.048h49.521c57.177 0 103.694-46.517 103.694-103.693v-8.927c35.984-3.762 64.129-34.272 64.129-71.235zm-497 0c0-28.681 21.438-52.434 49.129-56.117v112.234c-27.691-3.683-49.129-27.436-49.129-56.117zm80.677-80.678c9.125 0 16.548 7.423 16.548 16.548v128.258c0 9.125-7.423 16.548-16.548 16.548s-16.548-7.423-16.548-16.548v-128.257c0-9.125 7.423-16.549 16.548-16.549zm168.339 273.581h-16.032c-9.125 0-16.548-7.423-16.548-16.548s7.423-16.548 16.548-16.548h16.032c9.125 0 16.548 7.423 16.548 16.548s-7.423 16.548-16.548 16.548zm183.855-136.786v-72.149c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v80.162c0 9.125-7.423 16.548-16.548 16.548s-16.548-7.423-16.548-16.548v-128.259c0-9.125 7.423-16.548 16.548-16.548s16.548 7.423 16.548 16.548v16.032c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-8.02c27.691 3.682 49.129 27.436 49.129 56.117s-21.438 52.434-49.129 56.117z" class=""></path>
									</svg>
								</i>
								<div class="item-inner">
									<span>3. Подписываем договор</span>
									<p>После согласования даты,
										времени съёмки
										и стоимости работ</p>
								</div>
							</div>
						</div>
						<div class="steps-block__inner grid-list__item item-w25">
							<div class="steps-block__item index-block__item--big-padding bordered rounded-4 shadow-hovered shadow-no-border-hovered bg-white">
								<i class="svg inline" aria-hidden="true">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" width="60" height="100" x="0"
									     y="0" viewBox="0 0 512 512">
										<path d="m512 304.097c0-36.963-28.145-67.473-64.129-71.235v-24.959c0-35.833-9.872-70.552-28.594-100.809 6.104-8.347 6.168-20.078-.574-28.554-39.734-49.914-99.037-78.54-162.703-78.54s-122.969 28.626-162.705 78.542c-6.74 8.474-6.676 20.204-.571 28.552-18.72 30.256-28.595 64.988-28.595 100.809v24.959c-35.984 3.762-64.129 34.272-64.129 71.235 0 37.247 28.582 67.933 64.963 71.308 3.259 13.948 15.788 24.37 30.715 24.37 17.396 0 31.548-14.152 31.548-31.548v-128.259c0-17.396-14.152-31.548-31.548-31.548-6.065 0-11.734 1.725-16.548 4.703v-5.22c0-32.722 8.932-64.454 25.88-92.157 8.922 2.635 18.967-.182 25.114-7.894 4.15-5.213 8.646-10.207 13.365-14.844 2.955-2.903 2.997-7.651.093-10.606-2.902-2.954-7.651-2.996-10.606-.093-5.152 5.062-10.06 10.513-14.585 16.197-2.934 3.681-8.316 4.292-11.994 1.367-3.681-2.93-4.292-8.31-1.363-11.991 36.871-46.318 91.896-72.882 150.966-72.882s114.095 26.564 150.965 72.88c2.93 3.683 2.319 9.063-1.36 11.992-1.526 1.214-3.36 1.856-5.303 1.856-2.623 0-5.061-1.173-6.689-3.218-33.613-42.227-83.771-66.446-137.613-66.446-33.667 0-66.338 9.507-94.479 27.493-3.49 2.23-4.511 6.868-2.28 10.358 2.23 3.49 6.867 4.512 10.358 2.28 25.724-16.44 55.601-25.131 86.401-25.131 49.246 0 95.126 22.156 125.878 60.788 4.491 5.641 11.206 8.876 18.424 8.876 2.268 0 4.514-.353 6.673-.994 16.956 27.708 25.896 59.43 25.896 92.169v5.22c-4.814-2.979-10.483-4.703-16.548-4.703-17.396 0-31.548 14.152-31.548 31.548v128.258c0 17.396 14.152 31.548 31.548 31.548 5.771 0 11.181-1.565 15.84-4.282-5.538 43.621-42.884 77.459-87.985 77.459h-49.521c-3.375-13.786-15.829-24.048-30.64-24.048h-16.032c-17.396 0-31.548 14.152-31.548 31.548s14.151 31.549 31.547 31.549h16.032c14.812 0 27.265-10.262 30.64-24.048h49.521c57.177 0 103.694-46.517 103.694-103.693v-8.927c35.984-3.762 64.129-34.272 64.129-71.235zm-497 0c0-28.681 21.438-52.434 49.129-56.117v112.234c-27.691-3.683-49.129-27.436-49.129-56.117zm80.677-80.678c9.125 0 16.548 7.423 16.548 16.548v128.258c0 9.125-7.423 16.548-16.548 16.548s-16.548-7.423-16.548-16.548v-128.257c0-9.125 7.423-16.549 16.548-16.549zm168.339 273.581h-16.032c-9.125 0-16.548-7.423-16.548-16.548s7.423-16.548 16.548-16.548h16.032c9.125 0 16.548 7.423 16.548 16.548s-7.423 16.548-16.548 16.548zm183.855-136.786v-72.149c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v80.162c0 9.125-7.423 16.548-16.548 16.548s-16.548-7.423-16.548-16.548v-128.259c0-9.125 7.423-16.548 16.548-16.548s16.548 7.423 16.548 16.548v16.032c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-8.02c27.691 3.682 49.129 27.436 49.129 56.117s-21.438 52.434-49.129 56.117z" class=""></path>
									</svg>
								</i>
								<div class="item-inner">
									<span>4. Съемка</span>
									<p>Займёт от 30 минут до 3 часов
										в зависимости от количества панорамных точек
										и сложности объекта</p>
								</div>
							</div>
						</div>
						<div class="steps-block__inner grid-list__item item-w25">
							<div class="steps-block__item index-block__item--big-padding bordered rounded-4 shadow-hovered shadow-no-border-hovered bg-white">
								<i class="svg inline" aria-hidden="true">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" width="60" height="100" x="0"
									     y="0" viewBox="0 0 512 512">
										<path d="m512 304.097c0-36.963-28.145-67.473-64.129-71.235v-24.959c0-35.833-9.872-70.552-28.594-100.809 6.104-8.347 6.168-20.078-.574-28.554-39.734-49.914-99.037-78.54-162.703-78.54s-122.969 28.626-162.705 78.542c-6.74 8.474-6.676 20.204-.571 28.552-18.72 30.256-28.595 64.988-28.595 100.809v24.959c-35.984 3.762-64.129 34.272-64.129 71.235 0 37.247 28.582 67.933 64.963 71.308 3.259 13.948 15.788 24.37 30.715 24.37 17.396 0 31.548-14.152 31.548-31.548v-128.259c0-17.396-14.152-31.548-31.548-31.548-6.065 0-11.734 1.725-16.548 4.703v-5.22c0-32.722 8.932-64.454 25.88-92.157 8.922 2.635 18.967-.182 25.114-7.894 4.15-5.213 8.646-10.207 13.365-14.844 2.955-2.903 2.997-7.651.093-10.606-2.902-2.954-7.651-2.996-10.606-.093-5.152 5.062-10.06 10.513-14.585 16.197-2.934 3.681-8.316 4.292-11.994 1.367-3.681-2.93-4.292-8.31-1.363-11.991 36.871-46.318 91.896-72.882 150.966-72.882s114.095 26.564 150.965 72.88c2.93 3.683 2.319 9.063-1.36 11.992-1.526 1.214-3.36 1.856-5.303 1.856-2.623 0-5.061-1.173-6.689-3.218-33.613-42.227-83.771-66.446-137.613-66.446-33.667 0-66.338 9.507-94.479 27.493-3.49 2.23-4.511 6.868-2.28 10.358 2.23 3.49 6.867 4.512 10.358 2.28 25.724-16.44 55.601-25.131 86.401-25.131 49.246 0 95.126 22.156 125.878 60.788 4.491 5.641 11.206 8.876 18.424 8.876 2.268 0 4.514-.353 6.673-.994 16.956 27.708 25.896 59.43 25.896 92.169v5.22c-4.814-2.979-10.483-4.703-16.548-4.703-17.396 0-31.548 14.152-31.548 31.548v128.258c0 17.396 14.152 31.548 31.548 31.548 5.771 0 11.181-1.565 15.84-4.282-5.538 43.621-42.884 77.459-87.985 77.459h-49.521c-3.375-13.786-15.829-24.048-30.64-24.048h-16.032c-17.396 0-31.548 14.152-31.548 31.548s14.151 31.549 31.547 31.549h16.032c14.812 0 27.265-10.262 30.64-24.048h49.521c57.177 0 103.694-46.517 103.694-103.693v-8.927c35.984-3.762 64.129-34.272 64.129-71.235zm-497 0c0-28.681 21.438-52.434 49.129-56.117v112.234c-27.691-3.683-49.129-27.436-49.129-56.117zm80.677-80.678c9.125 0 16.548 7.423 16.548 16.548v128.258c0 9.125-7.423 16.548-16.548 16.548s-16.548-7.423-16.548-16.548v-128.257c0-9.125 7.423-16.549 16.548-16.549zm168.339 273.581h-16.032c-9.125 0-16.548-7.423-16.548-16.548s7.423-16.548 16.548-16.548h16.032c9.125 0 16.548 7.423 16.548 16.548s-7.423 16.548-16.548 16.548zm183.855-136.786v-72.149c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v80.162c0 9.125-7.423 16.548-16.548 16.548s-16.548-7.423-16.548-16.548v-128.259c0-9.125 7.423-16.548 16.548-16.548s16.548 7.423 16.548 16.548v16.032c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-8.02c27.691 3.682 49.129 27.436 49.129 56.117s-21.438 52.434-49.129 56.117z" class=""></path>
									</svg>
								</i>
								<div class="item-inner">
									<span>5. Обработка</span>
									<p>Панорамных фото, собираем
										в полноценный 3D-тур
										и публикуем на хостинге для предварительного просмотра
									</p>
								</div>
							</div>
						</div>
						<div class="steps-block__inner grid-list__item item-w25">
							<div class="steps-block__item index-block__item--big-padding bordered rounded-4 shadow-hovered shadow-no-border-hovered bg-white">
								<i class="svg inline" aria-hidden="true">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" width="60" height="100" x="0"
									     y="0" viewBox="0 0 512 512">
										<path d="m512 304.097c0-36.963-28.145-67.473-64.129-71.235v-24.959c0-35.833-9.872-70.552-28.594-100.809 6.104-8.347 6.168-20.078-.574-28.554-39.734-49.914-99.037-78.54-162.703-78.54s-122.969 28.626-162.705 78.542c-6.74 8.474-6.676 20.204-.571 28.552-18.72 30.256-28.595 64.988-28.595 100.809v24.959c-35.984 3.762-64.129 34.272-64.129 71.235 0 37.247 28.582 67.933 64.963 71.308 3.259 13.948 15.788 24.37 30.715 24.37 17.396 0 31.548-14.152 31.548-31.548v-128.259c0-17.396-14.152-31.548-31.548-31.548-6.065 0-11.734 1.725-16.548 4.703v-5.22c0-32.722 8.932-64.454 25.88-92.157 8.922 2.635 18.967-.182 25.114-7.894 4.15-5.213 8.646-10.207 13.365-14.844 2.955-2.903 2.997-7.651.093-10.606-2.902-2.954-7.651-2.996-10.606-.093-5.152 5.062-10.06 10.513-14.585 16.197-2.934 3.681-8.316 4.292-11.994 1.367-3.681-2.93-4.292-8.31-1.363-11.991 36.871-46.318 91.896-72.882 150.966-72.882s114.095 26.564 150.965 72.88c2.93 3.683 2.319 9.063-1.36 11.992-1.526 1.214-3.36 1.856-5.303 1.856-2.623 0-5.061-1.173-6.689-3.218-33.613-42.227-83.771-66.446-137.613-66.446-33.667 0-66.338 9.507-94.479 27.493-3.49 2.23-4.511 6.868-2.28 10.358 2.23 3.49 6.867 4.512 10.358 2.28 25.724-16.44 55.601-25.131 86.401-25.131 49.246 0 95.126 22.156 125.878 60.788 4.491 5.641 11.206 8.876 18.424 8.876 2.268 0 4.514-.353 6.673-.994 16.956 27.708 25.896 59.43 25.896 92.169v5.22c-4.814-2.979-10.483-4.703-16.548-4.703-17.396 0-31.548 14.152-31.548 31.548v128.258c0 17.396 14.152 31.548 31.548 31.548 5.771 0 11.181-1.565 15.84-4.282-5.538 43.621-42.884 77.459-87.985 77.459h-49.521c-3.375-13.786-15.829-24.048-30.64-24.048h-16.032c-17.396 0-31.548 14.152-31.548 31.548s14.151 31.549 31.547 31.549h16.032c14.812 0 27.265-10.262 30.64-24.048h49.521c57.177 0 103.694-46.517 103.694-103.693v-8.927c35.984-3.762 64.129-34.272 64.129-71.235zm-497 0c0-28.681 21.438-52.434 49.129-56.117v112.234c-27.691-3.683-49.129-27.436-49.129-56.117zm80.677-80.678c9.125 0 16.548 7.423 16.548 16.548v128.258c0 9.125-7.423 16.548-16.548 16.548s-16.548-7.423-16.548-16.548v-128.257c0-9.125 7.423-16.549 16.548-16.549zm168.339 273.581h-16.032c-9.125 0-16.548-7.423-16.548-16.548s7.423-16.548 16.548-16.548h16.032c9.125 0 16.548 7.423 16.548 16.548s-7.423 16.548-16.548 16.548zm183.855-136.786v-72.149c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v80.162c0 9.125-7.423 16.548-16.548 16.548s-16.548-7.423-16.548-16.548v-128.259c0-9.125 7.423-16.548 16.548-16.548s16.548 7.423 16.548 16.548v16.032c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-8.02c27.691 3.682 49.129 27.436 49.129 56.117s-21.438 52.434-49.129 56.117z" class=""></path>
									</svg>
								</i>
								<div class="item-inner">
									<span>6. Публикация</span>
									<p>Готово!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- КОНЕЦ ЭТАПЫ_СОТРУДНИЧЕСТВА -->

	<!-- ПРЕИМУЩЕСТВА_И_ОТЗЫВЫ -->
	<div class="container TIZERS index-block--delimiter">
		<div class="index-block index-block--padding-top-80 index-block--padding-bottom-80">

			<div class="tizers-list  tizers-list--narrow">
				<div class="maxwidth-theme">
					<div class="index-block__subtitle">Отзывы</div>
					<div class="index-block__title-wrapper   ">
						<div class="index-block__part--left">
							<h3 class="switcher-title line font_64">Нам <span class="color-green-element">доверяют</span></h3>
						</div>


						<div class="index-block__part--right">
							<a class="index-block__link dark_link stroke-theme-hover right_link_block" href="/reviews/"
							   title="Перейти в раздел">
								Все отзывы
								<span class="index-block__arrow">
									<i class="svg inline  svg-inline- stroke_999" aria-hidden="true">
										<svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M1 1L4 4L1 7" stroke="#CACACA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</i>
								</span>
							</a>
						</div>
					</div>
					<div class="index-block__preview   index-block__preview--mb-66">
						<p>Обратная связь помогает развиваться в нужном направлении. Мы прислушиваемся к отзывам, ищем новые точки роста и корректируем рабочие процессы. Благодарим всех, кто выразил свое мнение. Для нас это ценно!</p>
					</div>
				</div>
				<div class="maxwidth-theme ">

					<div class="tizers-list__items-wrapper grid-list grid-list--items-3  tizers-list__items-wrapper--offset mobile-scrolled mobile-offset mobile-scrolled--items-2">
						<div class="tizers-list__item-wrapper  grid-list__item tizers-list__item-wrapper-offset">
							<div class="tizers-list__item  tizers-list__item--images-ICONS tizers-list__item--images-position-TOP tizers-list__item--column" id="bx_651765591_1">

								<div class="tizers-list__item-image-wrapper tizers-list__item-image-wrapper--ICONS tizers-list__item-image-wrapper--position-TOP">
									<a class="tizers-list__item-link" href="/product/">
										<i class="svg inline  svg-inline- fill-theme tizers-list__item-image-icon" aria-hidden="true"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M10 6C8.34315 6 7 7.34314 7 9V46C7 47.6569 8.34315 49 10 49H16.9888V22C16.9888 20.3431 18.332 19 19.9888 19H39V9C39 7.34315 37.6569 6 36 6H10Z" fill="#3761E9" fill-opacity="0.1"></path>
												<path fill-rule="evenodd" clip-rule="evenodd" d="M0 4C0 1.79086 1.79086 0 4 0H36C38.2091 0 40 1.79086 40 4V18C40 18.5523 39.5523 19 39 19C38.4477 19 38 18.5523 38 18V4C38 2.89543 37.1046 2 36 2H4C2.89543 2 2 2.89543 2 4V46C2 47.1046 2.89543 48 4 48H16C16.5523 48 17 48.4477 17 49C17 49.5523 16.5523 50 16 50H4C1.79086 50 0 48.2091 0 46V4ZM8.93027 6C8.39078 6 7.95346 6.43729 7.95346 6.97676C7.95346 7.51622 8.39078 7.95351 8.93027 7.95351H9.90708V15.7676C9.90708 16.307 10.3444 16.7443 10.8839 16.7443C11.4234 16.7443 11.8607 16.307 11.8607 15.7676V6.97676C11.8607 6.43729 11.4234 6 10.8839 6H8.93027ZM6 9.90702C6 9.36756 6.43724 8.93027 6.9766 8.93027H7.95321C8.49259 8.93027 8.92982 9.36756 8.92982 9.90702V15.7676C8.92982 16.307 8.49259 16.7443 7.95321 16.7443C7.41384 16.7443 6.9766 16.307 6.9766 15.7676V10.8838C6.43724 10.8838 6 10.4465 6 9.90702ZM14.7914 11.3722C14.7914 9.48409 16.3221 7.95351 18.2102 7.95351C19.6973 7.95351 20.965 8.90341 21.4348 10.2325C21.6145 10.7412 22.1727 11.0077 22.6813 10.8279C23.1899 10.6482 23.4565 10.0902 23.2768 9.58157C22.5396 7.49629 20.551 6 18.2102 6C15.2431 6 12.8378 8.40517 12.8378 11.3722C12.8378 14.3392 15.2431 16.7443 18.2102 16.7443H29.4435C29.983 16.7443 30.4203 16.307 30.4203 15.7676C30.4203 15.2281 29.983 14.7908 29.4435 14.7908H18.2102C16.3221 14.7908 14.7914 13.2602 14.7914 11.3722ZM17.7221 11.3722C17.7221 11.1025 17.9408 10.8838 18.2105 10.8838H18.6989C19.2384 10.8838 19.6757 10.4465 19.6757 9.90702C19.6757 9.36756 19.2384 8.93027 18.6989 8.93027H18.2105C16.8618 8.93027 15.7685 10.0235 15.7685 11.3722C15.7685 12.7208 16.8618 13.814 18.2105 13.814H29.4438C29.9833 13.814 30.4206 13.3768 30.4206 12.8373C30.4206 12.2978 29.9833 11.8605 29.4438 11.8605H18.2105C17.9408 11.8605 17.7221 11.6418 17.7221 11.3722ZM47 21C48.6569 21 50 22.3431 50 24V47C50 48.6569 48.6569 50 47 50H22C20.3431 50 19 48.6569 19 47V24C19 22.3431 20.3431 21 22 21H47ZM48 24C48 23.4477 47.5523 23 47 23H22C21.4477 23 21 23.4477 21 24V47C21 47.5523 21.4477 48 22 48H47C47.5523 48 48 47.5523 48 47V24ZM26 27C25.4477 27 25 27.4477 25 28C25 28.5523 25.4477 29 26 29H28.2373L30.7775 38.2644C30.8966 38.6988 31.2915 39 31.7419 39H39.629C40.1813 39 40.629 38.5523 40.629 38C40.629 37.4477 40.1813 37 39.629 37H32.5047L32.2305 36H40C40.4089 36 40.7766 35.751 40.9285 35.3714L42.9285 30.3714C43.0517 30.0633 43.0141 29.7141 42.8281 29.4394C42.642 29.1646 42.3318 29 42 29H32.5C31.9477 29 31.5 29.4477 31.5 30C31.5 30.5523 31.9477 31 32.5 31H40.523L39.323 34H31.6821L29.9644 27.7356C29.8453 27.3012 29.4504 27 29 27H26ZM34 41.5C34 42.3284 33.3284 43 32.5 43C31.6716 43 31 42.3284 31 41.5C31 40.6716 31.6716 40 32.5 40C33.3284 40 34 40.6716 34 41.5ZM38.5 43C39.3284 43 40 42.3284 40 41.5C40 40.6716 39.3284 40 38.5 40C37.6716 40 37 40.6716 37 41.5C37 42.3284 37.6716 43 38.5 43ZM6 38C6 37.4477 6.44772 37 7 37H12C12.5523 37 13 37.4477 13 38C13 38.5523 12.5523 39 12 39H7C6.44772 39 6 38.5523 6 38ZM7 40C6.44772 40 6 40.4477 6 41C6 41.5523 6.44772 42 7 42H10C10.5523 42 11 41.5523 11 41C11 40.4477 10.5523 40 10 40H7Z" fill="#3761E9"></path>
											</svg>
										</i>																										</a>
								</div>

								<div class="tizers-list__item-text-wrapper color_333">
									<a class="tizers-list__item-link dark_link" href="/product/">
										<span class="tizers-list__item-name font_32 switcher-title">9 лет</span>
									</a>

									<span class="tizers-list__item-descr font_14 color_666">В проекте<br/>Google
										Просмотр улиц</span>
								</div>
							</div>
						</div>
						<div class="tizers-list__item-wrapper  grid-list__item tizers-list__item-wrapper-offset">
							<div class="tizers-list__item  tizers-list__item--images-ICONS tizers-list__item--images-position-TOP tizers-list__item--column" id="bx_651765591_2">

								<div class="tizers-list__item-image-wrapper tizers-list__item-image-wrapper--ICONS tizers-list__item-image-wrapper--position-TOP">
									<a class="tizers-list__item-link" href="/product/">
										<i class="svg inline  svg-inline- fill-theme tizers-list__item-image-icon" aria-hidden="true"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="30.5" cy="9.5" r="1.5" fill="#365EDC"></circle>
												<circle cx="36.5" cy="9.5" r="1.5" fill="#365EDC"></circle>
												<circle cx="42.5" cy="9.5" r="1.5" fill="#365EDC"></circle>
												<path fill-rule="evenodd" clip-rule="evenodd" d="M23 5C23 2.23858 25.2386 0 28 0H45C47.7614 0 50 2.23858 50 5V14C50 16.7614 47.7614 19 45 19H37.2222L33.6069 22.5596C33.3203 22.8418 32.9342 23 32.532 23C31.6859 23 31 22.3141 31 21.468V19H28C25.2386 19 23 16.7614 23 14V5ZM28 2C26.3431 2 25 3.34315 25 5V14C25 15.6569 26.3431 17 28 17H31C32.1046 17 33 17.8954 33 19V20.3505L35.819 17.5749C36.1931 17.2065 36.6971 17 37.2222 17H45C46.6569 17 48 15.6569 48 14V5C48 3.34315 46.6569 2 45 2H28ZM41 31C41 30.4477 40.5523 30 40 30H32C31.4477 30 31 30.4477 31 31C31 31.5523 31.4477 32 32 32H40C40.5523 32 41 31.5523 41 31ZM40 28C40.5523 28 41 27.5523 41 27C41 26.4477 40.5523 26 40 26H32C31.4477 26 31 26.4477 31 27C31 27.5523 31.4477 28 32 28H40ZM36 35C36 35.5523 35.5523 36 35 36H32C31.4477 36 31 35.5523 31 35C31 34.4477 31.4477 34 32 34H35C35.5523 34 36 34.4477 36 35ZM9.16666 42H9C8.44772 42 8 41.5523 8 41V39.4444C8 38.1111 8.88 36.9378 10.16 36.5644L15.0028 35.152C15.0009 35.1015 15 35.0509 15 35V33.5632C13.8811 32.5868 13.1382 31.1902 13.0174 29.6195C11.6865 28.5613 11.6658 26.4829 13 25.4175V25C13 21.6863 15.6863 19 19 19C21.9899 19 24.469 21.187 24.925 24.0485C24.9948 24.2187 25.0178 24.4076 24.9865 24.594C24.9954 24.7282 25 24.8636 25 25V25.4204C26.3992 26.4596 26.3614 28.6088 24.9811 29.6431C24.8559 31.2056 24.1144 32.5943 23 33.566V35C23 35.0509 22.9991 35.1015 22.9972 35.152L27.84 36.5644C29.12 36.9378 30 38.1111 30 39.4444V40H41.1667C41.7189 40 42.1667 40.4477 42.1667 41C42.1667 41.5523 41.7189 42 41.1667 42L29 42H9.16666ZM22.874 24C22.4299 22.2748 20.8638 21 19 21C19 22.6569 20.3431 24 22 24H22.874ZM17.0267 21.5198C16.1538 22.0159 15.4857 22.8308 15.1812 23.8063C15.43 23.7801 15.6979 23.7331 15.9651 23.6568C16.5294 23.4958 17.0143 23.2283 17.345 22.8287C17.1829 22.4164 17.0739 21.9772 17.0267 21.5198ZM18.4679 24.539C19.3725 25.4418 20.621 26 22 26H22.9091C22.9385 26 22.9692 25.9993 23.0012 25.9979C23.021 26.4099 23.2739 26.7768 23.6558 26.9404C24.142 27.1488 24.1798 27.8841 23.6424 28.1234C23.2562 28.2954 23 28.6803 23 29.1124V29.1708C23 31.2856 21.2856 33 19.1708 33H19H18.8344C16.7167 33 15 31.2833 15 29.1656V29.1114C15 28.6976 14.765 28.3229 14.3991 28.1404C13.8723 27.8776 13.8884 27.137 14.3926 26.89C14.7643 26.7078 15 26.3299 15 25.9159V25.8253C15.4638 25.8028 15.9872 25.7304 16.514 25.58C17.1652 25.3942 17.8711 25.0739 18.4679 24.539ZM21 34.7072C20.4247 34.8972 19.8098 35 19.1708 35H19H18.8344C18.1935 35 17.5768 34.8967 17 34.7058V35C17 36.1046 17.8954 37 19 37C20.1046 37 21 36.1046 21 35V34.7072ZM28 40V39.4444C28 39 27.7067 38.6089 27.28 38.4844L22.4245 37.0682C21.7237 38.2261 20.4522 39 19 39C17.5478 39 16.2763 38.2261 15.5755 37.0683L10.72 38.4844C10.2933 38.6089 10 39 10 39.4444V40H28Z" fill="#365EDC"></path>
												<path opacity="0.1" d="M12.0322 39.2879L15.7522 38.3235C16.512 38.1265 17.2995 38.4213 17.9364 38.88C18.9932 39.6411 20.5355 40.1077 22.0887 38.9081C22.7099 38.4283 23.488 38.1265 24.2478 38.3235L27.9678 39.2879C28.5756 39.4455 29 39.994 29 40.6219C29 41.383 28.383 42 27.6219 42H12.3781C11.617 42 11 41.383 11 40.6219C11 39.994 11.4244 39.4455 12.0322 39.2879Z" fill="#365EDC"></path>
												<path fill-rule="evenodd" clip-rule="evenodd" d="M21 14H8C5.23857 14 3 16.2386 3 19V44H1H0V45V47C0 48.6569 1.34315 50 3 50H47C48.6569 50 50 48.6569 50 47V45V44H49H47V21H45V44H5V19C5 17.3431 6.34315 16 8 16H21V14ZM2 46V47C2 47.5523 2.44772 48 3 48H19.382L18.382 46H2ZM47 48C47.5523 48 48 47.5523 48 47V46H31.618L30.618 48H47ZM28.382 48H21.618L20.618 46H29.382L28.382 48Z" fill="#365EDC"></path>
												<path opacity="0.1" d="M36 8C36 5.79086 37.7909 4 40 4H48V15C48 16.6569 46.6569 18 45 18H36V8Z" fill="#365EDC"></path>
												<rect opacity="0.1" x="1" y="46" width="19" height="2" fill="#365EDC"></rect>
												<rect opacity="0.1" x="30" y="46" width="19" height="2" fill="#365EDC"></rect>
												<path opacity="0.1" d="M18.1667 21C14.8333 21 14 24.242 14 25.8629C14.7357 26.0619 16.552 25.4797 18.1667 24.242C19.1667 26.1871 22.4722 26.1331 24 25.8629L23.5833 23.0262C23.1667 22.3508 21.5 21 18.1667 21Z" fill="#365EDC"></path>
											</svg>
										</i>
									</a>
								</div>

								<div class="tizers-list__item-text-wrapper color_333">
									<a class="tizers-list__item-link dark_link" href="/product/">
										<span class="tizers-list__item-name font_32 switcher-title">520</span>
									</a>

									<span class="tizers-list__item-descr font_14 color_666">Довольных<br/>клиентов</span>
								</div>
							</div>
						</div>
						<div class="tizers-list__item-wrapper  grid-list__item tizers-list__item-wrapper-offset">
							<div class="tizers-list__item  tizers-list__item--images-ICONS tizers-list__item--images-position-TOP tizers-list__item--column" id="bx_651765591_3">

								<div class="tizers-list__item-image-wrapper tizers-list__item-image-wrapper--ICONS tizers-list__item-image-wrapper--position-TOP">
									<a class="tizers-list__item-link" href="/product/">
										<i class="svg inline  svg-inline- fill-theme tizers-list__item-image-icon" aria-hidden="true"><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M7 6C7 2.68629 9.68629 0 13 0H45C47.7614 0 50 2.23858 50 5V11C50 11.5523 49.5523 12 49 12H43V45.0001C43 47.7615 40.7615 50 38.0001 50H7C3.13401 50 0 46.866 0 43V40C0 39.4477 0.447715 39 1 39H7V37C7 36.4477 7.44772 36 8 36C8.55228 36 9 36.4477 9 37V39H34.0002C34.5525 39 35.0002 39.4477 35.0002 40V45.0001C35.0002 46.6569 36.3433 48 38.0001 48C39.6569 48 41 46.6569 41 45.0001V11C41 10.4477 41.4477 10 42 10H48V5C48 3.34315 46.6569 2 45 2H13C10.7909 2 9 3.79086 9 6V7C9 7.55228 8.55228 8 8 8C7.44772 8 7 7.55228 7 7V6ZM33.9998 48C33.3721 47.1644 33.0002 46.1257 33.0002 45.0001V41H8H2V43C2 45.7614 4.23858 48 7 48H33.9998ZM26 24C26 23.4477 26.4477 23 27 23H36C36.5523 23 37 23.4477 37 24C37 24.5523 36.5523 25 36 25H27C26.4477 25 26 24.5523 26 24ZM27 18C26.4477 18 26 18.4477 26 19C26 19.5523 26.4477 20 27 20H36C36.5523 20 37 19.5523 37 19C37 18.4477 36.5523 18 36 18H27ZM26 14C26 13.4477 26.4477 13 27 13H36C36.5523 13 37 13.4477 37 14C37 14.5523 36.5523 15 36 15H27C26.4477 15 26 14.5523 26 14ZM27 28C26.4477 28 26 28.4477 26 29C26 29.5523 26.4477 30 27 30H32C32.5523 30 33 29.5523 33 29C33 28.4477 32.5523 28 32 28H27ZM16.7071 17.2929C17.0976 17.6834 17.0976 18.3166 16.7071 18.7071L10.7071 24.7071C10.3166 25.0976 9.68342 25.0976 9.29289 24.7071L6.29289 21.7071C5.90237 21.3166 5.90237 20.6834 6.29289 20.2929C6.68342 19.9024 7.31658 19.9024 7.70711 20.2929L10 22.5858L15.2929 17.2929C15.6834 16.9024 16.3166 16.9024 16.7071 17.2929ZM11.3354 9.05793C11.1185 8.98069 10.8815 8.98069 10.6646 9.05793L0.664582 12.6184C0.266114 12.7602 0 13.1375 0 13.5604V19.0748C0 25.3788 3.48849 31.1653 9.06335 34.1084L10.5331 34.8843C10.8253 35.0386 11.1747 35.0386 11.4669 34.8843L12.9367 34.1084C18.5115 31.1653 22 25.3788 22 19.0748V13.5604C22 13.1375 21.7339 12.7602 21.3354 12.6184L11.3354 9.05793ZM2 19.0748V14.2659L11 11.0615L20 14.2659V19.0748C20 24.6372 16.9219 29.7429 12.0029 32.3397L11 32.8692L9.99707 32.3397C5.07808 29.7429 2 24.6372 2 19.0748Z" fill="#365EDC"></path>
												<path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M31.0454 43H0.824786C0.824786 46.346 3.53729 49.0585 6.88333 49.0585H34.3125V48.8875C32.4266 48.3515 31.0454 46.6163 31.0454 44.5585V43Z" fill="#365EDC"></path>
												<path opacity="0.1" d="M43 2H36C33.2386 2 31 4.23858 31 7V39.9298H34.2542V45.7018L36.2881 49H39.9492L41.9831 46.9386V5.29825L43 2Z" fill="#365EDC"></path>
												<path opacity="0.1" d="M11 34V13L21 16.3158V24.3077L16.8333 30.7692L11 34Z" fill="#365EDC"></path>
												<path fill-rule="evenodd" clip-rule="evenodd" d="M43 5C43 3.34315 44.3431 2 46 2V1H42.9995C41.7853 1.91223 41 3.3644 41 5V11C41 11.5523 41.4477 12 42 12C42.5523 12 43 11.5523 43 11V5Z" fill="#365EDC"></path>
											</svg>
										</i>																										</a>
								</div>

								<div class="tizers-list__item-text-wrapper color_333">
									<a class="tizers-list__item-link dark_link" href="/product/">
										<span class="tizers-list__item-name font_32 switcher-title">+ 8 млн.</span>
									</a>

									<span class="tizers-list__item-descr font_14 color_666">Просмотров<br/>наших
										работ</span>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="maxwidth-theme">
					<div class="reviews owl-carousel  owl-carousel--light owl-carousel--outer-dots owl-carousel--static-dots owl-carousel--dots-padding-top-20 owl-carousel--margin-top-64 owl-carousel--buttons-bordered owl-carousel--button-wide owl-carousel--button-offset-half owl-carousel--buttons-size-36 owl-carousel--with-shadow owl-carousel--after-offset-1 owl-carousel--items-width-360-adaptive owl-carousel--wide-adaptive" data-i-appeared="true">

						<? $items =  array_fill(0, 5, index); foreach($items as $item): ?>

						<div class="reviews-list__item  bordered reviews-list__item--padding-48 reviews-list__item--last " id="bx_3302092990_182">
							<div class="reviews-list__item-top-part  reviews-list__item-top-part--centered-vertical reviews-list__item-top-part--row reviews-list__item-top-part--column">
								<div class="reviews-list__item-info-wrapper ">
									<div class="reviews-list__item-image-wrapper  reviews-list__item-image-wrapper--logo-center  reviews-list__item-image-wrapper--image-small">
										<div class="reviews-list__item-image lazyloaded" style="background-image: url(&quot;/upload/resize_cache/iblock/685/80_80_2/685eeae8819b007c19f925e4b2884cbe.jpg&quot;);" data-bg="/upload/resize_cache/iblock/685/80_80_2/685eeae8819b007c19f925e4b2884cbe.jpg"></div>
									</div>
									<div class="reviews-list__item-info reviews-list__item-info--centered-vertical">
										<div class="reviews-list__item-text">
											<div class="reviews-list__item-company font_13 color_999">
												<span>Генеральный директор «Дэк»</span>
											</div>
											<div class="reviews-list__item-title switcher-title  font_22">
												Илья Андреев
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="rating reviews-list__rating">
								<div class="rating__star">
									<i class="svg inline  svg-inline- rating__star-svg rating__star-svg--filled" aria-hidden="true"><svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M8.52447 0.562646C8.67415 0.101991 9.32585 0.101991 9.47553 0.562646L11.1329 5.66346C11.1998 5.86947 11.3918 6.00895 11.6084 6.00895H16.9717C17.4561 6.00895 17.6575 6.62876 17.2656 6.91346L12.9266 10.0659C12.7514 10.1933 12.678 10.4189 12.745 10.625L14.4023 15.7258C14.552 16.1864 14.0248 16.5695 13.6329 16.2848L9.29389 13.1323C9.11865 13.005 8.88135 13.005 8.70611 13.1323L4.3671 16.2848C3.97524 16.5695 3.448 16.1864 3.59768 15.7258L5.25503 10.625C5.32197 10.4189 5.24864 10.1933 5.07339 10.0659L0.734384 6.91346C0.342527 6.62876 0.543915 6.00895 1.02828 6.00895H6.39159C6.6082 6.00895 6.80018 5.86947 6.86712 5.66346L8.52447 0.562646Z" fill="#CCC"></path>
										</svg>
									</i>									</div>
								<div class="rating__star">
									<i class="svg inline  svg-inline- rating__star-svg rating__star-svg--filled" aria-hidden="true"><svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M8.52447 0.562646C8.67415 0.101991 9.32585 0.101991 9.47553 0.562646L11.1329 5.66346C11.1998 5.86947 11.3918 6.00895 11.6084 6.00895H16.9717C17.4561 6.00895 17.6575 6.62876 17.2656 6.91346L12.9266 10.0659C12.7514 10.1933 12.678 10.4189 12.745 10.625L14.4023 15.7258C14.552 16.1864 14.0248 16.5695 13.6329 16.2848L9.29389 13.1323C9.11865 13.005 8.88135 13.005 8.70611 13.1323L4.3671 16.2848C3.97524 16.5695 3.448 16.1864 3.59768 15.7258L5.25503 10.625C5.32197 10.4189 5.24864 10.1933 5.07339 10.0659L0.734384 6.91346C0.342527 6.62876 0.543915 6.00895 1.02828 6.00895H6.39159C6.6082 6.00895 6.80018 5.86947 6.86712 5.66346L8.52447 0.562646Z" fill="#CCC"></path>
										</svg>
									</i>									</div>
								<div class="rating__star">
									<i class="svg inline  svg-inline- rating__star-svg rating__star-svg--filled" aria-hidden="true"><svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M8.52447 0.562646C8.67415 0.101991 9.32585 0.101991 9.47553 0.562646L11.1329 5.66346C11.1998 5.86947 11.3918 6.00895 11.6084 6.00895H16.9717C17.4561 6.00895 17.6575 6.62876 17.2656 6.91346L12.9266 10.0659C12.7514 10.1933 12.678 10.4189 12.745 10.625L14.4023 15.7258C14.552 16.1864 14.0248 16.5695 13.6329 16.2848L9.29389 13.1323C9.11865 13.005 8.88135 13.005 8.70611 13.1323L4.3671 16.2848C3.97524 16.5695 3.448 16.1864 3.59768 15.7258L5.25503 10.625C5.32197 10.4189 5.24864 10.1933 5.07339 10.0659L0.734384 6.91346C0.342527 6.62876 0.543915 6.00895 1.02828 6.00895H6.39159C6.6082 6.00895 6.80018 5.86947 6.86712 5.66346L8.52447 0.562646Z" fill="#CCC"></path>
										</svg>
									</i>									</div>
								<div class="rating__star">
									<i class="svg inline  svg-inline- rating__star-svg rating__star-svg--filled" aria-hidden="true"><svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M8.52447 0.562646C8.67415 0.101991 9.32585 0.101991 9.47553 0.562646L11.1329 5.66346C11.1998 5.86947 11.3918 6.00895 11.6084 6.00895H16.9717C17.4561 6.00895 17.6575 6.62876 17.2656 6.91346L12.9266 10.0659C12.7514 10.1933 12.678 10.4189 12.745 10.625L14.4023 15.7258C14.552 16.1864 14.0248 16.5695 13.6329 16.2848L9.29389 13.1323C9.11865 13.005 8.88135 13.005 8.70611 13.1323L4.3671 16.2848C3.97524 16.5695 3.448 16.1864 3.59768 15.7258L5.25503 10.625C5.32197 10.4189 5.24864 10.1933 5.07339 10.0659L0.734384 6.91346C0.342527 6.62876 0.543915 6.00895 1.02828 6.00895H6.39159C6.6082 6.00895 6.80018 5.86947 6.86712 5.66346L8.52447 0.562646Z" fill="#CCC"></path>
										</svg>
									</i>									</div>
								<div class="rating__star">
									<i class="svg inline  svg-inline- rating__star-svg rating__star-svg--filled" aria-hidden="true"><svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M8.52447 0.562646C8.67415 0.101991 9.32585 0.101991 9.47553 0.562646L11.1329 5.66346C11.1998 5.86947 11.3918 6.00895 11.6084 6.00895H16.9717C17.4561 6.00895 17.6575 6.62876 17.2656 6.91346L12.9266 10.0659C12.7514 10.1933 12.678 10.4189 12.745 10.625L14.4023 15.7258C14.552 16.1864 14.0248 16.5695 13.6329 16.2848L9.29389 13.1323C9.11865 13.005 8.88135 13.005 8.70611 13.1323L4.3671 16.2848C3.97524 16.5695 3.448 16.1864 3.59768 15.7258L5.25503 10.625C5.32197 10.4189 5.24864 10.1933 5.07339 10.0659L0.734384 6.91346C0.342527 6.62876 0.543915 6.00895 1.02828 6.00895H6.39159C6.6082 6.00895 6.80018 5.86947 6.86712 5.66346L8.52447 0.562646Z" fill="#CCC"></path>
										</svg>
									</i>									</div>
							</div>

							<div class="reviews-list__item-preview-wrapper">
								<div class="reviews-list__item-preview font_15 font_large">
									От лица компании «Дэк» выражаю благодарность за оперативное предоставление исследований рынков цветных и редких металлов. Данные отчеты характеризуются четкой методологией и наглядным оформлением данных. Исследования компании отли...															</div>
								<div class="reviews-list__item-more">
									<span class="btn btn-default btn-md btn-transparent-border animate-load" data-event="jqm" data-param-id="182" data-param-type="review" data-name="review">Подробнее</span>
								</div>
							</div>
						</div>

						<? endforeach; ?>

<!--					<div class="owl-nav disabled">-->
<!--						<button type="button" role="presentation" class="owl-prev">-->
<!--							<i class="owl-carousel__button owl-carousel__button--left colored_theme_bg_hover">-->
<!--								<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--									<path d="M6 1L1 6L6 11" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>-->
<!--								</svg>-->
<!--							</i>-->
<!--						</button>-->
<!--						<button type="button" role="presentation" class="owl-next">-->
<!--							<i class="owl-carousel__button owl-carousel__button--right colored_theme_bg_hover">-->
<!--								<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--									<path d="M6 1L1 6L6 11" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>-->
<!--								</svg>-->
<!--							</i>-->
<!--						</button>-->
<!--					</div>-->
<!--					<div class="owl-dots disabled"></div>-->
				</div>
			</div>
			</div>

		</div>
	</div>
	<!-- КОНЕЦ ПРЕИМУЩЕСТВА_И_ОТЗЫВЫ -->

	<!-- ВОПРОС_ОТВЕТ -->
	<div class="container FAQ index-block--delimiter">
		<div class="index-block index-block--fon index-block--padding-top-80 index-block--padding-bottom-80">

			<div class="faq-list  faq-list--template">
				<div class="maxwidth-theme">
					<div class="index-block__subtitle">Ответы на популярные вопросы</div>
					<div class="index-block__title-wrapper   ">
						<div class="index-block__part--left">
							<h3 class="switcher-title line font_64">Вопрос<span class="color-green-element">-ответ</span></h3>
						</div>


						<div class="index-block__part--right">
							<a class="index-block__link dark_link stroke-theme-hover right_link_block" href="/info/faq/"
							   title="Перейти в раздел">
								Все ответы
								<span class="index-block__arrow">
									<i class="svg inline  svg-inline- stroke_999" aria-hidden="true">
										<svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M1 1L4 4L1 7" stroke="#CACACA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</i>
								</span>
							</a>
						</div>
					</div>
					<div class="index-block__preview   index-block__preview--mb-66">
						<p>В этом разделе публикуем ответы на популярные вопросы. Не нашли ответов? Свяжитесь с нами по почте или телефону для консультации. Расскажем детали и подготовим индивидуальные условия сотрудничества.</p>
					</div>
				</div>
				<div class="maxwidth-theme">
					<div class="faq-container">
						<div class="flexbox flexbox--direction-row flexbox--column-t991">


							<div class="faq-items flex-grow-1">
								<div class="accordion accordion-type-1">

									<div class="item-accordion-wrapper shadow-hovered shadow-no-border-hovered" id="bx_565502798_910">
										<a class="accordion-head stroke-theme-hover collapsed" data-toggle="collapse" data-parent="#accordion910" href="#accordion910">
											<span class="switcher-title color_333 font_18">Как купить лицензию?</span>
											<i class="svg inline  svg-inline-right-arrow" aria-hidden="true">
												<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8 1V15M1 8H15" stroke="#999999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</i>
										</a>
										<div id="accordion910" class="panel-collapse collapse">
											<div class="accordion-body color_666">
												<div class="accordion-preview">
													Вы можете приобрести лицензию у нас на сайте, счет на оплату придет вам после оформления заказа. Работаем с физическими и юридическими лицами.													</div>
												<div class="accordion-btn">
													<a class="btn btn-default" href="/info/payment/" target="_blank">Подробнее об оплате</a>
												</div>
												<div class="bg-theme accordion-line"></div>
											</div>
										</div>
									</div>


									<div class="item-accordion-wrapper shadow-hovered shadow-no-border-hovered" id="bx_565502798_789">
										<a class="accordion-head stroke-theme-hover collapsed" data-toggle="collapse" data-parent="#accordion789" href="#accordion789">
											<span class="switcher-title color_333 font_18">Хочу у вас работать. Куда отправлять резюме?</span>
											<i class="svg inline  svg-inline-right-arrow" aria-hidden="true">
												<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8 1V15M1 8H15" stroke="#999999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</i>
										</a>
										<div id="accordion789" class="panel-collapse collapse">
											<div class="accordion-body color_666">
												<div class="accordion-preview">
													Спасибо за интерес к нашей компании. Мы всегда в поиске талантливых специалистов. Отправляйте свое резюме нам на почту <a class="txttohtmllink" href="mailto:job@digital2.ru" title="Написать письмо">job@digital2.ru</a> с указанием желаемой должности в теме письма. 													</div>
												<div class="bg-theme accordion-line"></div>
											</div>
										</div>
									</div>


									<div class="item-accordion-wrapper shadow-hovered shadow-no-border-hovered" id="bx_565502798_788">
										<a class="accordion-head stroke-theme-hover collapsed" data-toggle="collapse" data-parent="#accordion788" href="#accordion788">
											<span class="switcher-title color_333 font_18">Можно ли поставить ваш готовый шаблон интернет-магазина на демоверсию 1С-Битрикс?</span>
											<i class="svg inline  svg-inline-right-arrow" aria-hidden="true">
												<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8 1V15M1 8H15" stroke="#999999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</i>
										</a>
										<div id="accordion788" class="panel-collapse collapse">
											<div class="accordion-body color_666">
												<div class="accordion-preview">
													Для использования готового решения вам необходим 1С-Битрикс с активированной лицензией. В обратном случае наше решение просто не установится. <br>
													<br>
													Установка платного решения невозможна на демоверсию 1С-Битрикс, потому что ключ шаблона привязывается к ключу 1С-Битрикс. Поэтому рекомендуем вам купить и активировать лицензию 1С-Битрикс, после чего приобрести лицензию на наше решение.													</div>
												<div class="bg-theme accordion-line"></div>
											</div>
										</div>
									</div>


									<div class="item-accordion-wrapper shadow-hovered shadow-no-border-hovered" id="bx_565502798_137">
										<a class="accordion-head stroke-theme-hover collapsed" data-toggle="collapse" data-parent="#accordion137" href="#accordion137">
											<span class="switcher-title color_333 font_18">Цена продукта на сайте указана с учетом НДС?</span>
											<i class="svg inline  svg-inline-right-arrow" aria-hidden="true">
												<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8 1V15M1 8H15" stroke="#999999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</i>
										</a>
										<div id="accordion137" class="panel-collapse collapse">
											<div class="accordion-body color_666">
												<div class="accordion-preview">
													Электронные версии продуктов не облагаются НДС. С удовольствием проконсультируем по возможностям решения, составим план запуска и поможем в выборе по телефону +7 (000) 000-00-00 или по почте info@digital2.ru. 													</div>
												<div class="bg-theme accordion-line"></div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>


				</div>
			</div>
			</div>

		</div>
	</div>
	<!-- КОНЕЦ ВОПРОС_ОТВЕТ -->

</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>