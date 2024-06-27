<?php 

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Reply</title>
 </head>
 <body>

 	<h1>Send Reply Message</h1>
<button id="btnOpenForm">Open Form</button>

<div class="form-popup-bg">
  <div class="form-container">
    <h1>Send Message</h1>
    <!-- <p>Send a r</p> -->
    <form action="ReplyMessage.php" method="POST">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" required />
      </div>
      <div class="form-group">
        <label for="email">E-Mail Address</label>
        <input class="form-control" type="text" name="email" id="email" required />
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea placeholder="Type Here" maxlength="2000" name="message" id="message" required></textarea>
      </div>
      <button type="submit">Submit</button>
      <button id="btnCloseForm" class="close-button">X</button>
    </form>
  </div>
</div>
 
 </body>
 </html>