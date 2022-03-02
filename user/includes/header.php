<?php 
    session_start();
    function getCurrentPage(){
        return  substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
    }
    if(!isset($_SESSION['role']) && (getCurrentPage() != "login.php") && (getCurrentPage() != "signup.php"))
        header("Location: ../index.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="../images/icon.png" type="image/icon">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <title><?php echo $name ?></title>
   

</head>
<body>
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">We Go <i class="fas fa-plane"></i></a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="profile.php">profile <i class="fa-solid fa-user"></i></a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->