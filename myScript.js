var userChill = prompt("You can only access this page if you are cool. Are you a chill guy? (you should say 'yes')");

if(userChill === "yes") {
		confirm("Welcome!");
	}
	else {
		
		confirm("You don't deserve being here");
	}

function showAll() {
   document.getElementById('show').style.display = "block";
}

function hideAll() {
   document.getElementById('show').style.display = "none";
}





// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
/* btn.onclick = function() {
    document.getElementById('myModal').style.display = "block";
}*/

// When the user clicks on <span> (x), close the modal
/*span.onclick = function() {
    modal.style.display = "none";
}*/

// When the user clicks anywhere outside of the modal, close it
/*window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}*/

function myfunc(openMenu) {
  var className = div.getAttribute("class");
  if(className=="normal") {
    div.className = "active";
  }
  else{
    div.className = "normal";
  }
}
