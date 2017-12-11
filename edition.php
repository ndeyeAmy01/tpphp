<?php

 $nom = $_GET['nom'];
 $code = $_GET['code'];
 $age = $_GET['age']; 

?>


 <form action="donnees.php" method="get">
 <table width="100px" border: solid 1px>
 <tbody>
 <tr>
         <label for="">code</label>
         <?php echo ' <input type="text" value = " '.$code. ' " name="code">'; ?>
     
</tr>
<tr>
         <label for="">name</label>
         <?php echo ' <input type="text" value = " '.$nom. ' " name="nom">'; ?>
    
</tr>
<tr>
         <label for="">age</label>
         <?php echo ' <input type="text" value = " '.$age. ' " name="age">'; ?>
    
</tr>
 </tbody>
 <tfoot>
     <input type="submit" value="Modifier">
 </tfoot>
</table>  
</form>