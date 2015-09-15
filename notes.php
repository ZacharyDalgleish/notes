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

<?php

$category = $_GET['catID'];
@$id = $_GET['id'];

  if(isset($category) && isset($id)) {

    $sql = "SELECT * FROM notes INNER JOIN users ON notes.userID=users.userID WHERE catID = '$category' AND noteID='$id'";

    $result = mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($result)){

      $title = $row['noteTitle'];
      $smalltitle = substr($title, 0, 50); // Shortens title to 50 characters
      $username = $row['username'];
      $code = $row['noteCode'];
      $smallcode = substr($code, 0, 300); // Shortens body text to 300 characters
      $hint = $row['noteHint'];
      $smallhint = substr($hint, 0, 50); // Shortens hint to 50 characters
      $category = $row['catID'];
      $notenum = $row['noteID'];

    echo '<div class="col-md-12">

          <div class="panel panel-primary">

            <div class="panel-heading">

              <div class="row">

                <div class="col-md-8">'.$title.'</div>

                <div class="col-md-4 text-right">by '.$username.'</div>

              </div>

            </div>

          <pre><code><div class="panel-body">'.$code.'</div></code></pre>

          <div class="panel-footer">

            <div class="row">

              <div class="col-md-12">'.$hint.'</div>

            </div>

          </div>

        </div>

      </div>';
}
} else {

  $sql = "SELECT * FROM notes INNER JOIN users ON notes.userID=users.userID WHERE catID = '$category' ORDER BY noteID ASC";

  $result = mysqli_query($con,$sql);

  $row = mysqli_fetch_array($result);

    $title = $row['noteTitle'];
    $smalltitle = substr($title, 0, 50); // Shortens title to 50 characters
    $username = $row['username'];
    $code = $row['noteCode'];
    $smallcode = substr($code, 0, 300); // Shortens body text to 300 characters
    $hint = $row['noteHint'];
    $smallhint = substr($hint, 0, 50); // Shortens hint to 50 characters
    $category = $row['catID'];
    $notenum = $row['noteID'];

    $i = 0;
    echo '<div class="row">';
    foreach($result as $row) {
      echo '<div class="col-md-4">

        <div class="panel panel-primary">

          <div class="panel-heading">

            <div class="row">

              <div class="col-md-8">'.$smalltitle.'</div>

              <div class="col-md-4 text-right">by '.$username.'</div>

            </div>

          </div>

        <pre><code><div class="panel-body">'.$smallcode.'</div></code></pre>

        <div class="panel-footer">

          <div class="row">

            <div class="col-md-8">'.$smallhint.'</div>
            <div class="col-md-4 text-right"><a href="notes.php?catID='.$category.'&id='.$notenum.'">More Info</a></div>

          </div>

        </div>

      </div>
      </div>';
}
}
  $i++;
  if($i%3 == 0) echo '</div><div class="row">';

?>
</div>
</div>
</div>

 <hr>
