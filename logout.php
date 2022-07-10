<?php  
/** 
 * Created by Shashikant Solanki. 
 * User: Cyborg 9303
 */  
  
session_start();//session is a way to store information (in variables) to be used across multiple pages.  
session_destroy();  
header("Location: index.php");//use for the redirection to some page  
?>  
