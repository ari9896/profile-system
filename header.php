<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>PHP Project 01</title>
   <link rel="stylesheet" href="styles.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
   crossorigin="anonymous" referrerpolicy="no-referrer" />
 </head>
 <body>

   <nav>
     <div class="wrapper">
       <ul> 
         <li><a href="index.php">Home</a></li>
         <li><a href="discover.php">About Us</a></li>
         <li><a href="blog.php">Find Blogs</a></li>
         <?php
           if (isset($_SESSION["useruid"])) {
             echo "<li><a href='profile.php'>Profile Page</a></li>";
             echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
           }
           else {
             echo "<li><a href='signup.php'>Sign Up</a></li>";
             echo "<li><a href='login.php'>Log In</a></li>";
           }
         ?>
       </ul>
     </div>
   </nav>

   <div class="wrapper">