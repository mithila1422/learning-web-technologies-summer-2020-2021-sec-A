<?php
     $name ="";
     if(isset($_POST['Submit'])){
          $name=$_POST['name'];
          if($name==""){
               echo"invalid name!";
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
     <form1 method="post">
          <fieldset>
          <legend><h1> Name:</h1></legend>
         
           <input type="text" name="Name" value="<?php echo $name; ?>"/> <br/>
           <input type="button" name="btn" value="Submit">
     </form1>
     </fieldset>
</body>
</html>