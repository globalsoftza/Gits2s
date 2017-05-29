 
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="designer.css">
        <link rel="stylesheet" href="mycss.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
    <body>
        <div>
            <div><img class="logo" src="Images/copy.png" alt="NMU LOGO"></div>
        </div>
       
        <form method="POST" id="form1" action="ldap.php"  >
                <label>Username:</label><br>
      <input type="text" name="username" value="" size="40" /><br>
      <label>Password:</label><br>
      <input type="password" name="password" value="" size="40"/><br>
      <input type="submit" value="Login" name="login" />
      
      <?php
      
      $error= array();
      if ($_SERVER ['REQUEST_METHOD'] == 'POST')
      {
          if(0 === preg_match("/\s+/", $_POST['username'] ))
          {
              $error ['username'] = "Please enter your username";
          }
          if(0 === preg_match("/\s+/", $_POST['password'] ))
          {
              $error ['password'] = "Please enter your password";
          }
      }
      ?>
     
            </form>
    
        
    </body>
  
</html>