<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!--<pre>-->
<!--	--><?//print_r($arResult);?>
<!--</pre>-->
<?if(!empty($arResult)) : ?>

	<ul class="nav nav_menu_main">

        <? foreach($arResult as $arItem) : ?>

            <?if($arItem["SELECTED"]){$classActive = 'active';} else {$classActive ='';	}?>

	        <? if(!empty($arItem["subitems"])){
	            $subItemClass = 'nav_menu_main__item_dropdown dropdown';
                $subLinkClass =  'dropdown-toggle';
	        } else {
	            $subItemClass = '';
                $subLinkClass =  '';
	        } ?>

			<li class="nav-item <?=$subItemClass?>">
				<a href="<?=$arItem["LINK"];?>" class="nav-link link-dark <?=$classActive.' '.$subLinkClass?>">
					<?=$arItem["TEXT"]?>
				</a>

	            <?if(!empty($arItem["subitems"])) : ?>

					<ul class="dropdown-menu">

		            <?foreach($arItem["subitems"] as $arSubItem) : ?>

		                <? if($arSubItem["SELECTED"]){ $subclassActive = 'active'; } else { $subclassActive =''; }?>

		                <? if(!empty($arSubItem["subitems"])){
		                    $subSubItemClass = 'nav_menu_main__dropdown-item--with-dropdown';
		                    $shevronHtml = '<i class="svg inline nav_menu_main__dropdown-item-right-arrow" aria-hidden="true"><svg width="3" height="5" viewBox="0 0 3 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 2.5L0 5L0 0L3 2.5Z" fill="#333333"></path></svg></i>';
		                } else {
		                    $subSubItemClass ='';
		                    $shevronHtml = '';
		                } ?>

						<li class="dropdown-item <?=$subSubItemClass;?>">
							<a href="<?=$arSubItem["LINK"];?>" class="">
		                        <?=$arSubItem["TEXT"];?>
		                        <?=$shevronHtml;?>
							</a>

							<? if(!empty($arSubItem["subitems"])) : ?>

								<ul class="dropdown">

								<?foreach($arSubItem["subitems"] as $arSubSubItem) : ?>

									<li class="nav_menu_main__dropdown-item">
										<a href="<?=$arSubSubItem["LINK"];?>" class="">
											<?=$arSubSubItem["TEXT"];?>
										</a>
									</li>

								<? endforeach; ?>

								</ul>

		                    <?endif;?>

						</li>

		            <? endforeach; ?>

					</ul>

	            <?endif;?>

			</li>

        <? endforeach; ?>

	</ul>

<?endif;?>