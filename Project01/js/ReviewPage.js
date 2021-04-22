function addSampleReview() {
  var sampleCat = $("#sampleCategory").val();
  var sampleTitle = $("#sampleTitle").val();
  var sampleUser = $("#sampleUsername").val();
  var sampleRating = $("#sampleRating").val();
  var sampleComment = $("#sampleComment").val();
  if (sampleComment == null || sampleComment == "") {
    $("#newReview").append("<div class='border'><h3>" + sampleCat + "</h3><p>Title: "+ sampleTitle +"</p><p>Reviewed by: "+ sampleUser +"</p><p>Rating: "+ sampleRating +"</p></div>");
  }else {
    $("#newReview").append("<div class='border'><h3>" + sampleCat + "</h3><p>Title: "+ sampleTitle +"</p><p>Reviewed by: "+ sampleUser +"</p><p>Rating: "+ sampleRating +"</p><p>Comment: "+ sampleComment +"</p></div>");
  }
}

$(document).ready(function(){
  $("#sampleDisplay").on('click', addSampleReview);
})































// TRY 1


// function addReview() {
  //
  //   var cat = $("#category").val();
  //   var title = $("#title").val();
  //   var user = $("#username").val();
  //   var rating = $("#rating").val();
  //   var comment = $("#comment").val();
  //
  //   $("#newReview").append("<div class='border'><p>" + cat + "</p><p>" + title + "</div>");
  // }


  // TRY 2

  // function addSampleReview() {
    //
    //   var sampleCat = $("#sampleCategory").val();
    //   var sampleTitle = $("#sampleTitle").val();
    //   var sampleUser = $("#sampleUsername").val();
    //   var sampleRating = $("#sampleRating").val();
    //   var sampleComment = $("#sampleComment").val();
    //
    //   // Check browser support
    //   if (typeof(Storage) !== "undefined") {
      //     // Store
      //     localStorage.setItem("cat", sampleCat);
      //     // Retrieve
      //     document.getElementById("newReview").innerHTML = localStorage.getItem("cat");
      //   } else {
        //     document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
        //   }
        // }
        //
        // $(document).ready(function(){
          //   $("#sampleDisplay").on('click', addSampleReview);
          // });
