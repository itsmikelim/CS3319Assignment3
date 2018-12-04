window.onload = function() {
    prepareListener2();
}

function prepareListener2() {
    var droppy;
    droppy = document.getElementById("pickadescriptor");
    droppy.addEventListener("change",Purchases2)
}

function Purchases2() {
    this.form.submit();
}