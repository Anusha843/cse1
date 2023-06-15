<?php> 
     if($_GET["name"]||$_GET["age"])
      {
           echo "welcome" .$_GET["name"]. "<br/>";
           echo "you are" .$_GET["age"]. "years old";
           exit();
      }
      ?>
<html>
   <body>
<form action="<?php $_SELF_PHP?>" method="GET">
Name:<input type="text" name="text">
Age:<input type="text" name="age">
<input type="submit">
   </form>
   </body>
   </html>