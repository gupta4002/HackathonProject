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
             $Post=$_POST["Post"];
             $sql="INSERT INTO `python` ( `Post`) VALUES ('$Post')";
             $result=mysqli_query($conn,$sql);
             if($result){
                    $logged=true;
                  }
              
             else {
                  echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Invalid !Try again.</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
                  }
             $sqli="SELECT * FROM `python`"
            }
             }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Forum</title>
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">codeFriendly</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <div class="d-flex">
                    <a href="login.php" class="btn btn-primary mx-3">Login</a>
                    <a href="sign.php" class="btn btn-primary mx-3">Sign up</a>
                </div>
            </div>
    </div>
    </nav>
    </div>
    <div class="content">
        <div class="card">
            <h5 class="card-header">Python</h5>
            <div class="card-body">
                <h5 class="card-title">Questions you may have!</h5>
                <p class="card-text">To get python install and learn click on the button:</p>
                <a href="https://python.org" class="btn btn-primary">Get Python</a>
            </div>
        </div>
        <div class="head h2 text-center my-2">
            <p>Have a question?</p>
        </div>
        <form action="python.php" method="post" >
        <div class="input-group my-3">
            <span class="input-group-text">Post your question!
            </span>
            <textarea class="form-control" name="Post" aria-label="With textarea"></textarea>
            <button type="submit" class="form-group-sub">Post</button>
        </div>
    </form>
    </div>
    <div class="seepq">

    </div>
    <div class="footer text-center text-light bg-dark my-0">
        Copyright codeFriendly Coding 2022|All rights reserved.
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>

</html>