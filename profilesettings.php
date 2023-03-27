<?php
  include_once "header.php";

  include_once "classes/dbh.classes.php";
  include_once "classes/profileinfo.classes.php";
  include_once "classes/profileinfo-view.classes.php";

  $profileInfo = new ProfileInfoView();
?>

<section class="profile">
  <div class="profile-bg">
    <div class="wrapper">
      <div class="profile-settings">
        <h3>PROFILE SETTINGS</h3>
        <p>Change your about sectiono here!</p>
        <form action="includes/profileinfo.inc.php" method="post">
            <textarea name="about" rows="10" cols="30" placeholder="Profile about section...">
            <?php
              $profileInto->fetchAbout($_SESSION["userid"]);
            ?>
            </textarea>
            <br><br>
            <p>Change your profile page intro here!</p>
            <br>
            <input type="text" name="introtitle" placeholder="Profile title..." value="<?php $profileInfo->fetchTitle($_SESSION["userid"]); ?>">
            <textarea name="introtext" rows="10" cols="30" placeholder="Profile intro...">
            <?php
              $profileInfo->fetchText($_SESSION["userid"]);
            ?>
            </textarea>
            <button type="submit" name="submit">SAVE</button>
        </form>
      </div>
    </div>
  </div>
</section>
<?php
  include_once "footer.php";
?>