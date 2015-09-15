<?php

  include('header.php');

 ?>

<!DOCTYPE html>
<html>
<head>
  <title>JACK-E HINTS!
  </title>
</head>
<body>

<div class="container">
<div class="row">
  <div class="col-md-6">

    <blockquote>Latest jQuery Notes</blockquote>

<?php

  $sql = "SELECT * FROM notes INNER JOIN users
          ON notes.userID=users.userID WHERE catID = 1 ORDER BY noteDate DESC LIMIT 3";

  $result = mysqli_query($con,$sql);

  while($row = mysqli_fetch_array($result)){

    $title = $row['noteTitle'];
    $smalltitle = substr($title, 0, 50); // Shortens title to 50 characters
    $username = $row['username'];
    $code = $row['noteCode'];
    $smallcode = substr($code, 0, 300); // Shortens body text to 300 characters
    $hint = $row['noteHint'];
    $smallhint = substr($hint, 0, 50); // Shortens hint to 50 characters

    echo '<div class="panel panel-primary">
            <div class="panel-heading">
              <div class="row">
                <div class="col-md-8">'.$smalltitle.'</div>
                <div class="col-md-4 text-right">by '.$username.'</div>
              </div>
            </div>
          <div class="panel-body">'.$smallcode.'</div>
          <div class="panel-footer">'.$smallhint.'</div>
         </div>';
};
 ?>

<hr>
  </div>
  <div class="col-md-6">

    <blockquote>Latest JavaScript Notes</blockquote>

    <?php

      $sql = "SELECT * FROM notes INNER JOIN users
              ON notes.userID=users.userID WHERE catID = 2 ORDER BY noteDate DESC LIMIT 3";

      $result = mysqli_query($con,$sql);

      while($row = mysqli_fetch_array($result)){

        $title = $row['noteTitle'];
        $smalltitle = substr($title, 0, 50); // Shortens title to 50 characters
        $username = $row['username'];
        $code = $row['noteCode'];
        $smallcode = substr($code, 0, 300); // Shortens body text to 300 characters
        $hint = $row['noteHint'];
        $smallhint = substr($hint, 0, 50); // Shortens hint to 50 characters

        echo '<div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-md-8">'.$smalltitle.'</div>
                    <div class="col-md-4 text-right">by '.$username.'</div>
                  </div>
                </div>
              <div class="panel-body">'.$smallcode.'</div>
              <div class="panel-footer">'.$smallhint.'</div>
             </div>';
    };
     ?>
<hr>
  </div>

  <div class="col-md-6">

    <blockquote>Latest CSS Notes</blockquote>

    <?php

      $sql = "SELECT * FROM notes INNER JOIN users
              ON notes.userID=users.userID WHERE catID = 3 ORDER BY noteDate DESC LIMIT 3";

      $result = mysqli_query($con,$sql);

      while($row = mysqli_fetch_array($result)){

        $title = $row['noteTitle'];
        $smalltitle = substr($title, 0, 50); // Shortens title to 50 characters
        $username = $row['username'];
        $code = $row['noteCode'];
        $smallcode = substr($code, 0, 300); // Shortens body text to 300 characters
        $hint = $row['noteHint'];
        $smallhint = substr($hint, 0, 50); // Shortens hint to 50 characters

        echo '<div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-md-8">'.$smalltitle.'</div>
                    <div class="col-md-4 text-right">by '.$username.'</div>
                  </div>
                </div>
              <div class="panel-body">'.$smallcode.'</div>
              <div class="panel-footer">'.$smallhint.'</div>
             </div>';
    };
     ?>
<hr>
  </div>

  <div class="col-md-6">

    <blockquote>Latest Brody Notes</blockquote>

    <?php

      $sql = "SELECT * FROM notes INNER JOIN users
              ON notes.userID=users.userID WHERE catID = 4 ORDER BY noteDate DESC LIMIT 3";

      $result = mysqli_query($con,$sql);

      while($row = mysqli_fetch_array($result)){

        $title = $row['noteTitle'];
        $smalltitle = substr($title, 0, 50); // Shortens title to 50 characters
        $username = $row['username'];
        $code = $row['noteCode'];
        $smallcode = substr($code, 0, 300); // Shortens body text to 300 characters
        $hint = $row['noteHint'];
        $smallhint = substr($hint, 0, 50); // Shortens hint to 50 characters

        echo '<div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-md-8">'.$smalltitle.'</div>
                    <div class="col-md-4 text-right">by '.$username.'</div>
                  </div>
                </div>
              <div class="panel-body">'.$smallcode.'</div>
              <div class="panel-footer">'.$smallhint.'</div>
             </div>';
    };
     ?>
<hr>
  </div>

</div>
















</div>


</body>
</html>
