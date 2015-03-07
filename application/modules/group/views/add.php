<form method="post" action="" enctype="multipart/form-data" class="form-horizontal">
    <div class="panel panel-default">
        <div class="panel-heading">
            <fieldset>
                <legend>Add Group Details</legend>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="group">Parent Group</label>
                        <select name="group" id="input" class="form-control capitalize">
                            <option value="">Select</option>
                            <?php foreach ($groups as $group) {?>
                            <option value="<?php echo $group['id'] ?>"><?php echo $group['name']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input name="name" type="text" class="form-control" placeholder="Name"
                        value="<?php echo set_value('name') ?>">
                    </div>
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea name="desc" class="form-control"
                        placeholder="Description"><?php echo set_value('desc') ?></textarea>
                    </div>
                </div>
                <div class="panel-footer">
                    <input type="submit" name="add" value="Add" class="btn btn-primary"/>
                    <a href="<? //echo $link ?>" class="btn btn-default"/>Cancel</a>
                </div>
            </fieldset>
        </div>
    </form>


    <div class="row-fluid sortable ui-sortable">
        <div class="box span12">
            <div class="box-header well" data-original-title="">
                <h2><i class="icon-edit"></i> Form Elements</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal">
                  <fieldset>
                    <legend>Datepicker, Autocomplete, WYSIWYG</legend>
                    <div class="control-group">
                      <label class="control-label" for="typeahead">Auto complete </label>
                      <div class="controls">
                        <input type="text" class="span6 typeahead" id="typeahead" data-provide="typeahead" data-items="4" data-source="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]">
                        <p class="help-block">Start typing to activate auto complete!</p>
                    </div>
                </div>
                <div class="control-group">
                  <label class="control-label" for="date01">Date input</label>
                  <div class="controls">
                    <input type="text" class="input-xlarge datepicker hasDatepicker" id="date01" value="02/16/12">
                </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="fileInput">File input</label>
              <div class="controls">
                <div class="uploader" id="uniform-fileInput"><input class="input-file uniform_on" id="fileInput" type="file" size="19" style="opacity: 0;"><span class="filename">No file selected</span><span class="action">Choose File</span></div>
            </div>
        </div>          
        <div class="control-group">
          <label class="control-label" for="textarea2">Textarea WYSIWYG</label>
          <div class="controls">
            <div class="cleditorMain" style="width: 500px; height: 250px;"><div class="cleditorToolbar" style="height: 53px;"><div class="cleditorGroup"><div class="cleditorButton" title="Bold"></div><div class="cleditorButton" title="Italic" style="background-position: -24px 50%;"></div><div class="cleditorButton" title="Underline" style="background-position: -48px 50%;"></div><div class="cleditorButton" title="Strikethrough" style="background-color: transparent; background-position: -72px 50%;"></div><div class="cleditorButton" title="Subscript" style="background-position: -96px 50%;"></div><div class="cleditorButton" title="Superscript" style="background-position: -120px 50%;"></div><div class="cleditorDivider"></div></div><div class="cleditorGroup"><div class="cleditorButton" title="Font" style="background-position: -144px 50%;"></div><div class="cleditorButton" title="Font Size" style="background-position: -168px 50%;"></div><div class="cleditorButton" title="Style" style="background-position: -192px 50%;"></div><div class="cleditorDivider"></div></div><div class="cleditorGroup"><div class="cleditorButton" title="Font Color" style="background-color: transparent; background-position: -216px 50%;"></div><div class="cleditorButton" title="Text Highlight Color" style="background-position: -240px 50%;"></div><div class="cleditorButton cleditorDisabled" title="Remove Formatting" style="background-position: -264px 50%;" disabled="disabled"></div><div class="cleditorDivider"></div></div><div class="cleditorGroup"><div class="cleditorButton" title="Bullets" style="background-position: -288px 50%;"></div><div class="cleditorButton" title="Numbering" style="background-position: -312px 50%;"></div><div class="cleditorDivider"></div></div><div class="cleditorGroup"><div class="cleditorButton" title="Outdent" style="background-position: -336px 50%;"></div><div class="cleditorButton" title="Indent" style="background-position: -360px 50%;"></div><div class="cleditorDivider"></div></div><div class="cleditorGroup"><div class="cleditorButton" title="Align Text Left" style="background-position: -384px 50%;"></div><div class="cleditorButton" title="Center" style="background-position: -408px 50%;"></div><div class="cleditorButton" title="Align Text Right" style="background-position: -432px 50%;"></div><div class="cleditorButton" title="Justify" style="background-position: -456px 50%;"></div><div class="cleditorDivider"></div></div><div class="cleditorGroup"><div class="cleditorButton cleditorDisabled" title="Undo" style="background-position: -480px 50%;" disabled="disabled"></div><div class="cleditorButton cleditorDisabled" title="Redo" style="background-position: -504px 50%;" disabled="disabled"></div><div class="cleditorDivider"></div></div><div class="cleditorGroup"><div class="cleditorButton" title="Insert Horizontal Rule" style="background-color: transparent; background-position: -528px 50%;"></div><div class="cleditorButton" title="Insert Image" style="background-position: -552px 50%;"></div><div class="cleditorButton" title="Insert Hyperlink" style="background-position: -576px 50%;"></div><div class="cleditorButton cleditorDisabled" title="Remove Hyperlink" style="background-position: -600px 50%;" disabled="disabled"></div><div class="cleditorDivider"></div></div><div class="cleditorGroup"><div class="cleditorButton cleditorDisabled" title="Cut" style="background-position: -624px 50%;" disabled="disabled"></div><div class="cleditorButton cleditorDisabled" title="Copy" style="background-position: -648px 50%;" disabled="disabled"></div><div class="cleditorButton cleditorDisabled" title="Paste" style="background-position: -672px 50%;" disabled="disabled"></div><div class="cleditorButton" title="Paste as Text" style="background-position: -696px 50%;"></div><div class="cleditorDivider"></div></div><div class="cleditorGroup"><div class="cleditorButton" title="Print" style="background-position: -720px 50%;"></div><div class="cleditorButton" title="Show Source" style="background-position: -744px 50%;"></div></div></div><textarea class="cleditor" id="textarea2" rows="3" style="display: none; width: 500px; height: 197px;"></textarea><iframe frameborder="0" src="javascript:true;" style="width: 500px; height: 197px;"></iframe></div>
        </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn btn-primary">Save changes</button>
      <button type="reset" class="btn">Cancel</button>
  </div>
</fieldset>
</form>   

</div>
</div><!--/span-->

</div>


