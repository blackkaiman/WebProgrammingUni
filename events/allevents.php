<?php
    require_once 'connection.php';
    $sql="SELECT * FROM products";
    $all_events = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="topnav">
  <a class="active" href="allevents.php">Home</a>
  <a href="add_event.php">Add event</a>
  <a href="loginpage.php">Sign out</a>
  <a href="about.php">About</a>
</div>
    <?php
        while($row = mysqli_fetch_assoc($all_events)){
    ?>
    <div class="container">
        <div class="item-container">
            <div class="img-container">
                <img src="<?php echo $row["Image"];?>" alt="Event image">
            </div>
            <div class="body-container">
                <div class="overlay"></div>
                <div class="event-info">
                    <p class="title"><?php echo $row["Title"];?></p>
                    <div class="separator"></div>
                    <p class="type"><?php echo $row["Type"];?></p>
                    <p class="info"><?php echo $row["Location"];?></p>
                    <p class="price">$<?php echo $row["Price"];?></p>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
</body>
</html>