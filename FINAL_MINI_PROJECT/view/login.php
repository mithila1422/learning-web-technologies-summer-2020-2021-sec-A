<html>
<head>
     <title>ASSESSMENT TASK</title>
     
</head>
<body>
   
 <style type="text/css">
     span{
        color:red;
        font-size:20px;}
        </style>
    
    <form method="POST" action="../controller/loginCheck.php">
        <fieldset>
        <legend>LOGIN</legend>
     <table>
        <tr>
            <td>
         User Id</td>
         <td>
          <input type="text" name="id" id="id" value="">
         </td>
     </tr>
     <tr>
        <td>
        Password </td>
        <td>
         <input type="Password" name="password" id="password" value="">
     </td>
 </tr>
 <tr>
                <td><input type="submit" value="login"></td>
            </tr>
            <tr>
                <td colspan=2>
                    <input type="checkbox" name="Remember" value=""> Remember Me
                </td>
            </tr>
                 <tr>
                 <td>       <a href="registartion.php">Registartion 
                        </a></td>
                    </tr>
       </table>
                            </fieldset>
                           
    
      </form>
</body>
</html>