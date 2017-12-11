<html>

<head>
    <title>Tableau</title>
</head>

<body>


<?php
session_start();
if($_SESSION['$log']){




?>
 <?php
 $tab=array(array('024','ndeye amy','21'),array('025','pape','22'),array('026','maguette','23'));
 echo'<table border="2" width="800" height="300">';
 echo'<tr bgcolor="gray">';
 echo'<th> CODE </th>';
echo'<th> NOM </th>';
echo'<th> AGE </th>';
echo'<th> EDITER </th>';
echo'</tr>';
echo'<tr>';
 
 foreach($tab as $val){
    foreach($val as $v){
        echo'<td>'.$v.'<br>';
      
    }
    echo'</td>';
    echo'<td><a href="reponse.php?code='.$val[0].'&amp;nom='.$val[1].'&amp;age='.$val[2].'"><input type="submit" value="EDITER"></a></td>';
    echo'</tr>';
    
}
else{
    echo "vous avez pas le droit d'entrer.";

}
?>

</body>
</html>