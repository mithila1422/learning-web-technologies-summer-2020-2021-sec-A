<?php
     $email ="";
     if(isset($_POST['Submit'])){
          $email=$_POST['email'];
          if($email==""){
               echo"invalid email!";
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
     <form2 method="post">
          <fieldset>
          <legend><h1> EMAIL:</h1></legend>
         
           <input type="text" name="EMAIL" value="<?php echo $email; ?>"/> <br/>
           <input type="button" name="btn" value="Submit">
     </form2>
     </fieldset>
</body>
</html>