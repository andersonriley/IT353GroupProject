
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


<!-- START TRY 2 -->

<!-- onsubmit="addSampleReview()"  -->

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


<!-- END TRY 2 -->

  <!-- sample reviews -->
    <!-- <div class="border">
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
    </div> -->


    <div id='newReview'>



<!-- new review is added here -->


    </div>
<!-- BUTTON FOR THE POPUP WINDOW <h1>Write a Review <button id="myBtn">Write Review</button></h1> -->


<!-- START TRY 1 -->


    <div id="myModal" class="modal">
      <form onsubmit="addReview()" id='modelBox' class="modal-content">
        <span class="close">&times;</span>
        <select id='category'>
          <option>Movie</option>
          <option>Book</option>
          <option>Picture</option>
          <option>Museum</option>
        </select>
        <br><input id='title' type="text" name="" value="" placeholder="Title">
        <br><input id='username' type="text" name="" value="" placeholder="Username">
        <br><input id='rating' type="number" min="0" max="10.0" name="GPA" placeholder="Rating"/>
        <br><input id='comment' type="text" name="" value="" placeholder="Enter Comment (optional)">
        <input type="submit" value="submitReview">
      </form>


<!-- END TRY 1 -->


    </div>
    <!-- <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script> -->
  </main>
  <?php include 'js/footer.inc.php' ?>
</body>
</html>

<!-- $(document).ready(function() {
  $(".modelBox").submit(function(e) {
    e.preventDefault();

    var cat = $("#category").val();
    var title = $("#title").val();
    var user = $("#username").val();
    var rating = $("#rating").val();
    var comment = $("#comment").val();
    document.getElementById("newReview").append("<div class='border'><p>" + cat + "</p></div>");

  });
}); -->
