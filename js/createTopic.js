function createTopic(){
    var name = document.getElementById("topicName").value;
    var message = document.getElementById("topicMessage").value;

    var xhr = new XMLHttpRequest();
    xhr.onload = function () {
        var result = JSON.parse(this.responseText);
        document.getElementById("topicResults").innerHTML = result[0];
    };

    xhr.open("POST", "models/createTopic.php");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("name="+name+"&message="+message);
}

document.getElementById("topicSubmit").addEventListener("click", function () {
    createTopic();
});
