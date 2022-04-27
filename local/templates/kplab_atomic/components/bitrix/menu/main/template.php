<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!--<pre>-->
<!--	--><?//print_r($arResult);?>
<!--</pre>-->
<?if(!empty($arResult)) : ?>

	<div class="header__main-item header-menu ">

		<nav class="header-menu--centered">

			<div class="header-menu__wrapper">

				<? foreach($arResult as $arItem) : ?>

				<?if($arItem["SELECTED"]){$classActive = 'active';} else {$classActive ='';	}?>
				<? if(!empty($arItem["subitems"])){
					$subItemClass = 'header-menu__item--dropdown';
				} else {
					$subItemClass = '';
				} ?>


				<div class="header-menu__item <?=$subItemClass?>">

					<a href="<?=$arItem["LINK"]?>" class="header-menu__link dark_link <?=$classActive?>">
						<span class="header-menu__title"><?=$arItem["TEXT"]?></span>
					</a>

					<?if(!empty($arItem["subitems"])) : ?>

						<div class="header-menu__dropdown-menu">

							<div class="dropdown">

								<ul class="header-menu__dropdown-menu-inner">

									<?foreach($arItem["subitems"] as $arSubItem) : ?>

										<? if($arSubItem["SELECTED"]){ $subclassActive = 'active'; } else {
											$subclassActive =''; }?>

										<? if(!empty($arSubItem["subitems"])){
											$subSubItemClass = 'header-menu__dropdown-item--with-dropdown';
											$shevronHtml = '<i class="svg inline  svg-inline- header-menu__dropdown-right-arrow fill-dark-light-block" aria-hidden="true"><svg width="3" height="5" viewBox="0 0 3 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 2.5L0 5L0 0L3 2.5Z" fill="#333333"></path></svg></i>';
										} else {
											$subSubItemClass ='';
											$shevronHtml = '';
										} ?>

										<li class="header-menu__dropdown-item <?=$subSubItemClass;?>">
											<a href="<?=$arSubItem["LINK"];?>" class="font_15 dark_link
											fill-theme-hover1 menu-light-text1 fill-dark-light-block svg">
												<?=$arSubItem["TEXT"];?>
												<?=$shevronHtml;?>

											</a>

											<? if(!empty($arSubItem["subitems"])) : ?>

												<div class="header-menu__dropdown-menu header-menu__dropdown-menu--submenu">
													<ul class="dropdown">

													<?foreach($arSubItem["subitems"] as $arSubSubItem) : ?>

														<li class="header-menu__dropdown-item">
															<a href="<?=$arSubSubItem["LINK"];?>" class="font_15
															dark_link fill-dark-light-block svg"><?=$arSubSubItem["TEXT"];?></a>
														</li>

													<? endforeach; ?>

													</ul>
												</div>

											<?endif;?>

										</li>

									<? endforeach; ?>

								</ul>

							</div>

						</div>

					<?endif;?>

				</div>

				<?endforeach;?>

			</div>

		</nav>

	</div>

<?endif;?>