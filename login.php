<?php

session_start();

if(isset($_SESSION["email"])){
    header("location: ./login.php");
    exit;
}


$email = "";
$error = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = trim($_POST['em-auth']);
    $password = trim($_POST['pass-auth']);

    if(empty($email) || empty($password)){
        $error = "Email and/or Password is required.";
    } else{
        include "tools/db.php";
        $dbConnection = getDBConnection();
     
        $statement = $dbConnection->prepare(
            "SELECT id, first_name, last_name, password, createdAt FROM users WHERE email = ?"
        );

        $statement->bind_param('s',$email);
        $statement->execute();


        $statement->bind_result($id, $first_name, $last_name, $stored_password, $createdAt);




        

        if($statement->fetch()){

            if(password_verify($password,$stored_password)){
                $_SESSION["id"] = $id;
                $_SESSION["first_name"] = $first_name;
                $_SESSION["last_name"] = $last_name;
                $_SESSION["email"] = $email;
                $_SESSION["createdAt"] = $createdAt;
                
                header("location: ./menu.php");
                exit;
            }
        }

        $statement->close();

        $error = "Email or Password Invalid";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Café Noir</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f3e5d8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-container {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 100%;
      max-width: 400px;
    }
    h2 {
      color: #3e2723;
    }
    label {
      display: block;
      margin-top: 10px;
      color: #3e2723;
      font-weight: bold;
      text-align: left;
    }
    input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      background-color: #3e2723;
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.3s;
      width: 100%;
      margin-top: 15px;
    }
    button:hover {
      background-color: #5d4037;
    }
    .forgot-password {
      margin-top: 10px;
    }
    .forgot-password a {
      color: #5d4037;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Log In to Café Noir</h2>
    <form method="POST">
      <label for="em-auth">Email Address:</label>
      <input type="email" id="em-auth" name="em-auth" value="<?= $email; ?>" required>
      <label for="pass-auth">Password:</label>
      <input type="password" id="pass-auth" name="pass-auth" required>
        <p><?= $error; ?></p>
      <button type="submit" id="lgnBtn">Login</button>
    <a href="./index.php">
      <button type="button" id="lgnBtn" >Create an Account</button>
    </a>
      <p class="forgot-password"><a href="#">Forgot Password?</a></p>
    </form>
  </div>
</body>
</html>
