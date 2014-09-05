 
<!doctype html>
<html lang="en-us">
    <head>
    
        <meta charset="utf-8">
        <title>Massitti Designs</title>
        
        <link href="../massitti/bootstrap.css" media="all" rel="stylesheet" type="text/css">
        <link href="../massitti/font-awesome.css" media="all" rel="stylesheet" type="text/css">
        
        
    
     </head>
    <body>
    <div class="container">
      <hr />
    
    	<div class="section" id="example">
           <div class="row">
           		<script type="text/javascript">
					$(document).ready(function(e) {
						$("#Submit").click(function(){
							var name=$("#name_txt").val();
							var category=$("#category_txt").val();
							var description=$("#desc_txt").val();
							var imagepath=$("#image_txt").val();
							
							if(name!="" && category!="" && description!=""){
								$("#msg").load("image_exec.php",{
													"name":name,
													"category":category,
													"description":description,
													"image":imagepath
								});	
								
							}	
							else
								$("#msg").text("Check and correct your inputs");
						});
					});
				</script>
           		<?php
					function textbox($id,$size,$placeholder)
					{
						 $a='<input type="text" class="span3" id='.$id.' size="'.$size.'"  placeholder="'.$placeholder.'" />';
						return $a;
					}
					
				?>
            
            <div class="span5">
                <h4>Massitti Upload images</h4>
                <form class="form-actions" method="post" enctype="multipart/form-data" action="imageexec.php">
                    
                    <div><?php echo textbox('name_txt',50, 'Name');?></div>
                    
                    <div>
                        <select id="category_txt" class="span3">
                            <option>Select category</option>
                            <option>WaterfallFountain</option>
                            <option>Gardens</option>
                            <option>Wallart</option>
                            <option>Paintings</option>
                            <option>Waterbodies</option>
                            <option>Landscapes</option>
                            <option>Sculptures</option>
                            <option>SwimmingPools</option>
                            <option>Rockdesigns</option>
                            <option>Basticks</option>
                            <option>Pavings</option>
                            <option>Jewery</option>
                            <option>Illustrations</option>
                            <option>3Ddrawings</option>
                            <option>Construction</option>
                        </select>
                    </div>
                    
                    <div><textarea name="caption" id="desc_text" type="text" class="span3" placeholder="Description"></textarea></div>
                                   
                    <div><input type="file" id="image_txt" name="imagepath" class="btn span3" style="width:245px;"></div>
                    <br/>
                    
                    <div>
                        <input type="reset" value="Reset" class= "btn btn-inverse" style="width:120px;"/>  
                        <input type="submit" name="Submit" value="Upload"  class="btn btn-primary"  style="width:145px;"/>          
                    </div>
                    
                 </form>
                 
                 
                
              
        
            </div>
          </div>
    			
   
    </div>
    
    </body>
</html>