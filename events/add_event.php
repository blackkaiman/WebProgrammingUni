<?php
  include("connection.php");
  include("addEvent.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
		<link rel="stylesheet" href="./loginpagestyle.css">
    </head>
<body>
    <div class="container">
        <h1 class="title">Ticketmain</h1>
        <p>Add a new event.</p>
    </div>
<form name="add_event" action="add_event.php" onsubmit="return isvalid()" method="POST" enctype="multipart/form-data">
    <div class="container">
      <label for="title"><b>Title</b></label>
      <input type="text" placeholder="Enter title" name="title" required>
  
      <label for="location"><b>Location</b></label>
      <input type="text" placeholder="Enter location" name="location" required>
  
      <label for="price"><b>Price</b></label>
      <input type="number" min="0" step="1" placeholder="Enter price" name="price" required>
  
      <label for="description"><b></b></label>
      <input type="text" placeholder="Enter description" name="description" required>
  
      <label for="image"><b>Image</b></label>
      <input type="file" placeholder="Enter image" name="image" required>
        <br></br>
      <label for="types">Choose an event type:</label>
      <select name="types" id="type">
            <option value="talk">Talk</option>
            <option value="concert">Concert</option>
            <option value="standup">Stand up</option>
            <option value="conference">Conference</option>
      </select>
  
      <input type="submit" class="form_button" id="btn" value="Add event" name="submit"/>
    </div>
  </form>
  </body>
</html>