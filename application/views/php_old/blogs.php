<?
include("includes/header.php");
?>
<div class="center_content">
<?
include("includes/sidebar.php");
$link=base_url()."blogs/";
?>
<div class="right_content">
<h2> Blogs List </h2>
<table>
   <thead>
   <tr>
    <th>sno</th>
    <th>title</th>
    <th>desc</th>
    <th>date added</th>
    <th>author</th>
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
              <?=$row['title']?>
              </a>
							</td>
              <td><?=$row['dsc']?></td>
              <td><?=$row['ps_date']?></td>
              <td><?=$row['author']?></td>
              <td><a href="<?=$link?>edit/<?=$row['id']?>" />edit </a></td>
              <td><a href="<?=$link?>remove/<?=$row['id']?>" class="td_delete"  
              onclick="return confirm('sure want to delete')"/>Delete </a></td>    
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
</div>
<!-- end of right content-->
</div>
<?
include("includes/footer.php");
?>
              