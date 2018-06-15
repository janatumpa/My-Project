<?php
 '<select>
			
             
                     <?php   $SqlUser = "SELECT * FROM  pro_dev_registration WHERE Role='Vertical lead' ";
                        $ResSqlUser = mysql_query($SqlUser);
                        while($FetchRows = mysql_fetch_array($ResSqlUser))
                         {
                        ?>
                        
                        <option value="<?php echo $FetchRows['Dev_Name']; ?>"><?php echo $FetchRows['Dev_Name']; ?></option>
                        
                         <?php
                        }
                       
                        ?>
						</select>';
                 
?>