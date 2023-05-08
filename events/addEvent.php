<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $location = $_POST['location'];
        $price = $_POST['price'];
        $filePath = "./images/".$_FILES['image']['name'];
        if(empty($_POST['types'])){
            echo  '<script>
            window.location.href = "add_event.php";
            alert("Choose an option")
            </script>';
        }
        $type = $_POST['types'];

        $sql = "select * from products where Title = '$title' and Location = '$location'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            echo  '<script>
            window.location.href = "add_event.php";
            alert("Event already exists!")
        </script>';
        }  
        else{  
            $insert_sql = "INSERT INTO products(Title, Location, Price, Description, Image, Type) VALUES('$title','$location','$description','$price','$filePath','$type')";
            mysqli_query($conn, $insert_sql);
            echo  '<script>
            window.location.href = "loginpage.php";
            alert("Event successfuly added!")
            </script>';
            header("Location: allevents.php");
        }     
    }
?>