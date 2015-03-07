<div class="span2 main-menu-span">
    <div class="well nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li class="nav-header hidden-tablet">Main</li>
            <li><a href="<?=base_url()?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
            <?php if(permission_permit(['administrator-menu'])){?>
            <li><a href="<?=base_url()?>menu">Menus</a></li>
            <?php } ?>

            <?php if(permission_permit(['administrator-category'])){?>
            <li><a href="<?=base_url()?>category">Categories</a></li>
            <?php } ?>
            <?php if(permission_permit(['administrator-testimonial'])){?>
            <li><a href="<?=base_url()?>testimonial">Testinomials</a></li>
            <?php } ?>
            <li><a href="<?=base_url()?>page">Pages</a></li>
            <?php if(permission_permit(['administrator-user'])){?>            
            <li><a href="<?=base_url()?>user">User</a></li>
            <?php } ?>
            <li><a href="<?=base_url()?>group">Group</a></li>
            <li><a href="<?=base_url()?>group/permission">Permission</a></li>
            <li><a href="<?=base_url()?>sample">sample module</a></li>
            <li><a href="<?=base_url()?>filemanager">File Manager</a></li>

            <li><a class="ajax-link" href="index.html"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
            <li><a class="ajax-link" href="<?=admin_template_asset_path()?>/ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
            <li><a class="ajax-link" href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
            <li><a class="ajax-link" href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
            <li><a class="ajax-link" href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
            <li><a class="ajax-link" href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
            <li class="nav-header hidden-tablet">Sample Section</li>
            <li><a class="ajax-link" href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
            <li><a class="ajax-link" href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
            <li><a class="ajax-link" href="grid.html"><i class="icon-th"></i><span class="hidden-tablet"> Grid</span></a></li>
            <li><a class="ajax-link" href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
            <li><a href="tour.html"><i class="icon-globe"></i><span class="hidden-tablet"> Tour</span></a></li>
            <li><a class="ajax-link" href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
            <li><a href="error.html"><i class="icon-ban-circle"></i><span class="hidden-tablet"> Error Page</span></a></li>
            <li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
        </ul>
        <label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
    </div><!--/.well -->
</div><!--/span-->

