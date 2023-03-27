<?php
  include_once "header.php";
?>

     <section class="index-intro"> 
         <?php
           if (isset($_SESSION["useruid"])) {
             echo "<p>Hello there, " . $_SESSION["useruid"] . "</p>";
           }
         ?>
       <h1>This is an introduction</h1>
       <p>Here is an important paragraph that explains the purpose of this website.</p>
     </section>

     <section class="index-categories">
       <h2>Some Basic Categories</h2>
       <div class="index-categories-list">
         <div>
           <h3>Fun Stuff</h3>
           <p>This is where some info will go.</p>
         </div>

         <div>
           <h3>Serious Stuff</h3>
           <p>This is where some info will go.</p>
         </div>

         <div>
           <h3>Exciting Stuff</h3>
           <p>This is where some info will go.</p>
         </div>

       </div>
     </section>

<?php
  include_once "footer.php";
?>