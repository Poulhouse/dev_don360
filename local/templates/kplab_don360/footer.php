<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

		</div>
	</div> <!-- .js-animsition -->
<!--	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/bootstrap/dist/js/bootstrap.bundle.min.js');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/assets/js/owl.carousel.min.js');?>

	<script type="text/javascript">
	    $(document).ready(function() {
	        $('.reviews').owlCarousel({
		        'nav': true,
		        'rewind': true,
		        'dots': true,
		        'dotsContainer': false,
		        'navText': ['<i class="owl-carousel__button owl-carousel__button--left colored_theme_bg_hover"><svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 1L1 6L6 11" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></i>','<i class="owl-carousel__button owl-carousel__button--right colored_theme_bg_hover"><svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 1L1 6L6 11" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></i>'],
		        'loop': false,
		        'autoplay': false,
		        'marginMove': true,
		        'margin': 32,
		        'responsive' : {
		            '0': {'dots': 1, 'autoWidth': true, 'lightDrag': true, 'items': 1 , 'margin': 24},
			        '380': {'dots': 1, 'autoWidth': true, 'lightDrag': true, 'items': 1 , 'margin': 24},
			        '768': {'dots': 0, 'autoWidth': false, 'lightDrag': false, 'items': 2 },
			        '1200': {'dots': 0, 'items': 3}
		        }
	        });
	    });
	</script>

</body>
</html>