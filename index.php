<!DOCTYPE html>
<html>
<head>
    <title>
    WebChat</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    <body>
    <div id="main">
        <div id="info">
       
        
       <form action="login.php" method="post">
    
  <div class="container">
    <div class="head">
      <h2>LOGIN </h2>
    </div>
      <input type="text" name="uname" placeholder="User Name"><br />
      <input type="password" name="pass" placeholder="Password"> <br />
  

    <button id="submit" type="submit">
      Login
    </button>
 
      </form>
    
    <form action="signup.php" method="post">
      <div class="container">
    <div class="head">
      <h2>Don't have an Account? Register here</h2>
    </div>
    <input type="text" name="uname" placeholder="User Name" /><br />
    <input  type="text" name="Email" placeholder="Email" /><br />
            <input  type="password" name="Password" placeholder="Password" />
    
    <button id="submit" type="submit">
      Register!
    </button>
  </div>
    </div>
    
</form>

        </div>
        </div></body>
</html>