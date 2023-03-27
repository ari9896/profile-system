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

      <div class="profile-info">

        <div class="profile-info-img">
          <p>
            <?php
              echo $_SESSION["useruid"];
            ?>
          </p>
          <div class="break"></div>
          <a href="profilesettings.php" class="follow-btn">PROFILE SETTINGS</a>
        </div>

        <div class="profile-info-about">
          <h3>ABOUT</h3>
          <p>
            <?php
              $profileInfo->fetchAbout($_SESSION["userid"]);
            ?>
          </p>
          <h3>FOLLOWERS</h3>
          <h3>FOLLOWING</h3>
        </div>
      </div>

      <div class="profile-content">
        <div class="profile-intro">
          <h3>
            <?php
              $profileInfo->fetchTitle($_SESSION["userid"]);
            ?>
          </h3>
          <p>
            <?php
              $profileInfo->fetchText($_SESSION["userid"]);
            ?>
          </p>
          <br><br>
          alkfjla;kfdjka;fdjlkaj;dsjfieur
        </div>
      
        <div class="profile-posts">
          <h3>POSTS</h3>
          <div class="profile-post">
            <h2>IT IS A BUSY DAY IN TOWN</h2>
            <p>lk;ajdfa;fkdja;dfla;fj</p>
            <p>12:46 = 09/11/2021</p>
          </div>
          <div class="profile-post">
            <h2>IT IS A BUSY DAY IN TOWN</h2>
            <p>lk;ajdfa;fkdja;dfla;fj</p>
            <p>12:46 = 09/10/2021</p>
          </div>
          <div class="profile-post">
            <h2>IT IS A BUSY DAY IN TOWN</h2>
            <p>lk;ajdfa;fkdja;dfla;fj</p>
            <p>12:46 = 09/09/2021</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php
  include_once "footer.php";
?>