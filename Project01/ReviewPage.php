<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Review Page</title>
  <link rel="stylesheet" href="css/ReviewPage.css">
</head>
<body>
  <?php include 'js/header.inc.php' ?>
  <main>
    <h1>Sample Reviews</h1>
    <h3>Movies and Books</h3>
    <div class="border">
      <p>Title: Bee Movie</p>
      <p>Reviewed by: Anonymous</p>
      <p>Rating: 10/10</p>
      <p>Comment: I watch this movie every day before work!</p>
    </div>
    <h3>Pictures</h3>
    <div class="border">
      <p>Genre: Nature</p>
      <p>Reviewed by: Brooklyn Nash</p>
      <p>Rating: 8/10</p>
      <p>Comment: Could use more sunlight :()</p>
    </div>
    <h3>Museums</h3>
    <div class="border">
      <p>Name: Smithsonian</p>
      <p>Reviewed by: Anonymous</p>
      <p>Rating: 10/10</p>
      <p>Comment: My goodness, I lost my kids</p>
    </div>
    <h1>Write a Review</h1>
    <button id="myBtn">Open Modal</button>

    <!-- The Modal -->
    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <p>Some text in the Modal..</p>
      </div>

    </div>
    <script>
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
    </script>
  </main>
  <?php include 'footer.inc.php' ?>
</body>
</html>
