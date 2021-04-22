<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/ReviewPage.js"></script>
  <title>Review Page</title>
  <link rel="stylesheet" href="css/ReviewPage.css">
</head>
<body>
  <?php include 'js/header.inc.php' ?>
  <main>
    <h1>Sample Reviews</h1>

<!-- These are the boxes the person can fill out to add a review -->
    <form class="sampleReview" method="post">
      <select id='sampleCategory'>
        <option>Movie</option>
        <option>Book</option>
        <option>Picture</option>
        <option>Museum</option>
      </select>
      <br><input id='sampleTitle' type="text" name="" value="" placeholder="Title">
      <br><input id='sampleUsername' type="text" name="" value="" placeholder="Username">
      <br><input id='sampleRating' type="number" min="0" max="10" name="" placeholder="Rating"/> /10
      <br><input id='sampleComment' type="text" name="" value="" placeholder="Enter Comment (optional)">
      <button id="sampleDisplay">Submit</button>
    </form>

<!-- These are sample reviews -->

    <div class="border">
      <h3>Movie</h3>
      <p>Title: Bee Movie</p>
      <p>Reviewed by: Anonymous</p>
      <p>Rating: 10/10</p>
      <p>Comment: I watch this movie every day before work!</p>
    </div>
    <div class="border">
      <h3>Picture</h3>
      <p>Title: Ice Flower at Dusk</p>
      <p>Reviewed by: Brooklyn Nash</p>
      <p>Rating: 8/10</p>
      <p>Comment: Could use more sunlight :()</p>
    </div>
    <div class="border">
      <h3>Museum</h3>
      <p>Title: </p>
      <p>Reviewed by: Anonymous</p>
      <p>Rating: 10/10</p>
      <p>Comment: My goodness, I lost my kids</p>
    </div>

<!-- new review is added here -->

    <div id='newReview'></div>
  </main>
  <?php include 'js/footer.inc.php' ?>
</body>
</html>
