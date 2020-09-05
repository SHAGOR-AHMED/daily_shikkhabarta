
<!DOCTYPE HTML>
<html>
	<head>
		<title><?= $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="DAILY SHIKKHABARTA" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href="<?= base_url('assets/frontend/');?>css/bootstrap.css" rel='stylesheet' type='text/css' />
		<link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
		<!--Custom-Theme-files-->
		<link href="<?= base_url('assets/frontend/');?>css/style.css" rel='stylesheet' type='text/css' />	
		<script src="<?= base_url('assets/frontend/');?>js/jquery.min.js"> </script>
		<!--/script-->
		<script type="text/javascript" src="<?= base_url('assets/frontend/');?>js/move-top.js"></script>
		<script type="text/javascript" src="<?= base_url('assets/frontend/');?>js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>

	</head>
	<body>
		<!-- header-section-starts -->
		<div class="h-top" id="home">
			<div class="top-header">
				<ul class="cl-effect-16 top-nag"> 
					<li><a href="<?= base_url('/');?>" data-hover="Home">Home</a></li>
					<li><a href="<?= base_url('Welcome/About');?>" data-hover="About">About</a></li>
				</ul>
				<div class="search-box">
					<div class="b-search">
						<form>
							<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
							<input type="submit" value="">
						</form>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
		<div class="full">
			<div class="col-md-3 top-nav">
				<div class="logo">
					<a href="<?= base_url('/');?>" style="color:#fff; text-align: center;"><h4>DAILY SHIKKHABARTA</h4></a>
				</div>
				<div class="top-menu">
					<span class="menu"> </span>
					<ul class="cl-effect-16">
						<?php foreach($all_published_category as $category){ ?>

							<li><a href="<?= base_url('Welcome/BlogByID/'.$category->cat_id);?>" data-hover="<?= $category->cat_name;?>"><?= $category->cat_name;?></a></li>

						<?php } ?> 
					</ul>
					<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".top-menu ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
					<!-- script-for-nav --> 	
					<ul class="side-icons">
						<li><a class="fb" href="#"></a></li>
						<li><a class="twitt" href="#"></a></li>
						<li><a class="goog" href="#"></a></li>
						<li><a class="drib" href="#"></a></li>
					</ul>
				</div>
			</div>
				
			<div class="col-md-9 main">
				<?php 
                    if(isset($content)){
                        echo $content;
                    }else{
                        echo "Found Nothing";
                    }
                ?>
				
				<!--/footer-->
				<?php include('page/footer.php');?>
			</div>
		<div class="clearfix"> </div>
	</div>	
		<!--//footer-->
		<!--start-smooth-scrolling-->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
				var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
				};
				*/
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>

		<!-- fb share -->
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-56ff9f1ceba9b115"></script>
		<!-- //fb -->
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</body>
</html>