<?php
  include_once "header.php";
?>

      <section class="signup-form">
        <h1>Sign-Up</h1>
        <form class="form-signup" action="includes/signup.inc.php" method="post">
          <input type = "text" name = "name" placeholder="Full Name...">
          <input type = "text" name = "email" placeholder="Email...">
          <input type = "text" name = "uid" placeholder="Username...">
          <input type = "password" name = "pwd" placeholder="Password...">
          <input type = "password" name = "pwdRepeat" placeholder="Repeat password...">
          <button type= "submit" name="submit">Sign Up</button>
        </form>

<?php
  if (isset($_GET["error"])) { 
    if ($_GET["error"] == "emptyinput") {
      echo "<p>Fill in all fields!</p>";
    }
    else if ($_GET["error"] == "invaliduid") {
      echo "<p>Choose a proper username!</p>";
    }
    else if ($_GET["error"] == "invalidemail") {
      echo "<p>Choose a proper email!</p>";
    }
    else if ($_GET["error"] == "passwordsdontmatch") {
      echo "<p>Password don't match!</p>";
    }
    else if ($_GET["error"] == "stmtfailed") {
      echo "<p>Something went wrong, please try again!</p>";
    }
    else if ($_GET["error"] == "usernametaken") {
      echo "<p>Username already takekn!</p>";
    }
    else if ($_GET["error"] == "none") {
      echo "<p>You have signed up!</p>";
    }
  }

?>
      </section>

<?php
  include_once 'footer.php';
?>