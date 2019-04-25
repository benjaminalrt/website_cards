<?php
function est_page($adresse, $nom)
{
    $temp2=$_SERVER['PHP_SELF'];
    $reg = '#^(.+[\\\/])*([^\\\/]+)$#';
    $temp=preg_replace($reg, '$2', $temp2);
    if($adresse == $temp)
    {
        echo '<li><a href='.$adresse.'><strong>'.$nom.'</strong></a></li>';
    }
    else
    {
        echo '<li><a href='.$adresse.'>'.$nom.'</a></li>';
    }
}
?>