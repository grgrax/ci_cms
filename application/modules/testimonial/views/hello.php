<div class="panel panel-default">
	<div class="panel-heading"><?php echo $heading ?></div>
	<div class="panel-body">
		<p>body</p>
		<?php 		
		//echo if inside view
		// echo modules::run('module01/controller01/method00');   //no trailing slash!
		echo modules::run('sample/ok');   //no trailing slash!
		?>
	</div>
	<div class="panel-footer">
		<div class="table-footer">
			footer
		</div>
	</div>
</div>

