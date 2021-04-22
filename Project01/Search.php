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
    <br><form class="roundedSearchBox">
      <input id="input" class="noBorder" type="text" name="search" value="" placeholder="Search for Books/Movies/Pictures...">
    </form>
    <button id="display">Go</button>
    <br><div id="temp">
      <div id='output'>

      </div>
    </div>
    <?php include 'js/footer.inc.php' ?>  
  </body>
</html>
