window.onload = function() {
    prepareListener2();
}

function prepareListener2() {
    var droppy2;
    droppy2 = document.getElementById("pickadescriptor");
    droppy2.addEventListener("change",Purchases2)
}

function Purchases2() {
    this.form.submit();
}