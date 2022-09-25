<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?//print_r($arResult);?>
<?CJSCore::Init(array("popup"));?>
<?php
/*$this->addExternalCss($templateFolder."/libs/css/style.css");*/
$this->addExternalCss($templateFolder."/libs/owlcarousel/assets/owl.carousel.css");
$this->addExternalCss($templateFolder."/libs/owlcarousel/assets/owl.theme.default.css");

?>
<div id="viewerPopup" class="viewer-content" style="display:none;">
	<iframe id="hideblock" src="https://ya.ru" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<div class="carousel-caption d-none d-md-block">
		<h5>tttt</h5>
		<div class="place-point"></div>
		<div class="place-category">ttt</div>
	</div>
	<div id="carousel-custom-dots" class="indicators">
        <?foreach($arResult["ITEMS"] as $k => $arItem):?>
			<div class="owl-dot "><span class="text-bg">0<?=$k+1;?></span></div>
        <?endforeach;?>
	</div>
</div>

<div class="index-block--item-container index-block--item-slider">
	<div id="carouselWorks" class="inner">

        <?foreach($arResult["ITEMS"] as $k => $arItem):?>

            <?if($arItem["PREVIEW_PICTURE"] != '' && $arItem["DETAIL_PICTURE"] != ''):?>
                <?
                $grab = GetIBlockElement($arItem["ID"]);
                $image_prw = CFile::GetPath($grab["PREVIEW_PICTURE"]);
                $image2 = CFile::GetPath($grab["DETAIL_PICTURE"]);
                ?>
            <?endif?>

			<?if($arItem["IBLOCK_SECTION_ID"]): $res = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]); endif?>



			<div class="item" style="background-image: url(<?=$image2;?>); background-repeat:no-repeat; background-size: cover; background-position: center;"
			     data-viewId="<?=$arItem['ID']?>"
			     data-counter="0<?=$k+1;?>"
			     data-name="<?=$arItem['NAME']?>"
			     data-category="<?if($ar_res = $res->GetNext()) echo $ar_res['NAME'];?>"
			     data-view-google="<?if(!empty($arItem["PROPERTY_GOOGLE_FRAME_VALUE"])): echo $arItem["~PROPERTY_GOOGLE_FRAME_VALUE"]["TEXT"]; else: echo "false"; endif;?>"
			     data-view-yandex="<?if(!empty($arItem["PROPERTY_YANDEX_FRAME_VALUE"])): echo $arItem["~PROPERTY_YANDEX_FRAME_VALUE"]["TEXT"]; else: echo "false"; endif;?>"
			     data-view-classic="<?if(!empty($arItem["PROPERTY_CLASSIC_FRAME_VALUE"])): echo $arItem["~PROPERTY_CLASSIC_FRAME_VALUE"]["TEXT"]; else: echo "false"; endif;?>">



				<iframe id="hideGblock" style="display:none;" src="<? echo $arItem["~PROPERTY_GOOGLE_FRAME_VALUE"]["TEXT"];?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				<iframe id="hideYblock" style="display:none;" src="<? echo $arItem["~PROPERTY_YANDEX_FRAME_VALUE"]["TEXT"];?>" width="100%" height="450" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
				<iframe id="hideSblock" style="display:none;" src="<? echo $arItem["~PROPERTY_CLASSIC_FRAME_VALUE"]["TEXT"];?>" width="100%" height="450" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>


				<div class="carousel-caption d-none d-md-block">
					<h5><?=$arItem['NAME']?></h5>
					<div class="place-point"></div>
					<div class="place-category">Музеи, галерии и выставочные площадки</div>
				</div>
			</div>
            <?/*=$arItem["~PROPERTY_YANDEX_FRAME_VALUE"]["TEXT"];*/?>
        <?endforeach;?>

	</div>


	<div id="carousel-custom-dots" class="indicators">
        <?foreach($arResult["ITEMS"] as $k => $arItem):?>
			<div class="owl-dot "><span class="text-bg">0<?=$k+1;?></span></div>
        <?endforeach;?>
	</div>

	<div class="carousel-variables-views">
		<div class="point-indicators">
            <div class="point hidden varGoogle" data-id="" data-iframe="">
	            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		            <path d="M23.7636 9.7497C23.9167 10.553 24 11.3929 24 12.2694C24 19.1252 19.3177 24 12.2457 24C10.6374 24.0005 9.04482 23.6904 7.55888 23.0875C6.07295 22.4846 4.7228 21.6008 3.58558 20.4864C2.44837 19.372 1.54638 18.0489 0.931149 16.5928C0.31592 15.1366 -0.00048978 13.576 5.69059e-07 12C-0.00048978 10.424 0.31592 8.86336 0.931149 7.40723C1.54638 5.95111 2.44837 4.62805 3.58558 3.51365C4.7228 2.39925 6.07295 1.51535 7.55888 0.912468C9.04482 0.309581 10.6374 -0.000479954 12.2457 5.57641e-07C15.5522 5.57641e-07 18.315 1.1922 20.4348 3.128L16.9827 6.51077V6.50224C15.6977 5.30272 14.0669 4.68712 12.2457 4.68712C8.20526 4.68712 4.92116 8.0321 4.92116 11.9927C4.92116 15.9521 8.20526 19.3043 12.2457 19.3043C15.9117 19.3043 18.4071 17.2503 18.9196 14.4295H12.2457V9.7497H23.7636Z" fill="white" fill-opacity="0.2"/>
	            </svg>
            </div>

			<div class="point hidden varYandex" data-id="" data-iframe="">
				<svg width="12" height="24" viewBox="0 0 12 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M9.42621 13.0563H8.02165C5.81565 13.0563 3.67634 11.5203 3.67634 7.68014C3.67634 3.67951 5.68177 2.04785 7.72076 2.04785H9.42619L9.42621 13.0563ZM11.6322 0H7.82106C4.07774 0 0.901924 2.72002 0.901924 8.00021C0.901924 11.1683 2.44014 13.5041 5.18029 14.6561L0.0668798 23.4883C-0.100129 23.7765 0.0668798 24 0.333503 24H2.70674C2.90733 24 3.04119 23.9361 3.1079 23.7765L7.7541 15.1039H9.42617V23.7765C9.42617 23.8722 9.52647 24 9.65921 24H11.7325C11.9331 24 12 23.9041 12 23.7447V0.320256C12 0.095712 11.8661 0 11.6322 0Z" fill="white" fill-opacity="0.2"/>
				</svg>
			</div>

            <div class="point hidden varSite" data-id="" data-iframe="">
	            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
		            <path d="M25.125 13.5469C25.125 20.1743 19.7524 25.5469 13.125 25.5469M25.125 13.5469C25.125 6.91946 19.7524 1.54688 13.125 1.54688M25.125 13.5469H1.125M13.125 25.5469C6.49758 25.5469 1.125 20.1743 1.125 13.5469M13.125 25.5469C15.8973 22.1377 17.5137 17.9352 17.7404 13.5469C17.5137 9.15858 15.8973 4.95608 13.125 1.54688M13.125 25.5469C10.3527 22.1377 8.73632 17.9352 8.50962 13.5469C8.73632 9.15858 10.3527 4.95608 13.125 1.54688M1.125 13.5469C1.125 6.91946 6.49758 1.54688 13.125 1.54688" stroke="white" stroke-opacity="0.2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
	            </svg>
            </div>
			<div class="point hidden varInsta" data-id="" data-iframe="">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M18 0H6C2.68629 0 0 2.68629 0 6V18C0 21.3137 2.68629 24 6 24H18C21.3137 24 24 21.3137 24 18V6C24 2.68629 21.3137 0 18 0Z" fill="white" fill-opacity="0.2"/>
					<path d="M16.8 11.244C16.9481 12.2427 16.7775 13.2627 16.3125 14.1588C15.8475 15.055 15.1118 15.7817 14.21 16.2356C13.3081 16.6895 12.2861 16.8475 11.2893 16.6871C10.2926 16.5267 9.37171 16.0561 8.65781 15.3422C7.9439 14.6283 7.47328 13.7075 7.31288 12.7107C7.15248 11.7139 7.31048 10.6919 7.76439 9.79005C8.21831 8.88822 8.94502 8.15249 9.84118 7.68749C10.7373 7.22249 11.7573 7.05191 12.756 7.2C13.7747 7.35106 14.7178 7.82576 15.446 8.55397C16.1742 9.28218 16.6489 10.2253 16.8 11.244Z" fill="white" fill-opacity="0.2"/>
				</svg>
			</div>
			<div class="point hidden varYoutube" data-id="" data-iframe="">
				<svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M21.5406 2.42C21.4218 1.94541 21.1799 1.51057 20.8392 1.15941C20.4986 0.808241 20.0713 0.553185 19.6006 0.42C17.8806 8.9407e-08 11.0006 0 11.0006 0C11.0006 0 4.12057 2.98023e-08 2.40057 0.46C1.92982 0.593185 1.50255 0.84824 1.16192 1.19941C0.821288 1.55057 0.57936 1.98541 0.460572 2.46C0.145786 4.20556 -0.00819243 5.97631 0.000571645 7.75C-0.0106491 9.53704 0.143339 11.3213 0.460572 13.08C0.591531 13.5398 0.838878 13.9581 1.17872 14.2945C1.51855 14.6308 1.93939 14.8738 2.40057 15C4.12057 15.46 11.0006 15.46 11.0006 15.46C11.0006 15.46 17.8806 15.46 19.6006 15C20.0713 14.8668 20.4986 14.6118 20.8392 14.2606C21.1799 13.9094 21.4218 13.4746 21.5406 13C21.8529 11.2676 22.0069 9.51033 22.0006 7.75C22.0118 5.96295 21.8578 4.1787 21.5406 2.42Z" fill="white" fill-opacity="0.2"/>
					<path d="M8.75057 11.02L14.5006 7.75L8.75057 4.48V11.02Z" fill="white" fill-opacity="0.2"/>
				</svg>
			</div>
		</div>
		<h5>Варианты размещения</h5>
	</div>
</div>

<?php $this->addExternalJS($templateFolder."/libs/owlcarousel/owl.carousel.js"); ?>
<?php $this->addExternalJS($templateFolder."/libs/js/script.js"); ?>

