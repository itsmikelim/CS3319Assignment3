window.onload = function() {
    prepareListener();
}

function prepareListener() {
    var droppy;
    droppy = document.getElementById("pickadescriptor");
    droppy.addEventListener("change",Purchases)
}

function Purchases() {
    this.form.submit();
}