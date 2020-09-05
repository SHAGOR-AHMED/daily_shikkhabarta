<div class="banner-right-text">
	<h3 class="tittle">Recent Blogs <i class="glyphicon glyphicon-facetime-video"></i></h3>
	<div class="general-news">
		<div class="general-inner">
			<div class="edit-pics">
				<?php foreach($recent_blog as $blogs){ ?>
					<div class="editor-pics">
						<div class="col-md-3 item-pic">
							<img src="<?= base_url($blogs->blog_image);?>" class="img-responsive" style="min-height: 80px; max-width: 95px;">
						</div>
						<div class="col-md-9 item-details">
							<h5 class="inner two"><a href="<?= base_url('Welcome/BlogDetails/'.$blogs->id);?>"><?= $blogs->blog_title; ?></a></h5>
							<div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>
								<?php 
									$timezone = "Asia/Dhaka";
									date_default_timezone_set($timezone);
									$dt = new DateTime($blogs->created_date_time);
									echo $dt->format('M j Y');
								?>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				<?php } ?>
				
			</div>
		</div>
	</div>	
	<hr>

	<h3 class="tittle">Popular Blogs <i class="glyphicon glyphicon-facetime-video"></i></h3>
	<div class="general-news">
		<div class="general-inner">
			<div class="edit-pics">
				<?php foreach($all_popular_blog as $blogs){ ?>
					<div class="editor-pics">
						<div class="col-md-3 item-pic">
							<img src="<?= base_url($blogs->blog_image);?>" class="img-responsive" style="min-height: 80px; max-width: 95px;">
						</div>
						<div class="col-md-9 item-details">
							<h5 class="inner two"><a href="<?= base_url('Welcome/BlogDetails/'.$blogs->id);?>"><?= $blogs->blog_title; ?></a></h5>
							<div class="td-post-date two"><i class="glyphicon glyphicon-time"></i>
								<?php 
									$timezone = "Asia/Dhaka";
									date_default_timezone_set($timezone);
									$dt = new DateTime($blogs->created_date_time);
									echo $dt->format('M j Y');
								?>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>

</div>
<div class="clearfix"> </div>