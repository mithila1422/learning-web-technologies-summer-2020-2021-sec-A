<?php
     $dob ="";
     if(isset($_POST['Submit'])){
          $dob=$_POST['dob'];
          if($dob==""){
               echo"invalid date of birth!";
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
          <legend><h1> DATE OF BIRTH</h1></legend>
         <h2>dd mm yyyy</h2>

          <input type="number" name="Date of Birth" value="<?php echo $dob; ?>"/>
          / <input type="number" name="dd" value="<?php echo $dob; ?>"/>
          / <input type="number" name="dd" value="<?php echo $dob; ?>"/> <br/>
           
           <input type="button" name="btn" value="Submit">
     </form>
     </fieldset>
</body>
</html>