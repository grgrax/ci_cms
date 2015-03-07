    <div class="panel panel-default">
        <div class="panel-heading">Categories</div>
        <div class="panel-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="center">s.no</th>
                        <th>name</th>
                        <th>parent</th>
                        <th width="35%">content</th>
                        <th>image</th>
                        <th>published</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?
                    if ($rows && count($rows) > 0) {
                        $c = $offset;
                        foreach ($rows as $row) {
                            $c++;
                            $alertClass="";
                            $actions=array();
                            switch($row['published']){
                                case $category_m::UNPUBLISHED:
                                {
                                    $alertClass="warning";
                                    if(permission_permit(array('activate-category'))) 
                                        $actions=array('publish');
                                    break;
                                }
                                case $category_m::PUBLISHED:
                                {
                                    $alertClass="";
                                    if(permission_permit(array('block-category'))) 
                                        $actions[]='unpublish';
                                    if(permission_permit(array('delete-category'))) 
                                        $actions[]='delete';
                                    break;
                                }
                            }
                            ?>
                            <tr class="<?php echo $alertClass?>">
                                <td class="center"><?php echo $c?></td>
                                <td>
                                    <a href="<?= $link ?>edit/<?= $row['slug'] ?>"/><?= word_limiter(convert_accented_characters($row['name']), 5) ?></a>
                                </td>
                                <td><?php echo $row['parent_id']?$category_m->get_parent_name($row['parent_id']):'---';?></td>
                                <td><?= word_limiter(convert_accented_characters($row['content']), 5) ?></td>
                                <td>
                                    <?php if($row['image']!="") { ?>
                                    <img src="<?php echo is_picture_exists($category_m::file_path.$row['image']);?>" 
                                    class="img-responsive" width="70" height="30" title=<?php echo $row['image_title']?$row['image_title']:''?>>
                                    <?php } ?>
                                </td>
                                <td><?php echo $row['published']==1?"yes":'no';?></td>
                                <td>
                                    <?php if(permission_permit(array('edit-category'))) { ?>
                                    <a href="<?= $link ?>edit/<?= $row['slug'] ?>"/>Edit </a>
                                    <?php if(count($actions)>0) echo "/" ?>
                                    <?php } ?>
                                    <?php foreach ($actions as $k=>$action) { ?>
                                    <a href="<?= $link ?><?= $action ?>/<?= $row['slug'] ?>"/> <?php if($k>0) echo "/"; ?> <?php echo $action?> </a>
                                    <?php } ?>
                                </td>
                            </tr>
                            <?
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="7" class="td_no_data">No data</td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="panel-footer">
            <?php if(permission_permit(array('add-category'))){?>
            <a href="<?= $link ?>add" class="btn btn-primary"/>Add New  </a>
            <?php } ?>
            <ul class="pagination">
                <? if (!empty($pages)) echo $pages; ?>
            </ul>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <header>
                    <h5>Dynamic Table</h5>
                </header>
                <div id="collapse4" class="body">
                    <div id="dataTable_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="pull-right"><div id="dataTable_length" class="dataTables_length"><label>Show <select size="1" name="dataTable_length" aria-controls="dataTable"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><table id="dataTable" class="table table-bordered table-condensed table-hover table-striped dataTable">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 172px;">Rendering engine</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 213px;">Browser</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 193px;">Platform(s)</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 147px;">Engine version</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 106px;">CSS grade</th></tr>
                        </thead>

                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                            <tr class="odd">
                                <td class=" sorting_1">Gecko</td>
                                <td class=" ">Firefox 1.0</td>
                                <td class=" ">Win 98+ / OSX.2+</td>
                                <td class=" ">1.7</td>
                                <td class=" ">A</td>
                            </tr>
                            <tr class="even">
                                <td class=" sorting_1">Gecko</td>
                                <td class=" ">Firefox 1.5</td>
                                <td class=" ">Win 98+ / OSX.2+</td>
                                <td class=" ">1.8</td>
                                <td class=" ">A</td>
                            </tr>
                            <tr class="odd">
                                <td class=" sorting_1">Gecko</td>
                                <td class=" ">Firefox 2.0</td>
                                <td class=" ">Win 98+ / OSX.2+</td>
                                <td class=" ">1.8</td>
                                <td class=" ">A</td>
                            </tr>
                            <tr class="even">
                                <td class=" sorting_1">Gecko</td>
                                <td class=" ">Firefox 3.0</td>
                                <td class=" ">Win 2k+ / OSX.3+</td>
                                <td class=" ">1.9</td>
                                <td class=" ">A</td>
                            </tr>
                            <tr class="odd">
                                <td class=" sorting_1">Gecko</td>
                                <td class=" ">Camino 1.0</td>
                                <td class=" ">OSX.2+</td>
                                <td class=" ">1.8</td>
                                <td class=" ">A</td>
                            </tr>
                            <tr class="even">
                                <td class=" sorting_1">Gecko</td>
                                <td class=" ">Camino 1.5</td>
                                <td class=" ">OSX.3+</td>
                                <td class=" ">1.8</td>
                                <td class=" ">A</td>
                            </tr>
                            <tr class="odd">
                                <td class=" sorting_1">Gecko</td>
                                <td class=" ">Netscape 7.2</td>
                                <td class=" ">Win 95+ / Mac OS 8.6-9.2</td>
                                <td class=" ">1.7</td>
                                <td class=" ">A</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="dataTables_filter" id="dataTable_filter">
                                <label>
                                    Search: 
                                    <input type="text" aria-controls="dataTable">
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="dataTables_paginate paging_bootstrap">
                                <ul class="pagination">
                                    <li class="prev disabled"><a href="#">← Previous</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li class="next"><a href="#">Next → </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>