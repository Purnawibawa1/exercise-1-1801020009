(function (){
    "use strict";
    var my_function = function (event){
    alert("hello mahasiswa primakara")
    event.preventDefault();
};
    var form = document.getElementById("cart-hplus");
    form.addEventListener("submit", my_function, true);


})();