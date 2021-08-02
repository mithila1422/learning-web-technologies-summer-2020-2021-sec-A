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
    
    <form method="POST" action="../controller/registartionCheck.php">
        <fieldset>
        <legend>REGISTRATION</legend>
     <table>
     <tr>
        <td>
          Id</td>
          <td>
          <input type="text" name="id" id="id" value=""></td>
          </tr>
          <tr>
            <td>
        Password </td>
        <td>
         <input type="Password" name="password" id="password" value="">
     </td>
     </tr>
     <tr>
        <td>
          Confirm Password </td>
          <td>
           <input type="Password" name="cpass" id="cpass" value="">
        </td>
          </tr>
          <tr>
            <td>
          Name</td>
          <td>
          <input type="text" name="name" id="name" value="">
      </td>
          </tr>
           <tr>
            <td>
           Email</td>
           <td>
          <input type="text" name="email" id="email" value="">
          </td>
      </tr>
      <tr>
        <td>
          User Type</td>
          <td>
           <select align="center" name="type"><br>
                            <option>Admin</option>
                            <option>User</option>
                            </select>
                        </td>
                    </tr>
                         <tr>   
                            <td>
            <input type="submit" name="submit" value="Register"></td>
        </tr>
        <tr>
            <td>
                        <a href="login.html">Login
                        </a>
                    </td>
                </tr>
            </table>
      
          </fieldset>
         
      </form>
</body>
</html>
