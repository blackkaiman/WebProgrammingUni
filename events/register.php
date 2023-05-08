<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['uname'];
        $password = $_POST['psw'];

        $sql = "select * from Users where Username = '$username'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count != 1){
            $insert_sql = "INSERT INTO Users(Username,Password) VALUES('$username','$password')";
            mysqli_query($conn, $insert_sql);
            echo  '<script>
            window.location.href = "loginpage.php";
            alert("User successfuly registered!")
            </script>';
            header("Location: loginpage.php");
        }  
        else{  
            echo  '<script>
                        window.location.href = "registerpage.php";
                        alert("User already exists!")
                    </script>';
        }     
    }
?>