<?php
 if(isset($_POST['roll'])) {
   $rand = rand(1,6);
   echo $rand;
 }
  ?>
  
 <form action= "Dice.php" method ="POST">
       <input type ="submit" name="roll" value="Roll Dice.">
      </form>