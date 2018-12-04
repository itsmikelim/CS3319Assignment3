window.onload = function() {
    prepareListener();
}

function prepareListener() {
    var droppy;
    droppy = document.getElementById("pickanorder");
    droppy.addEventListener("change",order)
}

function order() {
    this.form.submit();
}