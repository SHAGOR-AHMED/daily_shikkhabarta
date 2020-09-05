
<?php
	$short_desc = mb_substr($selected_blog->blog_long_des,0,220,"UTF-8");
?>
<!-- facebook -->
<meta property="og:title" content="<?= $selected_blog->blog_title; ?>" />
<meta property="og:description" content="<?php $short_desc; ?>" />
<meta property="og:site_name" content="dailyshikkhabarta.com" />
<meta property="og:type" content="article" />
<meta property="og:locale" content="en_US" />
<link rel="canonical" href="<?php echo "http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
<meta property="og:url" content="<?php echo "http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
<meta property="og:image" content="<?= $selected_blog->blog_image; ?>" />
<!--------------------------->

<style type="text/css">
	.blog-img img{
		width: 100%;
	}
</style>

<div class="banner-section">
	<h3 class="tittle"><?= $selected_blog->blog_title; ?></h3>
	<div class="single blog-img">
		<img src="<?= base_url($selected_blog->blog_image);?>" class="img-responsive" alt="" />
		<div class="b-bottom"> 
			<h5 class="top"><a href="#"><?= $selected_blog->blog_title; ?></a></h5>
			<hr>
			<p class="sub">
				<?php
					$descexp = explode('if gte mso 9]', $selected_blog->blog_long_des);
					echo $description = substr($descexp[0], 0,-8);
				?>			
			</p>
			<p>On 
				<?php 
					$timezone = "Asia/Dhaka";
					date_default_timezone_set($timezone);
					$dt = new DateTime($selected_blog->created_date_time);
					echo $dt->format('M j Y');
				?>
			</p>
		</div>
	</div>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="pull-left">
					<div class="pull-left hidden-xs">
						SHARE<div class="addthis_sharing_toolbox"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<h4>Leave your comment</h4>
	<div class="card-footer">
		<div class="fb-comments" data-href="<?php echo "http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" data-width="100%" data-numposts="10"></div>
	</div>
	<div class="clearfix"></div>
</div>

<!-- right side -->
<?php include('right.php'); ?>
<!-- //right side -->