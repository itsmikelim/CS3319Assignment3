window.onload = function() {
    prepareListener3();
}

function prepareListener3() {
    var droppy3;
    droppy3 = document.getElementById("pickanorder");
    droppy3.addEventListener("change",Purchases3)
}

function Purchases3() {
    this.form.submit();
}