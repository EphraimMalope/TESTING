<?php 
global $conn;

     include("connection.php");
    include("Sign_up.php");
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup </title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: white; /* Set background color to grey */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Viewport height */
        }

        #form {
            background-color: grey; /* Set form background color to white */
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #heading {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            padding:20px;
            margin:10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #btn {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #007bff; /* Set button background color */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #btn:hover {
            background-color: #0056b3; /* Darker shade of blue on hover */
        }
    </style>
  </head>
  <body>
      <div id="form">
            <h1 id="heading">SignUp Here</h1><br>
            <form name="form" action="Sign_up.php" method="POST">
                <i class="fa fa-user fa-lg"></i>
                <label>Enter Username: </label>
                <input type="text" id="username" name="username" placeholder="Enter Username" required><br><br>
                <i class="fa-solid fa-envelope fa-lg"></i>
                <label>Enter Email: </label>
                <input type="email" id="email" name="email" placeholder="Enter Email" required><br><br>
                <i class="fa-solid fa-lock fa-lg"></i>
                <label>Create password: </label>
                <input type="password" id="password" name="password" placeholder="Create Password" required><br><br>
                <i class="fa-solid fa-lock fa-lg"></i>
                <label>Re-Enter password: </label>
                <input type="password" id="cpass" name="cpass" placeholder="Retype Password" required><br><br>
                <input type="submit" id="btn" value="Sign_up" name="submit">
            </form>
      </div>
  </body>
</html>