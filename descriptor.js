window.onload = function() {
    prepareListener();
}

function prepareListener() {
    var droppy;
    droppy = document.getElementById("pickadescriptor");
    droppy.addEventListener("change",description)
}

function description() {
    this.form.submit();
}