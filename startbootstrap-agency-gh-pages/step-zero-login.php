<?php

  if (isset($_GET["city"])) {
    // code
    $city = $_GET["city"];
    $session_id = rand(0,9999999999999).uniqid().rand(0,9999999999999);

    ?>

    <form action="step-one-login.php" method="post">

    <div>
      <label>Enter Usernmae: </label>
      <input type="text" name="username" autofocus="true" required="true">
    </div>


    <div>
      <label>Enter Password: </label>
      <input type="password" name="username" autofocus="true" required="true">
    </div>
    <input type="hidden" name="session_id" value="<?php echo $session_id; ?>">
    <input type="hidden" name="city" value="<?php echo $city; ?>">

    </form>

    <div>
      <a href="details.php?city=<?php echo $city; ?>">Dont have an account.</a>

    </div>
<?php
  }

 ?>
