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
<table>
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
		echo "<h3>Calender Events</h3> ";
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
.calendar_tbl {
	margin:0px;
	width:70%;
	text-align: center;
	border-bottom: thin dashed #C09;
	padding-bottom:20px;
	margin-bottom:10px;
}
.calendar_tbl tr{
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #CCCCCC;
}
.calendar_tbl th {
	font-weight:normal;
	padding:8px;
	line-height:12px;
	font-size:12px;
	border-right:1px solid #fff;
	background-color:#16836D;
	color:green;
	border-radius:5px;
	text-transform:capitalize;
}
.calendar_tbl td {
	padding:10px;
	border: 1px solid #fff;
	color: green;
	text-align: center;
	font-size:11px;
	font-weight:normal;
}
tr.week_row td{
	font-size:12px;
	color:green;
	font-weight:bold;
}
.calendar_tbl th, .calendar_tbl th a{
	color: white;
}
.highlight{
	background-color:#9C0;
	color:white;
}
</style>
              