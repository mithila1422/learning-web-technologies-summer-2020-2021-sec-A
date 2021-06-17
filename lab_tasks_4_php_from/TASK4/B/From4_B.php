<?php
     $gender ="";
     if(isset($_POST['Submit'])){
          $gender=$_POST['gender'];
          if($gender==""){
               echo"invalid gender!";
          }
          else{
               echo'invalid request';
          }
     }
 ?>
 
<!DOCTYPE html>
<head>
     <title>ASSESSMENT TASK</title>
</head>
<body>
     <form method="post">
          <fieldset>
          <legend><h1> GENDER</h1></legend>
         
          <input type="radio" name="Gender" value="">Male
          <input type="radio" name="Gender" value="">Female
          <input type="radio" name="Gender" value="">Other
           <input type="button" name="btn" value="Submit">
     </form>
     </fieldset>
</body>
</html>