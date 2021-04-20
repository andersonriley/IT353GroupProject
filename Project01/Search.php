<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Search Bar Page</title>
    <link rel="stylesheet" href="css/Search.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/LoggedInHomePage.js"></script>
  </head>
  <body>
    <?php include 'js/header.inc.php' ?>
    <form class="roundedSearchBox">
      <input id="input" class="noBorder" type="text" name="search" value="" placeholder="Search for Books/Movies/Pictures...">
    </form>
    <button id="display">Go</button>
    <div id="output"></div>
    <footer>
      <a href="HomePage.html" class="bottomPage">Back</a>
    </footer>
  </body>
</html>
