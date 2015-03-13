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
<script src="<?=admin_template_asset_path()?>/assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=admin_template_asset_path()?>/assets/js/main.js"></script>
<script src="<?=admin_template_asset_path()?>/assets/lib/jquery-ui.min.js"></script>

<?php 
echo uri_string();
switch (uri_string()) {
  case 'filemanager':{
    ?>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?=admin_template_asset_path()?>/assets/lib/elfinder/js/elfinder.min.js"></script>
    <script>
      $(function() {
        metisFile();
      });
    </script>
    <?php 
    break;
  } 
  case 'category/add':{
    ?>
    <script src="<?=admin_template_asset_path()?>/assets/lib/wysihtml5/lib/js/wysihtml5-0.3.0.min.js"></script>
    <script src="<?=admin_template_asset_path()?>/assets/lib/bootstrap-wysihtml5-hack.js"></script>
    <script src="<?=admin_template_asset_path()?>/assets/lib/pagedown-bootstrap/Markdown.Converter.js"></script>
    <script src="<?=admin_template_asset_path()?>/assets/lib/pagedown-bootstrap/Markdown.Sanitizer.js"></script>
    <script src="<?=admin_template_asset_path()?>/assets/lib/Markdown.Editor-hack.js"></script>
    <script>
      $(function() {
        formWysiwyg();
      });
    </script>
    <script src="<?=base_url()?>/assets/ckeditor/ckeditor.js"></script>
    <script>
      CKEDITOR.replace( 'ckeditor', {
        customConfig: 'web/custom/custom_config.js'
      } );
    </script>
    <?php
    break;
  }
  case 'menu/order':{
    ?>
    <?php
    break;
  }
  default:{
    ?>
    <script src="<?=admin_template_asset_path()?>/assets/lib/jquery-ui.min.js"></script> 
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