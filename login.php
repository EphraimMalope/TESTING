<?php
    $login = false;
    include('connection.php');
    if (isset($_POST['submit'])) {
        if (!isset($_POST['username']) || !isset($_POST['password'])) {
            echo 'Username or password not provided';
            exit;
        }

        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT * FROM signup1 WHERE username = ? OR email = ?");
        $stmt->bind_param("ss", $username, $username);
        $stmt->execute();

        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            if (password_verify($password, $row["password"])) {
                $login = true;
                session_start();
                $_SESSION['username'] = $row['username'];
                $_SESSION['loggedin'] = true;
                header("Location: Dashboard1.php");
            } else {
                echo '<script>
                        alert("Login failed. Invalid username or password!!")
                        window.location.href = "login.php";
                    </script>';
            }
        } else {
            echo '<script>
                    alert("Login failed. Invalid username or password!!")
                    window.location.href = "login.php";
                </script>';
        }
    }
?>