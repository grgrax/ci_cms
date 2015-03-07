<div class="panel panel-default">
    <div class="panel-heading">Menus</div>
    <div class="panel-body">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="center">s.no</th>
                    <th>name</th>
                    <th>parent menu</th>
                    <th>type</th>
                    <th>content</th>
                    <th>status</th>
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
                        switch($row['status']){
                            case $menu_m::PENDING:
                            {
                                $alertClass="";
                                if(permission_permit(array('activate-menu'))) 
                                    $actions=array('activate');
                                break;
                            }
                            case $menu_m::ACTIVE:
                            {
                                $alertClass="";
                                if(permission_permit(array('block-menu'))) 
                                    $actions[]='block';
                                if(permission_permit(array('delete-menu'))) 
                                    $actions[]='delete';
                                break;
                            }
                            case $menu_m::BLOCKED:
                            {
                                $alertClass="warning";
                                if(permission_permit(array('activate-menu'))) 
                                    $actions[]='activate';
                                if(permission_permit(array('delete-menu'))) 
                                    $actions[]='delete';
                                break;
                            }
                            case $menu_m::DELETED:
                            {
                                $alertClass="danger";
                                if(permission_permit(array('activate-menu'))) 
                                    $actions=array('activate');
                                break;
                            }
                        }
                        ?>
                        <tr class="<?php echo $alertClass?>">
                            <td class="center"><?php echo $c?></td>
                            <td>
                                <a href="<?= $link ?>edit/<?= $row['slug'] ?>"/><?= word_limiter(convert_accented_characters($row['name']), 5) ?></a>
                            </td>
                            <td><?php echo $row['parent_id']?$menu_m->get_parent_name($row['parent_id']):'---';?></td>
                            <td>
                            <?php echo $page_types_m->read_row($row['page_type_id'])['name']?></td>
                            <td>
                            <?
                            if(isset($row['article_id']) && $row['article_id']){
                                echo "a".$row['article_id'];
                            }
                            else if(isset($row['category_id']) && $row['category_id']){
                                echo $category_m->read_row($row['category_id'])['name'];
                            }
                            ?>
                            </td>
                            <td><?php echo menu_m::status($row['status']);?></td>
                            <td>
                                <?php if(permission_permit(array('edit-menu'))) { ?>
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
        <?php if(permission_permit(array('add-menu'))){?>
        <a href="<?= $link ?>add" class="btn btn-primary"/>Add New  </a>
        <?php } ?>
        <?php if(permission_permit(array('add-menu'))){?>
            <a href="<?= $link ?>order" class="btn btn-primary"/>Order menus</a>
        <?php } ?>
        <ul class="pagination">
            <? if (!empty($menus)) echo $menus; ?>
        </ul>
    </div>
</div>

