<?
include("includes/header.php");
?>
<div class="center_content">
<?
include("includes/sidebar.php");
$link=base_url()."blogs/";
?>
<div class="right_content">
<h2> Users List </h2>
<?php /*?>Total records<h4> <?=$total_rows?> </h4>
<?php */?><table>
       <thead>
       <tr>
        <th>sno</th>
        <th>id</th>
        <th>pass</th>
        <th colspan="2">action</th>
       </tr>
       </thead>
   <tbody>
	<?
		if(empty($rows))
      {
       		echo "<tr><td colspan=\"6\" class=\"td_no_data\">No data</td></tr>";
      }//end of empty($rows)
		else
			{
				$c=0;
        foreach($rows as $row)
          {
            $c++;
		        ?>		
             <tr>
              <td><?=$c?></td>
              <td>
							<a href="<?=$link?>get/<?=$row['id']?>" />
              <?=$row['id']?>
              </a>
							</td>
              <td>
							<?=$row->pass?>
              </td>
              <td><a href="<?=$link?>edit/<?=$row['id']?>" />edit </a></td>
              <td><a href="<?=$link?>remove/<?=$row['id']?>" class="td_delete"  
              onclick="return confirm('sure want to delete')"/>Delete </a></td>    
             </tr>
             </tr>
             <?
					}//end of for
    	}//end of else
?>
</tbody>
</table>
<?
if(!empty($pages))
	{
		echo "Pages ";
		echo $pages;
	}
	?>
<a href="<?=$link?>add" class="admin-links"/>Add New  </a>

<?
$this->table->set_heading('Id','user','pass','Action');
echo $this->table->generate($rows,anchor('','Edit'),anchor('','Delete'));
?>
</div>
<!-- end of right content-->
</div>
<?
include("includes/footer.php");
?>
              