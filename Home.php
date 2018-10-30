<?php

session_start();
include 'Config.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>
    Home</title>
      <link rel="stylesheet" type="text/css" href="Home.css"></head>
    
    <body>
    <div id="main">
        
        <h1 style="background-color:#4CAF50; color:white;"><?php echo   $_SESSION['name'] ?> ~ Online </h1> 
        
        <div class="output">
        <?php 
    
            $sql ="SELECT * from message";
            
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result-> fetch_assoc()){
                    echo $row["name"]. "--"  .$row["msg"]. "--" .$row["date"]. "<br>";
                }
            }
            else{
            echo "0 results";
            }
          
            ?>
            
        </div>
        
        <form method="post" action="send.php">
        <textarea name="msg" placeholder="Type a message" class="form-control"></textarea> <br>
            <input type ="submit" value="Send" style=" background-color: white;color: black;border: 2px solid #4CAF50;">
        </form>   <form action="logout.php">
        <input style=" background-color: white;color: black;border: 2px solid #ef461c;" type="submit" value="Logout">
        </form>
        <br>
       
        
        </div></body>
</html>