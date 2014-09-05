<?php
	function fellowship(){
		if(isset($_POST['submit']))
				{
					
					$title=trim($_POST['title']);
					$content=trim($_POST['content']);
					$date=date("Y/m/d g:i:s a");
					if(!$title || !$content){
						echo '<P class="text-error pull-left offset1" style="text-decoration:blink">Fill in the all the fields</p>';					}
					else{
					$query="SELECT  title='$title',content='$content' FROM fellowship WHERE  content='$content'";
					if($qry_run=mysql_query($query)){
						if(mysql_num_rows($qry_run)==0){
							$qry = mysql_query("INSERT INTO fellowship(title, content, date)VALUES('$title', '$content', '$date')");
							if($qry){
							echo '<p class="" align="center">Post successfully submitted</p>';					
							}
							else { '<p class="" align="center">Post not submitted, try again</p>'; }
						}
						else{ echo 'Try again';}
					}
					
					else{ echo 'Message already submitted';}
					
					}
				}
		}
		
		
		function news(){
			
			
		}
		 
		
?>