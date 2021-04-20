// document.getElementById('modelBox').addEventListener("submit", function() {


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


function addSampleReview() {
  var sampleCat = $("#sampleCategory").val();
  var sampleTitle = $("#sampleTitle").val();
  var sampleUser = $("#sampleUsername").val();
  var sampleRating = $("#sampleRating").val();
  var sampleComment = $("#sampleComment").val();

  $("#newReview").append("<div class='border'><h3>" + sampleCat + "</h3></div>");

}
//
// $(document).ready(function(){
//   $("#newReview").on('click', addSampleReview);
// })



//
// function addSampleReview() {
//   var sampleCat = $("#sampleCategory").value();
//   var sampleTitle = $("#sampleTitle").val();
//   var sampleUser = $("#sampleUsername").val();
//   var sampleRating = $("#sampleRating").val();
//   var sampleComment = $("#sampleComment").val();
//
//   $("#newReview").append("<div class='border'><p>" + sampleCat + "</p></div>");
//
// }
//
// let myButton = document.getElementById('sampleDisplay');
//
// myButton.addEventListener('click', addSampleReview);

// $(document).ready(function(){
//   $("#newReview").on('click', addSampleReview);
// })





// $(document).ready(function() {
//   $(".modelBox").submit(function(e) {
//     e.preventDefault();
//
//     var cat = $("#category").val();
//     var title = $("#title").val();
//     var user = $("#username").val();
//     var rating = $("#rating").val();
//     var comment = $("#comment").val();
//     document.getElementById("newReview").append("<div class='border'><p>" + cat + "</p></div>");
//
//   });
// });





//
//   var tag = document.createElement("p");
//
//
//   tag.appendChild(cat);
//   tag.appendChild("Title: " + title);
//   tag.appendChild("Username: " + user);
//   tag.appendChild("Rating: " + rating);
//   tag.appendChild("Comment: " + comment);
//
//   var element = document.getElementById("newReview");
//   element.appendChild(tag);
// });
