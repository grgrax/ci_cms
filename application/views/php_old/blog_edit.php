<?
include("includes/header.php");
?>
<div class="center_content">
<?
include("includes/sidebar.php");
$link=base_url()."blogs/";
?>
<div class="right_content">
<h2> Edit Details </h2>
<?
	if(!empty($blog))
		{
			$link=base_url()."blogs/";
			?>
      <form method="post" action="<?=$link?>edit/<?=$blog['id']?>">
      <table>
      <tr class= 'row'>
      <td width="22%">Title</td>
      <td width="78%">
      <input type="text" value="<?=$blog['title']?>" placeholder="Your Title" name="title"/>
      </td>
      </tr>
      
      <tr class= 'row'>
      <td width="22%">Description</td>
      <td width="78%">
      <textarea name="dsc" cols="70" rows="5"><?=$blog['dsc']?></textarea>
      </td>
      </tr>
      
      <tr class= 'row'>
      <td width="22%">Date added</td>
      <td width="78%">
      <input type="date" value="<?=$blog['ps_date']?>" name="ps_date"/>
      </td>
      </tr>
      
      <tr class= 'row'>
      <td width="22%">Author</td>
      <td width="78%">
      <input type="text" value="<?=$blog['author']?>" placeholder="Your author" name="author"/>
      </td>
      </tr>
      
      </table>
      <input type="submit" name="upd" value="SAVE"/>
      </form>

			<?
		}
?>		


</div>
<!-- end of right content-->
</div>
<?
include("includes/footer.php");
?>
