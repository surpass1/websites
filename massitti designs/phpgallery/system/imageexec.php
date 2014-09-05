<?php
					include('../../connect.php');
                    if (!isset($_FILES['imagepath']['tmp_name'])) 
					{
                        echo "Select file please";
                    }
					else
					{
                        $file=trim($_FILES['imagepath']['tmp_name']);
                        $image= addslashes(file_get_contents($_FILES['imagepath']['tmp_name']));
                        $image_name= addslashes($_FILES['imagepath']['name']);
                                
                                move_uploaded_file($_FILES["imagepath"]["tmp_name"],"../../photos/" . $_FILES["imagepath"]["name"]);
                                
                                $location="photos/" . trim($_FILES["imagepath"]["name"]);
                                $caption=trim($_POST['caption']);
                                $name=trim($_POST['name']);
								$category=trim($_POST['category']);
                                
                                $save=mysql_query("INSERT INTO photos (name, imagepath, caption, category) VALUES ('$name', '$location','$caption', '$category')");
                                if($save)
                                {
                                    
									header('location: products/view_pro.php');
                                    
                                }
                                else
                                {
                                  echo '<p class="text-warning" Not sub"> Not submitted, please try again and check your internet connection<p>';   
                                }
                                
                                
                                                    
                        }
?>