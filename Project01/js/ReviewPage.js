// document.getElementById('modelBox').addEventListener("submit", function() {

function display() {

  var cat = $("#category").val();
  var title = $("#title").val();
  var user = $("#username").val();
  var rating = $("#rating").val();
  var comment = $("#comment").val();

  $("#newReview").append("<div class='border'><p>" + cat + "</p><p>" + title + "</div>");
}










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
