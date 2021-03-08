<?php
   $numUnites=$_POST['num_units'];
   if($numUnites>500)
      $bill=$numUnites*7.50;
   elseif($numUnites>400)
       $bill=$numUnites*6.70;
   elseif($numUnites>350)
       $bill=$numUnites*6.50;
    elseif($numUnites>300)
       $bill=$numUnites*6.20;
    elseif($numUnites>250)
       $bill=$numUnites*5.5;
    else
        $bill=$numUnites*4;
    echo "<center>";
    echo "Your current bill:",$bill;
    echo "</center>";
?>
