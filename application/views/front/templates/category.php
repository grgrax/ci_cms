<h2><?php echo $category['name']?></h2>
<!-- news -->
<? if(isset($articles) && count($articles)) { ?>
<? foreach ($articles as $article) { ?>
<div class="span12 category_article" id="news">
	<div class="blog-item well" id="category_article_inner">
		<h3><?php echo $article['name']?></h3>
		<div class="blog-meta clearfix">
			<p class="pull-left">
				<i class="icon-calendar"></i> <?php echo format($article['created_at'])?>
			</p>
		</div>
		<p><img src="<?php echo $article['image']?$article['image']:'images/sample/blog1.jpg'?>" width="100%" alt="" class="news"></p>
		<?php echo $article['content']?>
	</div>
</div>
<? } ?>
<? } ?>
<!-- news -->


