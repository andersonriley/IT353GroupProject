// This is the link that will give me the movies
// http://www.omdbapi.com/?apikey=65bf2e0c&
// use this and then 't=john+wick' to search for a movie called john wick
 // or this and then 'tt2911666'   to search for a movie called john wick by its IMDb ID

// Movie one
function displayMovie() {
  var enteredText = $("#input").val();
  var data = "t=" + enteredText;
  var url = "http://www.omdbapi.com/?apikey=65bf2e0c&";

  $.get(url, data).done(function(response){
    $("#output")
    .append("<img width=250 src=" + response.Poster + "/><p>Title:<p class=indent>" + response.Title + "</p><p>Description:<p class=indent>" + response.Plot + "</p>")
  })
  .fail(function(jqXHR){
    alert("Movie error" + jqXHR.status);
  })
}

// Book one
function displayBook() {
  var enteredText = $("#input").val();
  var data = "q=title:" + enteredText;
  var url = "https://www.googleapis.com/books/v1/volumes?";

  $.get(url, data).done(function(response){
    $("#output").append("<img width=250 src=" + response.items[0].volumeInfo.imageLinks.smallThumbnail + "/><br><p>Title: "+ response.items[0].volumeInfo.title +"</p><p>Description: "+ response.items[0].volumeInfo.description +"</p>")
  })
  .fail(function(jqXHR){
    alert("Book error" + jqXHR.status);
  })
}



// Picture one
//
function displayPic() {
  var enteredText = $("#input").val();
  var data = "q=" + enteredText;
  var url = "https://pixabay.com/api/?key=15701013-d345344bc05906c8b823eb2d7&";

  $.get(url, data).done(function(response){
    $("#output").append("<img width=250 src=" + response.hits[0].largeImageURL + "/><br><p>Tags: "+ response.hits[0].tags +"</p>")
  })
  .fail(function(jqXHR){
    alert("Picture error" + jqXHR.status);
  })
}



// Museum one
function displayMuseum() {
  var enteredText = $("#input").val();
  var data = "q=" + enteredText;
  var url = "https://api.harvardartmuseums.org/object?apikey=9a3285b9-7f8f-4ed2-922c-b501b63caced&";
  $.get(url, data).done(function(response){
    if (response.records[0].imagecount > 0) {
      $("#output").append("<img alt='No Image Available' width=250 src=" + response.records[0].images[0].baseimageurl + "/><br><p>Title: "+ response.records[0].images[0].copyright +"</p><p>Description: "+ response.records[0].images[0].description +"</p>")
    } else {
      $("#output").append("<p>No Image Available<br>Description "+ response.records[0].title +"</p>")
    }
  })
  .fail(function(jqXHR){
    alert("Museum error" + jqXHR.status);
  })
}

function displayAll() {
  var elmnt = document.getElementById("output");
  elmnt.remove();
  var newelmt = document.createElement('div');
  var ele = document.getElementById('temp');
  newelmt.setAttribute('id', 'output');
  ele.appendChild(newelmt);
  displayMovie();
  displayBook();
  displayPic();
  displayMuseum();
}

$(document).ready(function(){
  $("#display").on('click', displayAll);
})
