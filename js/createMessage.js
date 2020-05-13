function createMessage(){
    var message = document.getElementById("messageTopic").value;
    var id = document.getElementById("hiddenID").value;


    var xhr = new XMLHttpRequest();
    xhr.onload = function () {
        var result = JSON.parse(this.responseText);
        document.getElementById("messageResults").innerHTML = result[0];
        location.reload();
    };

    xhr.open("POST", "models/createMessage.php");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("message="+message+"&id="+id);
}

document.getElementById("messageSubmit").addEventListener("click", function () {
    createMessage()
});
