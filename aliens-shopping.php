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

		<div class="alienfoodbanner no-gutter"> 
				
		</div>
		<div class="alienhospitalbanner no-gutter"> 
				
		</div>

		<div class="container">
			
		</div>
		<p id="p01">No nos responsabilizamos por abducciones alien ni intoxicaciones causadas por asteroides</p>
		
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