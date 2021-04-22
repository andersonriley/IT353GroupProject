<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/LoggedInHomePage.css">
    <title>Featured Page</title>
    <script src=js/Featured.js></script>
  </head>
  <body>
    <?php include "js/header.inc.php"; ?>

      <h2>Featured Films</h2>
      <div class='featuredFilm'>
        <img class='featuredList' src="images/FeaturedMovie1.jpg" alt="KingKong">
        <img class='featuredList' src="images/FeaturedMovie2.jpg" alt="Joker">
        <img class='featuredList' src="images/FeaturedMovie3.jpg" alt="FordvsFerrari">
      </div>
      <h2>Featured Books</h2>
      <div class='featuredBook'>
        <img class='featuredList' src="images/FeaturedBook1.jpg" alt="Harry Potter">
        <img class='featuredList' src="images/FeaturedBook2.jpg" alt="Hunger Games">
        <img class='featuredList' src="images/FeaturedBook3.jpg" alt="Alchemist">
      </div>
      <h2>Featured Images</h2>
      <div class='featuredPicture'>
        <img class='featuredList' src="images/FeaturedImage1.jpg" alt="Hunger Games">
        <img class='featuredList' src="images/FeaturedImage2.jpg" alt="Hunger Games">
        <img class='featuredList' src="images/FeaturedImage3.jpg" alt="Hunger Games">
      </div>
      <?php include 'js/footer.inc.php' ?>
  </body>
</html>
