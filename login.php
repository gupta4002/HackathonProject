<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
      $servername="localhost";
      $username="root";
      $password="";
        $database="login";
        $logged=false;
        $conn=mysqli_connect($servername,$username,$password,$database);
        if(!$conn){
          die("Sorry! we failed to connect");
        }
        else{
             $Username=$_POST["Username"];
             $Password=$_POST["Password"];
             $sql= "SELECT * FROM `login` WHERE Username='$Username' AND Password='$Password'";
             $result=mysqli_query($conn,$sql);
             $num=mysqli_num_rows($result);
             if($num==1){
                    $logged=true;
                    header("Location: home.php");
                  }
              
             else {
                  echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Invalid credentials!Try again.</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
                  }
            }
             }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">

    <title>Login Window</title>
  </head>
  <body>
  <form class="input-login" action="login.php" method="post">
    <div class="form">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="username" name="Username" class="form-control" id="exampleInputEmail1"  placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="Password" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" placeholder="Password">
   
  </div>
  <div class="form-group">
    <input type="checkbox" class="form-group" id="exampleCheck1">
    <label class="form-group" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="form-group-sub">Login</button>
  <p class="form-group">Not registered? <a href="sign.php">Register</a>
  </p>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>