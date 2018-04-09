var inputs = document.getElementsByClassName("form-input");
for (var i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener("keyup", function () {
        if (this.value.length >= 1) {
            this.nextElementSibling.classList.add("still");
        } else {
            this.nextElementSibling.classList.remove("still");
        }
    })
}

var textareas = document.getElementsByClassName("form-area");
for (var i = 0; i < textareas.length; i++) {
    textareas[i].addEventListener("keyup", function () {
        if (this.value.length >= 1) {
            this.nextElementSibling.classList.add("still-area");
        } else {
            this.nextElementSibling.classList.remove("still-area");
        }
    })
}

var labels = document.getElementsByClassName("form-label");
for (var i = 0; i < labels.length; i++) {
    labels[i].addEventListener("click", function () {
        this.previousElementSibling.focus();
    })
}

var labelsA = document.getElementsByClassName("form-label-area");
for (var i = 0; i < labelsA.length; i++) {
    labelsA[i].addEventListener("click", function () {
        this.previousElementSibling.focus();
    })
}

var loading = document.getElementById('Loading-Modal');
var messageBox = document.getElementById('Success-Modal');
var messageErr = document.getElementById('Error-Modal');
var span_loading = document.getElementById("close-loading");
var span_success = document.getElementById("close-success");
var span_err = document.getElementById("close-error");

span_loading.onclick = function() {
    loading.style.display = "none";
}

span_success.onclick = function() {
    messageBox.style.display = "none";
}

span_err.onclick = function() {
    messageErr.style.display = "none";
}

function soloNumeros(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "0123456789";
    especiales = "";

    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}
