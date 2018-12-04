window.onload = function() {
    prepareListener3();
}

function prepareListener3() {
    var droppy;
    droppy = document.getElementById("pickanorder");
    droppy.addEventListener("change",Purchases3)
}

function Purchases3() {
    this.form.submit();
}