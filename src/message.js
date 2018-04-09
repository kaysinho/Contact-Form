const API = "api/v1/proxys/message.php";
const HEADERS = {
    'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
    'Accept': 'application/json, text/javascript, */*; q=0.01'
};

const addMessage = () => {
    var form = document.getElementById("contact_form");
    if (form.checkValidity()) {
        var data = {
            service: "1",
            name: document.getElementById("name").value,
            cellphone: document.getElementById("cellphone").value,
            email: document.getElementById("email").value,
            message: document.getElementById("message").value
        };
        loading.style.display = "block";
        fetch(API, {
            method: "POST",
            body: JSON.stringify(data)
        }).then(function (response) {
            response.json().then(function (data) {
                loading.style.display = "none";
                if (data.status == "success"){
                    messageBox.style.display = "block";
                    cleanForm();
                }else{
                    messageErr.style.display = "block";
                }
                
            });

        });
    }
}

const cleanForm = () => {
    document.getElementById("name").value = '';
    document.getElementById("cellphone").value = '';
    document.getElementById("email").value = '';
    document.getElementById("message").value = '';
}
