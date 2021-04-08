// This is the link that will give me the movies
// http://www.omdbapi.com/?apikey=65bf2e0c&
// use this and then 't=john+wick' to search for a movie called john wick
 // or this and then 'tt2911666'   to search for a movie called john wick by its IMDb ID

function display() {
  var enteredText = $("#input").val();
  var data = "t=" + enteredText;
  var url = "http://www.omdbapi.com/?apikey=65bf2e0c&";

  $.get(url, data).done(function(response){
    $("#movies")
    .html("<a href="ReviewPage.php"><img width=250 src=" + response.Poster + "/></a><p>Title:<p class=indent>" + response.Title + "</p><p>Description:<p class=indent>" + response.Plot + "</p>")
  })
  .fail(function(jqXHR){
    alert("Error" + jqXHR.status);
  })
}

$(document).ready(function(){
 $("#display").on('click', display);
})
