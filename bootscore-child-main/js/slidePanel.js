// Get the slidePanel
var slidePanel = document.getElementById("myslidePanel");

// Get the buttons that open the slidePanel
var btns = document.querySelectorAll(".myBtn");

// Get the <span> elements that close the slidePanel
var spans = document.getElementsByClassName("close");

// Function to open the slidePanel
function openSlidePanel() {
  slidePanel.style.display = "block";
}

// Function to close the slidePanel
function closeSlidePanel() {
  slidePanel.style.display = "none";
}

// Loop through each button and add click event listeners
btns.forEach(function(btn) {
  btn.onclick = openSlidePanel;
});

// Loop through each <span> element and add click event listeners
Array.from(spans).forEach(function(span) {
  span.onclick = closeSlidePanel;
});

// When the user clicks anywhere outside of the slidePanel, close it
window.onclick = function(event) {
  if (event.target == slidePanel) {
    closeSlidePanel();
  }
}