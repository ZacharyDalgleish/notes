<?php

  session_start();

  require('include/dbconnect.php');

 ?>

<!DOCTYPE html>
<html>
<head>
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/tomorrow.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.8.0/highlight.min.js"></script>

</head>
<body>

  <div id="login" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Log In</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="login-process.php">
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-default">Log In</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <ul class="nav navbar-nav">
          <li><a href="notes.php?catID=1">jQuery</a></li>
          <li><a href="notes.php?catID=2">JavaScript</a></li>
          <li><a href="notes.php?catID=3">CSS</a></li>
          <li><a href="notes.php?catID=4">HTML</a></li>
        </ul>
      </div>
      <div class="navbar-form navbar-right">

<?php

if(isset($_SESSION['logged_in'])) {
  echo '<p>Welcome, '.$_SESSION['logged_in'].'</p>';
} else {
  echo "<button type='button' class='btn btn-default' data-toggle='modal' data-target='#login'>Log In</button>";
};


 ?>
        <!-- Login Pop Up Box -->
      </div>
    </div>
  </nav>

<script>hljs.initHighlightingOnLoad();</script>

  </body>
  </html>
