<div class="panel panel-default">
    <div class="panel-heading">Menus</div>
    <div class="panel-body">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th width="20%">name</th>
                </tr>
            </thead>
            <tbody>
                <?
                if ($rows && count($rows) > 0) {
                    echo GenerateTableRowHTML($rows);
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
function GenerateTableRowHTML($row,$child=FALSE,$dashes=0)
{
    if(count($row)){
        $str="<tr>";
        foreach ($row as $child) {
            global $inc;
            $px=$child['level']*3;
            $px .=$px."px";
            $style="padding-left:$px";
            $str .="<td><div><p style='".$style."'>";
            $str .=$child['name'];
            $str .="</p></div></td>". PHP_EOL;
            $str .="<td>";
            $str .=$child['desc'];
            $str .="</td>". PHP_EOL;
            if(isset($child['children']) && count($child['children'])){
                $p=10+5+$dashes;
                $dashes=count($child['children']);
                $str .=GenerateTableRowHTML($child['children'],TRUE,$dashes);               
            }
        }
        $str .="</tr>". PHP_EOL;
    }
    return $str;
}
function GenerateNavHTML($nav)
{
    $html = '';
    foreach($nav as $page)
    {
        $html .= '<ul><li>';
        $html .= '<a href="' . $page['id'] . '">' . $page['name'] . '</a>';
        $html .= GenerateNavHTML($page['children']);
        $html .= '</li></ul>';
    }
    return $html;
}

// show_pre($rows);
?>
<div id="data">
    <?
    if ($rows && count($rows) > 0) {
        echo GenerateTableRowHTML($row);
    } 
    ?>   
</div>
<style>
    #data div{
        padding: 10px;
        background-color: red;
    }
</style>
<?php
function do_offset($level){
    $offset = "";             // offset for subarry 
    for ($i=1; $i<$level;$i++){
        $offset = $offset . "<td></td>";
    }
    return $offset;
}

function show_array($array, $level, $sub){
    if (is_array($array) == 1){          // check if input is an array
       foreach($array as $key_val => $value) {
           $offset = "";
           if (is_array($value) == 1){   // array is multidimensional
               echo "<tr>";
               $offset = do_offset($level);
               echo $offset . "<td>e" . $key_val . "</td>";
               show_array($value, $level+1, 1);
           }
           else{                        // (sub)array is not multidim
           if ($sub != 1){          // first entry for subarray
               echo "<tr nosub>";
               $offset = do_offset($level);
           }
           $sub = 0;
           echo $offset . "<td main ".$sub." width=\"120\">" . $key_val . 
           "</td><td width=\"120\">" . $value . "</td>"; 
           echo "</tr>\n";
       }
       } //foreach $array
   }  
    else{ // argument $array is not an array
        return;
    }
}

function html_show_array($array){
  echo "<table cellspacing=\"0\" border=\"2\">\n";
  show_array($array, 1, 0);
  echo "</table>\n";
}
// html_show_array($rows);
$a = array(
    'b' => 'b value',
    'c' => 'c value',
    'd' => array(
        'd1' => array(
            'd12' => 'd12 value'
            ),
        'd2' => 'd2 value'
        ),
    'e' => 'e value',
    );
// nestdiv($rows);

function nestdiv($array, $depth = 0) {
    $indent_str = str_repeat(" ", $depth);

    foreach ($array as $key => $val) {
        print "$indent_str<div>\n";
        print "${indent_str}key - $key\n";
        if (is_array($val))
            nestdiv($val, ($depth+1));
        print "$indent_str</div>\n";
    }
}
?>




