<!-- gallery -->
<link rel="stylesheet" href="<?php echo front_template_path()?>assets/gallery/css/magnific-popup.css">
<link rel="stylesheet" href="<?php echo front_template_path()?>assets/gallery/css/style.css">
<!-- gallery end -->

<?php //show_pre($categories) ?>
<h2><?php echo $category['name']?></h2>
<?php
$show_gallery=false; 
$total_articles=0; 
$all_articles=array();
if(isset($categories) && count($categories)) { 
	foreach ($categories as $key=>$cat){
		$articles=get_articles_of_category($cat['id']); 
		$total_articles=$total_articles+count($articles);
		if(count($articles)){
			foreach ($articles as $article){
				$show_gallery=true;
				$all_articles[]=$article; 
			}
		}
	}
}	

if($show_gallery){ ?>
<div class="portfolio-container">   
	<div class="container">
		<?php $left=$top=0; ?>
		<!-- albums header starts -->
		<div class="row-fluid">
			<div class="col-sm-12 portfolio-filters wow fadeInLeft">
				<a href="#" class="filter-all active">All</a>  
				<?php foreach ($categories as $cat) { ?>
				<a href="#" class="filter-<?php echo $cat['slug']?>"><?php echo $cat['name']?></a>  
				<?php } ?>
			</div>
		</div>
		<!-- albums header ends -->

		<div class="row-fluid">
			<div class="col-sm-12 portfolio-masonry" style="position: relative; height: 876px;">		

				<!-- albums gallery (pictures & vdos) starts -->
				<?php 
				foreach ($all_articles as $key=>$article) 
				{ 
					$category=get_category_of_article($article['category_id']);
					?>
					<div 
					class="portfolio-box <?php echo $category['slug']?>" 
					style="position: absolute; left: <?php echo $left?>px; top: <?php echo $top?>px;">
						<div class="portfolio-box-container">
							<img src="<?php echo front_template_path()?>images/portfolio/work2.jpg" alt="" 
							data-at2x="<?php echo front_template_path()?>images/portfolio/work2.jpg">
							<div class="portfolio-box-text">
								<h3><?php echo $article['name']?$article['name']:''?></h3>
								<p>
								<?php echo $article['content']?$article['content']:''?>.
								</p>
								<!-- <h5>
								k:<?php echo $key?>--
								w:<?php echo $left?>--
								h:<?php echo $top?>--
								</h5> -->
							</div>
						</div>
					</div>
					<?php 
					$left=$left+291;
					if($key!=0 && $key%3 == 0){
						$left=0;
						$top=$top+312; 
					}
				}
				?>
				<!-- albums gallery (pictures & vdos) ends -->

			</div>
		</div>

	</div>
</div>
<? }// if show_gallery
?>


<!-- 				<div class="portfolio-box logo-design" style="position: absolute; left: 285px; top: 0px;">
					<div class="portfolio-box-container">
						<img class="portfolio-video" src="<?php echo front_template_path()?>images/portfolio/work2.jpg" alt="" data-at2x="<?php echo front_template_path()?>images/portfolio/work2.jpg" data-portfolio-video="http://vimeo.com/84910153?autoplay=0">
						<i class="portfolio-box-icon fa fa-play"></i>
						<div class="portfolio-box-text">
							<h3>Ipsum Logo</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>
				
				<div class="portfolio-box print-design" style="position: absolute; left: 570px; top: 0px;">
					<div class="portfolio-box-container">
						<img src="<?php echo front_template_path()?>images/portfolio/work3.jpg" alt="" data-at2x="<?php echo front_template_path()?>images/portfolio/work3.jpg">
						<div class="portfolio-box-text">
							<h3>Dolor Prints</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>
				
				<div class="portfolio-box web-design" style="position: absolute; left: 855px; top: 0px;">
					<div class="portfolio-box-container">
						<img src="<?php echo front_template_path()?>images/portfolio/work4.jpg" alt="" data-at2x="<?php echo front_template_path()?>images/portfolio/work4.jpg">
						<div class="portfolio-box-text">
							<h3>Sit Amet Website</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>
				
				<div class="portfolio-box logo-design" style="position: absolute; left: 0px; top: 292px;">
					<div class="portfolio-box-container">
						<img class="portfolio-video" src="<?php echo front_template_path()?>images/portfolio/work5.jpg" alt="" data-at2x="<?php echo front_template_path()?>images/portfolio/work5.jpg" data-portfolio-video="https://www.youtube.com/watch?v=tFTLxkMmY4M">
						<i class="portfolio-box-icon fa fa-play"></i>
						<div class="portfolio-box-text">
							<h3>Consectetur Logo</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>
				
				<div class="portfolio-box print-design" style="position: absolute; left: 285px; top: 292px;">
					<div class="portfolio-box-container">
						<img src="<?php echo front_template_path()?>images/portfolio/work6.jpg" alt="" data-at2x="<?php echo front_template_path()?>images/portfolio/work6.jpg">
						<div class="portfolio-box-text">
							<h3>Adipisicing Print</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>
				
				<div class="portfolio-box web-design" style="position: absolute; left: 570px; top: 292px;">
					<div class="portfolio-box-container">
						<img src="<?php echo front_template_path()?>images/portfolio/work7.jpg" alt="" data-at2x="<?php echo front_template_path()?>images/portfolio/work7.jpg">
						<div class="portfolio-box-text">
							<h3>Elit Website</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>
				
				<div class="portfolio-box print-design" style="position: absolute; left: 855px; top: 292px;">
					<div class="portfolio-box-container">
						<img src="<?php echo front_template_path()?>images/portfolio/work8.jpg" alt="" data-at2x="<?php echo front_template_path()?>images/portfolio/work8.jpg">
						<div class="portfolio-box-text">
							<h3>Sed Do Prints</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>
				
				<div class="portfolio-box web-design" style="position: absolute; left: 0px; top: 584px;">
					<div class="portfolio-box-container">
						<img src="<?php echo front_template_path()?>images/portfolio/work9.jpg" alt="" data-at2x="<?php echo front_template_path()?>images/portfolio/work9.jpg">
						<div class="portfolio-box-text">
							<h3>Eiusmod Website</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>
				
				<div class="portfolio-box logo-design" style="position: absolute; left: 285px; top: 584px;">
					<div class="portfolio-box-container">
						<img src="<?php echo front_template_path()?>images/portfolio/work10.jpg" alt="" data-at2x="<?php echo front_template_path()?>images/portfolio/work10.jpg">
						<div class="portfolio-box-text">
							<h3>Tempor Logo</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>
				
				<div class="portfolio-box web-design" style="position: absolute; left: 570px; top: 584px;">
					<div class="portfolio-box-container">
						<img src="<?php echo front_template_path()?>images/portfolio/work11.jpg" alt="" data-at2x="<?php echo front_template_path()?>images/portfolio/work11.jpg">
						<div class="portfolio-box-text">
							<h3>Incididunt Website</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>
				
				<div class="portfolio-box print-design" style="position: absolute; left: 855px; top: 584px;">
					<div class="portfolio-box-container">
						<img src="<?php echo front_template_path()?>images/portfolio/work12.jpg" alt="" data-at2x="<?php echo front_template_path()?>images/portfolio/work12.jpg">
						<div class="portfolio-box-text">
							<h3>Ut Labore Print</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>
			-->				
		</div>
	</div>
</div>
</div>
