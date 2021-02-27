//Listen for the window to load, fire this anonymous function
window.addEventListener("load", function() {
  //Capture the button as a variable
  var djButton = document.getElementById('pageBtn');
  //Capture the photo of DJ Khalid as a photo
  var djPhoto = document.images[0];
  //Hide the photo onload
  djPhoto.style.display = "none";
  //Listen for the button to be clicked, fire this anon function
  djButton.addEventListener('click', function() {
    //If DJ Khalid is being shown, hide DJ Khalid.
    if (djPhoto.style.display === "grid") {
      djPhoto.style.display = "none";
    } else {
      //Display DJ Khalid.
      djPhoto.style.display = "grid";
      //Center DJ Khalid.
      djButton.style.placeItems = "center";
    }
  });
});