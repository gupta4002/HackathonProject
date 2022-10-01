<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="login";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
      die("Sorry! we failed to connect");
    }
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        $Username=$_POST['Username'];
        $dob=$_POST['dob'];
        $Password=$_POST['Password'];
        $Email=$_POST['Email'];
        $Phone=$_POST['Phone'];
        $confirm=$_POST['confirm'];
          
          // $exists=false;
      
          // Check whether this username exists
          $existSql = "SELECT * FROM `login` WHERE Username = '$Username'";
          $result = mysqli_query($conn, $existSql);
          $numExistRows = mysqli_num_rows($result);
          if($numExistRows > 0){
              // $exists = true;
              echo"Username Already Exists";
          }
          else{
              // $exists = false; 
              if(($Password == $confirm)){
                  $hash = password_hash($Password, PASSWORD_DEFAULT);
                  $sql = "INSERT INTO `login` (`Username`, `Email`, `Phone`, `Password`, `dob`) VALUES ('$Username', '$Email', '$Phone', '$Password', '$dob')";
                  $result = mysqli_query($conn, $sql);
                  if ($result){
                      echo"Success!Registered successfully.";
                  }
              }
              else{
                  echo"Passwords do not match";
              }
          }
      }
          
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="register-page">
    <div class="form">
    <form  action="sign.php"  method="post" >
         <input type="text"name="Username"class="input"placeholder="Enter Name"required>
         <input type="text"name="Email"class="input"placeholder="Enter Email"required>
         <input type="date"name="dob"class="input"placeholder="Enter date of birth"required>
         <input type="text"name="Phone" class="input"placeholder="Phone number"required>
         <input type="password"name="Password"class="input"placeholder="Enter Password"required>
         <input type="text"name="confirm" class="input"placeholder="Confirm Password"required>
         <button type="submit" name="submit" class="submit-but">Register</button>
         <p class="message">Already registered? <a href="login.php">Login</a>
         </p>
    </form>
    </div>
</div>
<!-- <script>
            const scriptURL = 'https://script.google.com/macros/s/AKfycbxgW2rF4Lsg0HbH4w0hJhPrUJO9ZQUuKPjVMK2YjhWOwKZ3MkR2jb5aStHoDfjGzBtqpQ/exec'
            const form = document.forms["google-sheet"]
          
            form.addEventListener("submit", e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thanks for Contacting us..! We Will Contact You Soon..."))
                .catch(error => console.error('Error!', error.message))
            })
          </script> -->
</body>
</html>