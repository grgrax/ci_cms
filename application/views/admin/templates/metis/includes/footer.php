</div>
<!-- end #content -->
</div><!-- /#wrap -->
<div id="footer">
  <p>2013 &copy; Metis Admin</p>
</div>
<!-- #helpModal -->
<div id="helpModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --><!-- /#helpModal -->
<script src="<?=admin_template_asset_path()?>/assets/lib/jquery.min.js"></script>
<script src="<?=admin_template_asset_path()?>/assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=admin_template_asset_path()?>/assets/js/main.js"></script>

<?php 
switch (uri_string()) {
  case 'filemanager':{
    ?>
    <script src="<?=admin_template_asset_path()?>/assets/lib/jquery-ui.min.js"></script>
    <script src="<?=admin_template_asset_path()?>/assets/lib/elfinder/js/elfinder.min.js"></script>
    <script>
      $(function() {
        metisFile();
      });
    </script>
    <?php 
    break;
  } 
  default:{
    ?>
    <script src="<?=admin_template_asset_path()?>/assets/lib/jquery-ui.min.js"></script> 
    <script src="<?=admin_template_asset_path()?>/assets/lib/fullcalendar/fullcalendar.min.js"></script>
    <script>
      $(function() {
        dashboard();
      });
    </script>
    <?php
    break;
  }
}
?>
</body>
</html>