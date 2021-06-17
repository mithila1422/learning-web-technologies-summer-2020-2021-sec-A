<?php
     $bg ="";
     if(isset($_POST['Submit'])){
          $bg=$_POST['bg'];
          if($bg==""){
               echo"invalid blood group!";
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
           Blood Group <select name ="bg">
           <option value="<?php echo $bg; ?>">A+</option> 
           <option value="<?php echo $bg; ?>">A-</option> 
           <option value="<?php echo $bg; ?>">B+</option> 
           <option value="<?php echo $bg; ?>">B-</option> 
           <option value="<?php echo $bg; ?>">AB+</option>
           <option value="<?php echo $bg; ?>">AB-</option> 
           <option value="<?php echo $bg; ?>">O+</option> 
           <option value="<?php echo $bg; ?>">O-</option>  
      </select>
 <br/>
           <input type="button" name="btn" value="Submit">
     </form2>
     </fieldset>
</body>
</html>