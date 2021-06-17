<?php
     $degree ="";
     if(isset($_POST['Submit'])){
          $degree=$_POST['degree'];
          if($degree==""){
               echo"invalid  degree!";
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
          <legend>Degree</legend>
          <input type="checkbox" name="Degree" value="<?php echo $degree; ?>">SSC
          <input type="checkbox" name="Degree" value="<?php echo $degree; ?>">HSC
          <input type="checkbox" name="Degree" value="<?php echo $degree; ?>">BSc
          <input type="checkbox" name="Degree" value="<?php echo $degree; ?>">MSc
 
           <input type="button" name="btn" value="Submit">
     </form>
     </fieldset>
</body>
</html>