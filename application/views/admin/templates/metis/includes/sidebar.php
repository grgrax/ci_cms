<div id="left">
  <div class="media user-media">
    <div class="user-media-toggleHover">
      <span class="fa fa-user"></span> 
    </div>
  </div>

  <!-- #menu -->
  <ul id="menu" class="">
    <?php if(permission_permit(['administrator-menu'])){?>
    <li>
      <a href="<?=base_url()?>menu">Menu</a>
    </li>
    <?php } ?>

    <?php if(permission_permit(['administrator-category'])){?>
    <li>
      <a href="<?=base_url()?>category">Categories</a>
    </li>
    <?php } ?>
    <?php if(permission_permit(['administrator-article'])){?>
    <li>
      <a href="<?=base_url()?>article">Articles</a>
    </li>
    <?php } ?>
    <?php if(permission_permit(['administrator-testimonial'])){?>
    <li>
      <a href="<?=base_url()?>testimonial">Testinomials</a>
    </li>
    <?php } ?>
    <?php if(permission_permit(['administrator-user'])){?>            
    <li>
      <a href="<?=base_url()?>user">User</a>
    </li>
    <?php } ?>
    <li>
      <a href="<?=base_url()?>group">Group</a>
    </li>
    <li>
      <a href="<?=base_url()?>group/permission">Permission</a>
    </li>


  </ul><!-- /#menu -->
</div>