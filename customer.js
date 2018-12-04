window.onload = function() {
    prepareListener();
}

function prepareListener() {
    var droppy;
    droppy = document.getElementById("pickacustomer");
    droppy.addEventListener("change",Purchases)
}

function Purchases() {
    this.form.submit();
}