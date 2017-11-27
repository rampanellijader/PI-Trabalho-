<?php
   function conecta_bd()
   {
      $link=mysqli_connect("localhost","root","","trabalho_final");
      if ($link)
         return($link);
      return(FALSE);
   }
?>