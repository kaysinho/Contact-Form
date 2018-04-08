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