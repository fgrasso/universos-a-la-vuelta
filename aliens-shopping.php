<html>
	<head>
		<meta charset="utf-8">
		<title>Aliens Shopping</title>
		<link rel="stylesheet" href="style.css" type="text/css" >
		<script rel="C:\Users\facun\Repositorios\Universos-a-la-vuelta\Script" src="myScript.js"></script>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link href="Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="Bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

		<!-- Load header -->
		<?php include('header.php'); ?>

		<div class="wrapper-title">
			<p class="initialtexttitle">Looking for some Out-Of-This-World facilities?</p>
			<div class="initialsection">
				<p class="initialtext">Best food, medicine, ships, sports and more of the whole universe.</p>
				<p class="initialtext"> Take a look and come to know us anytime!</p>
			</div>
		</div>
		<div class="alienfoodbanner">
			<div class="wrapper-outterfoodtext">
				<div class="container">
					<h2 class="outterfoodtext">Food space truck</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="initialsection">
				<p class="textafterfoodbanner">Yummy! The best food you can imagine. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in iaculis nibh, et viverra justo. Aenean mauris nisl, vestibulum eget neque id, tincidunt elementum eros. Nulla iaculis vestibulum enim ac pretium. Proin at ex ante. Suspendisse eget fermentum neque, sed vestibulum dolor. Sed sed condimentum dui. In elementum, arcu sit amet vehicula mollis, purus dolor elementum est, maximus semper nisi est sit amet justo. Nullam non tincidunt sem, ut porttitor sapien. Aenean tincidunt, velit vel eleifend tincidunt, leo ligula iaculis enim, blandit lacinia velit turpis eu neque. Proin elementum, nulla vitae dignissim sagittis, lectus massa semper elit, et ultricies risus mauris id sapien. Sed porttitor sapien vel aliquam feugiat.</p>
			</div>
		</div>
		<div class="alienhospitalbanner">
			<div class="wrapper-outterhospitaltext">
				<div class="container">
					<h2 class="outterhospitaltext">Hospitalien</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="initialsection">
				<p class="textafterhospitalbanner">Yummy! The best food you can imagine. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in iaculis nibh, et viverra justo. Aenean mauris nisl, vestibulum eget neque id, tincidunt elementum eros. Nulla iaculis vestibulum enim ac pretium. Proin at ex ante. Suspendisse eget fermentum neque, sed vestibulum dolor. Sed sed condimentum dui. In elementum, arcu sit amet vehicula mollis, purus dolor elementum est, maximus semper nisi est sit amet justo. Nullam non tincidunt sem, ut porttitor sapien. Aenean tincidunt, velit vel eleifend tincidunt, leo ligula iaculis enim, blandit lacinia velit turpis eu neque. Proin elementum, nulla vitae dignissim sagittis, lectus massa semper elit, et ultricies risus mauris id sapien. Sed porttitor sapien vel aliquam feugiat.</p>
			</div>
		</div>
		<div class="alienshipbanner">
			<div class="wrapper-outterfoodtext">
				<div class="container">
					<h2 class="outterfoodtext">Food space truck</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="initialsection">
				<p class="textafterfoodbanner">Yummy! The best food you can imagine. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in iaculis nibh, et viverra justo. Aenean mauris nisl, vestibulum eget neque id, tincidunt elementum eros. Nulla iaculis vestibulum enim ac pretium. Proin at ex ante. Suspendisse eget fermentum neque, sed vestibulum dolor. Sed sed condimentum dui. In elementum, arcu sit amet vehicula mollis, purus dolor elementum est, maximus semper nisi est sit amet justo. Nullam non tincidunt sem, ut porttitor sapien. Aenean tincidunt, velit vel eleifend tincidunt, leo ligula iaculis enim, blandit lacinia velit turpis eu neque. Proin elementum, nulla vitae dignissim sagittis, lectus massa semper elit, et ultricies risus mauris id sapien. Sed porttitor sapien vel aliquam feugiat.</p>
			</div>
		</div>
		<div class="aliensportbanner">
			<div class="wrapper-outterhospitaltext">
				<div class="container">
					<h2 class="outterhospitaltext">Hospitalien</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="initialsection">
				<p class="textafterhospitalbanner">Yummy! The best food you can imagine. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in iaculis nibh, et viverra justo. Aenean mauris nisl, vestibulum eget neque id, tincidunt elementum eros. Nulla iaculis vestibulum enim ac pretium. Proin at ex ante. Suspendisse eget fermentum neque, sed vestibulum dolor. Sed sed condimentum dui. In elementum, arcu sit amet vehicula mollis, purus dolor elementum est, maximus semper nisi est sit amet justo. Nullam non tincidunt sem, ut porttitor sapien. Aenean tincidunt, velit vel eleifend tincidunt, leo ligula iaculis enim, blandit lacinia velit turpis eu neque. Proin elementum, nulla vitae dignissim sagittis, lectus massa semper elit, et ultricies risus mauris id sapien. Sed porttitor sapien vel aliquam feugiat.</p>
			</div>
		</div>
		
		<!-- Load footer -->
		<?php include('footer.php'); ?>

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

		// projects - scrollspy
		/*
		var $body = $("wrapperExcursiones");
		$body.scrollspy();
		*/

	});
</script>