<?php 
$CI =& get_instance();
?>
<div class="panel panel-default">
    <div class="panel-heading">Menus</div>
    <div class="panel-body table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th width="20%">name</th>
                    <th width="15%">type</th>
                    <th>content</th>
                    <th width="5%">status</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                <?
                if ($rows && count($rows) > 0) {
                    echo GenerateTableRowHTML($rows,$link);
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


<?php 
function GenerateTableRowHTML($row,$link=null,$child=FALSE,$dashes=0)
{
    global $CI;
    if(count($row)){
        $str="<tr>";
        foreach ($row as $child) {
            global $inc;
            $px=$child['level']*2;
            $px .=$px."px";
            $style="padding-left:$px";

            $str .="<td>";
            $str .="</td>". PHP_EOL;

            $str .="<td><p style='".$style."'>";
            $str .=$child['name'];
            $str .="</p></td>". PHP_EOL;
            
            $str .="<td>";
            $str .=$CI->page_types_m->read_row($child['page_type_id'])['name'];
            $str .="</td>". PHP_EOL;

            $str .="<td>";
            if($child['category_id']){
                $category=$CI->category_m->read_row($child['category_id']);
                $str .="Category: ".anchor(base_url('category/edit/'.$category['name']), $category['name']);
                $str .=" --- ";
            }
            if($child['article_id']){
                $article=$CI->article_m->read_row($child['article_id']);
                $str .="Article: ".anchor(base_url('article/edit/'.$article['name']), $article['name']);
            }
            $str .="</td>". PHP_EOL;

            $str .="<td>";
            $str .=menu_m::status($child['status']);
            $str .="</td>". PHP_EOL;

            //action
            $alertClass="";
            $actions=array();
            switch($child['status']){
                case menu_m::PENDING:
                {
                    $alertClass="";
                    if(permission_permit(array('activate-menu'))) 
                        $actions=array('activate');
                    break;
                }
                case menu_m::ACTIVE:
                {
                    $alertClass="";
                    if(permission_permit(array('block-menu'))) 
                        $actions[]='block';
                    if(permission_permit(array('delete-menu'))) 
                        $actions[]='delete';
                    break;
                }
                case menu_m::BLOCKED:
                {
                    $alertClass="warning";
                    if(permission_permit(array('activate-menu'))) 
                        $actions[]='activate';
                    if(permission_permit(array('delete-menu'))) 
                        $actions[]='delete';
                    break;
                }
                case menu_m::DELETED:
                {
                    $alertClass="danger";
                    if(permission_permit(array('activate-menu'))) 
                        $actions=array('activate');
                    break;
                }
            }

            $str .="<td>";
            if(permission_permit(array('edit-menu'))) { 
                $str .=anchor("$link/edit/".$child['slug'], 'Edit', 'attributes');
            }
            foreach ($actions as $k=>$action) { 
                $str .=anchor("$link/$action/".$child['slug'], " / ".$action, 'attributes');
            }
            $str .="</td>". PHP_EOL;
            //action

            if(isset($child['children']) && count($child['children'])){
                $p=10+5+$dashes;
                $dashes=count($child['children']);
                $str .=GenerateTableRowHTML($child['children'],$link,TRUE,$dashes);               
            }
        $str .="</tr>". PHP_EOL;
        }
    }
    return $str;
}
?>