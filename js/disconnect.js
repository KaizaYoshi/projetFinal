function disconnect(){
    var placeholder = 21;

    var xhr = new XMLHttpRequest();
    xhr.onload = function () {
        var result = JSON.parse(this.responseText);
        setTimeout(reload, 2000)
    };

    xhr.open("POST", "controllers/disconnect.php");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("name="+placeholder);
}

document.getElementById('disconnectSubmit').addEventListener("click", function () {
    disconnect();
});

function reload (){
    window.location.href="http://localhost:63342/projetFinal/index.php";
}

