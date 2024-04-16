<?php
     
     global $conn;
     include('connection.php');
    
    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);

        $sql = "Select * from signup1 where username='$username'";
        $result = mysqli_query($conn, $sql);        
        $count_user = mysqli_num_rows($result);  

        $sql = "Select * from signup1 where email='$email'";
        $result = mysqli_query($conn, $sql);        
        $count_email = mysqli_num_rows($result);  

        if($count_user == 0 && $count_email==0){  
            
            if($password == $cpassword) {
    
                $hash = password_hash($password, 
                                    PASSWORD_DEFAULT);
                    
                // Password Hashing is used here. 
                $sql = "INSERT INTO signup1(username, email, password) VALUES('$username', '$email','$hash')";
        
                $result = mysqli_query($conn, $sql);
        
                if ($result) {
                    header("Location:Dashboard.php?username=" . urldecode($username));
                }
            } 
            else { 
                echo  '<script>
                        alert("Passwords do not match")
                        window.location.href = "SignForm.php";
                    </script>';
            }      
        }  
        
        
        else {  
            if($count_user>0){
                echo  '<script>
                        alert("Username already exists!!");
                        window.location.href = "SignForm.php";
                    </script>';
            }
            if($count_email>0){
                echo  '<script>
                        alert("Email already exists!!");
                        window.location.href = "SignForm.php";
                    </script>';
            }
        }
        
        }  
    
?>