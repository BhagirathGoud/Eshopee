<!-- Footer -->
	<div id="footer" >
		<div class="top">
			<div class="cnt">
				<div class="col about">
					<h4>About Eshopee</h4>
					<p>Eshoppe is a leading destination for online shopping in India, offering some of the best prices and a completely hassle-free experience with options of paying through Cash on Delivery, Debit Card, Credit Card and Net Banking processed through secure and trusted gateways. Now shop for your favorite books, apparel, footwear, lifestyle accessories, baby care products, toys, posters, sports and fitness, mobile phones, laptops, cameras, movies, music, health and beauty, televisions, refrigerators, air-conditioners, washing machines, MP3 players and products from a host of other categories available. Some of the top selling electronic brands on the website are Samsung, HTC, Nokia, Dell, HP, Sony, Canon, Nikon, LG, Toshiba, Philips, Braun, Bajaj and Morphy Richards. Browse through our cool lifestyle accessories, apparel and footwear brands featured on our site with expert descriptions to help you arrive at the right buying decision. Eshopee also offers free home delivery for many of our products along with easy interest-free EMI options. And with the 30-day replacement guarantee, you live with no regrets; you can always exchange or cancel your order if you wish to. Get the best prices and the best online shopping experience every time, guaranteed.  </p>
				</div>
				<div class="col store">
					<h4>Store</h4>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Special Offers</a></li>
						<li><a href="#">Log In</a></li>
						<li><a href="#">Account</a></li>
						<li><a href="#">Basket</a></li>
						<li><a href="#">Checkout</a></li>
					</ul>
				</div>
						<div class="cl">&nbsp;</div>
							</div>
		</div>
	</div>
	
<!-- End Footer -->










		














 


<!-- Java script-->

 <script type="text/javascript">
            $(function() {
				/**
				 * the menu
				 */
				var $menu = $('#ldd_menu');
				
				/**
				 * for each list element,
				 * we show the submenu when hovering and
				 * expand the span element (title) to 510px
				 */
				$menu.children('li').each(function(){
					var $this = $(this);
                                                                                       var $span  = $this.children('span');
					var $span  = $span.children('a');
					$span.data('width',$span.width());
					
					$this.bind('mouseenter',function(){
						$menu.find('.ldd_submenu').stop(true,true).hide();
						$span.stop().animate({'width':'120px'},300,function(){
							$this.find('.ldd_submenu').slideDown(300);
						});
					}).bind('mouseleave',function(){
						$this.find('.ldd_submenu').stop(true,true).hide();
						$span.stop().animate({'width':$span.data('width')+'px'},300);
					});
				});
            });





$(function() {
				/**
				* the element
				*/
				var $ui 		= $('#ui_element');
				
				/**
				* on focus and on click display the dropdown, 
				* and change the arrow image
				*/
				$ui.find('.sb_input').bind('mouse click',function(){
					$ui.find('.sb_down')
					   .addClass('sb_up')
					   .removeClass('sb_down')
					   .andSelf()
					   .find('.sb_dropdown')
					   .show();
				});
				
				/**
				* on mouse leave hide the dropdown, 
				* and change the arrow image
				*/
				$ui.bind('mouseleave',function(){
					$ui.find('.sb_up')
					   .addClass('sb_down')
					   .removeClass('sb_up')
					   .andSelf()
					   .find('.sb_dropdown')
					   .hide();
				});
				
				/**
				* selecting all checkboxes
				*/
				$ui.find('.sb_dropdown').find('label[for="all"]').prev().bind('click',function(){
					$(this).parent().siblings().find(':checkbox').attr('checked',this.checked).attr('disabled',this.checked);
				});
            });




        </script>

	




</body>
</html>