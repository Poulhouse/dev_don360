<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!--<pre>-->
<!--	--><?//print_r($arResult);?>
<!--</pre>-->
<?if(!empty($arResult)) : ?>

	<ul class="nav nav_menu_top">

        <? foreach($arResult as $arItem) : ?>

            <?if($arItem["SELECTED"]){$classActive = 'active';} else {$classActive ='';	}?>

			<li class="nav-item">
				<a href="<?=$arItem["LINK"];?>" class="nav-link link-dark <?=$classActive?>">
					<?=$arItem["TEXT"]?>
				</a>
			</li>

        <? endforeach; ?>

	</ul>

<?endif;?>