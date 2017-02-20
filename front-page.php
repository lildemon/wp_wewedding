<?php get_header(); ?>

		<div class="index">
			<div class="banner1" style="display:block" ></div>
			<div class="banner2"></div>
		</div>

			<script type="text/javascript">
			!function($){
				$(document).ready(function(){
					var banner = $(".index")
					var len = $(".index").find("div").length - 1
					var current = 0
					var autoplay =  setInterval(function(){
										banner.find("div").fadeOut(2000);
										if(current == len){
											current = 0
										}else{
											current += 1
										}
										banner.find("div").eq(current).fadeIn(2000);
									},5000)
					
				})
			}(jQuery)
			
			</script>

<?php get_footer(); ?>		