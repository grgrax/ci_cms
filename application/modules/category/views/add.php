<form method="post" action="" enctype="multipart/form-data">
    <div class="panel panel-default">
        <div class="panel-heading">Add category Details</div>
        <div class="panel-body">
            <div class="form-group">
                <label for="parent_id">Parent category</label>
                <select name="parent_id" id="input" class="form-control capitalize">
                    <option value="">Select</option>
                    <?php foreach ($rows as $row) {?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['name']?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control" placeholder="category name here"
                value="<?php echo set_value('name') ?>">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" class="form-control tinymce" 
                placeholder="category content here"><?php echo set_value('content'); ?></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input name="image" type="file" class="form-input">
            </div>
            <div class="form-group">
                <label for="image_title">Image title</label>
                <input name="image_title" type="text" class="form-control" placeholder="Image title here"
                value="<?php echo set_value('image_title') ?>">
            </div>
            <div class="form-group">
                <label for="url">URL</label>
                <input name="url" type="text" class="form-control" placeholder="url here"
                value="<?php echo set_value('url') ?>">
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="box">
                  <header>
                    <div class="icons">
                      <i class="fa fa-th-large"></i>
                  </div>
                  <h5>WYSIWYG Editor</h5>
                  <ul class="nav pull-right">
                      <li>
                        <div class="btn-group">
                          <a class="accordion-toggle btn btn-default btn-xs minimize-box" data-toggle="collapse" href="#cleditorDiv">
                            <i class="fa fa-minus"></i>
                        </a> 
                        <button class="btn btn-xs btn-danger close-box">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </li>
            </ul>
        </header>
        <div id="cleditorDiv" class="body collapse in">
            <form>
              <textarea id="cleditor" class="form-control"></textarea>
              <div class="form-actions no-margin-bottom" id="cleditorForm">
                <input type="submit" value="Submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
</div><!-- /.col-lg-12 -->

</div>
<div class="panel-footer">
    <input type="submit" name="add" value="Add" class="btn btn-primary"/>
    <a href="<? echo $link ?>" class="btn btn-default"/>Cancel</a>
</div>
</div>
</form>


<div id="content">
    <div class="outer">
      <div class="inner">
        <style>
          ul.wysihtml5-toolbar > li {
            position: relative;
        }
    </style>
    <div class="row">
      <div class="col-lg-12">
        <div class="box">
          <header>
            <div class="icons">
              <i class="fa fa-th-large"></i>
          </div>
          <h5>Basic Editor</h5>
          <ul class="nav pull-right">
              <li>
                <div class="btn-group">
                  <a class="accordion-toggle btn btn-default btn-xs minimize-box" data-toggle="collapse" href="#div-1">
                    <i class="fa fa-minus"></i>
                </a> 
                <button class="btn btn-danger btn-xs close-box">
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </li>
    </ul>
</header>
<div id="div-1" class="body collapse in">
    <form>
      <textarea id="wysihtml5" class="form-control" rows="10"></textarea>
      <div class="form-actions">
        <input type="submit" value="Submit" class="btn btn-primary">
    </div>
</form>
</div>
</div>
</div><!-- /.col-lg-12 -->
</div><!-- /.row -->
<div class="row">
  <div class="col-lg-12">
    <div class="box">
      <header>
        <div class="icons">
          <i class="fa fa-th-large"></i>
      </div>
      <h5>WYSIWYG Editor</h5>
      <ul class="nav pull-right">
          <li>
            <div class="btn-group">
              <a class="accordion-toggle btn btn-default btn-xs minimize-box" data-toggle="collapse" href="#cleditorDiv">
                <i class="fa fa-minus"></i>
            </a> 
            <button class="btn btn-xs btn-danger close-box">
                <i class="fa fa-times"></i>
            </button>
        </div>
    </li>
</ul>
</header>
<div id="cleditorDiv" class="body collapse in">
    <form>
      <textarea id="cleditor" class="form-control"></textarea>
      <div class="form-actions no-margin-bottom" id="cleditorForm">
        <input type="submit" value="Submit" class="btn btn-primary">
    </div>
</form>
</div>
</div>
</div><!-- /.col-lg-12 -->
</div><!-- /.row -->
<div class="row">
  <div class="col-lg-12">
    <div class="box">
      <header>
        <h5>Markdown Editor</h5>
        <ul class="nav nav-tabs pull-right">
          <li class="active">
            <a href="#markdown" data-toggle="tab">Markdown</a> 
        </li>
        <li> <a href="#preview" data-toggle="tab">Preview</a>  </li>
    </ul>
</header>
<div id="div-3" class="body tab-content">
    <div class="tab-pane fade active in" id="markdown">
      <div class="wmd-panel">
        <div id="wmd-button-bar" class="btn-toolbar"></div>
        <textarea class="form-control wmd-input" rows="10" name="description" id="wmd-input">
        </textarea>
    </div>
</div>
<div class="tab-pane fade" id="preview">
  <div id="wmd-preview" class="wmd-panel wmd-preview"></div>
</div>
</div>
</div>
</div><!-- /.col-lg-12 -->
</div><!-- /.row -->
<div class="row">
  <div class="col-md-12">
    <div class="box">
      <header>
        <div class="icons">
          <i class="fa fa-edit"></i>
      </div>
      <h5>epiceditor</h5>
      <ul class="nav pull-right">
          <li>
            <div class="btn-group">
              <a class="accordion-toggle btn btn-default btn-xs minimize-box" data-toggle="collapse" href="#cleditorDiv">
                <i class="fa fa-minus"></i>
            </a> 
            <button class="btn btn-xs btn-danger close-box">
                <i class="fa fa-times"></i>
            </button>
        </div>
    </li>
</ul>
</header>
<div id="epiceditorDiv" class="body collapse in">
    <div id="epiceditor">
      <textarea id="my-edit-area"></textarea>
  </div><!-- /#epiceditor -->
</div><!-- /#epiceditorDiv.body collapse in -->
</div><!-- /.box -->
</div><!-- /.col-md-12 -->
</div><!-- /.row -->
</div>

<!-- end .inner -->
</div>

<!-- end .outer -->
</div>
