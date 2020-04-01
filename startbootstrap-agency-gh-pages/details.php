<?php

if (isset($_GET["city"])) {
  // code...
  $city = $_GET["city"];

  $session_id = rand(0,9999999999999).uniqid().rand(0,9999999999999);

  //$_SESSION["id"] = $session_id;

    if (isset($_GET["inuse"])) {
      // code...
      echo "<script>alert('Usernmae already in use') </script>";
    }


?>

<form action="step-one.php" method="post">

<div>
  <label>Create Usernmae: </label>
  <input type="text" name="username" autofocus="true" required="true">
</div>

<div>
  <label>Choose Password: </label>
  <input type="text" name="username" autofocus="true" required="true">
</div>
<input type="hidden" name="session_id" value="<?php echo $session_id; ?>">
<input type="hidden" name="city" value="<?php echo $city; ?>">

</form>
<?php
}
?>
