function main() {
  $('.about').hide(); //Hides each about section as the page loads.
  $(".about-button").on("click", function(){ //An on click that reacts when the expand button is hit.
    $(this).next().slideToggle(300); //This makes the element next to the button toggle with a sliding animation. "this" referes to the selector which in this case is about-button and .next() is the next element, which then selects said element
    $(this).toggleClass("active"); //This line of code toggles its own class to "active", this can be used to change still upon click. 
  });
}
$(document).ready(main);