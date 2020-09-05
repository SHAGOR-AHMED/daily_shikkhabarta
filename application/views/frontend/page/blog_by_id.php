<?php
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }
?>
<div class="banner-section">
	<div class="top-news">
		<div class="top-inner">
			<?php
				$i=0;
				foreach($blog_byCatID as $blogs){ $i++; ?>
					<div class="col-md-4 top-text">
						<a href="<?= base_url('Welcome/BlogDetails/'.$blogs->id);?>">
							<img src="<?= base_url($blogs->blog_image);?>" class="img-responsive" style="min-height: 230px;">
						</a>
						<h5 class="top">
							<a href="<?= base_url('Welcome/BlogDetails/'.$blogs->id);?>">
								<?= $blogs->blog_title ; ?>
							</a>
						</h5>
						<p>
							<?php
                        		echo limit_words(strip_tags($blogs->blog_long_des),10,"UTF-8");
                    		?>
                    	</p>
						<p>On
							<?php 
								$timezone = "Asia/Dhaka";
								date_default_timezone_set($timezone);
								$dt = new DateTime($blogs->created_date_time);
								echo $dt->format('M j Y');
							?>

						<a class="span_link" href="<?= base_url('Welcome/BlogDetails/'.$blogs->id);?>"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
					</div>
			<?php
				if($i==3){
					echo '<div class="clearfix"> </div>';
					$i=0;
				}
				
				}
			?>
		</div>
	</div>
</div>

<!-- right side -->
<?php include('right.php'); ?>
<!-- //right side -->