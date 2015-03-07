<?
include("includes/header.php");
?>
<div class="center_content">
<?
include("includes/sidebar.php");
$link=base_url()."events/";
?>
<div class="right_content">
<h2> Events List </h2>
<table class=".admin_table">
       <thead>
       <tr>
        <th>sno</th>
        <th>Title</th>
        <th>Venue</th>
        <th>Date</th>
        <th>By</th>
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
			  <h3><?=strtoupper($row['title'])?></h3>
			  <p><?=$row['dsc']?></p>
			  </td>
              <td><?=$row['date']?></td>
              <td><?=$row['venue']?></td>
              <td><?=$row['by']?></td>
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
if(!empty($calendar_events))
	{
		echo "calendar_events ";
		echo $calendar_events;
	}
	?>
<a href="<?=$link?>add" class="admin-links"/>Add New  </a>
</div>
<!-- end of right content-->
</div>
<?
include("includes/footer.php");
?>
<style>
.admin_table {
	margin:0px;
	width:100%;
	text-align: left;
	border-bottom: thin dashed #C09;
	padding-bottom:20px;
	margin-bottom:10px;
}
.admin_table tr{
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #CCCCCC;
}
.admin_table th {
	font-weight:normal;
	padding:8px;
	line-height:12px;
	font-size:12px;
	border-right:1px solid #fff;
	background-color:#666;
	color:#FFF;
	border-radius:5px;
	text-transform:capitalize;
}
.admin_table th..admin_table-sor.admin_table:hover{
color:#000;
cursor:pointer;
}
.admin_table td {
	padding:6px;
	background: #ecf8fd;
	border-right: 1px solid #fff;
	color: #669;
	text-align:left;
	font-size:11px;
	font-weight:normal;
}
.admin_table td.center{
	text-align:center;
}
.admin_table tbody tr:hover td {
	background-color: #E8F2F7;
}
.admin_table tbody td a.title-links{
color:#060;
}
.admin_table tbody td a.title-links:hover{
color:#F60;
}

table {
	margin:0px;
	width:70%;
	text-align: center;
	border-bottom: thin dashed #C09;
	padding-bottom:2px;
	margin-bottom:1px;
}
table tr{
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #CCCCCC;
}
table th {
	font-weight:normal;
	padding:8px;
	line-height:12px;
	font-size:12px;
	border-right:1px solid #fff;
	color:#FFF;
	border-radius:5px;
	text-transform:capitalize;
	background-color:none;
	
}
table td {
	padding:6px;
	border-right: 1px solid #fff;
	color: #669;
	text-align:left;
	font-size:11px;
	font-weight:normal;
}
table td.invisible{
color:#ecf8fd;
text-indent:-40000px;
}
table td.center{
	text-align:center;
}
table tbody tr:hover td {
	background-color: #E8F2F7;
}
table tbody td a.title-links{
color:#060;
}
table tbody td a.title-links:hover{
color:#F60;
}


</style>
              