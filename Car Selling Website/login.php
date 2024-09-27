<?php
  $conn = mysqli_connect("localhost","root","","login");
  $username = $_POST["username"];
  $pwd = $_POST["password"];
  $sql = "SELECT * from users where username='$username'";
  $result = mysqli_query($conn, $sql);


  $num = mysqli_num_rows($result);

  if ($num == 1){
      while($row=mysqli_fetch_assoc($result)){
          if ($pwd == $row['password']){
              header("Location: index.html");
              
          }
          else{
              header("Location: login.html");
          }
      }

  }
  else{
      header("Location: login.html");
  }
?>