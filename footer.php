		<footer class="footer">
			<div>
				<p class="footer-text"><a href="http://www.utorrent.com/">Page developed by FackyouDevs. All rights available and free to download</a></p>
				<p class="footer-text"><a href="http://www.freelargeimages.com/wp-content/uploads/2015/05/Twitter_Logo_Hd_Png_03.png"> - Follow us</a></p>
				<p class="footer-text"><a href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Bot%C3%B3n_Me_gusta.svg/2000px-Bot%C3%B3n_Me_gusta.svg.png"> - Like us</a></p>
				<p class="footer-text"><a href="https://nexoef.files.wordpress.com/2013/05/buzon.gif"> - Contact us</a></p>
			</div>
		</footer>

	</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){

  		/*Open menu in mobile view*/
	  	$(".menu-opener").click(function(){
	    	$(".menu-closed").toggleClass("menu-opened");
		});

	  	/*Open h4 inside sidebar
		$('.wrapper-sidebar-text').click(function(){
			if( $(this).hasClass("opened") ){

			} else{
				$(".wrapper-sidebar-text").removeClass("opened");
				$(this).toggleClass('opened');
			}
		});
		*/

		/*Set sidebar to fixed*/
		$(window).scroll(function(){
			var sticky = $(".sidebar"),
				scroll = $(window).scrollTop();
			if (scroll >= 280) sticky.addClass("fixed");
			else sticky.removeClass("fixed");
		});

		// projects - scrollspy
		/*
		var $body = $("wrapperExcursiones");
		$body.scrollspy();
		*/

	});
</script>