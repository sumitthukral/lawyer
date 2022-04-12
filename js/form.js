window.onload = function(){

  document.getElementById("myBtn").onclick = function() {myFunction()};

  function myFunction() {
    // document.getElementById("myDropdown").classList.toggle("show");
    var element = document.getElementById("myForm");
    element.classList.add("hide");

    var element = document.getElementById("myThankYou");
    element.classList.remove("hide");





    console.log("Hello world!");
  }

}
