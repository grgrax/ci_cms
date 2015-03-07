<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<div class="row">
	<div class="col-lg-12">
		<?php
		if($this->session->flashdata('success')){
			$class="alert-success";
			$message=$this->session->flashdata('success');
		}
		else if($this->session->flashdata('error')){
			$class="alert-danger";
			$message=$this->session->flashdata('error');
		}
		?>
		<?php if(validation_errors()){ ?>
		<!-- form validation -->
		<div class="row"><br/>      
			<div class="alert alert-danger" alert-dismissible>
				<button type="button" class="close" data-dismiss="alert">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<?php echo validation_errors()?>
			</div>
		</div>
		<!-- form validation ends -->
		<?php } ?>
		<?php if(isset($class) && isset($message)){ ?>
		<!-- flash message -->
		<div class="row"><br/>      
			<div class="alert <?php echo isset($class)?$class:'';?>" alert-dismissible>
				<button type="button" class="close" data-dismiss="alert">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<?php echo isset($message)?$message:'';?>
			</div>
		</div>
		<!-- flash message ends-->
		<?php } ?>
		<!-- subview -->
		<div class="row">
			<!-- <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a> -->
			<div class="modal fade" id="modal-id" data-backdrop="static">
				<div class="modal-dialog">
					<div class="modal-content">
						<form action="<?php echo base_url()."auth/login";?>" method="POST" role="form">
							<div class="modal-header">
								<!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->								
								<h4 class="modal-title">Admin Panel</h4>
							</div>
							<div class="modal-body">
								<legend>Welcome to Login Section</legend>							
								<div class="form-group">
									<label for="username">Username/Email</label>
									<input name="username" type="text" class="form-control" id="" placeholder="Username/Email Here" value="ramesh">
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input name="password" type="password" class="form-control" id="" placeholder="Password Here" value="ramesh">
								</div>
							</div>
							<div class="modal-footer">
								<input type="submit" class="btn btn-primary" value="Login"/>
							</div>
						</form>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>
		<!-- subview ends -->

	</div>
</div>
<!-- Core Scripts - Include with every page -->
<script src="<?=base_url()?>assets/js/jquery-1.10.2.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script type="text/javascript">
	$(function(){
		console.log("im in");
		$('#modal-id').modal({keyboard:false});
	})
</script>
