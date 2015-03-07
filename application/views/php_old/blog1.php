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
      <td width="22%">Title</td>
      <td width="78%">
      <input type="text" value="" placeholder="Your Title" name="title"/>
      </td>
      </tr>
      
      <tr class= 'row'>
      <td width="22%">Description</td>
      <td width="78%">
      <textarea name="dsc" cols="70" rows="5" placeholder="Your Description"><?=$blog['dsc']?></textarea>
      </td>
      </tr>
      
      <tr class= 'row'>
      <td width="22%">Date added</td>
      <td width="78%">
      <input type="date" value="" name="ps_date"/>
      </td>
      </tr>
      
      <tr class= 'row'>
      <td width="22%">Author</td>
      <td width="78%">
      <input type="text" value="" placeholder="Your author" name="author"/>
      </td>
      </tr>
      
      </table>
      <?
			echo form_fieldset("Leave your comment here");
      echo "<br/>comment<br/>";
			echo form_textarea('content','');
      echo "<br/>by<br/>";
			echo form_input("by","");
      echo "<br/>date<br/>";
			$data=array('type'=>'date','name'=>'date');
			echo form_input($data);
			echo "<br/>$captcha<br/>";
	    echo "captcha code<br/>";
			echo form_input('captcha');
      echo "<br/><br/>";
			echo form_submit('comment','Comment');
			echo form_fieldset_close();
			echo form_close();
			//echo $this->session->userdata('captcha');
		}
?>	
	

</div><!-- end of right content-->
</div>
<?
include("includes/footer.php");
?>