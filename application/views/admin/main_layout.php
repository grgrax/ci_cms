<?php 
$path=template_asset_path();
require_once($path."/includes/header.php"); 

function template_flash(){
  $CI =& get_instance();
  if($CI->session->flashdata('success')){
    $class="alert-success";
    $message=$CI->session->flashdata('success');
  }
  else if($CI->session->flashdata('error')){
    $class="alert-danger";
    $message=$CI->session->flashdata('error');
  }
}

function template_validation(){
  ?>
  <div class="row">
    <?php if(validation_errors()){ ?>
    <!-- form validation -->
    <br/>
    <div class="alert alert-danger" alert-dismissible>
      <button type="button" class="close" data-dismiss="alert">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
      </button>
      <?php echo validation_errors()?>
    </div>
    <!-- form validation ends -->
    <?php } ?>
    <?php
  }

  ?>

  <?php if(config_item('admin_template')=='default') { ?>
  <!-- template default  -->
  <!-- maincontent starts -->        
  <div class="row">
    <div class="col-lg-12">
      <?php template_flash(); ?>
    </div>
  </div>

  <?php template_validation()?>


  <?php if(isset($class) && isset($message)){ ?>
  <!-- flash message -->
  <br/>
  <div class="alert <?php echo isset($class)?$class:'';?>" alert-dismissible>
    <button type="button" class="close" data-dismiss="alert">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
    </button>
    <?php echo isset($message)?$message:'';?>
  </div>
  <!-- flash message ends-->
  <?php } ?>

  <!-- breadcumrb -->
  <ol class="breadcrumb">
    <?php echo $this->breadcrumb->output();?>
  </ol>    
  <!-- breadcumrb ends -->

  <!-- subview -->
  <?php $this->load->view($subview);?>
  <!-- subview ends -->
</div>
</div>
<!-- maincontent ends --> 
<!-- template default ends -->
<!-- template charisma  ends-->
<?php }?>

<?php if(config_item('admin_template')=='charisma-master') { ?>
<!-- template charisma  starts-->
<!-- breadcumrb -->
<div>
  <ul class="breadcrumb">
    <li>
      <a href="#">Home</a> <span class="divider">/</span>
    </li>
    <li>
      <a href="#">Dashboard</a>
    </li>
  </ul>
</div>
<!-- breadcumrb ends -->
<!-- subview -->
<?php $this->load->view($subview);?>
<!-- subview ends -->
<!-- template charisma  ends-->
<?php }?>


<?php 
require_once($path."/includes/footer.php"); 
?>

