<!--banner-section-->
<div class="banner-section">
	<h3 class="tittle"></h3>
	<div class="banner">
		<div  class="callbacks_container">
			<ul class="rslides" id="slider4">
				<?php foreach($all_slider as $slider){ ?>
					<li>
						<img src="<?= base_url($slider->image);?>" class="img-responsive" alt="" />
					</li>
				<?php } ?>
			</ul>
		</div>
		<!--banner-->
		<script src="<?= base_url('assets/frontend/');?>js/responsiveslides.min.js"></script>
		<script>
			// You can also use "$(window).load(function() {"
			$(function () {
			  // Slideshow 4
			  $("#slider4").responsiveSlides({
				auto: true,
				pager:true,
				nav:true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
				  $('.events').append("<li>before event fired.</li>");
				},
				after: function () {
				  $('.events').append("<li>after event fired.</li>");
				}
			  });
		
			});
		</script>
		<div class="clearfix"> </div>
		
		<!-- <div class="b-bottom"> 
			<div class="alert alert-block alert-success">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                </button>
                <i class="ace-icon fa fa-check green"></i>
                Our Blogs
            </div>
		</div> -->
	</div>
	<!--//banner-->

	<?php
	    function limit_words($string, $word_limit){
	        $words = explode(" ",$string);
	        return implode(" ",array_splice($words,0,$word_limit));
	    }
	?>
	  
	<div class="top-news">
		<div class="top-inner">
			<?php foreach($published_blog as $blogs){ ?>

				<div class="col-md-6 top-text">
					<a href="<?= base_url('Welcome/BlogDetails/'.$blogs->id);?>">
						<img src="<?= base_url($blogs->blog_image);?>" class="img-responsive" style="min-height: 200px;">
					</a>

					<?php 
						$string = $blogs->blog_title;
						$StrReplace = str_replace(' ','-', $string);
					?>
					<h5 class="top">
						<!-- <a href="<?= base_url('Welcome/BlogDetails/'.$blogs->id);?>"> -->
						<a href="<?= base_url($StrReplace.'/'.$blogs->id);?>">
							<?= $blogs->blog_title ; ?>
						</a>
					</h5>
					<p>
						<?php
                        	echo limit_words(strip_tags($blogs->blog_long_des),10,"UTF-8");
                    	?>
                    </p>
					<p>
						<?php 
							$timezone = "Asia/Dhaka";
							date_default_timezone_set($timezone);
							$dt = new DateTime($blogs->created_date_time);
							echo $dt->format('M j Y');
						?>

					<a class="span_link" href="<?= base_url('Welcome/BlogDetails/'.$blogs->id);?>"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
				</div>

			<?php } ?>
			
			<div class="clearfix"> </div>
		</div>
		 
	</div>
</div>
<!--//banner-section-->

<!-- right side -->
<?php include('right.php'); ?>
<!-- //right side -->