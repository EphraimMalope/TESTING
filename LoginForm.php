<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #form {
            background-color: grey;
            padding: 80px;
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
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div id="form">
        <h1 id="heading">Login Form</h1>
        <form name="form" action="login.php" method="POST" onsubmit="return isvalid()">
            <label>Enter Username/Email: </label>
            <input type="text" id="username" name="username" placeholder="Username/Email" ><br><br>
            <label>Password: </label>
            <input type="password" id="password" name="password" placeholder="Enter password" required><br><br>
            <input type="submit" id="btn" value="Login" name="submit">
        </form>
    </div>
    <script>
        function isvalid(){
            var user = document.form.user.value;
            if(user.length==""){
                alert("Enter username or email id!");
                return false;
            }
        }
    </script>
</body>
</html>