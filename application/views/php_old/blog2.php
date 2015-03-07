<?
include("includes/header.php");
?>
<div class="center_content">
<?
include("includes/sidebar.php");
$link=base_url()."blogs/";
?>
<div class="right_content">
<h2> Add Comments</h2>

<?
	if(!empty($blog))
		{
			$link=base_url()."blogs/";
			?>
      <h2><?=$blog['title']?></h2>
      <p><?=$blog['dsc']?><p>
      <h3>comments</h3>
      <hr/>
      <?
			if(count($comments)>0)
				{
//					print_r($comments);
					echo "<ul>";
					foreach($comments as $comment)
						{
							?>
              <li><?=$comment['comment']?>
              <font color="blue"> 
              <br/> by --- <?=$comment['by']?> 
              <br/> at --- <?=$comment['date']?>
              </font>
              </li>
              <?
						}
					echo "</ul>";
				}
			else 
				{
      		?><h4>No comments</h4><?
				}
			?>
      <p><p>
      <?
			echo form_open($link."add_comment/".$blog['id']);
			?>
      <table>
      <tr class= 'row'>
      <td width="22%">comment</td>
      <td width="78%">
			<?=form_textarea('content','')?> 
      </td>
      </tr>
      
      <tr class= 'row'>
      <td width="22%">by</td>
      <td width="78%">
			<?=form_input('by','')?> 
      </td>
      </tr>
      
      <tr class= 'row'>
      <td width="22%">Date</td>
      <td width="78%">
			<?
            $data=array('type'=>'date','name'=>'date');
            echo form_input($data);
      ?>
      </td>
      </tr>
      
      <tr class= 'row'>
      <td width="22%">captcha code 
      </td>
      <td width="78%">
      <?=$captcha?>
      <?=$word?>
			<br/>
      </td>
      </tr>

      <tr class= 'row'>
      <td width="22%">
      </td>
      <td width="78%">
      <?=form_input('captcha')?>
			<br/>
      </td>
      </tr>
      
      </table>
      <input type="submit" name="upd" value="SAVE"/>
      </form>

<?
			echo $this->session->userdata('captcha');

     }
?>	
	

</div><!-- end of right content-->
</div>
<?
include("includes/footer.php");
?>